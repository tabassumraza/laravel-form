<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\complaincontroller;




use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        //login route
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])
            ->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){
        Route::get('dashboard', [HomeController::class, 'index'])
        ->name('dashboard');
    });
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});


// submitting form
Route::get('/registersub',[complaincontroller::class,'registersub']);

Route::get('admin.dashboard', function () {
    $complaint = DB::table('complaintforms')->get();
    return view('admin.dashboard', ['complaintforms' => $complaint]);
});