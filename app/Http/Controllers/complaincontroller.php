<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\complaintform;


class complaincontroller extends Controller
{
    public function registersub(Request $request){
    $comp = new complaintform();
    $comp->fname = $request->input('fname');
    $comp->lname = $request->input('lname');
    $comp->cityname = $request->input('cityname');
    $comp->regionname = $request->input('regionname');
    $comp->postal = $request->input('postal');
    $comp->country = $request->input('country');
    $comp->email = $request->input('email');
    $comp->phone = $request->input('phone');
    $comp->date = $request->input('date');
    $comp->typeOFproblem = $request->input('typeOFproblem');
    $comp->onBehalfof = $request->input('onBehalfof');
    $comp->onBehalfof = $request->input('complain');

    $comp->save();
    return redirect("/");
    // return "inserted";
}
}