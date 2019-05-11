<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LFUController extends Controller
{
	public function blanket()
	{

		$lfu = 'true';
    	return view('front.lfu.blanket',compact('lfu'));
	}
	public function flood()
	{

		$lfu = 'true';
    	return view('front.lfu.flood',compact('lfu'));
	}

	public function child()
	{

		$lfu = 'true';
    	return view('front.lfu.child',compact('lfu'));
	}
}
