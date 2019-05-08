<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	$current = 'true';
    	return view('front.index',compact('current'));
    }
}
