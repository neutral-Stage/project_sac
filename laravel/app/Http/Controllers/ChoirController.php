<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoirController extends Controller
{
    public function index()
    {
    	$pro = 'true';
    	return view('front.choir.choir',compact('pro'));
    }
    public function volunteer()
    {
    	$pro = 'true';
    	return view('front.choir.volunteer',compact('pro'));
    }
    public function events()
    {
    	$pro = 'true';
    	return view('front.choir.events',compact('pro'));
    }
    public function testimony()
    {
    	$pro = 'true';
    	return view('front.choir.testimony',compact('pro'));
    }
}
