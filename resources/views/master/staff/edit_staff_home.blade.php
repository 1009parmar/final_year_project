@extends('master.admin_nav.admin_nav')
@section('title','Home')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Staff</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Staff</a></li>
            </ol>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="row tab-content">
                <div id="list-view" class="tab-pane fade active show col-lg-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Joining Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($alldata as $data)
                                        <tr>
                                            <td><img class="rounded-circle" style="height:35px; width:35px"
                                                    src="{{ asset('upload/staff/' . $data->photo) }}" alt=""></td>
                                            <td>{{$data->f_name}}</td>
                                            <td>{{$data->designation}}</td>
                                            <td><a href="javascript:void(0);"><strong>{{$data->m_number}}</strong></a>
                                            </td>
                                            <td><a href="javascript:void(0);"><strong>{{$data->email}}</strong></a></td>
                                            <td>{{$data->address}}</td>
                                            <td>{{$data->join_date}}</td>
                                            <td>
                                                <a href="\edit_staff\{{$data->id}}" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                                <a data-action="{{ route('delete_staff',$data->id) }}"
                                                    class="remove-user btn btn-sm btn-danger" data-id="{{ $data->id }}"
                                                    title="Close"><i class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

















@endsection