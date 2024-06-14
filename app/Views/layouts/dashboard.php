<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> - Dashboard</title>
    <meta name="description" content="Admin Dashboard Amanah Sabila Handling">
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
<body id="dashboard">
    <header id="header" class="container-fluid bg-white">
        <?= $this->include('partials/navbar') ?>
    </header>
    <main>
        <?= $this->include('partials/alert') ?>
        <div class="container-fluid py-3">
            <div class="row">
                <div class="d-none d-md-block col-md-2 col-lg-1">
                    <nav id="sidebar" class="d-flex flex-column align-items-center bg-light p-3 rounded-2">
                        <nav class="d-flex flex-column align-items-center justify-content-between container h-100 mt-3">
                            <ul class="list-unstyled">
                                <li class="text-center pb-4">
                                    <a href="<?= base_url('dashboard') ?>" aria-label="Ringkasan">
                                        <i class="fa-solid fa-house fa-xl <?= $title == 'Ringkasan' ? 'text-primary' : 'text-light-emphasis' ?>"></i>
                                        <p class="small <?= $title == 'Ringkasan' ? '' : 'text-light-emphasis' ?> mb-0">Ringkasan</p>
                                    </a>
                                </li>
                                <li class="text-center pb-4">
                                    <a href="<?= base_url('dashboard/jadwal') ?>" aria-label="Jadwal">
                                        <i class="fa-solid fa-calendar fa-xl <?= $title == 'Jadwal' ? 'text-primary' : 'text-light-emphasis' ?>"></i>
                                        <p class="small <?= $title == 'Jadwal' ? '' : 'text-light-emphasis' ?> mb-0">Jadwal</p>
                                    </a>
                                </li>
                                <li class="text-center pb-4">
                                    <a href="<?= base_url('dashboard/reservasi') ?>" aria-label="Reservasi">
                                        <i class="fa-solid fa-note-sticky fa-xl <?= $title == 'Reservasi' ? 'text-primary' : 'text-light-emphasis' ?>"></i>
                                        <p class="small <?= $title == 'Reservasi' ? '' : 'text-light-emphasis' ?> mb-0">Reservasi</p>
                                    </a>
                                </li>
                                <li class="text-center pb-4">
                                    <a href="<?= base_url('dashboard/agen') ?>" aria-label="Agen">
                                        <i class="fa-solid fa-briefcase fa-xl <?= $title == 'Agen' ? 'text-primary' : 'text-light-emphasis' ?>"></i>
                                        <p class="small <?= $title == 'Agen' ? '' : 'text-light-emphasis' ?> mb-0">Agen</p>
                                    </a>
                                </li>
                                <li class="text-center pb-4">
                                    <a href="<?= base_url('dashboard/bandara') ?>" aria-label="Bandara">
                                        <i class="fa-solid fa-plane fa-xl <?= $title == 'Bandara' ? 'text-primary' : 'text-light-emphasis' ?>"></i>
                                        <p class="small <?= $title == 'Bandara' ? '' : 'text-light-emphasis' ?> mb-0">Bandara</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="text-center">
                                    <a href="<?= base_url('dashboard/pengaturan') ?>" aria-label="Pengaturan">
                                        <i class="fa-solid fa-gear fa-xl <?= $title == 'Pengaturan' ? 'text-primary' : 'text-light-emphasis' ?>"></i>
                                        <p class="small <?= $title == 'Pengaturan' ? '' : 'text-light-emphasis' ?> mb-0">Pengaturan</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </nav>
                </div>
                <div class="col-md-10 col-lg-11">
                    <?= $this->renderSection("main") ?>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn btn-link px-0" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-lg text-light-emphasis"></i>
                </button>
            </div>
            <div class="offcanvas-body py-0">
                <nav class="d-flex flex-column justify-content-between h-100">
                    <ul class="list-unstyled border-top">
                        <li class="border-bottom py-3">
                            <a href="<?= base_url('dashboard') ?>" class="d-flex align-items-center justify-content-between gap-2" aria-label="Ringkasan">
                                <p class="mb-0"><i class="fa-solid fa-house text-primary me-2"></i>Ringkasan</p>
                                <i class="fa-solid fa-chevron-right text-light-emphasis"></i>
                            </a>
                        </li>
                        <li class="border-bottom py-3">
                            <a href="<?= base_url('dashboard/jadwal') ?>" class="d-flex align-items-center justify-content-between gap-2" aria-label="Jadwal">
                                <p class="text-light-emphasis mb-0"><i class="fa-solid fa-calendar text-light-emphasis me-2"></i>Jadwal</p>
                                <i class="fa-solid fa-chevron-right text-primary"></i>
                            </a>
                        </li>
                        <li class="border-bottom py-3">
                            <a href="<?= base_url('dashboard/reservasi') ?>" class="d-flex align-items-center justify-content-between gap-2" aria-label="Reservasi">
                                <p class="text-light-emphasis mb-0"><i class="fa-solid fa-note-sticky text-light-emphasis me-2"></i>Reservasi</p>
                                <i class="fa-solid fa-chevron-right text-primary"></i>
                            </a>
                        </li>
                        <li class="border-bottom py-3">
                            <a href="<?= base_url('dashboard/agen') ?>" class="d-flex align-items-center justify-content-between gap-2" aria-label="Agen">
                                <p class="text-light-emphasis mb-0"><i class="fa-solid fa-briefcase text-light-emphasis me-2"></i>Agen</p>
                                <i class="fa-solid fa-chevron-right text-primary"></i>
                            </a>
                        </li>
                        <li class="border-bottom py-3">
                            <a href="<?= base_url('dashboard/bandara') ?>" class="d-flex align-items-center justify-content-between gap-2" aria-label="Bandara">
                                <p class="text-light-emphasis mb-0"><i class="fa-solid fa-plane text-light-emphasis me-2"></i>Bandara</p>
                                <i class="fa-solid fa-chevron-right text-primary"></i>
                            </a>
                        </li>
                        <li class="border-bottom py-3">
                            <a href="<?= base_url('dashboard/pengaturan') ?>" class="d-flex align-items-center justify-content-between gap-2" aria-label="Pengaturan">
                                <p class="text-light-emphasis mb-0"><i class="fa-solid fa-gear text-light-emphasis me-2"></i>Pengaturan</p>
                                <i class="fa-solid fa-chevron-right text-primary"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/lazysizes.min.js') ?>" async=""></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
    <?= $this->renderSection("scripts") ?>
</body>