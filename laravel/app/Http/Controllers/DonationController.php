<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bkash;

class DonationController extends Controller
{
    public function index()
    {
    	return view('front.donation.donationPrimary');
    }

    public function method(Request $request)
    {
    	$request->validate([
    	    'donated_for' => 'required',
    	    'currency' => 'required',
    	    'method' => 'required'
    	]);
    	//return $request->all();
        $invoice = rand(111, 999);
    	$donated_for = $request->donated_for;
    	if ($request->method == 'bKash') {
    		return view('front.donation.bKash',compact('donated_for','invoice'));
    	}
    }

    public function bkash(Request $request)
    {
    	//return $request->all();
    	$request->validate([
    	    'name' => 'required',
    	    'phone' => 'required',
    	    'amount' => 'required'
    	]);
    	$request['status'] = 0;
        Bkash::create($request->except('_token'));
        session()->flash('name',$request->name);
        session()->flash('amount',$request->amount);
        session()->flash('type',$request->donated_for);
        return  redirect('/donation');
    }



}
