<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function submit(Request $request)
    {
    	$request->validate([
    		"user"=>"required",
    		"password"=>"min:2 | max:5"

    	]);
    	print_r($request->input());

    	$request->session()->flash('data',$request->input('user'));
    	return redirect('/');
    }
}
