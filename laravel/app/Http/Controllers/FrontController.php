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
    public function history()
    {
    	$current = 'true';
    	return view('front.home.history',compact('current'));
    }
    public function mission()
    {
    	$current = 'true';
    	return view('front.home.mission',compact('current'));
    }
    public function values()
    {
    	$current = 'true';
    	return view('front.home.values',compact('current'));
    }
    public function board()
    {
    	$current = 'true';
    	return view('front.home.board',compact('current'));
    }
}
