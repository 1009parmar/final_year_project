@extends('master.admin_nav.admin_nav')
@section('title','Home')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">View Branches</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Branch Name</th>
                            <th scope="col">Total Seats</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alldata as $data)
                        <tr>
                            <td>{{$data->b_name}}</td>
                            <td>
                                {{$data->seats}}
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