@extends('faculty.faculty_nav.faculty_nav')
@section('title','Home')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">View Assignment</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Assignment Name</th>
                            <th scope="col">Faculty Name</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alldata as $data)
                        <tr>
                            <td>{{$data->a_name}}</td>
                            <td>
                                {{$data->f_name}}
                            </td>
                            <td>{{$data->semester}}</td>
                            <td>{{$data->due_date}}
                            </td>
                            <td>
                                <span>
                                    <a href="\edit_assignment\{{$data->id}}" class="mr-4" data-toggle="tooltip"
                                        style="color:blue" data-placement="top" title="Edit"><i
                                            class="fa fa-pencil color-muted"></i> </a>
                                    <a data-action="{{ route('delete_assignment',$data->id) }}"
                                        class="remove-user btn btn-sm" data-toggle="tooltip" style="color:red"
                                        data-id="{{ $data->id }}" data-placement="top" title="Close"><i
                                            class="fa fa-trash color-danger"></i></a>
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