<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galeri - BEM KM UNBIN</title>
  <meta content="Galeri BEM UNBIN" name="description">
  <meta content="Galeri, Foto, Video, BEM UNBIN, Universitas Binaniaga Indonesia" name="keywords">

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

  <!-- Additional Styles -->
  <style>
    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      aspect-ratio: 1 / 1; /* Maintain square ratio */
    }

    .gallery-item:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .gallery-item .description {
      position: absolute;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      width: 100%;
      padding: 10px;
      text-align: center;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .gallery-item:hover .description {
      opacity: 1;
    }

    .modal-dialog {
      max-width: 80%;
      margin: 30px auto;
    }

    .modal-content {
      position: relative;
      background-color: #000;
      border: 0;
      border-radius: 0;
    }

    .modal-body img {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="/"><span>Sinergi Cita</span></a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a  href="/">Beranda</a></li>
          <li class="dropdown"><a  href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="visi">Visi & Misi</a></li>
              <li><a href="struktur">Struktur Organisasi</a></li>
              <li><a href="sejarah">Sejarah Organisasi</a></li>
            </ul>
          </li>
          <li><a href="acara">Acara</a></li>
          <li><a  href="artikel">Artikel</a></li>
          <li><a class="active " href="galeri">Galeri</a></li>
          <li><a href="kontak">Kontak</a></li>
          <li><a href="faq">FAQ</a></li>
          <li><a href="login">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Galeri</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Galeri</li>
        </ol>
      </div>
    </div>
  </section>

  <!-- ======= Gallery Section ======= -->
  <div class="container my-5">
    <div class="row text-center">
      <div class="col-12">
        <h1></h1>
      </div>
    </div>
    <div class="row">
      @foreach ( $galeri as $Get)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="gallery-item">
          <img src="{{ asset('img/galeri/' . $Get->berkas) }}" alt="{{ $Get->judul }}">
          <div class="description">{{$Get->judul}}</div>
        </div>
      </div>
      @endforeach
      <!-- Tambahkan lebih banyak item galeri sesuai kebutuhan -->
    </div>
  </div>

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
