<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Tidak Ditemukan - Amanah Sabila Handling</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('favicon-16x16.png') ?>">
    <!-- <link rel="manifest" href="/site.webmanifest"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.min.css') ?>">
    <script src="https://kit.fontawesome.com/218d08c2f0.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $url        = explode('/', (trim(strtok($_SERVER['REQUEST_URI'], '?'))));
    $baseUrl    = $url[1] == 'dashboard' ? 'dashboard' : '';
    ?>
    <header id="header">
        <nav id="navbar" class="navbar p-lg-3">
            <div class="container-fluid">
                <a href="<?= !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url($baseUrl); ?>" class="btn btn-link">
                    <i class="fa-solid fa-chevron-left text-dark fa-lg"></i>
                </a>
                <a class="navbar-brand w-auto m-0" href="<?= base_url() ?>">
                    <img src="<?= base_url('images/logo.png') ?>" class="logo img-fluid">
                </a>
                <div style="width: 46.5px"></div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container-fluid">
            <div class="card border-0 mx-auto" style="max-width: 576px;">
                <div class="card-body text-dark text-center">
                    <i class="fa-solid fa-circle-exclamation fa-5x text-danger text-opacity-50 mb-3"></i>
                    <h1 class="h5 fw-bold">Halaman Tidak Ditemukan</h1>
                    <h2 class="h6">Halaman tidak ditemukan atau tidak ada. Pastikan halaman tujuan anda sudah benar.</h2>
                    <a href="<?= base_url($baseUrl) ?>" class="btn btn-outline-primary rounded-pill">
                        <i class="fa-solid fa-chevron-left me-2"></i><?= $url[1] == 'dashboard' ? 'Dashboard' : 'Beranda' ?>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
</body>
</hmtl>