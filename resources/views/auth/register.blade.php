<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin_assets/css/bootstrap-dark.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin_assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="" style="background-image:url('https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');background-size:cover;">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center align-items-center" style="height: 80vh;"">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="index.html" class="">
                                            <img src="{{asset('admin_assets/images/logo-dark.png')}}" alt="" height="24" class="auth-logo logo-dark mx-auto">
                                        </a>
                                    </div>
                                    <!-- end row -->
                                    <p class="my-3 text-center">Sign in to continue to RixetBD.</p>
                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input id="name" type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Email</label>
                                                    <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label class="form-label" for="password">Password</label>
                                                        <input id="password" type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col">
                                                        <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                                                        <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="form-label" class="form-check-label" for="customControlInline">{{ __('Remember Me') }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-grid mt-2">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        {{ __('Register') }}
                                                    </button>

                                                    <span class="text-center mt-2">Already Registered !!<a class="ms-2" href="{{ route('login') }}">Log in</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="mt-5 text-center">
                            <p class="text-white-50">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> Upzet. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                        </div> --}}
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->


        <!-- JAVASCRIPT -->
        <script src="{{asset('admin_assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin_assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('admin_assets/js/app.js')}}"></script>

    </body>
</html>

