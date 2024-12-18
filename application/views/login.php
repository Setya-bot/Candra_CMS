<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login ERCLAE</title>
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
                <form class="mb-3" action="<?= base_url('auth/login') ?>" method="POST">
                <p class="text-center">Silahkan Login Terlebih Dahulu</p>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text"class="form-control"name="username"placeholder="Enter your username"autofocus>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-3 mb-0 fw-bold">Don't have an account?</p>
                    <a class="text-primary fw-bold ms-2" href="<?= base_url('registrasi') ?>">New account</a>
                  </div>
                  <div id="ngilang">
                    <?= $this->session->flashdata('alert') ?>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= site_url('assets/SEODash-1.0.0')?>/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0')?>/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>