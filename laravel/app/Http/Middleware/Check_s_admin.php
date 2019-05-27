<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\RoleUser;
use App\Role;
use Auth;

class Check_s_admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $u_id = Auth::user()->id;
        $role_ids = RoleUser::where('user_id',$u_id)->get();
        $num_role_id = count($role_ids);
        if($num_role_id !== 0){
            //return 'restricted';
            foreach ($role_ids as  $value) {
                $role_id[] = $value->role_id;
            }
            foreach ($role_id as $role_id) {
                $roles[] = Role::where('id',$role_id)->first();
            }
            foreach ($roles as  $role) {
                $role_name[] = $role->role;
            }
            if (in_array('super_admin', $role_name)) {
                //return 'yes';
                return $next($request);
            }
        }

        return redirect('/auth/failed');
    }
}
