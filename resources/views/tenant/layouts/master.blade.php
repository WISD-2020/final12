<!DOCTYPE html>
<html lang="zh-TW">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>
<div class="container">
@include('tenant.layouts.header')
@include('tenant.layouts.navbar')
@yield('content')
</div>
@include('tenant.layouts.footer')


<!-- Bootstrap core JavaScript -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
