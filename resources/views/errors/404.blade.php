
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>404 Error</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin_assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin_assets/css/app-dark.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="">
        <div class="">
            <!-- error page content -->
            <div class="w-100">
                <div class="container">
                    <div class="row justify-content-center align-items-center vh-100">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="text-center">
                                <div>
                                    <h1 class="display-2 error-text fw-bold">4<i class="ri-ghost-smile-fill align-bottom text-primary mx-1"></i>4</h1>
                                </div>
                                <div>
                                    <h4 class="text-uppercase mt-4">Sorry, page not found</h4>
                                    <p>Sorry, we can't find this page. You'll find loads to explore on the home page.</p>
                                    <div class="mt-4">
                                        <a href="{{route('frontend.home')}}" class="btn btn-primary"><i class="ri-arrow-left-line align-bottom mr-2"></i>Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- error auth page content -->

        </div>
        <!-- end error page -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin_assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/node-waves/waves.min.js')}}"></script>

    </body>
</html>
