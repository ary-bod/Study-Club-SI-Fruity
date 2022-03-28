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
              <a href="dashboard.php" class="nav-link active text-primary"><strong>Dashboard</strong></a>
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
  <div class="container my-3">
    <h2>Dashboard</h2>
    <div class="row">
      <div class="col-md-4 mt-3">
        <div class="card border-dark">
          <div class="card-header">
            <h5 class="mb-0">Articles (Posts)</h5>
          </div>
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3 class="card-text d-inline-block">4
                  <h6 class="d-inline"> posts</h6>
                </h3>
              </div>
              <div class="col-auto">
                <i class="bi bi-card-heading"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card border-dark">
          <div class="card-header">
            <h5 class="mb-0">Users</h5>
          </div>
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3 class="card-text d-inline-block">3
                  <h6 class="d-inline"> users</h6>
                </h3>
              </div>
              <div class="col-auto">
                <i class="bi bi-person"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card border-dark">
          <div class="card-header">
            <h5 class="mb-0">Contact Response</h5>
          </div>
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3 class="card-text d-inline-block">17
                  <h6 class="d-inline"> responses</h6>
                </h3>
              </div>
              <div class="col-auto">
                <i class="bi bi-chat"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-3">
      <div class="card border-dark">
        <div class="card-body">
          <ul class="nav nav-tabs nav-justified nav-fill border-dark" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active text-dark" id="articles-tab" data-bs-toggle="tab" data-bs-target="#articles" type="button" role="tab">
                Articles (Posts)
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-dark" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button" role="tab">
                Users
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-dark" id="contact-response-tab" data-bs-toggle="tab" data-bs-target="#contact-response" type="button" role="tab">
                Contact Response
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="articles" role="tabpanel" aria-labelledby="articles-tab">
              <button class="btn btn-sm btn-outline-dark mt-3 mb-3 float-end">Add New Article <i class="ms-1 bi bi-plus-circle"></i></button>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted On</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ipsam.</td>
                    <td>01 January 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sunt aspernatur rerum!</td>
                    <td>02 February 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                    <td>1 March 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted On</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ipsam.</td>
                    <td>01 January 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sunt aspernatur rerum!</td>
                    <td>02 February 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                    <td>1 March 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="contact-response" role="tabpanel" aria-labelledby="contact-response-tab">
              <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted On</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ipsam.</td>
                    <td>01 January 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sunt aspernatur rerum!</td>
                    <td>02 February 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</td>
                    <td>1 March 2022</td>
                    <td>
                      <a href="account.php" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                      <a href="account.php" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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