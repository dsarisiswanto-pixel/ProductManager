<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tentang & Lokasi Penjualan - Skincare Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(180deg, #fff5fa 0%, #ffe8f0 100%);
      font-family: 'Poppins', sans-serif;
      color: #444;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      margin: 0;
    }

    h4 {
      color: #c2185b;
    }

  
    .navbar {
      background-color: #F9B5D0 !important;
      box-shadow: 0 2px 10px rgba(249, 181, 208, 0.4);
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
      font-weight: 500;
    }

    .nav-link.active {
      text-decoration: underline;
    }

    #tentang {
      margin-top: 100px;
      margin-bottom: 60px;
      background: #fff;
      border-radius: 25px;
      padding: 70px 40px;
      box-shadow: 0 8px 25px rgba(249, 181, 208, 0.3);
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    #tentang p {
      max-width: 720px;
      margin: 0 auto;
      font-size: 1.1rem;
      color: #555;
      line-height: 1.8;
    }

    .floating-emoji {
      position: absolute;
      font-size: 3rem;
      opacity: 0.15;
      animation: floatIcon 8s ease-in-out infinite;
    }

    .emoji-1 {
      top: 15%;
      left: 12%;
      animation-delay: 0s;
    }

    .emoji-2 {
      bottom: 20%;
      right: 15%;
      animation-delay: 2s;
    }

    .emoji-3 {
      top: 25%;
      right: 25%;
      animation-delay: 4s;
    }

    @keyframes floatIcon {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-12px);
      }

      100% {
        transform: translateY(0);
      }
    }


    .location-card {
      background: #fff;
      border-radius: 25px;
      padding: 25px;
      box-shadow: 0 6px 15px rgba(255, 182, 193, 0.25);
      transition: transform 0.3s, box-shadow 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: space-between; /* tombol selalu di bawah */
      height: 100%;
    }

    .location-card .card-content {
      flex-grow: 1;
    }

    .location-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(255, 182, 193, 0.35);
    }

    .btn-pink {
      background-color: white;
      color: #ff8da1 !important;
      border: 2px solid #ff8da1;
      border-radius: 10px;
      padding: 8px 18px;
      font-weight: 600;
      transition: all 0.3s ease;
      font-family: 'Poppins', sans-serif;
      margin-top: 10px;
      align-self: start;
      text-align: center;
      display: inline-block;
    }

    .btn-pink:hover {
      background-color: #ff8da1;
      color: white !important;
      transform: scale(1.05);
      box-shadow: 0 5px 10px rgba(255, 182, 193, 0.4);
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
      #tentang {
        padding: 50px 25px;
      }

      .floating-emoji {
        font-size: 2.3rem;
      }

      footer {
        flex-direction: column;
        gap: 4px;
        height: auto;
        padding: 15px;
        text-align: center;
      }
    }

    iframe {
      border-radius: 20px;
      width: 100%;
      height: 250px;
      border: 0;
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
        ☰
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto" style="gap:10px;">
          <li class="nav-item"><a class="nav-link" href="beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="dashboard">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link active" href="tentang">Tentang</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <section id="tentang" class="container position-relative">
    <span class="floating-emoji emoji-1">🧴</span>
    <span class="floating-emoji emoji-2">💄</span>
    <span class="floating-emoji emoji-3">🌸</span>

    <h4 class="fw-bold">Tentang Aplikasi</h4>
    <p>
      <strong>Skincare Manager</strong> adalah aplikasi yang dirancang untuk memudahkan kamu mengatur, menambah,
      dan mengelola produk skincare favoritmu 💕✨. Dengan tampilan lembut bernuansa pink dan fitur CRUD yang mudah
      digunakan, kamu dapat menyimpan informasi produk skincare-mu dengan cara yang cantik dan efisien.
    </p>
  </section>

  <div class="container mb-5">
    <h4 class="mb-4 text-center fw-bold">Lokasi Penjualan di SMK PGRI Wlingi</h4>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="location-card">
          <div class="card-content">
            <h5 class="fw-bold">Toko Skincare</h5>
            <p>Berada di area kantin dan lapangan utama SMK PGRI Wlingi, Blitar. Mudah dijangkau siswa dan pengunjung.</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1454341888865!2d112.17683767590783!3d-8.13103899406896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6920a2f1f5cd9%3A0x7b9e05d8f4d98546!2sSMK%20PGRI%20Wlingi!5e0!3m2!1sid!2sid!4v1698385094953!5m2!1sid!2sid"
              allowfullscreen="" loading="lazy"></iframe>
          </div>
          <a href="https://www.smkpgriwlingi.sch.id/" target="_blank" class="btn btn-pink">Info Sekolah</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="location-card">
          <div class="card-content">
            <h5 class="fw-bold">Kontak & Informasi</h5>
            <p>Untuk pembelian atau info lebih lanjut, hubungi kami:</p>
            <p>📱 WhatsApp: <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></p>
            <p>📸 Instagram: <a href="https://instagram.com/skincare_manager" target="_blank">@skincare_manager</a></p>
            <p>🌐 Website: <a href="https://skincare-manager.example.com" target="_blank">skincare-manager.example.com</a></p>
          </div>
          <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-pink">Hubungi Penjual</a>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <span>Skincare Manager © 2025</span>
    <small>Dibuat oleh: <b>Della Sari Siswanto 💖</b></small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
