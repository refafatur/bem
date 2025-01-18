<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Artikel - BEM KM UNBIN</title>
  <meta content="Struktur Organisasi BEM UNBIN, Badan Eksekutif Mahasiswa Universitas Binaniaga Indonesia" name="description">
  <meta content="Struktur Organisasi, BEM UNBIN, Universitas Binaniaga Indonesia" name="keywords">

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
    #articles {
      background: #f7f9fc;
      padding: 60px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-title h2 {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }

    .article-card {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 30px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .article-card img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .article-card h4 {
      margin: 15px 0 10px;
      font-size: 24px;
      color: #333;
    }

    .article-card p {
      color: #666;
    }

    .category-tags {
      margin-top: 20px;
    }

    .category-tags a {
      background: #007bff;
      color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      text-decoration: none;
      margin: 0 5px;
    }

    .category-tags a:hover {
      background: #0056b3;
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
          <li><a class="active " href="artikel">Artikel</a></li>
          <li><a href="galeri">Galeri</a></li>
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
        <h2>Daftar Artikel</h2>

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Daftar Artikel</li>
        </ol>
      </div>

    </div>
  </section>

  <section id="articles">
  <div class="container">

    <!-- Section Title -->
    <div class="section-title">
      <h2>Daftar Artikel</h2>
      <p>Artikel & berita terbaru yang diposting oleh BEM KM UNBIN.</p>
    </div>

    <!-- Row for Article Cards -->
    <div class="row mt-4">
    @if($artikel->isEmpty())
  <section class="event-details">
    <div class="container">
      <div class="no-event">
        <h2>Tidak Ada Acara</h2>
        <p>Saat ini tidak ada acara yang tersedia. Silakan kembali lagi nanti.</p>
      </div>
    </div>
  </section><!-- End Detail Acara Section -->
@else
            @foreach($artikel as $Get)
            <div class="col-md-4">
                <div class="article-card">
                    <a href="{{ route('artikel.detail', $Get->judul) }}">
                        <img src="{{ asset('img/artikel/' . $Get->foto) }}" alt="{{ $Get->judul }}" class="img-fluid">
                        <h4>{{ $Get->judul }}</h4>
                    </a>
                    <p>{{ Str::limit($Get->katakata, 100) }}</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>


        <div class="category-tags mt-4">
            <h4>Info</h4>
            <a href="{{ route('artikel.filterByInfo', 'Akademik') }}">Akademik</a>
            <a href="{{ route('artikel.filterByInfo', 'Unit Kegiatan Mahasiswa') }}">Unit Kegiatan Mahasiswa</a>
            <a href="{{ route('artikel.filterByInfo', 'Festival') }}">Festival</a>
            <a href="{{ route('artikel.filterByInfo', 'Teknologi') }}">Teknologi</a>
            <a href="{{ route('artikel.filterByInfo', 'Workshop') }}">Workshop</a>
            <a href="{{ route('artikel.filterByInfo') }}">Semua</a> <!-- Link untuk menampilkan semua artikel -->
        </div>


  </div>
</section>

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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
