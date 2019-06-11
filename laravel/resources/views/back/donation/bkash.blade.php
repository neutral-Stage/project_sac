@extends('back.layouts.master')
@section('content')
<div class="page-heading">
    <h1 class="page-title">All bKash Payments</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            @if(session()->has('message'))
            	<div class="alert alert-warning">{{ Session::get('message') }}</div>
            @endif
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Amount</th>
                        <th>Invoice</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Amount</th>
                        <th>Invoice</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                </tfoot>
                <tbody>
                    @foreach($bkash as $bkash)
                    <tr>
                        <td>{{ $bkash->id }}</td>
                        <td>{{ $bkash->name }}</td>
                        <td>{{ $bkash->phone }}</td>
                        <td>{{ $bkash->address }}</td>
                        <td>{{ $bkash->amount }}</td>
                        <td>{{ $bkash->invoice }}</td>
                        <td>{{ $bkash->created_at }}</td>
                        
                        <td>
                            {{ $bkash->status == 1 ? 'Accepted' : 'Pending' }}
                        </td>
                        <td>
                            @if($bkash->status == 0)
                            <a class="btn btn-block btn-info" href="{{ route('bkash.approve',$bkash->id) }}">Approve</a>
                            @else
                            <a class="btn btn-block btn-danger" href="{{ route('bkash.reject',$bkash->id) }}">Reject</a>
                            @endif
                            <a class="btn btn-block btn-danger" href="{{ route('bkash.delete',$bkash->id) }}">Delete</a>
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