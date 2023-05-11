<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jaibhim Foundation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v4.7.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #header .logo img {
      max-height: 65px;
    }
    .what-we-do .icon-box h4 a {
    color: #804e53;
    transition: ease-in-out 0.3s;
}
#img-hero{
position: absolute;
top:50%;
left:50%;
transform: translate(-50%,-50%)
}
  </style>
  @yield('styles')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- <h1><a href="index.html">Lumia</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('en/') }}"><img src="/assets/img/jaibhim-logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <!-- <li><a class="nav-link scrollto {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('/') }}">முகப்பு</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li> -->
          <li class="dropdown"><a href="#" class="{{ (request()->is('en/jaibhim-20-*')) ? 'active' : '' }}"><span>Jaibhim 2.0</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('en/jaibhim-20-purpose') }}">Vision</a></li>
              <li><a href="{{ url('en/jaibhim-20-activities') }}">Mission</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ (request()->is('en/jaibhimfoundation-*')) ? 'active' : '' }}"><span>Jaibhim Foundation</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto {{ (request()->is('en/jaibhimfoundation-administration')) ? 'active' : '' }}" href="{{ url('en/jaibhimfoundation-administration') }}">Leadership / Administration</a></li>
              <li><a href="{{ url('en/international-translation-committee') }}">Translation Team</a></li>
              <li><a href="{{ url('en/jaibhimfoundation-team') }}">IT Team</a></li>
              <li><a href="{{ url('en/proof-reading-committee') }}">Review Team</a></li>
              <li><a href="#">Advisory Team</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ (request()->is('ambedkariyam-*')) ? 'active' : '' }}"><span>Ambedkariam 50</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('en/ambedkariyam-50-purchase') }}">To Buy Ambedkarism Book Set</a></li>
              <li><a href="{{ url('en/ambedkariyam-volume-details') }}">About the Ambedkarism Book Set</a></li>
              <li><a href="{{ url('en/join') }}">To join as an Ambassador of Ambedkarism</a></li>
              <li><a href="{{ url('ambedkariyam-ambassadors') }}">List of Ambassadors of Ambedkarism</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="{{ (request()->is('ambedkar-*')) ? 'active' : '' }}"><span>Ambedkar Study Centre</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('sponsors') }}">To start a new study centre</a></li>
              <li><a href="{{ url('sponsors') }}">To affiliate an existing centre</a></li>
              <li><a href="{{ url('sponsors') }}">To join as an Equality Ambassador</a></li>
              <li><a href="{{ url('sponsors-list') }}">List of study centres</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('en/photos') }}">Photogrpahs</a></li>
              <li><a href="{{ url('en/videos') }}">Videos</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/') }}">Tamil</a></li>
              <li><a href="{{ url('en/') }}">English</a></li>
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ url('contact') }}">தொடர்புக்கு</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
        <a href="https://www.facebook.com/Jaibhim-Foundation-107023781997563" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCxrBbGY-HywPxrcdFaa1r6w" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex img-hero flex-column justify-content-center align-items-center img-fluid">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>Lumia</span></h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div> 
  </section> -->
  <main id="main">

    @yield('content')

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright {{ date('Y') }} <strong><span>Jaibhim Foundation</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Made with &hearts; by <a href="https://mithracomputers.com/">Mithra Computers</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/Jaibhim-Foundation-107023781997563" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.youtube.com/channel/UCxrBbGY-HywPxrcdFaa1r6w" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
        <!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="en/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
@yield('scripts')
</body>

</html>