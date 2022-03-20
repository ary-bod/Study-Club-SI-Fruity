<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title>Pertemuan 6</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container container-fluid">
      <a href="index.php" class="navbar-brand">
        <i class="bi bi-apple text-primary"></i>
        <strong>Fruity</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggle">
        <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
        <div class="d-flex">
          <ul class="navbar-nav align-items-center w-100">
            <li class="nav-item">
              <a href="index.php" class="nav-link active text-primary"><strong>Home</strong></a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact Me</a>
            </li>
            <li class="nav-item ms-0 ms-md-2">
              <a href="signup.php" class="btn btn-sm btn-outline-primary" style="width: 100px;">Sign Up</a>
            </li>
            <li class="nav-item ms-0 ms-md-2 mt-2 mt-md-0">
              <a href="login.php" class="btn btn-sm btn-primary" style="width: 100px;">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-6 col-lg-4 mt-3">
        <div class="card">
          <img src="./jeruk.jpg" alt="Jeruk" class="card-img-top" style="height: 250px;">
          <div class="card-body">
            <h5 class="card-title">Jeruk</h5>
            <h6 class="text-muted">Nama Lengkap | Posted on 28 Februari 2022</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolorem eum amet laboriosam odio optio?</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-3">
        <div class="card">
          <img src="./pisang.png" alt="Pisang" class="card-img-top" style="height: 250px;">
          <div class="card-body">
            <h5 class="card-title">Pisang</h5>
            <h6 class="text-muted">Nama Lengkap | Posted on 28 Februari 2022</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolorem eum amet laboriosam odio optio?</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-3">
        <div class="card">
          <img src="./semangka.jpeg" alt="Semangka" class="card-img-top" style="height: 250px;">
          <div class="card-body">
            <h5 class="card-title">Semangka</h5>
            <h6 class="text-muted">Nama Lengkap | Posted on 28 Februari 2022</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolorem eum amet laboriosam odio optio?</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="mt-5 pt-auto text-center text-lg-start bg-light text-muted fixed-bottom">
    <div class="text-center p-4">
      © 2022 Copyright:
      <a class="text-reset fw-bold text-decoration-none" href="#">Study Club Sistem Informasi</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>