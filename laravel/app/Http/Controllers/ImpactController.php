<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpactController extends Controller
{
    public function npwc()
    {
    	$impact = 'true';
    	return view('front.impact.npwc',compact('impact')); 
    }

    public function rt()
    {
    	$impact = 'true';
    	return view('front.impact.rt',compact('impact')); 
    }

    public function gcec()
    {
    	$impact = 'true';
    	return view('front.impact.gcec',compact('impact')); 
    }
}
