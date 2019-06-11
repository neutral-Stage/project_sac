<?php

namespace App\Http\Controllers;
use App\Slider;

use Illuminate\Http\Request;

class ChoirController extends Controller
{
    public function index()
    {
        $choir = 'true';
        $sliders = Slider::where('type', 'choir')->select('title_1', 'title_2', 'body_text', 'image')->get();
    	return view('front.choir.choir',compact('choir', 'sliders'));
    }
    public function volunteer()
    {
    	$choir = 'true';
    	return view('front.choir.volunteer',compact('choir'));
    }
    public function events()
    {
    	$choir = 'true';
    	return view('front.choir.events',compact('choir'));
    }
    public function testimony()
    {
    	$choir = 'true';
    	return view('front.choir.testimony',compact('choir'));
    }
}
