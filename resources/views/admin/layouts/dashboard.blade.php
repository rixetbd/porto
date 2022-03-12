
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard" name="description" />
        <meta content="RixetBD" name="author" />

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="{{asset('admin_assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />

        <!-- Lightbox css -->
        <link href="{{asset('admin_assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('admin_assets/css/bootstrap-dark.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin_assets/css/app-dark.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box text-center">
                            <a href="{{route('admin')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('admin_assets/images/logo-sm.png')}}" alt="logo-sm-dark" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('admin_assets/images/logo-dark.png')}}" alt="logo-dark" height="24">
                                </span>
                            </a>

                            <a href="{{route('admin')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('admin_assets/images/logo-sm.png')}}" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('admin_assets/images/logo-light.png')}}" alt="logo-light" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Country Flag -->
                        {{-- <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="{{asset('admin_assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('admin_assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('admin_assets/images/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('admin_assets/images/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{asset('admin_assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div> --}}

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-apps-2-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('admin_assets/images/brands/github.png')}}" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('admin_assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('admin_assets/images/brands/dribbble.png')}}" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('admin_assets/images/brands/dropbox.png')}}" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('admin_assets/images/brands/mail_chimp.png')}}" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('admin_assets/images/brands/slack.png')}}" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-notification-3-line"></i>
                                <span class="noti-dot"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="ri-shopping-cart-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{asset('admin_assets/images/users/avatar-3.jpg')}}" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="ri-checkbox-circle-line"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="{{asset('admin_assets/images/users/avatar-4.jpg')}}" class="rounded-circle avatar-xs" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::user()->picture == '')
                                    <i class="fas fa-user"></i>
                                @else
                                    <img class="rounded-circle header-profile-user" src="{{asset('uploads/user')}}/{{Auth::user()->picture}}" alt="Header Avatar">
                                @endif
                                <span class="d-none d-xl-inline-block ms-1">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="ri-shut-down-line align-middle me-1 text-danger"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>



            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">

                            <li>
                                <a href="{{url('/')}}" target="_blank" class="waves-effect">
                                    <i class="mdi mdi-earth"></i>
                                    <span>Visit Site</span>
                                </a>
                            </li>

                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{route('admin')}}" class="waves-effect">
                                    <i class="mdi mdi-home-variant-outline"></i><span
                                        class="badge rounded-pill bg-primary float-end">3</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.email.inbox')}}">Inbox</a></li>
                                    <li><a href="{{route('admin.email.compose')}}">Compose</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">User</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-account"></i>
                                    <span>Account</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.profile')}}">Profile</a></li>
                                    <li><a href="{{route('admin.profile.add')}}">Add Info</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Frontend</li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span>Home Page</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.homepage')}}">All Information</a></li>
                                    <li><a href="{{route('admin.homepage.new')}}">Add New</a></li>
                                    <li><a href="{{route('admin.homepage.trash')}}">Trash</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span>About Me</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.about.index')}}">All Info</a></li>
                                    <li><a href="{{route('admin.about.counter')}}">Counter</a></li>
                                    <li><a href="{{route('admin.about.skills')}}">Skills</a></li>
                                    <li><a href="{{route('admin.about.education')}}">Education</a></li>
                                    <li><a href="{{route('admin.about.experience')}}">Experience</a></li>
                                    <li><a href="{{route('admin.about.services')}}">Services</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span>Portfolio</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.portfolio.index')}}">All Projects</a></li>
                                    <li><a href="{{route('admin.portfolio.new')}}">Add New</a></li>
                                    <li><a href="{{route('admin.portfolio.trash')}}">Trash</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span>Clients</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.clients.index')}}">Testimonials</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-home"></i>
                                    <span>Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.blog.index')}}">All Blog</a></li>
                                    <li><a href="{{route('admin.blog.new')}}">Add New</a></li>
                                    <li><a href="{{route('admin.blog.trash')}}">Trash</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Site Settings</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-cors"></i>
                                    <span>Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
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
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © RixetBD.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Develop <i class="mdi mdi-heart text-danger"></i> by Rabiul Islam                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        <script src="{{asset('admin_assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/node-waves/waves.min.js')}}"></script>

        <!--tinymce js-->
        <script src="{{asset('admin_assets/libs/tinymce/tinymce.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('admin_assets/js/pages/form-editor.init.js')}}"></script>

        <!-- apexcharts js -->
        <script src="{{asset('admin_assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Table Editable plugin -->
        <script src="{{asset('admin_assets/libs/table-edits/build/table-edits.min.js')}}"></script>

        <script src="{{asset('admin_assets/js/pages/table-editable.init.js')}}"></script>

        <!-- Magnific Popup-->
        <script src="{{asset('admin_assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <!-- Tour init js-->
        <script src="{{asset('admin_assets/js/pages/lightbox.init.js')}}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{asset('admin_assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

        <script src="{{asset('admin_assets/js/pages/dashboard.init.js')}}"></script>

        <script src="{{asset('admin_assets/js/app.js')}}"></script>

        @yield('footer_script')

        @flasher_render
    </body>
</html>
