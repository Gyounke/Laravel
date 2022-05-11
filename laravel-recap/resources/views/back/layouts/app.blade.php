<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('assets/css/app.css') }}'>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset("assets/css/fontawesome.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/templatemo-chain-app-dev.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/animated.css") }}">
</head>
<body>
    
    @include('back.partials.navback')
    @yield('content')
    
    <script src='{{ asset('assets/js/app.js') }}'></script>
</body>
</html>
