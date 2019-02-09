<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Owned products </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    @stack('styles')
    @stack('scripts')
</head>
<body>
    @include('includes.navbar')
    @include('includes.alerts')
    <div class="container">
        @yield('content')
    </div>


    <!--FOOTER-->

 <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5 mt-3">


<!--Registrate-->
@guest
<ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#!" class="btn btn-primary btn-rounded">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->
@endguest

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3 dark-grey-text">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">Start-up Platform</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>A new Startup help your bussiness to grow up by software solutions.</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Packages</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a class="dark-grey-text" href="#!">eCommerce</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">ERP</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Front-end Pages Generator</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Manamgement Systems</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Useful links</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a class="dark-grey-text" href="#!">Your Account</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Shipping Rates</a>
      </p>
      <p>
        <a class="dark-grey-text" href="#!">Help</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fas fa-home mr-3"></i> Cairo, EGYPT, EGP</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
      <p>
        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
  <a class="dark-grey-text" href="https://github.com/yehia67"> Yehia Tarek</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
    <!--/FOOTER-->

</body>
</html>
