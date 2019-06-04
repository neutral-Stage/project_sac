@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">Manage Event</h1>
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
        
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Heading</th>
                            <th>Detail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->type }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->detail }}</td>
                            <td>
                                <a class="btn btn-outline-info btn-block" href="{{ route('event.image.create',$event->id) }}">Add event Image</a>
                                <a href="{{ route('upcoming.edit',$event->id) }}" class="btn btn-outline-info btn-block" >Edit Event</i></a>
                                <a href="#" class="btn btn-warning btn-block"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form').submit();">
                                    Delete</i></a>
                                <form id="delete-form" action="{{ route('upcoming.destroy',$event->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $events->links() }}
            </div>
        </div>
    </div>
@endsection
