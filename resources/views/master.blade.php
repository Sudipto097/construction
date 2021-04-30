<!doctype html>
<html lang="en">



<head>

    <meta charset="utf-8"/>
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>

    <link href="{{asset('backend/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('backend/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css"/>

</head>


<body>

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="20">
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="20">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="uil-search"></span>
                    </div>
                </form>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil-search"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                           aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-inline-block language-switch">
                    <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('backend/assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1"
                                 height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/germany.jpg')}}" alt="user-image"
                                 class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/italy.jpg')}}" alt="user-image" class="me-1"
                                 height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('backend/assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1"
                                 height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil-apps"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="px-lg-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('backend/assets/images/brands/github.png')}}" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('backend/assets/images/brands/bitbucket.png')}}"
                                             alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('backend/assets/images/brands/dribbble.png')}}"
                                             alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('backend/assets/images/brands/dropbox.png')}}" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('backend/assets/images/brands/mail_chimp.png')}}"
                                             alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{asset('backend/assets/images/brands/slack.png')}}" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="uil-minus-path"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil-bell"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notifications </h5>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> Mark all as read</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="#" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="uil-shopping-basket"></i>
                                                </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <img src="{{asset('backend/')}}assets/images/users/avatar-3.jpg"
                                         class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">James Lemire</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="uil-truck"></i>
                                                </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <img src="{{asset('backend/')}}assets/images/users/avatar-4.jpg"
                                         class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                             src="{{asset('backend/assets/images/users/avatar-4.jpg')}}"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#">
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"  ></i> <span
                                class="align-middle">Sign out</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="uil-cog"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                <span class="logo-lg">
                            <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="20">
                        </span>
            </a>

            <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                        </span>
                <span class="logo-lg">
                            <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="20">
                        </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div data-simplebar class="sidebar-menu-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{route('home')}}">
                            <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-envelope"></i>
                            <span>Sidebar</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('all_sidebar')}}">Add Sidebar</a></li>
                            <li><a href="{{route('view-sidebar')}}">All Sidebar</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-envelope"></i>
                            <span>Job Reference</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('Add-Job-Reference')}}">Add Job Reference</a></li>
                            <li><a href="{{route('view-jobreference')}}">View Job Reference</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-envelope"></i>
                            <span>ABOUT US</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('About-Us')}}">Add ABOUT US</a></li>
                            <li><a href="{{route('About-view')}}">View ABOUT US</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            @yield('content')
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © Minible.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/"
                                                                                         target="_blank"
                                                                                         class="text-reset">Themesbrand</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>


        <!-- Settings -->
        <hr class="mt-0"/>
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{asset('backend/assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail"
                     alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked/>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('backend/assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail"
                     alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                       data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css"/>
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{asset('backend/assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail"
                     alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                       data-appStyle="assets/css/app-rtl.min.css"/>
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>


        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/dropzone/min/dropzone.min.js')}}assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="{{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
</body>

</html>
