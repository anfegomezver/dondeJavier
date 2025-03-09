<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback")}}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset("backend/plugins/fontawesome-free/css/all.min.css")}}>
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href={{asset("backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("backend/dist/css/adminlte.css")}}>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="hold-transition login-page d-flex justify-content-center align-items-center vh-100" 
    style="background: linear-gradient(135deg, rgba(255, 215, 0, 0.7), rgba(255, 69, 0, 0.7));">

    @yield('content')
</body>
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
</html>
