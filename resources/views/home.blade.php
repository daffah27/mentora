<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentora - Platform Digital Masa Depanmu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }

    .navbar {
      background-color: white;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: #3171df;
    }

    .btn-rounded {
      border-radius: 50px;
    }

    .hero {
      background: linear-gradient(to right, #3171df, #0b2e6b);
      color: white;
      padding: 120px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
    }

    .feature-icon {
      font-size: 3rem;
      color: #3171df;
      transition: transform 0.3s ease;
    }

    .feature-card:hover .feature-icon {
      transform: scale(1.2);
    }

    .feature-card {
      border: none;
      border-radius: 1rem;
      transition: 0.4s ease;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.07);
    }

    .feature-card:hover {
      transform: translateY(-6px);
    }

    footer {
      background-color: #f1f1f1;
      padding: 30px 0;
      text-align: center;
      font-size: 14px;
      color: #555;
    }

    .umkm-card img {
      transition: transform 0.3s ease;
    }

    .umkm-card:hover img {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="">Mentora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNav">
      <ul class="navbar-nav">
        <li class="nav-item me-2">
          <a href="#fitur" class="nav-link">Fitur</a>
        </li>
        <li class="nav-item me-2">
          <a href="#umkm" class="nav-link">UMKM</a>
        </li>
        <li class="nav-item me-2">
          <a class="btn btn-outline-primary btn-rounded" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary btn-rounded" href="/register">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="hero">
  <div class="container">
    <h1 class="mb-4">Bangun Masa Depan Digitalmu</h1>
    <p class="lead mb-5">Pelajari keterampilan, simulasi bisnis, digitalisasi usaha, dan raih pengalaman magang digital.</p>
    <a href="#fitur" class="btn btn-light btn-lg btn-rounded">Jelajahi Fitur Kami</a>
  </div>
</section>

<!-- FITUR -->
<section id="fitur" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">4 Fitur Unggulan Kami</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card feature-card text-center p-4 h-100">
          <div class="feature-icon mb-3">📚</div>
          <h5 class="fw-bold">Course Belajar</h5>
          <p>Kursus dari para ahli untuk meningkatkan kompetensi digitalmu.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card feature-card text-center p-4 h-100">
          <div class="feature-icon mb-3">💼</div>
          <h5 class="fw-bold">Simulasi Usaha</h5>
          <p>Praktekkan wirausaha dalam simulasi dunia nyata.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card feature-card text-center p-4 h-100">
          <div class="feature-icon mb-3">💻</div>
          <h5 class="fw-bold">Digitalisasi Usaha</h5>
          <p>Transformasi bisnis konvensional jadi digital.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card feature-card text-center p-4 h-100">
          <div class="feature-icon mb-3">🌐</div>
          <h5 class="fw-bold">Magang Digital</h5>
          <p>Kerja nyata bersama UMKM melalui magang daring.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- USAHA YANG TELAH BERGABUNG -->
<section id="umkm" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Usaha yang Telah Bergabung</h2>
    <p class="text-center mb-5">Lebih dari 100 UMKM telah memulai perjalanan digital bersama Mentora.</p>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-3">
        <div class="card umkm-card text-center shadow-sm p-3">
          <img src="{{asset('assets/compiled/jpg/2.jpg')}}" class="mb-3 rounded-circle" alt="Kopi Nusantara">
          <h6 class="fw-bold">Kopi Nusantara</h6>
          <p class="small text-muted">Menu digital & pemesanan online</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card umkm-card text-center shadow-sm p-3">
          <img src="{{asset('assets/compiled/jpg/3.jpg')}}" class=" mb-3 rounded-circle" alt="Batik Lestari">
          <h6 class="fw-bold">Batik Lestari</h6>
          <p class="small text-muted">Toko online & promosi media sosial</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card umkm-card text-center shadow-sm p-3">
          <img src="{{asset('assets/compiled/jpg/4.jpg')}}" class="mb-3 rounded-circle" alt="Roti Bu Erna">
          <h6 class="fw-bold">Roti Bu Erna</h6>
          <p class="small text-muted">Pre-order & katalog digital</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card umkm-card text-center shadow-sm p-3">
          <img src="{{asset('assets/compiled/jpg/5.jpg')}}" class="mb-3 rounded-circle" alt="Dewi Florist">
          <h6 class="fw-bold">Dewi Florist</h6>
          <p class="small text-muted">Website & pembayaran digital</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-5 text-center bg-light">
  <div class="container">
    <h3 class="fw-bold">Siap memulai perjalanan digitalmu?</h3>
    <p class="mb-4">Gabung sekarang dan kembangkan potensi terbaikmu bersama kami.</p>
    <a href="/register" class="btn btn-primary btn-lg btn-rounded px-4">Daftar Sekarang</a>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="container">
    &copy; 2025 Mentora. All rights reserved.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
