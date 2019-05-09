<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$pro = 'true';
    	return view('front.product',compact('pro'));
    }
}
