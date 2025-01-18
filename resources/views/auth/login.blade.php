<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Administrator - BEM KM UNBIN</title>
  <meta content="Login BEM UNBIN" name="description">
  <meta content="Login, BEM UNBIN, Universitas Binaniaga Indonesia" name="keywords">

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
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #f7f9fc;
    }

    .login-card {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-card h3 {
      margin-bottom: 20px;
      font-size: 24px;
      font-weight: 700;
      color: #333;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      color: #333;
    }

    .form-group input:focus {
      outline: none;
      border-color: #007bff;
    }

    .btn-login {
      width: 100%;
      padding: 10px;
      background: #007bff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-login:hover {
      background: #0056b3;
    }

    .login-footer {
      margin-top: 20px;
      text-align: center;
    }

    .login-footer a {
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .login-footer a:hover {
      color: #0056b3;
    }
  </style>
</head>

<body>

  <div class="login-container">
    <div class="login-card" data-aos="fade-up">
      <h3>Login Administrator BEM KM UNBIN</h3>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required autofocus>
          @error('email')
          <div class="alert alert-danger mt-2">Email atau password ada yang salah</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
          @error('password')
          <div class="alert alert-danger mt-2">email atau password ada yang salah</div>
          @enderror
        </div>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
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
