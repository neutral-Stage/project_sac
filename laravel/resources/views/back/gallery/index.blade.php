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
                            <th>Heading</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>{{ $gallery->type }}</td>
                            <td>{{ $gallery->heading }}</td>
                            <td>{{ $gallery->caption }}</td>
                            <td>
                            	<img width="150" src="{{ asset('back/assets/img/gallery/'.$gallery->image) }}" alt="{{ $gallery->title_1 }}">
                            </td>
                            
                            <td>
                                <a href="{{ route('gallery.edit',$gallery->id) }}" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-17"></i></a>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                                    <i class="fa fa-trash font-17"></i></a>
                                <form id="delete-form" action="{{ route('gallery.destroy',$gallery->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $galleries->links() }}
            </div>
        </div>
    </div>
@endsection
