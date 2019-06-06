<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtsController extends Controller
{
     public function index()
    {
    	$live = 'true';
    	return view('front.arts.live_drama',compact('live'));
    }

    public function ttc()
    {
    	$ttc = 'true';
    	return view('front.arts.ttc',compact('ttc'));
    }
    public function case()
    {
    	$case = 'true';
    	return view('front.arts.case',compact('case'));
    }
}
