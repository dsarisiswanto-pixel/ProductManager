<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Skincare Manager</title>

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
      box-shadow: 0 2px 10px rgba(249, 181, 208, 0.4);
      padding: 12px 24px;
    }

    .navbar-brand {
      color: white !important;
      font-size: 1.05rem;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 400;
    }

    .navbar-toggler {
      color: white;
      border: none;
      font-size: 1.3rem;
    }

  
    .dashboard-header {
      text-align: center;
      margin: 110px 0 40px;
    }

    .dashboard-header h1 {
      font-weight: 700;
      color: #ff8da1;
    }

    .dashboard-header p {
      color: #6c6c6c;
    }


    .card-info {
      border: none;
      border-radius: 20px;
      box-shadow: 0 6px 15px rgba(255, 182, 193, 0.25);
      transition: 0.3s ease;
      background-color: #fff;
    }

    .card-info:hover {
      transform: scale(1.04);
      box-shadow: 0 8px 20px rgba(255, 182, 193, 0.35);
    }

    .card-info h5 {
      color: #ff8da1;
      font-weight: 600;
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

   
    .card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 6px 15px rgba(255, 182, 193, 0.25);
    }

    .card-header {
      background-color: #ffc4d6 !important;
      color: white;
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 25px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    .table-pink thead {
      background-color: #ffe3e9;
      color: #ff8da1;
      font-weight: 600;
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
      <a href="dashboard" class="active">Dashboard</a>
      <a href="tentang">Tentang</a>
    </div>
  </div>


  <div class="container my-4 flex-grow-1">
    <div class="dashboard-header">
      <h1>✨ Dashboard Admin</h1>
      <p>Kelola produk skincare dengan mudah dan tampil menawan!</p>
    </div>

    <div class="row justify-content-center mb-4">
      <div class="col-md-3 m-2">
        <div class="card card-info p-4 text-center">
          <h5>Total Produk</h5>
          <h4 class="text-success fw-bold">{{ $totalproduk }}</h4>
        </div>
      </div>
      <div class="col-md-3 m-2">
        <div class="card card-info p-4 text-center">
          <h5>Total Stok</h5>
          <h4 class="text-warning fw-bold">{{ $totalstok }}</h4>
        </div>
      </div>
      <div class="col-md-3 m-2">
        <div class="card card-info p-4 text-center">
          <h5>Total Kategori</h5>
          <h4 class="text-info fw-bold">{{ $totalkategori }}</h4>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <span>Data Produk</span>
        <a href="tambah" class="btn btn-pink">Tambah</a>
      </div>
      <div class="card-body">
        <table id="produkTable" class="table table-striped table-bordered table-pink align-middle">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            @foreach ($barang as $key => $item)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $item->nama_produk }}</td>
              <td>{{ $item->kategori }}</td>
              <td>{{ $item->harga }}</td>
              <td>{{ $item->stok }}</td>
              <td>{{ $item->deskripsi }}</td>
              <td>
                <a href="/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm"
                  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <footer>
    <span>Skincare Manager © 2025</span>
    <small>Dibuat oleh: <b>Della Sari Siswanto 💖</b></small>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#produkTable').DataTable({
        order: [[1, 'asc']],
        columnDefs: [
          { orderable: false, targets: -1 }
        ],
        language: {
          decimal: "",
          emptyTable: "Tidak ada data yang tersedia",
          info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
          infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
          infoFiltered: "(disaring dari total _MAX_ data)",
          lengthMenu: "Tampilkan _MENU_ data",
          search: "Cari:",
          zeroRecords: "Tidak ditemukan data yang sesuai",
          paginate: {
            first: "Pertama",
            last: "Terakhir",
            next: "Berikutnya",
            previous: "Sebelumnya"
          }
        }
      });
    });

 
    @if (session('success'))
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session("success") }}',
        confirmButtonColor: '#ff8da1'
      });
    @endif
  </script>

</body>
</html>
