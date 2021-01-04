@extends('main_nav.main_nav')

@section('content')

<!-- Start Course Details 
    ============================================= -->
<div class="course-details-area">
    <br>
    <div class="container">
        <div class="row">
            <!-- Start Course Info -->
            <div class="col-md-12">
                <div class="courses-info">
                    <h2>
                        Branch Details
                    </h2>

                    <!-- Star Tab Info -->
                    <div class="tab-info">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    Computer Engineering
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    Faculty
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                    Labs
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Tab -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <h4>Vision</h4>
                                    <p> To achieve excellence for providing value based education in Information Technology through innovation, team work and ethical practices.</p>

                                    <h4>Mission</h4>
                                    <p> 1. To produce graduates according to the need of industry, government, society and scientific community.
                                        <br>
                                        2. To develop partnership with industries, government agencies and R & D Organizations for knowledge sharing and overall development of faculties and students.
                                        <br>
                                        3. To solve industrial, government agencies, societal and political issues by applying information techniques.
                                        <br>
                                        4. To motivate students/graduates to be entrepreneurs.
                                        <br>
                                        5. To motivate students to participate in reputed conferences, workshops, symposiums, seminars and related technical activities.
                                        <br>
                                        6. To impart human and ethical values in our students for better serving of society.
                                        <br>
                                        7. To create awareness among students and inculcate affection for free and open source software.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Tab -->



                            <!-- Single Tab -->
                            <div id="tab3" class="tab-pane fade">
                                <div class="info title">
                                    <div class="advisor-list-items row container">
                                        <!-- Advisor Item -->
                                        @foreach($alldata as $data)

                                        <div class="item col-md-6">
                                            <div class="thumb">
                                                <img src="{{ asset('upload/staff/' . $data->photo) }}" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <div class="author">
                                                    <h4>{{$data->f_name}} {{$data->l_name}}</h4>
                                                    <ul>
                                                        <li class="dribbble">
                                                            <a href="#"><i class="far fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="b-portfolio_info">
                                                    <hr>
                                                    <div class="b-portfolio_info_description f-portfolio_info_description">
                                                        <div class="b-information-box f-information-box f-primary-b">
                                                            <ul>
                                                                <li>
                                                                    <strong class="f-information-box__name b-information-box__name">Designation</strong>
                                                                    <i class="b-dotted f-dotted">:</i>
                                                                    <span class="f-information_data">{{$data->designation}}</span>
                                                                </li>
                                                                <br>
                                                                <li>
                                                                    <strong class="f-information-box__name b-information-box__name">Qualification</strong>
                                                                    <i class="b-dotted f-dotted">:</i>
                                                                    <span class="f-information_data">{{$data->qualification}}</span>
                                                                </li><br>
                                                                <li>
                                                                    <strong class="f-information-box__name b-information-box__name">Experience</strong>
                                                                    <i class="b-dotted f-dotted">:</i>
                                                                    <span class="f-information_data">{{$data->experience}}</span>
                                                                </li><br>
                                                                <li>
                                                                    <strong class="f-information-box__name b-information-box__name">Area Of Interest </strong>
                                                                    <i class="b-dotted f-dotted">:</i>
                                                                    <span class="f-information_data">{{$data->interest}}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Advisor Item -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab -->

                            <!-- Single Tab -->
                            <div id="tab4" class="tab-pane fade">
                                <!-- Start Lab Details ============================================= -->
                                <div class="advisor-details-area ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="advisor-info container">
                                                <!-- Start Thumbnail -->
                                                <div class="col-md-5">
                                                    <div class="thumb1">
                                                        <img src="http://www.gecbh.cteguj.in//uploads/6265/database1.jpg" alt="Thumb">
                                                    </div>
                                                </div>
                                                <!-- End Thumbnail -->

                                                <!-- Start Content -->
                                                <div class="col-md-7 content">
                                                    <div class="course-info-list">
                                                        <ul>
                                                            <li>
                                                                <h2>DATABASE LAB</h2>
                                                                <h5>This lab can be used to perform practicals related to Database</h5>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <!-- End Lab Details ===========================================-->
                                <!-- Start Lab Details ============================================= -->
                                <div class="advisor-details-area ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="advisor-info container">
                                                <!-- Start Thumbnail -->
                                                <div class="col-md-5">
                                                    <div class="thumb1">
                                                        <img src="http://www.gecbh.cteguj.in//uploads/6265/network1.jpg" alt="Thumb">
                                                    </div>
                                                </div>
                                                <!-- End Thumbnail -->

                                                <!-- Start Content -->
                                                <div class="col-md-7 content">
                                                    <div class="course-info-list">
                                                        <ul>
                                                            <li>
                                                                <h2>NETWORKING LAB</h2>
                                                                <h5>Students can carry out Networking related experiments in Networking Lab.</h5>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <!-- End Lab Details ===========================================-->
                                <!-- Start Lab Details ============================================= -->
                                <div class="advisor-details-area ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="advisor-info container">
                                                <!-- Start Thumbnail -->
                                                <div class="col-md-5">
                                                    <div class="thumb1">
                                                        <img src="http://www.gecbh.cteguj.in//uploads/6265/comp_dept.jpg" alt="Thumb">
                                                    </div>
                                                </div>
                                                <!-- End Thumbnail -->

                                                <!-- Start Content -->
                                                <div class="col-md-7 content">
                                                    <div class="course-info-list">
                                                        <ul>
                                                            <li>
                                                                <h2>ADVANCED PROGRAMMING LAB</h2>
                                                                <h5>Programming Practicals can be performed in this lab.</h5>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <!-- End Lab Details ===========================================-->
                            </div>
                            <!-- End Single Tab -->
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Tab Info -->
                </div>
            </div>
            <!-- End Course Info -->


        </div>
    </div>
</div>
<!-- End Course Details -->


@endsection