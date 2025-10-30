<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UTS Laravel - Form Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar bg-light shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <a class="navbar-brand fw-semibold me-3" href="#">UTS Laravel</a>
        <h1 class="fw-bold fs-3 mb-0" style="margin-top: 4px;">Form Tambah Produk</h1>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

    <!-- Tombol Sidebar -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

  <!-- Sidebar Offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">UTS Laravel</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk">Produk</a>
        </li>
      </ul>
      <form class="d-flex mt-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

  <!-- Konten Form -->
  <div class="container mt-4">
          <a class="nav-link" href="simpan">Simpan</a>
      @csrf
      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label fw-semibold">Kode Produk</label>
          <input type="text" name="kode_produk" class="form-control" placeholder="Input Kode Produk" required>
        </div>
        <div class="col-md-4">
          <label class="form-label fw-semibold">Nama Produk</label>
          <input type="text" name="nama_produk" class="form-control" placeholder="Input Nama Produk" required>
        </div>
        <div class="col-md-4">
          <label class="form-label fw-semibold">Jenis Produk</label>
          <select name="jenis_produk" class="form-select" required>
            <option value="">Pilih Produk</option>
            @for ($i = 0; $i < count($jenisProduk); $i++)
              <option value="{{ $jenisProduk[$i] }}">{{ $jenisProduk[$i] }}</option>
            @endfor
          </select>
        </div>
      </div>

      <div class="row align-items-end">
        <div class="col-md-4">
          <label class="form-label fw-semibold">Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="Input Harga" required>
        </div>
        <div class="col-md-8 text-end mt-3">
          <button type="submit" class="btn btn-success px-5">Simpan</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
