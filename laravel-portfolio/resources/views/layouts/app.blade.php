<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("img/favicon.png") }}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("css/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
  <link href="{{ asset("css/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/glightbox/css/glightbox.min.css") }}" rel="stylesheet">
  <link href="{{ asset("css/swiper/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

 <!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<body>
    @yield('content')
    <script src="{{ asset("js/app.js") }}"></script>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("js/purecounter/purecounter.js") }}"></script>
  <script src="{{ asset("js/aos.js") }}"></script>
  <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("js/glightbox.min.js") }}"></script>
  <script src="{{ asset("js/isotope-layout/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("js/typed.js/typed.min.js") }}"></script>
  <script src="{{ asset("js/waypoints/noframework.waypoints.js") }}"></script>
  <script src="{{ asset("js/php-email-form/validate.js") }}"></script>

   <!-- Template Main JS File -->
   <script src="{{ asset("js/main.js") }}"></script>

  </body>
</html>