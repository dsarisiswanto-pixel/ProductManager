<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Produk - Skincare Manager</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(180deg, #fff5fa 0%, #ffe8f0 100%);
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      color: #444;
    }

  
    .navbar {
      background-color: #F9B5D0 !important;
      box-shadow: 0 2px 10px rgba(249, 181, 208, 0.4);
      padding: 12px 24px;
    }

    .navbar-brand {
      color: white !important;
      font-weight: 400;
      font-size: 1.05rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .navbar-toggler {
      color: white;
      border: none;
      font-size: 1.3rem;
    }

    
    .offcanvas {
      background-color: #fff5f7;
      border-left: 3px solid #ff8da1;
    }

    .offcanvas-title {
      font-weight: 500;
      color: #ff7b95;
      padding-left: 5px;
    }

    .offcanvas a {
      text-decoration: none;
      color: #333;
      display: block;
      margin: 10px 0;
      padding: 8px 18px;
      font-size: 1rem;
      font-weight: 400;
      border-radius: 10px;
      transition: 0.3s;
    }

    .offcanvas a:hover {
      background-color: #ff8da1;
      color: white;
    }

  
    .form-wrapper {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 120px 20px 60px;
    }

    .form-card {
      background: #fff;
      border-radius: 24px;
      box-shadow: 0 8px 20px rgba(249, 181, 208, 0.3);
      padding: 45px 40px;
      width: 100%;
      max-width: 850px;
      transition: all 0.3s ease;
    }

    .form-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(249, 181, 208, 0.4);
    }

    .form-title {
      text-align: center;
      font-weight: 600;
      color: #c2185b;
      margin-bottom: 10px;
    }

    .form-subtitle {
      text-align: center;
      color: #777;
      margin-bottom: 30px;
      font-size: 0.95rem;
    }

    label {
      font-weight: 500;
      color: #555;
      margin-bottom: 6px;
    }

    input,
    select,
    textarea {
      border-radius: 10px !important;
      border: 1.5px solid #f4b9d2 !important;
      padding: 10px;
      transition: all 0.3s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
      border-color: #f9b5d0 !important;
      box-shadow: 0 0 5px rgba(249, 181, 208, 0.5);
      outline: none;
    }


    .btn-pink-outline {
      background-color: white;
      color: #ff8da1 !important;
      border: 2px solid #ff8da1;
      border-radius: 10px;
      padding: 8px 18px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-pink-outline:hover,
    .btn-pink-outline:active {
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
  </style>
</head>

<body>
  <nav class="navbar fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <a class="navbar-brand" href="#">
        <img src="/icon/skincare.png" width="28" height="28" alt="icon" />
        Skincare Manager
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu">☰</button>
    </div>
  </nav>

 
  <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarMenu">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <a href="beranda">Beranda</a>
      <a href="tambah" class="active">Produk</a>
      <a href="tentang">Tentang</a>
    </div>
  </div>


  <div class="form-wrapper">
    <div class="form-card">
      <h2 class="form-title">💖 Tambah Produk Baru</h2>
      <p class="form-subtitle">Masukkan detail produk skincare kamu di bawah ini.</p>
      <form action="/store" method="post">
        @csrf
        <div class="row g-4">
          <div class="col-md-6">
            <label for="nama">Nama Produk</label>
            <input type="text" id="nama" class="form-control" placeholder="Masukkan nama produk" required
              name="nama_produk">
          </div>
          <div class="col-md-6">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
              <option value="">Pilih kategori</option>
              <option value="face wash">Face Wash</option>
              <option value="toner">Toner</option>
              <option value="serum">Serum</option>
              <option value="moisturizer">Moisturizer</option>
              <option value="sunscreen">Sunscreen</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="harga">Harga (Rp)</label>
            <input type="number" id="harga" class="form-control" placeholder="Masukkan harga" required name="harga">
          </div>
          <div class="col-md-6">
            <label for="stok">Stok</label>
            <input type="number" id="stok" class="form-control" name="stok" placeholder="Masukkan jumlah stok" required>
          </div>
          <div class="col-12">
            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" class="form-control" rows="3" name="deskripsi"
              placeholder="Masukkan deskripsi produk" required></textarea>
          </div>
        </div>
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-pink-outline">Simpan Produk</button>
        </div>
      </form>
    </div>
  </div>


  <footer>
    <span>Skincare Manager © 2025</span>
    <small>Dibuat oleh: <b>Della Sari Siswanto 💖</b></small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>