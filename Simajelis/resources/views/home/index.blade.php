<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- fontawesome -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/all.min.css" />
    <!-- aos -->
    <link rel="stylesheet" href="/assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="/assets/css/style.css" />

    <title>MZS Nur Asy Syabab</title>
  </head>
  <body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-3"
    >
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"
          ><span class="primary">MZS </span>NUR ASY SYABAB</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-bolder active" href="/">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="about">PROFIL MAJELIS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="pengajian">JADWAL PENGAJIAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="galeri">GALERI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="contact">KONTAK</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- carousel -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        @foreach ($sliders as $index => $slider)
            
        <div class="carousel-item {{$index === 0 ? 'active' : ''}} ">
          <img
            src="/image/{{$slider->image}}"
            class="d-block w-100 carousel-img"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$slider->title}}</h5>
            <p>
              {{$slider->description}}
            </p>
          </div>
        </div>
          @endforeach

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- end carousel -->

    <!-- about us -->
    <div class="about-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">PROFIL MZS NUR ASY SYABAB</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-6" data-aos="fade-right">
            <img src="/image/logo2.png" class="img-thumbnail" alt="Logo Nur Asy Syabab" width="450px">
            {{-- <h3 class="fw-bold about-us-title">
              Majelis Dzikir dan Shalawat Nur Asy Syabab
            </h3> --}}
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <p>
              Majelis dzikir dan shalawat nur asy syabab didirikan oleh KH. Muhammad Djaelani pada tahun 1999. nama Majelis Dzikir dan Shalawat Nur Asy syabab memiliki arti Cahaya Pemuda. tujuan KH. Muhammad Djaelani membentuk Majelis Dzikir dan Shalawat Nur Asy Syabab didasari keiinginan untuk mengajak orang bertaubat dan mencintau Nabi Muhammad SAW.
            </p>
            <p>
              Majelis Dzikir dan Shalawat Nur Asy Syabab terletak di Masjid Ummahatul Mukminin yang beralamat di Jalan Masjid RT01 RW03 Kelurahan Depok Kecamatan Pancoran Mas Kota Depok.
            </p>
            <p>
              Majelis Dzikir dan Shalawat Nur Asy Syabab memiliki kegiatan rutin tiap minggunya yaitu
            </p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                Pengajian dan Shalawat Rutin Remaja Malam Senin  
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                Pengajian kitab Al Adzkar An Nawawi Setiap Malam Rabu 
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                Pengajian Khotmul Quran Setiap Malam Kamis
              </li>
              <li class="list-group-item">
                <i class="fa fa-check-double primary"></i>
                Pengajian dan Nariyah Setiap Malam Jumat
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end about us -->

    <!-- pengajian -->
    <div class="pengajian mt-5 bg-light py-5">
      <div class="container">
        <div class="title-container text-center">
          <h2 class="fw-bold">JADWAL PENGAJIAN</h2>
        </div>
        <div class="row mt-5">
          @foreach ($pengajians as $pengajian)
          <div class="col-md-6">
            <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                 <img src="/image/{{$pengajian->image}}" alt="" width="50">
                </div>
                <div class="card-title fw-bolder mt-4">{{$pengajian->title}}</div>
                <p class="card-description mt-3">
                  {{$pengajian->description}}
                </p>
                <p class="card-description mt-3"> Lokasi
                  {{$pengajian->location}}
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- end Pengajian -->

    <!-- portfolio us -->
    <div class="portfolio-us mt-5">
      <div class="container">
        <div class="title-container">
          <h2 class="text-center fw-bold">GALERI</h2>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="mansory portfolio-container" data-aos="zoom-in-up">
              <div class="mansory-sizer"></div>

              @foreach ($galeris as $galeri)
                <div class="mansory-item m-2 portfolio-item filter-web">
                  <img src="/image/{{$galeri->image}}" alt="" class="img-fluid" />
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end portfolio us -->
    <!-- footer -->
    
    <!-- End footer -->

    <!-- footer -->
    <footer class="mt-5">
      <div class="footer-down bg-darker text-white px-5 py-3">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                    <div class="copyright">
                        Copyright <strong>Company</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by fani adi frihandoko
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="social-links float-end">
                        <a href="https://www.youtube.com/@shalawatnurasysyabaab6325" class="mx-2">
                            <i class="fab fa-youtube fa-2x"></i>
                        </a>
                        <a href="https://instagram.com/nurasysyabaab?igshid=MzRlODBiNWFlZA==" class="mx-2">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a> 
                    </div>
                  </div>
              </div>
          </div>
          
      </div>
    </footer>
    <!-- end footer -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-3">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <script src="/assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="/assets/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/assets/vendor/aos/dist/aos.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/js/app.js"></script>
  </body>
</html>
