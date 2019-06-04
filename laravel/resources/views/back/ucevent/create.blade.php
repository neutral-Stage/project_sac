@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Add A Event</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Event for all Module</li>
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
            <form class="form-group" method="post" action="{{ route('upcoming.store') }}"  enctype="multipart/form-data">
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
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>Event Name </label>
                            <input name="name" class="form-control input-rounded" type="text" >
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group" id="date_5">
                            <label class="font-normal">Select Date</label>
                            <div class="input-daterange input-group" id="datepicker">
                                <input placeholder="Start date" class="input-sm form-control" type="text" name="start_date" value="">
                                <span class="input-group-addon p-l-10 p-r-10">to</span>
                                <input placeholder="End date" class="input-sm form-control" type="text" name="end_date" value="">
                            </div>
                                @error('start_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            	
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="detail" class="form-control" rows="3"></textarea>
                    @error('detail')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <button class="btn btn-success btn-block" type="submit"><h2>Add Event</h2></button>
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