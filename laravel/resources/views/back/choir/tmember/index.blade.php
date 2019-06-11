@extends('back.layouts.master')
@section('content')
	<!--------------=======  Page  Heading ========------------------>
	<div class="page-heading">
        <h1 class="page-title">All Team Member</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Team Member Edit and Delete option</li>
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
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
						@foreach($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->Position }}</td>
                            <td>
                            	<img width="150" src="{{ asset('back/assets/img/teamMember/'.$member->photo) }}" alt="{{ $member->name }}">
                            </td>
                            
                            <td>
                                <a href="{{ route('team_member.edit',$member->id) }}" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-17"></i></a>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-form{{ $i }}').submit();">
                                    <i class="fa fa-trash font-17"></i></a>
                                <form id="delete-form{{ $i }}" action="{{ route('team_member.destroy',$member->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @php $i++ @endphp
                        @endforeach
                    </tbody>
                </table>
                {{ $members->links() }}
            </div>
        </div>
    </div>
@endsection
