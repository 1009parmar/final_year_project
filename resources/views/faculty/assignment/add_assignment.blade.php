@extends('faculty.faculty_nav.faculty_nav')
@section('title','Home')
@section('content')




<!--**********************************
            Content body start
            ***********************************-->
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Assignment</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Assignment</a></li>
            </ol>
        </div>
    </div>
    @if(Session::has('assignment_created'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('assignment_created')}}
    </div>
    @endif
    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('upload_assignment')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Faculty Name</label>
                                    <input type="text" name="f_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Semester</label>
                                    <input type="text" name="semester" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Assignment Name</label>
                                    <input type="text" name="a_name" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Due Date</label>
                                    <input type="date" name="due_date" class="datepicker form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Upload File</label>
                                    <input type="file" name="file" class="form-control">
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