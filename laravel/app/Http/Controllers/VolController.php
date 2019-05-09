<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolController extends Controller
{
    public function index()
    {
    	$pro = 'true';
    	return view('front.volunteer',compact('pro'));
    }
}
