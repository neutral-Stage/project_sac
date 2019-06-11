@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">All Slider</h1>
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
            <div class="ibox-title">Responsive Table</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Title 1</th>
                            <th>Title 2 (Red)</th>
                            <th>Body Text</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->type }}</td>
                            <td>{{ $slider->title_1 }}</td>
                            <td>{{ $slider->title_2 }}</td>
                            <td>{{ $slider->body_text }}</td>
                            <td>
                            	<img width="150" src="{{ asset('back/assets/img/slide/'.$slider->image) }}" alt="{{ $slider->title_1 }}">
                            </td>
                            
                            <td>
                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-17"></i></a>
                                <a href="{{ route('slider.delete',$slider->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-17"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
@endsection
