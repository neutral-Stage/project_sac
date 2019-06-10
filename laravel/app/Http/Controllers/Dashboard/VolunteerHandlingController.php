<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Volunteer;

class VolunteerHandlingController extends Controller
{
	public function index()
	{
	  $activesateus = 'vol';
	  $volunteers =  Volunteer::all();
	  $type = 'all';
	  return view('back.volunteer.index', compact('activesateus','volunteers','type'));
	}
	public function active()
	{
	  $activesateus = 'vol';
	  $volunteers =  Volunteer::where('type', 1)->get();
	  $type = 'active';
	  return view('back.volunteer.index', compact('activesateus','volunteers','type'));
	}
	public function inactive()
	{
	  $activesateus = 'vol';
	  $volunteers =  Volunteer::where('type', 0)->get();
	  $type = 'inactive';
	  return view('back.volunteer.index', compact('activesateus','volunteers','type'));
	}
	public function accept($id)
	{
		Volunteer::where('id', $id)->update([
			'type' => 1,
		]);
		return redirect()->back()->with('message','Updated');
	}
	public function deny($id)
	{
		Volunteer::where('id', $id)->update([
			'type' => 0,
		]);
		return redirect()->back()->with('message','Updated');
	}
}
