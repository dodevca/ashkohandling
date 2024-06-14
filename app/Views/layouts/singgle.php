<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= !empty($title) ? $title . ' - ' : ''; ?>Amanah Sabila Handling</title>
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
        <nav id="navbar" class="navbar p-lg-3">
            <div class="container-fluid">
                <a href="<?= base_url() ?>" class="btn btn-link" aria-label="Back">
                    <i class="fa-solid fa-chevron-left text-dark fa-lg"></i>
                </a>
                <a class="navbar-brand w-auto m-0" href="<?= base_url() ?>" aria-label="Logo">
                    <img src="<?= base_url('images/logo.png') ?>" class="logo img-fluid" alt="Logo">
                </a>
                <div style="width: 46.5px"></div>
            </div>
        </nav>
    </header>
    <main>
        <?= $this->include('partials/alert') ?>
        <?= $this->renderSection("main") ?>
    </main>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/lazysizes.min.js') ?>" async=""></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>
    <?= $this->renderSection("scripts") ?>
</body>
</html>