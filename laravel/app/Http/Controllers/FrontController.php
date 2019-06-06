<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class FrontController extends Controller
{
    public function index()
    {
    	$current = 'true';
        $sliders = Slider::where('type', 'home')->select('title_1','title_2','body_text','image')->get();
    	return view('front.index',compact('current','sliders'));
    }
    public function history()
    {
    	$history = 'true';
    	return view('front.home.history',compact('history'));
    }
    public function mission()
    {
    	$history = 'true';
    	return view('front.home.mission',compact('history'));
    }
    public function values()
    {
    	$history = 'true';
    	return view('front.home.values',compact('history'));
    }
    public function board()
    {
    	$history = 'true';
    	return view('front.home.board',compact('history'));
    }
}
