<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumyController extends Controller
{
    //
    function index(Request $req)
    {
    	print_r($req->input());
    	echo "<br>";
    	echo $req->url();
    	echo "<br>";
    	echo $req->fullurl();
    	echo "<br>";
    	echo $req->path();
    	echo "<br>";
    	echo $req->method();
    	echo "<br>";
    	if($req->isMethod('GET'))
    	{
    		echo "GET Throught";
    	}
    	else
    	{
    		echo "POST Throught";
    	}
    }
}
