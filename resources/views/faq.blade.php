<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FAQ - BEM KM UNBIN</title>
  <meta content="FAQ BEM UNBIN" name="description">
  <meta content="FAQ, Pertanyaan Umum, BEM UNBIN, Universitas Binaniaga Indonesia" name="keywords">

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
    .faq-section {
      padding: 60px 0;
      background: #f7f9fc;
    }

    .faq-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .faq-title h2 {
      font-size: 36px;
      font-weight: 700;
      color: #333;
    }

    .faq-categories {
      margin-bottom: 40px;
      text-align: center;
    }

    .faq-categories .btn {
      margin: 5px;
      padding: 10px 20px;
      border-radius: 20px;
      background: #007bff;
      color: #fff;
      transition: background 0.3s;
    }

    .faq-categories .btn:hover {
      background: #0056b3;
    }

    .faq-item {
      background: #fff;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .faq-item h4 {
      font-size: 18px;
      font-weight: 700;
      color: #333;
      cursor: pointer;
      margin-bottom: 10px;
    }

    .faq-item p {
      display: none;
      font-size: 16px;
      color: #666;
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
          <li><a  href="kontak">Kontak</a></li>
          <li><a class="active " href="faq">FAQ</a></li>
          <li><a href="login">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>FAQ</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>FAQ</li>
        </ol>
      </div>
    </div>
  </section>

  <!-- ======= FAQ Section ======= -->
  <section class="faq-section">
    <div class="container" data-aos="fade-up">
      <div class="faq-title">
        <h2>Pertanyaan Umum</h2>
      </div>
      <div class="faq-categories" data-aos="fade-up">
        <button class="btn" onclick="filterFaq('umum')">Umum</button>
        <button class="btn" onclick="filterFaq('akademik')">Akademik</button>
        <button class="btn" onclick="filterFaq('kegiatan')">Kegiatan</button>
        <button class="btn" onclick="filterFaq('lainnya')">Lainnya</button>
      </div>
      <div class="faq-list">
        <div class="faq-item umum" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Apa itu BEM UNBIN?</h4>
          <p>BEM UNBIN adalah Badan Eksekutif Mahasiswa Universitas Binaniaga Indonesia yang bertugas sebagai organisasi mahasiswa untuk menyelenggarakan berbagai kegiatan dan program kerja untuk kemajuan mahasiswa dan universitas.</p>
        </div>
        <div class="faq-item umum" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Bagaimana cara bergabung dengan BEM UNBIN?</h4>
          <p>Untuk bergabung dengan BEM UNBIN, Anda dapat mengikuti proses seleksi yang biasanya diadakan setiap tahun. Informasi lebih lanjut akan diumumkan melalui media sosial dan website resmi BEM UNBIN.</p>
        </div>
        <div class="faq-item akademik" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Bagaimana cara mengurus masalah akademik?</h4>
          <p>Untuk mengurus masalah akademik, Anda dapat menghubungi bagian akademik universitas atau menghubungi BEM UNBIN untuk mendapatkan bantuan dan arahan lebih lanjut.</p>
        </div>
        <div class="faq-item akademik" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Apakah BEM UNBIN memiliki program beasiswa?</h4>
          <p>BEM UNBIN tidak menyediakan program beasiswa langsung, namun kami seringkali bekerja sama dengan pihak universitas dan sponsor untuk memberikan informasi dan kesempatan beasiswa kepada mahasiswa.</p>
        </div>
        <div class="faq-item kegiatan" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Jenis kegiatan apa saja yang diselenggarakan oleh BEM UNBIN?</h4>
          <p>BEM UNBIN menyelenggarakan berbagai kegiatan seperti seminar, workshop, lomba, kegiatan sosial, dan banyak lagi untuk mengembangkan potensi dan kreativitas mahasiswa.</p>
        </div>
        <div class="faq-item kegiatan" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Bagaimana cara berpartisipasi dalam kegiatan BEM UNBIN?</h4>
          <p>Anda dapat berpartisipasi dalam kegiatan BEM UNBIN dengan mengikuti informasi dan pendaftaran yang diumumkan melalui media sosial dan website resmi BEM UNBIN.</p>
        </div>
        <div class="faq-item lainnya" data-aos="fade-up">
          <h4 onclick="toggleAnswer(this)">Bagaimana cara memberikan saran atau kritik kepada BEM UNBIN?</h4>
          <p>Anda dapat memberikan saran atau kritik kepada BEM UNBIN melalui formulir kontak yang tersedia di halaman Kontak atau langsung menghubungi kami melalui email atau media sosial.</p>
        </div>
      </div>
    </div>
  </section><!-- End FAQ Section -->

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
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Additional JS -->
  <script>
    function filterFaq(category) {
      var faqItems = document.getElementsByClassName('faq-item');
      for (var i = 0; i < faqItems.length; i++) {
        faqItems[i].style.display = 'none';
        if (faqItems[i].classList.contains(category)) {
          faqItems[i].style.display = 'block';
        }
      }
    }

    function toggleAnswer(element) {
      var answer = element.nextElementSibling;
      if (answer.style.display === 'block') {
        answer.style.display = 'none';
      } else {
        answer.style.display = 'block';
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      filterFaq('umum');
    });
  </script>

</body>

</html>
