<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title>Pertemuan 6</title>
</head>

<body class="h-100">
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
        <div class="navbar-nav me-auto mb-3 mb-lg-0"></div>
        <div>
          <ul class="navbar-nav align-items-center w-100">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact Me</a>
            </li>
            <li class="nav-item ms-0 ms-md-2">
              <a href="signup.php" class="btn btn-sm btn-outline-primary" style="width: 100px;">Sign Up</a>
            </li>
            <li class="nav-item ms-0 ms-md-2">
              <a href="login.php" class="btn btn-sm btn-primary" style="width: 100px;">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container my-3">
    <div class="card">
      <div class="card-body">
        <h3 class="text-primary text-center">Login</h3>
        <p class="text-center">Please login if you already have an account on Fruity</p>
        <form>
          <div class="mb-3">
            <label for="input-email" class="form-label">Email</label>
            <input type="text" class="form-control" id="input-email" placeholder="Enter Email">
          </div>
          <div class="mb-3">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" class="form-control" id="input-password" placeholder="Enter Password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="input-checkbox">
            <label for="input-checkbox" class="form-check-label">Remember me</label>
          </div>
          <!-- <button type="submit" class="btn btn-primary w-100">Login</button> -->
          <a href="dashboard.php" class="btn btn-primary w-100">Login</a>
        </form>
        <hr>
        <a href="signup.php" class="text-center w-100 d-block"><strong>Register if you dont have any account</strong></a>
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