@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Edit Slider</h1>
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
<div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Selsect Slider Type</div>

        </div>
        <div class="ibox-body">
            <form name="editform" method="post" action="{{ route('slider.update',$slider->id) }}" class="form-group" enctype="multipart/form-data">@csrf
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

                        <label class="ui-radio ui-radio-success ml-4">
                            <input type="radio" value="wme" name="type">
                            <span class="input-span"></span>WME Course</label>

                        <label class="ui-radio ui-radio-info ml-4">
                            <input type="radio" value="in-house" name="type">
                            <span class="input-span"></span>In-House</label>

                        <label class="ui-radio ui-radio-info ml-4">
                            <input type="radio" value="out-house" name="type">
                            <span class="input-span"></span>Out-House</label>

                        <label class="ui-radio ui-radio-warning ml-4">
                            <input type="radio" value="npwc" name="type">
                            <span class="input-span"></span>NPWC</label>

                        <label class="ui-radio ui-radio-warning ml-4">
                            <input type="radio" value="rockteens" name="type">
                            <span class="input-span"></span>RockTeens</label>

                        <label class="ui-radio ui-radio-warning ml-4">
                            <input type="radio" value="GCEC" name="type">
                            <span class="input-span"></span>GCEC</label>

                        <label class="ui-radio ui-radio-warning ml-4">
                            <input type="radio" value="SOL" name="type">
                            <span class="input-span"></span>Source Of Life</label>

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
		            <input name="title_1" value="{{ $slider->title_1 }}" class="form-control input-rounded" type="text" >
		            @error('title_1')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror
		        </div>

		        <div class="form-group">
		            <label>Second(red-bacground) Title</label>
		            <input name="title_2" value="{{ $slider->title_2 }}" class="form-control input-rounded" type="text">
                    @error('title_2')
        			    <div class="alert alert-danger">{{ $message }}</div>
        			@enderror
		        </div>
		        <div class="form-group">
                    <label>Body Text</label>
                    <textarea name="body_text" class="form-control" rows="3">{{ $slider->body_text }}</textarea>
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
                            <h4 class="pl-5 mt-5">Previous Image</h4>
                            <div class="col-md-12">
                                <img width="200" src="{{ asset('back/assets/img/slide/'.$slider->image) }}" alt="">
                            </div>
                		</div>
                	</div>
                	<div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Selsect Image Quality</div>
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
                <button class="btn btn-success btn-block" type="submit"><h2>Update Slider</h2></button>
            </form>
        </div>
    </div>
    <script>
        document.forms['editform'].elements['type'].value='{{ $slider->type }}';
    </script>
@endsection

@section('script')
 	<script src="{{ asset('back') }}/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
@endsection