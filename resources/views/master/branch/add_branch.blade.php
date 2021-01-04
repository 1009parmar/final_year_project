@extends('master.admin_nav.admin_nav')
@section('title','Home')
@section('content')




<!--**********************************
            Content body start
            ***********************************-->
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Branch</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Branch</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Branch</a></li>
            </ol>
        </div>
    </div>
    @if(Session::has('branch_created'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('branch_created')}}
    </div>
    @endif
    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('add_branch_submit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Branch Name</label>
                                    <input type="text" name="b_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Number Of Seats</label>
                                    <input type="number" name="seats" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
            ***********************************-->



@endsection