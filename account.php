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
              <a href="dashboard.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact Me</a>
            </li>
          </ul>
        </div>
        <div class="d-block">
          <ul class="navbar-nav">
            <li class="nav-item ms-0 ms-md-2 d-block">
              <a href="account.php" class="btn btn-sm btn-primary w-100"><i class="bi bi-person-fill"></i></a>
            </li>
            <li class="nav-item ms-0 ms-md-2 d-block mt-2 mt-md-0">
              <a href="login.php" class="btn btn-sm btn-danger w-100"><i class="bi bi-box-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container my-5 pb-5">
    <div class="row">
      <h3 class="text-primary mt-3">Hi, Aryo!</h3>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <p>This is your profile data, you can change it</p>
            <form>
              <div class="mb-3">
                <label for="input-email" class="form-label">Email</label>
                <input type="text" class="form-control" id="input-email" value="alamatemail@gmail.com" readonly>
              </div>
              <div class="mb-3">
                <label for="input-username" class="form-label">Username</label>
                <input type="text" class="form-control" id="input-username" value="usernameuser" readonly>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="input-first-name" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="input-first-name" value="Nama">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="input-last-name" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="input-last-name" value="Lengkap">
                </div>
              </div>
              <div class="mb-3">
                <label for="input-current-password" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="input-current-password">
              </div>
              <button type="submit" class="btn btn-primary">Change Profile</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <p>You can change your account password with the form below</p>
        <form>
          <div class="mb-3">
            <label for="input-current-password" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="input-current-password">
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="input-new-password" class="form-label">New Password</label>
              <input type="text" class="form-control" id="input-new-password" placeholder="New Password">
            </div>
            <div class="col-md-6 mb-3">
              <label for="input-confirm-new-password" class="form-label">Confirm New Password</label>
              <input type="text" class="form-control" id="input-confirm-new-password" placeholder="Confirm New Password">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
      </div>
    </div>
  </div>
  <footer class="mt-5 text-center text-lg-start bg-light text-muted fixed-bottom">
    <div class="text-center p-4">
      © 2022 Copyright:
      <a class="text-reset fw-bold text-decoration-none" href="#">Study Club Sistem Informasi</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>