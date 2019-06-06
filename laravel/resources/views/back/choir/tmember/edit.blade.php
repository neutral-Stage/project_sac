@extends('back.layouts.master')
@section('content')
    <!--------------=======  Page  Heading ========------------------>
    <div class="page-heading">
        <h1 class="page-title">Add Choir Member</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Gallery Image for all Module</li>
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
            <form class="form-group" method="post" action="{{ route('team_member.update',$member->id) }}"  enctype="multipart/form-data">
                @csrf
                 @method('PUT')
                <div class="row">
                 <div class="col-md-7">
                     <div class="form-group">
                    <label>Name </label>
                    <input name="name" value="{{ $member->name }}" class="form-control input-rounded" type="text" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                 </div>   
                 <div class="col-md-5">
                     <div class="form-group">
                    <label>Position</label>
                    <input name="position" value="{{ $member->position }}" class="form-control input-rounded" type="text">
                    @error('position')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                 </div>   
                </div>
                

                
                

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center ">Image</h4> <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-inline">
                            <label class="pr-5"> Browse Photo </label>
                            <input name="image" type="file">
                            
                            <h4 class="pl-5 mt-5">Previous Image</h4>
                            <div class="col-md-12">
                                <img width="150" src="{{ asset('back/assets/img/teamMember/'.$member->photo) }}" alt="{{ $member->name }}">
                            </div>
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
                <button class="btn btn-success btn-block" type="submit"><h2>Update</h2></button>
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