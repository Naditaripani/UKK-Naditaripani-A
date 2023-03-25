<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">

  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{ asset('assets/landing/img/logowk.png') }}" rel="icon">
  <link href="{{ asset('assets/landing/css/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/landing/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{  asset('assets/landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="assets/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/landing/vendor/remixicon/remixicon.css&quot; rel=&quot;stylesheet">
  <link href="assets/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/landing/css/style.css') }}" rel="stylesheet">
    
  <title>Laporma! - Laporan Pengaduan Wikrama</title>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/landing/img/logowk.png') }}" alt="">
        <span>Laporma!</span>
      </a>

      <nav id="navbar" class="navbar">
         @if(Auth::guard('masyarakat')->check())
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('laporma.laporan') }}">Lihat Laporan</a></li>
          <li><a class="getstarted scrollto" href="{{ route('laporma.logout') }}" onclick="return confirm('Apakah anda yakin ingin keluar ?')" type="button" class="btn btn-primary">Logout</a></li>
          {{-- <li><a class="getstarted scrollto" href="{{ route('laporma.formRegister') }}">Sign Up</a></li> --}}
        </ul>
        {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
        @else
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('laporma.formLogin') }}" type="button" class="btn btn-primary">Login</a></li>
          <li><a class="getstarted scrollto" href="{{ route('laporma.formRegister') }}">Sign Up</a></li>
        </ul>
        {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
      </nav><!-- .navbar -->
       @endauth
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Layanan Laporan Pengaduan Masyarakat SMK Wikrama Bogor</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Sampaikan laporan anda terkait permasalahan sekitar sekolah </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              @if(Auth::guard('masyarakat')->check())
              <a href="{{ route('laporma.laporan') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Laporkan Sekarang!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              @else
              <a href="{{ route('laporma.formLogin') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Laporkan Sekarang!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              @endif
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="/assets/landing/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/landing/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/landing/vendor/aos/aos.js"></script>
  <script src="/assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/landing/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/landing/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/landing/js/main.js"></script>

</body>

</html>