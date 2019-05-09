<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	$contact = 'true';
    	return view('front.contact',compact('contact'));
    }
}
