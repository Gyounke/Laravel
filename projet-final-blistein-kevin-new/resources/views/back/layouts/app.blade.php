<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('css/app2.css') }}'>
    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/educa.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}"> -->

    <link rel="stylesheet" href="{{ asset("css/fontawesome.css") }}">
    <link rel="stylesheet" href="{{ asset("css/templatemo-eduwell-style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("css/lightbox.css") }}">
    <link rel="stylesheet" href="{{ asset("css/flex-slider2.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">

</head>
<body>
    
    @include('back.partials.navback')
    @yield('content')
    
    <script src='{{ asset('js/app2.js') }}'></script>
</body>
</html>
