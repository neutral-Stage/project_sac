<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SowController extends Controller
{
    public function index()
    {
    	$pro = 'true';
    	return view('front.sow.sow',compact('pro'));
    }
}
