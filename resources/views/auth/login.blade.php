<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta
        content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard."
        name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 5 dashboard, template admin bootstrap 5 , simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard" />

    <!-- Title -->
    <title>Dayone - Multipurpose Admin & Dashboard Template</title>

    <!--Favicon -->
    <link rel="icon" href="{{url('degine/images/brand/favicon.ico')}}'" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link href="{{url('degine/plugins/bootstrap/css/bootstrap.css')}}'" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{url('degine/css/style.css')}}" rel="stylesheet" />
    <link href="{{url('degine/css/boxed.css')}}" rel="stylesheet" />
    <link href="{{url('degine/css/dark.css')}}" rel="stylesheet" />
    <link href="{{url('degine/css/skin-modes.css')}}" rel="stylesheet" />
    <link href="{{url('degine/css/transparent-style.css')}}" rel="stylesheet">

    <!-- Animate css -->
    <link href="{{url('degine/css/animated.css')}}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{url('degine/css/icons.css')}}" rel="stylesheet" />

</head>

<body class="">

    <div class="page  responsive-log login-bg">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4 col-xxl-4">
                                <div class="card my-5" style="padding: 23px;">
                                    <div class="p-4 pt-6 text-center">
                                        <h1 class="mb-2">Login</h1>
                                        <p class="text-muted">Sign In to your account</p>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Mail or Username</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group">
                                                    <a href="" class="input-group-text">
                                                        <i class="fe fe-mail" aria-hidden="true"></i>
                                                    </a>

                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus placeholder="Enter email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div class="input-group mb-4">
                                                <div class="input-group" id="Password-toggle">
                                                    <a href="" class="input-group-text">
                                                        <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                    </a>

                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password" placeholder="Password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <div class="submit">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <div class="text-center mt-3">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div>

                                    </form>
                                    <div class="card-body border-top-0 pb-6 pt-2">
                                        <div class="text-center">
                                            <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                    class="ri-facebook-line"></i></span>
                                            <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                    class="ri-instagram-line"></i></span>
                                            <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                    class="ri-twitter-line"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js-->
    <script src="{{url('degine/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{url('degine/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{url('degine/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Select2 js -->
    <script src="{{url('degine/plugins/select2/select2.full.min.js')}}"></script>

    <!-- P-scroll js-->
    <script src="{{url('degine/plugins/p-scrollbar/p-scrollbar.js')}}"></script>

    <!--Sticky js -->
    <script src="{{url('degine/js/sticky.js')}}"></script>


    <!-- Color Theme js -->
    <script src="{{url('degine/js/themeColors.js')}}"></script>

    <!-- custom js -->
    <script src="{{url('degine/js/custom.js')}}"></script>

</body>

</html>