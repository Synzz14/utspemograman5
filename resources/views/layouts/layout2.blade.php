<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Wisata Dunia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    /* Navbar dengan background gambar */
    .navbar {
      background-image: url('image/bg.jpg'); /* ganti dengan nama file kamu */
      background-size: cover;
      background-position: center;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: white;
      font-weight: 500;
    }
    .header-text {
      text-align: center;
      margin-top: 50px;
      color: #333;
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand fw-bold text-white" href="#">Halaman Wisata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <div class="container header-text">
    <h4>Halaman ini dibuat oleh 2301010111 -  PUTRI DEWI AGUSTINA </h4>
  </div>

  <!-- Gallery -->
  <div class="container mt-4 mb-5">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/acropolis.jpg" class="card-img" alt="Acropolis">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Acropolis, Yunani</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/shibuya.jpg" class="card-img" alt="Shibuya">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Shibuya, Jepang</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/cappadocia.jpg" class="card-img" alt="Cappadocia">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Cappadocia, Turki</h6>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-dark text-white">
          <img src="image/giza.jpg" class="card-img" alt="Giza">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Giza, Mesir</h6>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-dark text-white">
          <img src="image/gwk.jpg" class="card-img" alt="GWK">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Garuda Wisnu Kencana, Bali</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/huayana.jpg" class="card-img" alt="Huayana">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Huayana, Peru</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/jumeirah.jpg" class="card-img" alt="Jumeirah">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Jumeirah, Abu Dhabi</h6>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card bg-dark text-white">
          <img src="image/newyork.jpg" class="card-img" alt="New York">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">New York, US</h6>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card bg-dark text-white">
          <img src="image/niagara.jpg" class="card-img" alt="Niagara">
          <div class="card-img-overlay d-flex align-items-end">
            <h6 class="card-title">Niagara, Kanada</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
