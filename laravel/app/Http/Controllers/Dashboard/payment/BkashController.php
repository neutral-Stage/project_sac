<?php

namespace App\Http\Controllers\Dashboard\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bkash;

class BkashController extends Controller
{
    public function index()
    {
    	$activesateus = 'donate';
    	$subactivesateus = 'donate.b';
    	$bkash = Bkash::orderBy('id', 'DESC')->get();
    	return view('back.donation.bkash',compact('activesateus','subactivesateus','bkash'));
    }

    public function approve($id)
    {
    	Bkash::where('id', $id)->update([
    		'status'=> 1,
    	]);
    	return redirect()->back()->with('message', 'Updated');
    }
    public function reject($id)
    {
    	Bkash::where('id', $id)->update([
    		'status'=> 0,
    	]);
    	return redirect()->back()->with('message', 'Updated');
    }

    public function delete($id)
    {
    	$bkash = Bkash::find($id);
    	$bkash->delete();
    	return redirect()->back()->with('message', 'Deleted');
    }
}
