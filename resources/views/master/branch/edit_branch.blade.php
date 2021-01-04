<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from edumin.dexignlab.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 10:00:55 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit Staff</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <link rel="stylesheet" href="../vendor/jqvmap/css/jqvmap.min.css">
    <link rel="stylesheet" href="../vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skin-2.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="../images/logo-white.png" alt="">
                <img class="logo-compact" src="../images/logo-text-white.png" alt="">
                <img class="brand-title" src="../images/logo-text-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="../images/profile/education/pic1.jpg" width="20" alt="" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>

                                    <a href="/login" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Admin Menu</li>
                    <li>
                        <a class="ai-icon" href="admin_home" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Home</span>
                        </a>

                    </li>
                    <li>
                        <a class="ai-icon" href="/event_home_admin" aria-expanded="false">

                            <i class="la la-calendar"></i>
                            <span class="nav-text">Event Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="event-management.html" aria-expanded="false">
                            <i class="la la-certificate"></i>
                            <span class="nav-text">Placement</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/view_company_admin">View Company</a></li>
                            <li><a href="edit-courses.html">Companies Applied</a></li>
                            <li><a href="about-courses.html">Selected Students</a></li>
                        </ul>
                    </li>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-graduation-cap"></i>
                            <span class="nav-text">Branches</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="view_branch">All Branches</a></li>
                            <li><a href="add_branch">Add Branches</a></li>
                            <li><a href="/edit_branch_home">Edit Branches</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-users"></i>
                            <span class="nav-text">Faculty</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/all_staff">All Faculty</a></li>
                            <li><a href="/add_staff">Add Faculty</a></li>
                            <li><a href="/edit_staff_home">Edit Faculty</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
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

                <div class="row">
                    <div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('update_branch')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{$branch->id}}">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Branch Name</label>
                                                <input type="text" name="b_name" class="form-control"
                                                    value="{{$branch->b_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Number Of Seats</label>
                                                <input type="number" name="seats" class="form-control"
                                                    value="{{$branch->seats}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary">Update</button>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a>
                    2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../vendor/global/global.min.js"></script>
    <script src="../vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/dlabnav-init.js"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="../vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="../vendor/peity/jquery.peity.min.js"></script>

    <!-- Chart sparkline plugin files -->
    <script src="../vendor/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Demo scripts -->
    <script src="../js/dashboard/dashboard-3.js"></script>

    <!-- Svganimation scripts -->
    <script src="../vendor/svganimation/vivus.min.js"></script>
    <script src="../vendor/svganimation/svg.animation.js"></script>
</body>

<!-- Mirrored from edumin.dexignlab.com/xhtml/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 10:00:57 GMT -->

</html>