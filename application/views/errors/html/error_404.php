<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <link href="https://pustaka.badanpangan.go.id/assets/user/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            
            padding: 100px 0px;
            background: linear-gradient(90deg, #F8FCF7 22.24%, rgba(247, 252, 247, 0.00) 100%);
        }
        .hero-section {
            padding: 100px 0;
            height: 100%;
        }
        .hero-section h1 {
            font-size: 4rem;
        }
        .btn-home {
            padding: 12px 24px;
            font-weight: bold;
            font-size: 1.2rem;
            text-transform: uppercase;
        }
        .error-text {
            font-size: 1.5rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <!-- Hero Section for 404 -->
    <div class="container-xl justify-content-center">
        <a class="navbar-brand d-flex justify-content-center" href="#">
            <img src="https://pustaka.badanpangan.go.id/assets/user/image/logo-nav.png" alt="Logo" height="48">
        </a>
    </div>
    <section class="hero-section text-center h-100">
        <div class="container h-100">
            <h1 class="fw-bold text-warning" style="font-size: 100px !important;">404</h1>
            <p class="error-text">Maaf, halaman yang Anda cari tidak ditemukan.</p>
            <br>
            <a href="https://pustaka.badanpangan.go.id/beranda" class="btn btn-warning px-5 py-3 fw-bold text-white">Kembali ke Beranda</a>
        </div>
    </section>
    <div class="container-xl text-center">
        <p>Perpustakaan Digital by <a href="https://badanpangan.go.id/" target="_blank" class="link-underline-light text-success">BAPANAS</a> - © <span id="year"></span> All Rights Reserved</p>
        <script>
            document.getElementById('year').textContent = new Date().getFullYear();
        </script>
    </div>

    <!-- Scripts -->
    <script src="https://pustaka.badanpangan.go.id/assets/user/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
