<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/css/style.css">

  <title>Pertemuan 6</title>
</head>

<body class="h-100">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container container-fluid py-2">
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
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link active text-primary"><strong>Contact Me</strong></a>
            </li>
          </ul>
        </div>
        <div class="d-block">
          <ul class="navbar-nav">
            <li class="nav-item ms-0 ms-md-2">
              <a href="signup.php" class="btn btn-sm btn-outline-primary w-100">Sign Up</a>
            </li>
            <li class="nav-item ms-0 ms-md-2 mt-2 mt-md-0">
              <a href="login.php" class="btn btn-sm btn-primary w-100">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container my-3">
    <h3 class="text-primary">Contact Me</h3>
    <p>If you need help, please contact me via the form below</p>
    <form>
      <div class="mb-3">
        <label for="input-email" class="form-label">Email</label>
        <input type="text" class="form-control" id="input-email" placeholder="Enter Email">
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="input-first-name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="input-first-name" placeholder="Enter First Name">
        </div>
        <div class="col-md-6 mb-3">
          <label for="input-last-name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="input-last-name" placeholder="Enter Last Name">
        </div>
      </div>
      <div class="mb-3">
        <label for="input-message" class="form-label">Message</label>
        <textarea name="message" class="form-control" id="input-message" rows="3"></textarea>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="input-checkbox">
        <label for="input-checkbox" class="form-check-label">I agree to the terms and conditions</label>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
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