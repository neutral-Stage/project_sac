@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Add Image for Event</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">{{ $event->name }}</li>
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
            <div class="ibox-title"><span class="text-danger">Event Name: </span> {{ $event->name }} </div>

        </div>
        <div class="ibox-body">
            <form class="form-group" method="post" action="{{ route('image.store') }}"  enctype="multipart/form-data">
                @csrf
            	
                <div class="row">
                    
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
                

                <input type="hidden" name="ucevent_id" value="{{ $event->id }}">
                <button class="btn btn-success btn-block" type="submit"><h2>Add Image</h2></button>
            </form>
        </div>
    </div>

    @if(count($images) > 0)
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Uploaded Image</div>
        </div>
            <div class="ibox-body">
                <div class="row">
                    @php $i=1 @endphp
                    @foreach($images as $image)
                    <div class="col-md-3">
                        <div class="card" style="width:200px; min-height: 150px">
                            <img class="card-img" src="{{ asset('back/assets/img/evimage/'.$image->image) }}">
                            <div class="card-img-overlay text-white">
                                <a href="" class="btn btn-danger"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form{{ $i }}').submit();"> Delete </a>
                                <form id="delete-form{{ $i }}" action="{{ route('image.destroy',[$image->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                    @php $i++ @endphp
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection

@section('script')
 	<script src="{{ asset('back') }}/assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="{{ asset('back') }}/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
@endsection