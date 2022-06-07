<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('niceadmin/assets/img/logo.png')}}" rel="icon">
    <link href="{{asset('niceadmin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.gstatic.com')}}" rel="preconnect">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('niceadmin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('niceadmin/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.1.0
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">

                                <span class="d-none d-lg-block">Motorcycle</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your email & password to login</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate method="post" action="{{route('login')}}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourUsername"  value="{{ __('Email') }}" class="form-label">Email:</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="email" class="form-control" id="yourUsername" :value="old('email')" required autofocus >
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" value="{{ __('Password') }}" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required autocomplete="current-password">
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <input class="form-check-input" type="checkbox" name="Remember me" value="true" id="rememberMe">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">{{ __('Log in') }}</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="{{route('register')}}">Create an account</a></p>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif

{{--                                        <x-jet-button class="ml-4">--}}
{{--                                            {{ __('Log in') }}--}}
{{--                                        </x-jet-button>--}}
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('niceadmin/assets/vendor/echarts/echarts.min.js')}}"></script>


<!-- Template Main JS File -->
<script src="{{asset('niceadmin/assets/js/main.js')}}"></script>

</body>

</html>

