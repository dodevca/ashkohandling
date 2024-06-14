<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> - Amanah Sabila Handling</title>
    <meta name="description" content="<?= isset($description) ? $description : 'Ashko Handling adalah perusahaan yang bergerak dibidang jasa pelayanan wisata, haji dan umroh.' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('favicon-16x16.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.min.css') ?>">
    <?= $this->renderSection("stylesheets") ?>
    <script src="https://kit.fontawesome.com/218d08c2f0.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="header">
        <nav id="navbar" class="navbar navbar-expand-lg p-lg-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url() ?>" aria-label="Logo">
                    <img src="<?= base_url('images/logo.png') ?>" class="logo img-fluid" alt="Logo">
                </a>
                <button class="btn btn-link navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars text-dark fa-lg"></i>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                    <ul class="navbar-nav gap-3 gap-lg-4 mb-3 mb-lg-0">
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link" href="<?= base_url('#tentang') ?>" aria-label="Tentang">Tentang</a>
                        </li>
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link" href="<?= base_url('#layanan') ?>" aria-label="Layanan">Layanan</a>
                        </li>
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link" href="<?= base_url('#paket') ?>" aria-label="Paket">Paket</a>
                        </li>
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link" href="<?= base_url('#cabang') ?>" aria-label="Cabang">Cabang</a>
                        </li>
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link" href="<?= base_url('#mitra') ?>" aria-label="Mitra">Mitra</a>
                        </li>
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link <?= $title == 'Galeri Foto' ? 'active' : '' ?>" href="<?= base_url('galeri') ?>" aria-label="Galeri">Galeri</a>
                        </li>
                        <li class="nav-item border-start ps-3">
                            <a class="nav-link <?= $title == 'Kontak' ? 'active' : '' ?>" href="<?= base_url('kontak') ?>" aria-label="Kontak">Kontak</a>
                        </li>
                    </ul>
                    <a href="<?= base_url('reservasi') ?>" class="btn btn-primary d-lg-none w-100 rounded-pill" aria-label="Reservasi">
                        Reservasi
                    </a>
                </div>
                <a href="<?= base_url('reservasi') ?>" class="btn btn-primary d-none d-lg-block rounded-pill" aria-label="Reservasi">
                    Reservasi
                </a>
            </div>
        </nav>
    </header>
    <main data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-smooth-scroll="true" tabindex="0">
        <?= $this->include('partials/alert') ?>
        <?= $this->renderSection("main") ?>
    </main>
    <footer class="bg-light bg-opacity-25 px-lg-3 pt-4">
        <?= $this->include('partials/footer') ?>
    </footer>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/lazysizes.min.js') ?>" async=""></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
    <?= $this->renderSection("scripts") ?>
</body>
</hmtl>