<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\RoleUser;
use App\Role;
use Auth;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('back.layouts.sidebar',function ($view) {
            $user_id = Auth::user()->id;
            $role_ids = RoleUser::where('user_id',$user_id)->get();
            $num_role_id = count($role_ids);
            if($num_role_id !== 0){
                foreach ($role_ids as  $value) {
                    $role_id[] = $value->role_id;
                }
                //return $role_id;
                foreach ($role_id as $role_id) {
                    $roles[] = Role::where('id',$role_id)->first();
                }
                foreach ($roles as  $role) {
                    $role_names[] = $role->role;
                }
            }else{
                $role_names[] = null;
            }

            $view->with('role_names',$role_names);
        });
    }








}
