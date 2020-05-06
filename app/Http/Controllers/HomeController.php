<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$name="Home Page";
    	return view('home',compact('name'));
    }

    public function phpPage()
    {	
    
    	$data = array (
        		"lesson1"=>"This is php Lesson1",
        		"lesson2"=>"This is php Lesson2",
        		"lesson3"=>"This is php Lesson3",
    	);

    	return view('php',compact('data'));
    }

	public function jsPage()
    {
    	$data = array (
        		"lesson1"=>"This is JS Lesson1",
        		"lesson2"=>"This is JS Lesson2",
        		"lesson3"=>"This is JS Lesson3",
    	);

    	return view('js',compact('data'));
	}
}
