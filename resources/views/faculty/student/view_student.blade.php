@extends('faculty.faculty_nav.faculty_nav')
@section('title','Students')
@section('content')


<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>All Staff</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">All Students</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills mb-3">
            </ul>
        </div>
        <div class="col-lg-12">
            <div class="row tab-content">

                <div id="grid-view" class="tab-pane  active col-lg-12">
                    <div class="row">
                        @foreach($alldata as $data)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card card-profile">
                                <div class="card-header justify-content-end pb-0">

                                </div>
                                <div class="card-body pt-2">
                                    <div class="text-center">
                                        <div class="profile-photo">
                                            <img src="{{ asset('upload/student/' . $data->photo) }}"
                                                style="height:100px; width:100px" class="img-fluid rounded-circle"
                                                alt="">
                                        </div>
                                        <h3 class="my-4">{{$data->f_name}}</h3>
                                        <ul class="list-group mb-3 list-group-flush">
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Phone No.
                                                    :</span><strong>{{$data->m_number}}</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Email:</span><strong>{{$data->email}}</strong>
                                            </li>
                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                <span class="mb-0">Address:</span><strong>{{$data->address}}</strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

















@endsection