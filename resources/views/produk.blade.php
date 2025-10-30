<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UTS Laravel - Halaman Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar bg-light shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <a class="navbar-brand fw-semibold me-3" href="#">UTS Laravel</a>
      </div>

      <!-- Tombol Sidebar -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">UTS Laravel</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="produk">Produk</a>
        </li>
      </ul>
      <form class="d-flex mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

  <!-- Konten -->
  <div class="container mt-5 pt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="fw-bold">Halaman Produk</h2>
      <a href="tambah_produk.html" class="btn btn-primary">Tambah Produk</a>
    </div>

    <!-- Tabel Produk -->
    <table class="table table-bordered text-center">
      <thead class="table-primary">
        <tr>
          <th>Kode Produk</th>
          <th>Nama Produk</th>
          <th>Jenis Produk</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <script>
          // Data produk menggunakan array of object
          const produk = [
            { kode: "BRG001", nama: "Pena", jenis: "Alat tulis", harga: 20000 },
            { kode: "BRG002", nama: "Buku", jenis: "Alat tulis", harga: 15000 }
          ];

          // Tampilkan data dengan perulangan
          for (let i = 0; i < produk.length; i++) {
            document.write(`
              <tr>
                <td>${produk[i].kode}</td>
                <td>${produk[i].nama}</td>
                <td>${produk[i].jenis}</td>
                <td>${produk[i].harga}</td>
              </tr>
            `);
          }
        </script>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
