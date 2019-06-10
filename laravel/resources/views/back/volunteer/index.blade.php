@extends('back.layouts.master')
@section('content')
<div class="page-heading">
    <h1 class="page-title">Manage Vlunteer</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            @if(isset($type) && $type == 'all')
            <div class="ibox-title">
                All Volunteer ||
                <a class="btn btn-outline-success" href="{{ route('volunteer.active') }}">Show Only Active Volunteer</a>
                <a class="btn btn-outline-warning" href="{{ route('volunteer.inactive') }}">Show Inactive  Volunteer only</a>
            </div>
            @endif

            @if(isset($type) && $type == 'active')
            <div class="ibox-title">
                All Active Volunteer ||
                <a class="btn btn-outline-primary" href="{{ route('volunteer.index') }}">Show All Volunteer</a>
                <a class="btn btn-outline-warning" href="{{ route('volunteer.inactive') }}">Show Inactive  Volunteer only</a>
            </div>
            @endif

            @if(isset($type) && $type == 'inactive')
            <div class="ibox-title">
                All Inactive Volunteer ||
                <a class="btn btn-outline-primary" href="{{ route('volunteer.index') }}">Show All Volunteer</a>
                <a class="btn btn-outline-success" href="{{ route('volunteer.active') }}">Show Only Active Volunteer</a>
            </div>
            @endif
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Action</th>
                </tfoot>
                <tbody>
                    @foreach($volunteers as $volunteer)
                    <tr>
                        <td>{{ $volunteer->id }}</td>
                        <td>{{ $volunteer->name }}</td>
                        <td>{{ $volunteer->email }}</td>
                        <td>{{ $volunteer->phone }}</td>
                        <td>
                            <img width="120" src="{{ asset('back/assets/img/volunteer/'.$volunteer->image) }}" alt="">
                        </td>
                        <td>
                            {{ $volunteer->type == 1 ? 'Accepted' : 'Pending' }}
                        </td>
                        <td>
                            @if($volunteer->type == 0)
                            <a class="btn btn-info" href="{{ route('volunteer.accept',$volunteer->id) }}">Accept</a>
                            @else
                            <a class="btn btn-danger" href="{{ route('volunteer.deny',$volunteer->id) }}">Deny</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
@endsection

@section('script')
<script src="{{ asset('back') }}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
@endsection