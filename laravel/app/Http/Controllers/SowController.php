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

    public function wme()
    {
    	$pro = 'true';
    	return view('front.sow.wme',compact('pro'));
    } 

    public function imp_bn()
    {
        $imp_bn = 'true';
        return view('front.sow.imp_bn',compact('imp_bn'));
    }
    public function imp_in()
    {
        $imp_in = 'true';
        return view('front.sow.imp_in',compact('imp_in'));
    }
}
