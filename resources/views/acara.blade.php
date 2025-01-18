<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Acara - BEM KM UNBIN</title>
  <meta content="Detail Acara BEM UNBIN" name="description">
  <meta content="Detail Acara, BEM UNBIN, Universitas Binaniaga Indonesia" name="keywords">

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
    /* Custom styles for the page */
    .event-details {
      padding: 60px 0;
      background: #f7f9fc;
    }

    .event-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .event-title h2 {
      font-size: 36px;
      font-weight: 700;
      color: #333;
    }

    .event-info {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .event-info img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .event-info h4 {
      font-size: 20px;
      margin-bottom: 10px;
      font-weight: 600;
      color: #333;
    }

    .event-info p {
      font-size: 16px;
      margin-bottom: 10px;
      color: #555;
    }

    .event-info .event-location,
    .event-info .event-date {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .event-info .event-location i,
    .event-info .event-date i {
      margin-right: 10px;
      font-size: 20px;
      color: #444;
    }

    .event-registration {
      text-align: center;
      margin-top: 30px;
    }

    .event-registration a {
      display: inline-block;
      padding: 10px 30px;
      font-size: 16px;
      color: #fff;
      background: #0056b3;
      border-radius: 5px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .event-registration a:hover {
      background: #003c82;
    }

    /* Custom styles for the modal */
    .modal-content {
      border-radius: 10px;
    }

    .modal-header {
      border-bottom: 1px solid #dee2e6;
    }

    .modal-footer {
      border-top: 1px solid #dee2e6;
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
          <li><a class="active " href="acara">Acara</a></li>
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



  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Daftar Acara</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Daftar Acara</li>
        </ol>
      </div>
    </div>
  </section>

<!-- ======= Detail Acara Section ======= -->
@if($acara->isEmpty())
  <section class="event-details">
    <div class="container">
      <div class="no-event">
        <h2>Tidak Ada Acara</h2>
        <p>Saat ini tidak ada acara yang tersedia. Silakan kembali lagi nanti.</p>
      </div>
    </div>
  </section><!-- End Detail Acara Section -->
@else
  @foreach ($acara as $Get)
  <section class="event-details">
    <div class="container">
      <div class="event-title">
        <h2>{{ $Get->judul }}</h2>
      </div>
      <div class="event-info">
        <img src="{{ asset('img/acara/' . $Get->foto) }}" alt="{{ $Get->judul }}">
        <div class="event-date">
          <i class="bi bi-calendar-event"></i>
          <p>{{ date('d F Y', strtotime($Get->tanggal)) }}</p>
        </div>
        <div class="event-location">
          <i class="bi bi-geo-alt"></i>
          <p>{{ $Get->tempat }}</p>
        </div>
        <h4>{{ $Get->katakata }}</h4>
        <div class="event-registration">
          <a href="#" data-bs-toggle="modal" data-bs-target="#registrationModal{{ $loop->index }}">Registrasi Acara</a>
        </div>
      </div>
    </div>
  </section><!-- End Detail Acara Section -->

  <!-- ======= Modal Pendaftaran ======= -->
  <div class="modal fade" id="registrationModal{{ $loop->index }}" tabindex="-1" aria-labelledby="registrationModalLabel{{ $loop->index }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registrationModalLabel{{ $loop->index }}">Form Pendaftaran untuk {{ $Get->judul }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="registrationForm" method="POST" action="{{ route('acara.register', $Get->judul) }}">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">No. Telepon</label>
              <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
              <label for="comments" class="form-label">Komentar (Opsional)</label>
              <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="submitRegistration">Kirim</button>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div><!-- End Modal Pendaftaran -->
  @endforeach
@endif

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
