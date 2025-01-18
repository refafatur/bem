<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kontak - BEM KM UNBIN</title>
  <meta content="Kontak BEM UNBIN" name="description">
  <meta content="Kontak, BEM UNBIN, Universitas Binaniaga Indonesia" name="keywords">

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
    .contact-section {
      padding: 60px 0;
      background: #f7f9fc;
    }

    .contact-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .contact-title h2 {
      font-size: 36px;
      font-weight: 700;
      color: #333;
    }

    .contact-info {
      margin-bottom: 40px;
    }

    .contact-info h4 {
      font-weight: 700;
    }

    .contact-info p {
      font-size: 16px;
      color: #666;
      margin: 5px 0;
    }

    .contact-form {
      background: #fff;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
      color: #333;
    }

    .contact-form button {
      background: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-form button:hover {
      background: #0056b3;
    }

    .map-section {
      margin-top: 40px;
    }

    .map-section h4 {
      font-size: 24px;
      font-weight: 700;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }

    .map-section #map {
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .footer-top {
      background: #007bff;
      color: #fff;
      padding: 30px 0;
    }

    .footer-info h3 {
      color: #fff;
      margin-bottom: 20px;
    }

    .footer-info .social-links a {
      color: #fff;
      font-size: 24px;
      transition: color 0.3s;
      margin-right: 10px;
    }

    .footer-info .social-links a:hover {
      color: #ccc;
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
          <li><a  href="galeri">Galeri</a></li>
          <li><a class="active " href="kontak">Kontak</a></li>
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
        <h2>Kontak</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Kontak</li>
        </ol>
      </div>
    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section class="contact-section">
    <div class="container" data-aos="fade-up">
      <div class="contact-title">
        <h2>Hubungi Kami</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 contact-info" data-aos="fade-right">
          <h4>Informasi Kontak</h4>
          <p><i class="bi bi-envelope"></i> Email: bemkm.unbin@gmail.com</p>
          <p><i class="bi bi-phone"></i> Telepon: +62 813 8860 3049</p>
          <p><i class="bi bi-geo-alt"></i> Lokasi: Jl. Mayor Oking Jayaatmaja Depan Stasiun KA No.27, RT.04/RW.06, Cibogor, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16124 (Sekretariat BEM KM UNBIN)</p>
        </div>
        <div class="col-lg-6 contact-form" data-aos="fade-left">
          <h4>Kirim Pesan</h4>
          <form action="d-kontak/tambah" method="post" role="form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>
      </div>
      <div class="map-section" data-aos="fade-up">
    <h4>Peta Lokasi</h4>
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4316380510604!2d106.78736157453632!3d-6.593152264450176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b447cc4d03%3A0x66f69b3852e13819!2sUNIVERSITAS%20BINANIAGA%20BOGOR!5e0!3m2!1sid!2sid!4v1723556560798!5m2!1sid!2sid" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</div>

    </div>
  </section><!-- End Contact Section -->

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
