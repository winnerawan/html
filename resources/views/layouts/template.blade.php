<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GO-APLIKASI</title>
    <link rel="stylesheet" href="{{ asset("admin/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/additional.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/sidebar.css") }}">    
    <link rel="stylesheet" href="{{ asset("admin/css/line-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/jvectormap.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/dashboard.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/css/widgets.css") }}">
</head>
<body class="fill open-sidebar">
    @include('layouts.sidebar')
        <div class="main-content">
            @include('layouts.header')
                @yield('content')
    <script src="{{ asset("admin/js/jquery.min.js") }}"></script> 
    <script src="{{ asset("admin/js/popper.min.js") }}"></script>    
    <script src="{{ asset("admin/js/bootstrap.min.js") }}"></script>
    <!-- <script src="{{ asset("admin/js/smooth-scroll.min.js") }}"></script> -->
    <script src="{{ asset("admin/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("admin/js/jvectormap.min.js") }}"></script>
    <script src="{{ asset("admin/js/jquery-jvectormap-world-mill.js") }}"></script>
    <script src="{{ asset("admin/js/jquery.touchSwipe.min.js") }}"></script>
    <script src="{{ asset("admin/js/Chart.bundle.min.js") }}"></script>    
    <script src="{{ asset("admin/js/index.js") }}"></script>
    <script src="{{ asset("admin/js/default.js") }}"></script>    
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/{{ asset("admin/js/all.js") }}" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>    
</body>
</html>