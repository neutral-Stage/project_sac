<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\RoleUser;
use Auth;
use DB;

class UserAccessController extends Controller
{
    public function index()
    {
    	$activesateus = 'user';

    	$s_id[] = Auth::user()->id;
    	$users = DB::table('users')
    			->select('id','name','email')	
                ->whereNotIn('id', $s_id)
                ->get();
        //return  $users;

    	return view('back.user', compact('activesateus','users'));
    }

    public function access($id)
    {
    	$user = User::where('id',$id)->select('id','name','email')->first();
    	$role_ids = RoleUser::where('user_id',$id)->get();
    	$num_role_id = count($role_ids);
    	if($num_role_id !== 0){
    	    foreach ($role_ids as  $value) {
    	        $ids[] = $value->role_id;
    	    }
            //return $role_ids;
            foreach ($ids as $role_id) {
                $roles[] = Role::where('id',$role_id)->select('role')->first();
            }
    	    //return $roles;
    	    foreach ($roles as  $role) {
    	        $role_names[] = $role->role;
    	    }
    	}else{
    		$role_names[] = null;
    	}
    	//return $role_names;
    	$activesateus = 'user';
    	return view('back.userAccess',compact('activesateus','role_names','user'));

    }

    public function set_role($id, $role_id)
    {
    	RoleUser::create([
    		'role_id'=> $role_id,
    		'user_id'=> $id,
    	]);
    	return redirect()->back();
    }

    public function seize_role($id, $role_id)
    {
    	$role = RoleUser::where('user_id',$id)->where('role_id',$role_id)->first();
    	$role->delete();
    	return redirect()->back();
    }



















}
