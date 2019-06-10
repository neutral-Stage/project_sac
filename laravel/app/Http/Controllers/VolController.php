<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class VolController extends Controller
{
    public function index()
    {
    	$vol = 'true';
    	return view('front.volunteer',compact('vol'));
    }

    public function signup(Request $request)
    {
    	$request->validate([
    	    'name' => 'required|max:255',
    	    'email' => 'required|unique:volunteers',
    	    'phone' => 'required|max:15',
    	    'photo' => 'required'
    	]);
    	//return $request->all();
    	if($request->hasFile('photo')){
            $q = 20;
            $file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
            Image::make(Input::file('photo'))->save('back/assets/img/volunteer/'.$filename, 20);
            $request['image']=$filename;
        }
        	$request['type']= 0;
        Volunteer::create($request->except('_token','photo'));
    	
		return redirect()->back()->with('message','Thanks!! We will send a mail to your email address soon!!!.');
    }
}
