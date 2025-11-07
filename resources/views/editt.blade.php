<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah/Edit Produk - Skincare Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(180deg, #fff8f8 0%, #ffe3e3 100%);
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

  
    .navbar {
      background-color: #F9B5D0 !important; 
      box-shadow: 0 2px 10px rgba(255, 182, 193, 0.4);
      padding: 12px 24px;
    }

    .navbar-brand {
      color: white !important;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
    }

    .navbar-toggler {
      color: white;
      border: none;
      font-size: 1.3rem;
    }

    .form-card {
      background: white;
      border-radius: 25px;
      box-shadow: 0 6px 15px rgba(255, 182, 193, 0.25);
      padding: 40px;
      max-width: 800px;
      margin: 120px auto 60px;
    }

    .form-card h2 {
      color: #ff8da1;
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-label {
      font-weight: 500;
      color: #4a4a4a;
    }

    .form-control,
    .form-select {
      border-radius: 10px;
      border: 2px solid #ff8da1;
      padding: 10px 15px;
      transition: 0.3s;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #ff6f91;
      box-shadow: 0 0 5px rgba(255, 182, 193, 0.6);
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
    }

    .btn-pink:hover {
      background-color: #ff8da1;
      color: white !important;
      transform: scale(1.05);
      box-shadow: 0 5px 10px rgba(255, 182, 193, 0.4);
    }


    .offcanvas {
      background-color: #fff5f7;
      border-left: 3px solid #ff8da1;
    }

    .offcanvas-title {
      font-weight: 500;
      color: #ff7b95;
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


    footer {
      background-color: #ffc4d6 !important;
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
      <a href="/beranda">Beranda</a>
      <a href="/dashboard">Dashboard</a>
      <a href="/tentang">Tentang</a>
    </div>
  </div>

  
  <div class="form-card">
 

 
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert"
          style="border-radius: 10px; margin-bottom: 20px;">
        🌸 {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <form action="/update/{{$barang->id}}" method="POST">
      @csrf
      <div class="row g-3"> 
        <div class="col-md-6">
          <label class="form-label">Nama Produk</label>
          <input type="text" class="form-control" name="nama_produk" placeholder="Masukkan nama produk" value="{{ old('nama_produk', $barang->nama_produk ?? '') }}" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Kategori</label>
          <select class="form-select" name="kategori" required>
            <option value="">Pilih kategori</option>
            /*untuk memanggil kolom kategori dengan nilai yang akan di edit */
            <option value="Facewash" {{ (old('kategori', $barang->kategori ?? '') == 'face wash') ? 'selected' : '' }}>Facewash</option>
            <option value="Toner" {{ (old('kategori', $barang->kategori ?? '') == 'toner') ? 'selected' : '' }}>Toner</option>
            <option value="Serum" {{ (old('kategori', $barang->kategori ?? '') == 'serum') ? 'selected' : '' }}>Serum</option>
            <option value="Moisturizer" {{ (old('kategori', $barang->kategori ?? '') == 'moisturizer') ? 'selected' : '' }}>Moisturizer</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Harga (Rp)</label>
          <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="{{ old('harga', $barang->harga ?? '') }}" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Stok</label>
          <input type="number" class="form-control" name="stok" placeholder="Masukkan jumlah stok" value="{{ old('stok', $barang->stok ?? '') }}" required>
        </div>
        <div class="col-12">
          <label class="form-label">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" rows="3" placeholder="Masukkan deskripsi produk">{{ old('deskripsi', $barang->deskripsi ?? '') }}</textarea>
        </div>
      </div>
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-pink">Simpan Produk</button>
      </div>          
    </form>
  </div>


  <footer> c      
    <span>Skincare Manager © 2025</span>
    <small>Dibuat oleh: <b>Della Sari Siswanto 💖</b></small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  
  <script>
   
    setTimeout(() => {
      const alert = document.querySelector('.alert');
      if (alert) {
        alert.classList.remove('show');
        alert.classList.add('fade');
      }
    }, 3000);
  </script>
</body>
</html>
