<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;



class HomeController extends Controller
{
    public function index():view
    {
       
        $complaintforms  = DB::table('complaintforms')->get();
        return view('admin.dashboard', compact('complaintforms'));
    }
}
