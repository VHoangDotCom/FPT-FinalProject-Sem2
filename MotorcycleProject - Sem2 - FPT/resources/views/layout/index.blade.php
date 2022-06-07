

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Motorcycle Admin</title>
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

<!-- ======= Header ======= -->
@include('layout.header')

<!-- ======= Sidebar ======= -->
@include('layout.sidebar')

@yield('content')

<!-- ======= Footer ======= -->
@include('layout.footer')

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
