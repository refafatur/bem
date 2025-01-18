<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BEM KM UNBIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: May 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="/"><span>Sinergi Cita</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="/">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="visi">Visi & Misi</a></li>
              <li><a href="struktur">Struktur Organisasi</a></li>
              <li><a href="sejarah">Sejarah BEM UNBIN </a></li>
            </ul>
          </li>
          <li><a href="acara">Acara</a></li>
          <li><a href="artikel">Artikel</a></li>
          <li><a href="galeri">Galeri</a></li>
          <li><a href="kontak">Kontak</a></li>
          <li><a href="faq">FAQ</a></li>
          <li><a href="login">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      @foreach($judul as $key => $Get)
    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
        <div class="carousel-container">
            <h2 class="animate_animated animate_fadeInDown">{{ $Get->judul }}</h2>
            <p class="animate_animated animate_fadeInUp">{{ $Get->keterangan }}</p>
        </div>
    </div>
    @endforeach

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  
  <main id="main">

  
    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/heroo.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><img src="assets/img/logo2.png" alt="Logo" width="50" height="50"></div>
              <h4 class="title"><a href="">BEM KM UNBIN Kabinet Sinergi Cita</a></h4>
              <p class="description">Kami adalah organisasi mahasiswa yang berdedikasi untuk menciptakan lingkungan kampus yang dinamis, inovatif, dan inklusif. Dengan semangat sinergi, kami mengajak seluruh mahasiswa untuk bersama-sama mewujudkan cita-cita besar demi kemajuan Universitas Binaniaga Indonesia.</p>
              <p class="description">Kabinet Sinergi Cita mengedepankan kolaborasi, inovasi, dan aksi nyata dalam setiap program dan kegiatan yang kami jalankan. Kami percaya bahwa dengan bekerja sama, kita dapat menghadirkan perubahan positif yang berdampak luas, baik di dalam kampus maupun di masyarakat.</p>
            </div>

            

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>Berita & Artikel</h2>
          <p>Kilasan berita & artikel dari beberapa kegiatan BEM KM UNBIN.</p>
          <a href="artikel" class="btn btn-view-more">
            Lihat Artikel Lainnya <i class="bi bi-arrow-right"></i>
          </a>
        </div>
        
        <!-- Artikel Terbaru -->
        @if($artikel->isEmpty())
  <div class="row latest-article" data-aos="fade-up">
    <div class="col-md-12">
      <h3>Tidak Ada Artikel Dan Berita</h3>
      <p>Saat ini tidak ada artikel dan berita yang tersedia. Silakan kembali lagi nanti untuk informasi lebih lanjut.</p>
    </div>
  </div>
@else
        @foreach ($artikel as $Get)
    <div class="row latest-article" data-aos="fade-up">
        <div class="col-md-5">
            <img src="{{ asset('img/artikel/' . $Get->foto) }}" class="img-fluid" alt="{{ $Get->judul }}">
        </div>
        <div class="col-md-7 pt-4">
            <h3><i class="bi bi-clock-history" style="color: rgb(62, 62, 237);"></i>{{ $Get->judul }}</h3>
            <p class="fst-italic">
                {{ Str::limit($Get->katakata, 100) }}
            </p>
            <ul>
                <li><i class="bi bi-info-circle"></i>{{ $Get->info }}</li>
                <li><i class="bi bi-calendar"></i>{{ date('d F Y', strtotime($Get->tanggal)) }}</li>
            </ul>
            <a href="{{ route('artikel.detail', $Get->judul) }}" class="btn btn-read-more">
                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
@endforeach
@endif
    
      </div>
    </section><!-- End Features Section -->
    
    
    
    

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>Acara Mendatang</h2>
          <p>Daftar singkat acara atau kegiatan yang akan datang.</p>
          <a href="acara" class="btn btn-view-more float-right">
            Lihat Acara Lainnya <i class="bi bi-arrow-right"></i>
          </a>
        </div>
    
        <!-- Acara Penting -->
@if($acara->isEmpty())
  <div class="row latest-article" data-aos="fade-up">
    <div class="col-md-12">
      <h3>Tidak Ada Acara</h3>
      <p>Saat ini tidak ada acara yang tersedia. Silakan kembali lagi nanti untuk informasi lebih lanjut.</p>
    </div>
  </div>
@else
  @foreach ($acara as $Get)
  <div class="row latest-article" data-aos="fade-up">
    <div class="col-md-5">
      <img src="{{ asset('img/acara/' . $Get->foto) }}" class="img-fluid" alt="{{ $Get->judul }}">
    </div>
    <div class="col-md-7 pt-4">
      <h3><i class="bi bi-clock-history" style="color: rgb(62, 62, 237);"></i> {{ $Get->judul }}</h3>
      <p class="fst-italic">
        {{ Str::limit($Get->katakata, 100) }}
      </p>
      <ul>
        <li><i class="bi bi-info-circle"></i> {{ $Get->tempat }}</li>
        <li><i class="bi bi-calendar"></i> {{ date('d F Y', strtotime($Get->tanggal)) }}</li>
      </ul>
      <a href="acara" class="btn btn-read-more">
        Registrasi Acara <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>
  @endforeach
@endif

    
      </div>
    </section><!-- End Features Section -->

  
    
    <section class="testimonials" data-aos="fade-up">
      <div class="container">
    
        <div class="section-title">
          <h2>Testimoni</h2>
          <p>Pengalaman dan cerita dari orang orang yang pernah berkontribusi dalam BEM KM UNBIN.</p>
        </div>
    
        <div class="testimonials-carousel swiper">
          <div class="swiper-wrapper">

            @foreach($testimoni as $Get)
            <div class="testimonial-item swiper-slide">
              <img src="{{ asset('img/testimoni/' . $Get->foto) }}" class="testimonial-img" alt="">
              <h3>{{ $Get->nama }}</h3>
              <h4>{{ $Get->jabatan }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $Get->pesan }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
            @endforeach
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
    
      </div>
    </section><!-- End Testimonials Section -->
    




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    

    <div class="footer-top">
      <div class="container">
        <div class="row align-items-center">
        
          <div class="col-lg-6 col-md-6 footer-photo">
            <img src="assets/img/logo.png" alt="Foto BEM UNBIN" class="footer-img">
          </div>
        
          <div class="col-lg-6 col-md-6 footer-info">
            <h3>Follow us on social media</h3>
            <div class="social-links mt-3">
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    
    
    

    <div class="container">
      <div class="copyright">
        &copy; 2024 <strong><span>Badan Eksekutif Mahasiswa Universitas Binaniaga Indonesia</span></strong>
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Tombol untuk membuka formulir -->
<button class="form-aspirasi-btn">
  <i class="bi bi-chat-dots-fill"></i>
</button>

<!-- Formulir Aspirasi Mahasiswa -->
<div class="form-aspirasi-container" id="formAspirasi">
  <span class="close-btn">&times;</span>
  <h2>Aspirasi Mahasiswa</h2>
  <form action="aspirasi/tambah" method="post">
    @csrf
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="npm">NPM:</label>
      <input type="number" id="npm" name="npm" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="prodi">Prodi:</label>
      <select id="prodi" name="prodi" class="form-control" required>
        <option value="">Pilih Prodi</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Teknologi Informasi">Teknologi Informasi</option>
    </select>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="pesan">Aspirasi:</label>
      <textarea id="pesan" name="pesan" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>