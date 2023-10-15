<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="">
  <meta property="og:image" content="<?= base_url('assets/img/') . $this->website['image']; ?>" />

  <meta property="og:type" content="organization" />
  <meta property="og:title" content="<?= $this->website['nama_organisasi']; ?>" />
  <meta property="og:description" content="<?= $this->website['tentang_kami']; ?>">
  <meta property="og:url" content="<?= base_url() ?>" />
  <meta property="og:site_name" content="<?= $this->website['nama_organisasi']; ?>" />

  <title><?= $this->website['nama_organisasi']; ?> <?php echo "- " . $this->title ?></title>

  <link rel="canonical" href="<?php echo base_url() ?>">


  <!-- ICON -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/img/<?php echo $this->website['image'] ?>" />
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="<?php echo base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/adminlte/plugins/sweetalert2/sweetalert2.css">
  <!-- Custom css -->
  <link href="<?php echo base_url() ?>assets/widibaka.css" rel="stylesheet">

  <!-- CSS tampilan utama -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style_baru.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/boot.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dika_style.css" />


  <style type="text/css">
    .custom_navbar a.nav-link {
      color: <?php echo $this->website['navbar_text'] ?>;
    }

    .custom_navbar .navbar-toggler-icon i {
      color: <?php echo $this->website['navbar_text'] ?>;
    }

    .custom_navbar .search-btn {
      border-color: <?php echo $this->website['navbar_text'] ?>;
      color: <?php echo $this->website['navbar_text'] ?>;
      transition: background-color border-color ease 300ms;
    }

    <?php
    $hex = $this->website['navbar_bg'];
    list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
    ?>.custom_navbar {
      background-color: <?php echo "rgba({$r},{$g},{$b},.6)" ?>;
      box-shadow: 0 8px 32px 0 rgb(31 38 135 / 37%);
      backdrop-filter: blur(25.0px);
      -webkit-backdrop-filter: blur(25.0px);
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      margin: 0 10px 0 10px;
    }

    .navbar_tanpa_margin_tanpa_shadow {
      background-color: <?php echo "rgba({$r},{$g},{$b},.4)" ?> !important;
      box-shadow: 0 0 0 0 !important;
      backdrop-filter: blur(4.0px) !important;
      -webkit-backdrop-filter: none !important;
      border-radius: 10px;
      border: 0 !important;
      /* margin: 0!important; */
    }

    .custom_navbar .search-btn:hover {
      border-color: #1D9058;
      color: <?php echo $this->website['navbar_text'] ?>;
    }
  </style>

  <style>
    /* CSS Buatan Dika */
    .mepet-ke-bawah {
      margin-bottom: 0 !important;
    }

    .rapat {
      height: auto !important;
    }

    .garis-bawah {
      width: 80px;
      height: 2px !important;
      box-sizing: border-box !important;
      margin: auto;
      margin-top: -12px;
      margin-bottom: 22px;
      color: #2b3d89 !important;
      opacity: 1;
    }

    .garis-putih {
      width: 80px;
      height: 2px !important;
      box-sizing: border-box !important;
      margin: auto;
      margin-top: -12px;
      margin-bottom: 22px;
      color: #fff !important;
      opacity: 1;
    }

    .section-subheading {
      font-size: 12pt;
      margin-top: 10px;
      font-weight: 400;
      /* font-style: italic; */
      text-align: center;
    }

    .text-muted {
      color: #6c757d;
    }

    ::selection {
      background-color: #cc4f89;
      color: white;
    }

    /* Style Jofan*/
    .modal.fade .modal-dialog {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
    }

    .zoom-in {
      transform: scale(0) !important;
      opacity: 0;
      -webkit-transition: 1.5s all 0s;
      -moz-transition: 1.5s all 0s;
      -ms-transition: 1.5s all 0s;
      -o-transition: 1.5s all 0s;
      transition: 1.5s all 0s;
      display: block !important;
    }

    .zoom-in.show {
      opacity: 1;
      transform: scale(1) !important;
      transform: none;
    }

    .nav-style {
      /* letter-spacing: 0.5px; */
      font-weight: 700;
    }

    .nav-item a {
      padding-right: 33px !important;
    }

    a.nav-style:hover {
      color: #4b64ce;
      transition: 0.3s;
    }

    /* Akhir Style Jofan*/
  </style>

  <!-- Custom styles for this template -->
  <!-- <link href="<?php echo base_url() ?>assets/bootstrap5/carousel.css" rel="stylesheet"> -->
  <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "ec288994-2fe8-440d-94eb-de55308a2eaf";
    (function() {
      d = document;
      s = d.createElement("script");
      s.src = "https://client.crisp.chat/l.js";
      s.async = 1;
      d.getElementsByTagName("head")[0].appendChild(s);
    })();
  </script>
</head>

<body>

  <div class="loader" style="opacity: 1; position: fixed;">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <div class="bar4"></div>
    <div class="bar5"></div>
    <div class="bar6"></div>
  </div>

  <header id="header">
    <div class="container-fluid">
      <div id="logo">
        <img src="<?php echo base_url() ?>assets/img/<?php echo $this->website['image'] ?>" width="50px" />
      </div>

      <nav id="nav-menu-container">
        <ul class="navbar-nav ">
          <li class="nav-item menu-active">
            <a class="nav-link nav-style" aria-current="page" href="<?php echo base_url() ?>">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-style navbar-nonaktif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Organisasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item nav-style" href="<?php echo base_url() ?>p/struktur_organisasi">Struktur Organisasi</a></li>
              <li><a class="dropdown-item nav-style" href="<?php echo base_url() ?>p/visi_misi">Visi & Misi</a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item nav-style" href="<?php echo base_url() ?>p/anggota_nonaktif">Anggota Nonaktif</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-style  navbar-nonaktif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Divisi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach ($this->all_divisi as $key => $divisi) : ?>
                <li><a class="dropdown-item" href="<?php echo base_url() ?>p/divisi/<?php echo $divisi['id_divisi'] ?>"><?php echo $divisi['nama_divisi'] ?></a></li>
              <?php endforeach ?>
              <!-- <li><hr class="dropdown-divider"></li> -->
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-style navbar-nonaktif" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alat
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo base_url() ?>p/verifikasi_sertifikat">Verifikasi Sertifikat</a></li>
            </ul>
          </li>

          <!- Navbar Baru--->
            <?php if (!empty($this->session->userdata('guest'))) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $this->session->userdata('name') ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo base_url() ?>logout">Logout</a></li>
                  <?php if ($daftarAk['daftar'] == 1) : ?>
                    <li>

                      <button class=" btn  btn-link dropdown-item btnTambah" id="btnTambah">Daftar Oprek</butoon>

                    </li>
                  <?php endif; ?>
                </ul>
              </li>
            <?php elseif (empty($this->session->userdata('name'))) : ?>
              <li class="nav-item">
                <a class="nav-link nav-style navbar-nonaktif" href="<?php echo base_url() ?>login">
                  Login
                </a>
              </li>
            <?php else : ?>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $this->session->userdata('name') ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo base_url() ?>logout">Logout</a></li>
                  <li>
                    <a class="dropdown-item" href="<?php echo base_url() ?>login">
                      <span data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Buka kembali dashboard"><?php echo $this->session->userdata('name') ?></span>
                    </a>
                  </li>
                  <?php if ($daftarAk['daftar'] == 1) : ?>
                    <li>
                      <?php
                      $email = $this->session->userdata('email');
                      $email = explode("@", $email); ?>
                      <?php if ($email[1] === 'mhs.udb.ac.id' || $email[1] === 'fikom.udb.ac.id') : ?>
                        <button class=" btn  btn-link dropdown-item btnTambah" id="btnTambah">Daftar</butoon>
                        <?php endif; ?>
                    </li>
                  <?php endif; ?>
                </ul>
              </li>
            <?php endif ?>
            <?php if (!empty($this->session->userdata('name'))) : ?>

              <li class="nav-item">

              </li>

            <?php endif; ?>
            <!- Akhir Navbar Baru --->

        </ul>
        <form action="<?php echo base_url() ?>p/search" class="d-flex">
          <input class="form-control me-2" type="search" name="q" placeholder="Cari event/orang ..." aria-label="Search">
          <button class="btn search-btn" type="submit"><i class="fa fa-search" style="color:white"></i></button>
        </form>
      </nav>
  </header>

  <?php if ($this->title != 'Home Page') : // beri jarak antara navbar dan konten, ketika bukan di Home Page 
  ?>
    <div class="mb-5">
    </div>
  <?php endif ?>