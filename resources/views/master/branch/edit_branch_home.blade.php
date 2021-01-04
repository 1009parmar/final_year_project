@extends('master.admin_nav.admin_nav')
@section('title','Home')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Branches</h4>
        </div>
        @include('sweet::alert')

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Branch Name</th>
                            <th scope="col">Total Seats</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alldata as $data)
                        <tr>
                            <td>{{$data->b_name}}</td>
                            <td>
                                {{$data->seats}}
                            </td>

                            <td>
                                <span>
                                    <a href="\edit_branch\{{$data->id}}" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a>
                                    <a data-action="{{ route('delete_branch',$data->id) }}"
                                        class="remove-user btn btn-sm " data-id="{{ $data->id }}"><i
                                            class="fa fa-close color-danger"></i></a>
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