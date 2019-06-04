@extends('back.layouts.master')
@section('content')
<div class="container">

	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Choir Video Slider</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
        </ol>

        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>Success!</strong> {{ Session::get('message') }}</div>
        @endif

    </div>
	<!--------------=======  Page  Heading ========------------------>	
	<div class="jumbotron">
	  	<h3>Paste the video Id Here</h3>
	  <hr class="my-4">
	  	<form class="form-group" method="post" action="{{ route('choir.video.update') }}"  enctype="multipart/form-data">
        @csrf
        	<div class="form-group">
	            <input name="video_url" value="{{ $url->video_url }}" class="form-control input-rounded" type="text" >
	            @error('video_url')
				    <div class="alert alert-danger">{{ $message }}</div>
				@enderror
	        </div>
	    	<button class="btn btn-primary btn-lg" type="submit">Update</button>
        </form>
	</div>

</div>
@endsection