
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Admin|Dashboard</title>
    <!-- Favicon -->
{{--    {{dd(asset('img/brand/favicon.png'))}}--}}

    <link rel="icon" href="{{asset('img/brand/1.png')}}" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href=" {{ asset('css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body>
<!-- Sidenav -->
@include('backend.layouts.includes.sidenav')
<!-- Main content -->
<div class="main-content" id="panel">

    <!-- Topnav -->
@include('backend.layouts.includes.header')

    <!-- Header -->
@yield('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">

        <!-- Footer -->
        @include('backend.layouts.includes.footer')
    </div>


</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/js.cookie.js')}}"></script>
<script src="{{asset('js/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('js/jquery-scrollLock.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('js/Chart.min.js')}}"></script>
<script src="{{asset('js/Chart.extension.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
