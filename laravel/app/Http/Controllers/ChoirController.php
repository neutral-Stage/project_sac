<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoirController extends Controller
{
    public function index()
    {
    	$choir = 'true';
    	return view('front.choir.choir',compact('choir'));
    }
    public function volunteer()
    {
    	$choir = 'true';
    	return view('front.choir.volunteer',compact('choir'));
    }
    public function events()
    {
    	$choir = 'true';
    	return view('front.choir.events',compact('choir'));
    }
    public function testimony()
    {
    	$choir = 'true';
    	return view('front.choir.testimony',compact('choir'));
    }
}
