<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ChoirController extends Controller
{

    public function video_create()
    {
    	$activesateus = 'choir';
    	$subactivesateus = 'addvideo';
    	$url = DB::table('choirvideos')
	    		    ->first('video_url');
    	return view('back.choir.video',compact('activesateus','subactivesateus','url'));
    }
    
    public function video_update(Request $request)
    {
    	//return $request->all();
    	$validatedData = $request->validate([
            'video_url' => 'required',
        ]);
        $url = $request->video_url;
    	DB::table('choirvideos')
	    	->updateOrInsert(
		        ['id' => 1],
		        ['video_url' => $url]
    		);
    	return redirect()->back()->with('message','Successfully updated.');
    }
}
