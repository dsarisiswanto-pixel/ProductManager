<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda - Skincare Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    body {
      background: linear-gradient(180deg, #fff5fa 0%, #ffe8f0 100%);
      font-family: 'Poppins', sans-serif;
      color: #444;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
    }

  
    .navbar {
      background-color: #F9B5D0 !important;
      box-shadow: 0 2px 10px rgba(255, 182, 193, 0.4);
      padding: 12px 24px;
    }

    .navbar-brand {
      color: white !important;
      font-size: 1.05rem;
      font-weight: 400;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .nav-link {
      color: white !important;
      font-weight: 400;
      padding: 8px 14px;
    }

    .nav-link.active {
      text-decoration: underline;
    }

  
    .btn-pink {
      background-color: white;
      color: #ff8da1 !important;
      border: 2px solid #ff8da1;
      border-radius: 10px;
      padding: 10px 25px;
      font-weight: 600;
      transition: all 0.3s ease;
      font-family: 'Poppins', sans-serif;
    }

    .btn-pink:hover {
      background-color: #ff8da1;
      color: white !important;
      transform: scale(1.05);
      box-shadow: 0 5px 10px rgba(255, 182, 193, 0.4);
    }


    .hero-section {
      margin-top: 100px;
      background: linear-gradient(135deg, #ffe4ec 0%, #fff8fb 100%);
      border-radius: 30px;
      padding: 60px 40px;
      box-shadow: 0 4px 20px rgba(249, 181, 208, 0.3);
    }

    .hero-video {
      border-radius: 20px;
      box-shadow: 0 8px 18px rgba(249, 181, 208, 0.4);
    }

  
    .cta-section {
      background-color: #fff0f6;
      box-shadow: 0 4px 15px rgba(249, 181, 208, 0.3);
      transition: 0.3s;
      border-radius: 20px;
      margin: 30px 20px 60px;
      padding: 30px 20px;
    }

    .cta-section:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 25px rgba(249, 181, 208, 0.4);
    }

 
    footer {
      background-color: #F9B5D0 !important;
      color: white;
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      font-size: 0.9rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      height: 65px;
      box-shadow: 0 -2px 10px rgba(255, 182, 193, 0.3);
      margin-top: auto;
    }

    footer small {
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .hero-section {
        text-align: center;
      }

      footer {
        flex-direction: column;
        gap: 4px;
        height: auto;
        padding: 15px;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/icon/skincare.png" width="28" height="28" alt="icon" />
        Skincare Manager
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex align-items-center" style="gap: 10px;">
          <li class="nav-item">
            <a class="nav-link active" href="beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang">Tentang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container hero-section">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <h1 class="fw-bold mb-3">Kelola Produk Skincare-mu dengan Mudah 💖</h1>
        <p class="text-muted mb-4">
          Semua produk skincare favoritmu tersimpan rapi di satu tempat. Atur, pantau, dan temukan produk terbaik
          untuk kulitmu setiap hari dengan cara yang praktis dan menyenangkan.
        </p>
        <a href="dashboard" class="btn btn-pink px-4">Mulai Sekarang</a>
      </div>
      <div class="col-md-6 text-center">
        <video autoplay muted loop playsinline width="100%" class="hero-video">
          <source src="/video/beranda.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>


  <div class="text-center cta-section">
    <h4 class="fw-bold">💎 Jadikan perawatan kulitmu lebih mudah & menyenangkan!</h4>
    <p class="text-muted mb-3">
      Coba Skincare Manager hari ini dan rasakan pengalaman mengatur produk skincare dengan cara yang elegan dan rapi.
    </p>
    <a href="tambah" class="btn btn-pink px-4">Tambah Produk</a>
  </div>

  <footer>
    <span>Skincare Manager © 2025</span>
    <small>Dibuat oleh: <b>Della Sari Siswanto 💖</b></small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
