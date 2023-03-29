<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pengaduan Masyarakat</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets/landing_page/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/landing_page/vendors/owl-carousel/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/landing_page/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/landing_page/vendors/aos/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/landing_page/css/style.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        {{-- <img src="{{ asset('assets/landing_page/images/Group2.svg') }}" alt=""> --}}
        <p>Pengaduan Masyarakat</p>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{ asset('assets/landing_page/images/Group2.svg') }}" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">Penggunaan</a>
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a href="{{ route('loginmasyarakat') }}"><button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Login</button></a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
  </header>
  <div class="banner" >
    <div class="container mb-5">
      <h1 class="font-weight-semibold">Selamat datang<br>di Pengaduan Masyarakat <br><strong>Desa Ciderum</strong></h1>
      <h6 class="font-weight-normal text-muted pb-3">Jika ada keluhan di lingkungan masyarakat anda dapat
        melaporkan kepada kami</h6>
      <img src="{{ asset('assets/landing_page/images/Group171.svg') }}" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container mt-5">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>Cara mengirimkan laporan</h2>
          <h6 class="section-subtitle text-muted"><hr></h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="{{ asset('assets/landing_page/images/Group12.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Login<br></h5>
              <p class="text-muted">Login pada menu yang telah <br> disediakan di atas, jika belum mempunyai akun silahkan daftar terlebih dahulu</p>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="{{ asset('assets/landing_page/images/Group7.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Masukan Laporan</h5>
              <p class="text-muted">silahkan anda masukan laporan pengaduan pada form yang disediakan</p>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="{{ asset('assets/landing_page/images/Group5.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Selesai</h5>
              <p class="text-muted">tunggu tanggapan pada menu Laporan anda</p>
            </div>
          </div>
        </div>
      </section>
      {{-- <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Daftar Pengaduan Masyarakat</h2>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section> --}}
    </div>
  </div>
  <script src="{{ asset('assets/landing_page/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/landing_page/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/landing_page/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/landing_page/vendors/aos/js/aos.js') }}"></script>
  <script src="{{ asset('assets/landing_page/js/landingpage.js') }}"></script>
</body>
</html>
