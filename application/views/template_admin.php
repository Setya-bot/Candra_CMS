<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png"
    href="<?= site_url('assets/SEODash-1.0.0') ?>/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="<?= site_url('assets/SEODash-1.0.0') ?>/css/styles.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
  <style>
      /* Flexbox untuk memastikan footer ke bawah */
      body, html {
        height: 100%;
        margin: 0;
      }

      .page-wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }

      .body-wrapper {
        flex: 1;
      }

      .content-footer {
        margin-top: auto;
      }
    </style>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="#" class="logo pt-2 m-2">
						<img src="<?= base_url('assets/front/'); ?>images/icons/foto1.png" alt="IMG-LOGO" height="25px">
					</a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Home</span>
            </li>
            <?php $menu = $this->uri->segment(2); ?>
            <li class="sidebar-item <?php if ($menu == 'home') {
              echo "active";
            } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/home') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-eye"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Setting</span>
            </li>
            <li class="sidebar-item <?php if ($menu == 'konten') {
              echo "active";
            } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-background"></i>
                </span>
                <span class="hide-menu">Konten</span>
              </a>
            </li>
            <li class="sidebar-item <?php if ($menu == 'home') {
              echo "active";
            } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-category"></i>
                </span>
                <span class="hide-menu">Kategori Konten</span>
              </a>
            </li>
            <li class="sidebar-item <?php if ($menu == 'caraousel') {
              echo "active";
            } ?>">
              <a class="sidebar-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-carousel-horizontal"></i>
                </span>
                <span class="hide-menu">Caraousel</span>
              </a>
            </li>
            <?php if ($this->session->userdata('level') == 'Admin') { ?>
              <li class="sidebar-item <?php if ($menu == 'user') {
                echo "active";
              } ?>">
                <a class="sidebar-link" href="<?= site_url('admin/user') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-square-rounded"></i>
                  </span>
                  <span class="hide-menu">User</span>
                </a>
              </li>
              <li class="sidebar-item <?php if ($menu == 'konfigurasi') {
                echo "active";
              } ?>">
                <a class="sidebar-link" href="<?= site_url('admin/konfigurasi') ?>" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-bottombar-inactive"></i>
                  </span>
                  <span class="hide-menu">Konfigurasi</span>
                </a>
              </li>
            <?php } ?>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?= site_url('assets/SEODash-1.0.0') ?>/images/profile/1.png" alt="" width="35" height="35"
                    class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3"><?= $this->session->userdata('username') ?></p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3"><?= $this->session->userdata('level') ?></p>
                    </a>
                    <a href="<?= base_url('auth') ?>"
                      class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <?= $contents; ?>
      </div>
    </div>
    <div class="py-6 px-6 text-center">
      <footer class="content-footer footer bg-footer-theme text-center py-3">
        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column" style="margin-left: 18%;">
          <div class="mb-2 mb-md-0">
            ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            . I Love 'W' without double
            <a href="#" target="_blank" class="footer-link fw-bolder">#Stres People</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  </div>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/js/sidebarmenu.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/js/app.min.js"></script>
  <script src="<?= site_url('assets/SEODash-1.0.0') ?>/js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>


   <!-- DataTables JS -->
   <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <!-- Inisialisasi DataTables -->
    <script>
        $('#myTable').DataTable({
        paging: true,          // Aktifkan paging
        searching: true,       // Aktifkan pencarian
        ordering: true,        // Aktifkan pengurutan
        info: true,            // Tampilkan informasi tabel
        lengthMenu: [5, 10, 25, 50], // Jumlah baris per halaman
        language: {
        search: "Cari:",
        lengthMenu: "Tampilkan _MENU_",
        info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
    }
    });
    </script>
</body>

</html>