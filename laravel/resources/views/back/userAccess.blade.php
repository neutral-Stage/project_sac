@extends('back.layouts.master')
@section('content')

<div class="page-heading">
    <h1 class="page-title">Profile</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">{{ $user->name }}</li>
    </ol>
</div>

<div class="page-content fade-in-up">
	<div class="row">
		<div class="col-lg-7 col-md-8 mx-auto">
            <div class="ibox">
                <div class="ibox-body text-center">
                    <div class="m-t-20">
                        <img class="img-circle" src="./assets/img/users/u3.jpg">
                    </div>
                    <h5 class="font-strong m-b-10 m-t-10">{{ $user->name }}</h5>
                    <div class="m-b-20 text-muted">{{ $user->email }}</div>
                    {{-- <div class="profile-social m-b-20">
                        <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                        <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                    </div> --}}
                    
                </div>
            </div>
            
        </div>

        <div class="col-lg-7 col-md-8 mx-auto">
            <div class="ibox">
                <div class="ibox-body text-center">
                    
                    <h5 class="font-strong m-b-10 m-t-10">Manage Access</h5>
                    <div class="m-b-20 text-muted">
                        <span style="font-weight: bold;">Roles : </span>
                        @foreach($role_names as $role_name) {{ $role_name }} @endforeach
                    </div>
                    
                    <div>
                        @if (in_array('author', $role_names))
                            <a href="{{ route('suspend.author',['id'=>$user->id, 'role_id'=> 4]) }}" class="btn btn-outline-info btn-block">Suspend From Author Role</a>
                        @else
                            <a href="{{ route('make.author',['id'=>$user->id, 'role_id'=> 4]) }}" class="btn btn-success btn-block">Make Author </a>
                        @endif

                        @if (in_array('editor', $role_names))
                            <a href="{{ route('suspend.author',['id'=>$user->id, 'role_id'=> 2]) }}" class="btn btn-outline-info btn-block">Suspend From Editor Role</a>
                        @else
                            <a href="{{ route('make.author',['id'=>$user->id, 'role_id'=> 2]) }}" class="btn btn-success btn-block">Make Editor </a>
                        @endif

                        @if (in_array('stuff', $role_names))
                            <a href="{{ route('suspend.author',['id'=>$user->id, 'role_id'=> 3]) }}" class="btn btn-outline-info btn-block">Suspend From Stuff Role</a>
                        @else
                            <a href="{{ route('make.author',['id'=>$user->id, 'role_id'=> 3]) }}" class="btn btn-success btn-block">Make Stuff </a>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
	</div>
</div>
	
@endsection