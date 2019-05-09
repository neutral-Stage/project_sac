<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvartiseController extends Controller
{
    public function index()
    {
    	$pro = 'true';
    	return view('front.pm.advartise',compact('pro'));
    }
}
