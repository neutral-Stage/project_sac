<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use App\User;
use App\RoleUser;
use App\Role;
use Auth;
class dashboardController extends Controller
{
    public function index()

    {
    	$activesateus = 'dashboard';
        
    	return view('back.index',compact('activesateus'));
    }

    public function photo(Request $request)
    {
    	//return $request->all();
    	if($request->hasFile('photo')){
    		$file = $request->photo;
            $extention = $file->getClientOriginalExtension();
            $filename = rand(111111, 999999) . "." . $extention;
    		Image::make(Input::file('photo'))
    		//->resize(300, 200)
    		->save('photo/'.$filename,15);
    	}
    }

    public function auth_failed()
    {
        return view('back.404'); 
    }











}
