@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Add Slider</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Slider for all page</li>
        </ol>

        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissable fade show">
        <button class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>Success!</strong> {{ Session::get('message') }}</div>
        @endif

    </div>
	<!--------------=======  Page  Heading ========------------------>
<div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Selsect Slider Type</div>

        </div>
        <div class="ibox-body">
            <form class="form-group" method="post" action="{{ route('slider.store') }}"  enctype="multipart/form-data">
                @csrf
            	<div class="col-12 m-b-20">
                    <div class=" form-inline">
                        <label class="ui-radio ui-radio-primary">
                            <input type="radio" value="home" name="type">
                            <span class="input-span"></span>Home</label>

                        <label class="ui-radio ui-radio-info ml-4">
                            <input type="radio" value="choir" name="type">
                            <span class="input-span"></span>Choir</label>

                        <label class="ui-radio ui-radio-success ml-4">
                            <input type="radio" value="sow" name="type">
                            <span class="input-span"></span>SOW</label>

                        <label class="ui-radio ui-radio-info ml-4">
                            <input type="radio" value="music" name="type">
                            <span class="input-span"></span>PM Music</label>

                        <label class="ui-radio ui-radio-warning ml-4">
                            <input type="radio" value="im_nation" name="type">
                            <span class="input-span"></span>Impact Nation</label>

                        <label class="ui-radio ui-radio-success ml-4">
                            <input type="radio" value="lfu_blanket" name="type">
                            <span class="input-span"></span>LFU-Blanket</label>

                        <label class="ui-radio ui-radio-success ml-4">
                            <input type="radio" value="lfu_flood" name="type">
                            <span class="input-span"></span>LFU-Flood</label>

                        <label class="ui-radio ui-radio-success ml-4">
                            <input type="radio" value="lfu_clildren" name="type">
                            <span class="input-span"></span>LFU-Childen Service</label>
                            @error('type')
    						    <div class="alert alert-danger">{{ $message }}</div>
    						@enderror
                    </div>

                </div>
            	<div class="form-group">
		            <label>First Title</label>
		            <input name="title_1" class="form-control input-rounded" type="text" >
		            @error('title_1')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
		        </div>

		        <div class="form-group">
		            <label>Second(red-bacground) Title</label>
		            <input name="title_2" class="form-control input-rounded" type="text">
                    @error('title_2')
        			    <div class="alert alert-danger">{{ $message }}</div>
        			@enderror
		        </div>
		        <div class="form-group">
                    <label>Body Text</label>
                    <textarea name="body_text" class="form-control" rows="3"></textarea>
                    @error('body_text')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
                </div>

                <div class="row">
                	<div class="col-md-12">
                		<h4 class="text-center ">Slider Image</h4> <hr>
                	</div>
                	<div class="col-md-6">
                		<div class="form-inline">
                			<label class="pr-5"> Browse Photo </label>
                			<input name="photo" type="file">
    			            @error('photo')
    						    <div class="alert alert-danger">{{ $message }}</div>
    						@enderror
                		</div>
                	</div>
                	<div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Select Image Quality</div>
                            </div>
                            <div class="ibox-body">
								<ul>
									<li>
										For medium quality keep it 10-20
									</li>
									<li>
										For better quality keep it 25-35
									</li>
								</ul>
                                <div class="row">
                                    <div class="col-sm-12 m-b-20 text-center">
                                        <input name="quality" class="dial" value="15" data-width="85" data-height="85" type="text">
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-block" type="submit"><h2>Add Slider</h2></button>
            </form>
        </div>
    </div>
@endsection

@section('script')
 	<script src="{{ asset('back') }}/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
@endsection