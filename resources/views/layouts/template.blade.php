<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul') - DOOl GAMING</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/tema/img/rent-car.png')}}" rel="icon">
  <link href="{{asset('tema/img/rent-car.png')}}" rel="rent-car-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('tema/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('tema/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="{{asset('tema/img/pcgame.png')}}" alt="">
        <span>Dool Gaming</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{url('/')}}#about">Recommendation</a></li>
          <li><a href="{{url('/sewa-mobil')}}">News</a></li>
          <li><a href="{{url('/cara-pesan')}}">About</a></li>
          <li><a href="{{url('/blog')}}">Game</a></li>
          <!-- <li><a href="{{url('/contact')}}">Contact</a></li> -->
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('hero')

  <main id="main">

  @yield('main')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{url('/')}}" class="logo d-flex align-items-center">
              <img src="{{asset('tema/img/logo.png')}}" alt="">
              <span>DOOL GAMING</span>
            </a>
            <p>Kami Menyediakan Rekomendasi Banyak Game.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/dmsnfaaaaaa_/"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Hubungi Kami</h4>
            <!-- <p>
              Jln.Teuku Umar <br>
              Kota Tegal, No. 187-203<br>
              Jawa Tengah <br><br> -->
              <strong>Phone:</strong>+6285998028730<br>
              <strong>Email:</strong>doolgaming123@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dool Game</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('tema/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('tema/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('tema/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('tema/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('tema/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('tema/js/main.js')}}"></script>

</body>

</html>