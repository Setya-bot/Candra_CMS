<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration ERCLAE</title>
  <link rel="shortcut icon" type="image/png" href="<?= site_url('assets/SEODash-1.0.0')?>/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="<?= site_url('assets/SEODash-1.0.0')?>/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
              <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= base_url('assets/SEODash-1.0.0/'); ?>images/logos/foto1.png" alt="IMG-LOGO" height="25px">
                </a>
                <p class="text-center">Buat Akun Baru</p>
                <form class="mb-3" action="<?= base_url('registrasi/simpan') ?>" method="POST">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text"class="form-control"name="name"placeholder="Enter your name"autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text"class="form-control"name="username"placeholder="Enter your username"autofocus>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign Up</button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="<?= base_url('Auth')?> ">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>