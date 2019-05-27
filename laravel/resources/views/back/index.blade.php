@extends('back.layouts.master')
@section('content')

<div class="page-heading">
    <h1 class="page-title">Profile</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Profile</li>
    </ol>
</div>

<div class="page-content fade-in-up">
	<div class="row">
		<div class="col-lg-6 col-md-8 mx-auto">
            <div class="ibox">
                <div class="ibox-body text-center">
                    <div class="m-t-20">
                        <img class="img-circle" src="./assets/img/users/u3.jpg">
                    </div>
                    <h5 class="font-strong m-b-10 m-t-10">{{ Auth::user()->name }}</h5>
                    {{-- <div class="m-b-20 text-muted">Web Developer</div> --}}
                    {{-- <div class="profile-social m-b-20">
                        <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                        <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                    </div> --}}
                    {{-- <div>
                        <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Follow</button>
                        <button class="btn btn-default btn-rounded m-b-5">Message</button>
                    </div> --}}
                </div>
            </div>
            
        </div>
	</div>
</div>
	{{-- <div class="container">
		<form action="{{ route('photo') }}"  method="post" enctype="multipart/form-data">@csrf
			
			<input type="file" name="photo" >
			<button type="submit" >Submit</button>
		</form>
	</div> --}}
@endsection