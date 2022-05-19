<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('assets/css/app.css') }}'>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/educa.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}">
</head>
<body>
    
    @include('back.partials.navback')
    @yield('content')
    
    <script src='{{ asset('assets/js/app.js') }}'></script>
</body>
</html>
