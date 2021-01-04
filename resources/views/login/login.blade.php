@extends('main_nav.main_nav')
@section('title','Contact')
@section('content')


<!-- Start Login 
    ============================================= -->
<div class="login-area">
    <div class="advisor-details-area">
        <div class="row advisor-info">
            <div class="col-md-6 col-md-offset-3 content">
                <div class="tab-info">
                    <ul class="nav-pills">

                        <li class="col-md-4 active">
                            <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                Student&nbspLogin
                            </a>
                        </li>
                        <li class="col-md-4">
                            <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                Faculty&nbspLogin
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                Admin&nbspLogin
                            </a>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <div class="tab-content tab-content-info">
                        <!-- Single Tab -->
                        <div id="tab1" class="tab-pane fade active in">
                            <form action="{{route('admin_valid')}}" method="post" id="login-form">
                                @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Student ID*" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password*" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Single Tab -->

                        <!-- Single Tab -->
                        <div id="tab2" class="tab-pane fade">
                            <form action="{{route('faculty_valid')}}" method="post" id="login-form">
                                @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" name="email" placeholder="Email ID*" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" name="password" placeholder="Password*" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Single Tab -->

                        <!-- Single Tab -->
                        <div id="tab3" class="tab-pane">
                            <form action="{{route('admin_valid')}}" method="post" id="login-form">
                                @csrf
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Admin ID*" type="text" name="admin_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password*" type="password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <a title="Lost Password" href="#" class="lost-pass-link">Lost your password?</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit">
                                            Login
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>

                        <!-- End Single Tab -->
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Area -->











@endsection