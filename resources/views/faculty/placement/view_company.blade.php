@extends('faculty.faculty_nav.faculty_nav')
@section('title','Home')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">View Company</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Company Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Website</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alldata as $data)
                        <tr>
                            <td>{{$data->c_name}}</td>
                            <td>
                                {{$data->type}}
                            </td>
                            <td>{{$data->website}}</td>
                            <td>{{$data->phone}}
                            </td>
                            <td>
                                {{$data->status}}
                            </td>
                            <td>
                                <span>
                                    <a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                    <a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>












@endsection