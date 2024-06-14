<?= $this->extend("layouts/singgle") ?>

<?= $this->section("main") ?>
<section class="container-fluid">
    <div class="card border-0 mx-auto" style="max-width: 576px;">
        <div class="card-body text-dark text-center">
            <i class="fa-solid fa-circle-check fa-5x text-success text-opacity-50 mb-3"></i>
            <h1 class="h5 mb-1 fw-bold">Reservasi Berhasil</h1>
            <h2 class="h6 text-light-emphasis">#<?= $code ?></h2>
            <p>Reservasi layanan anda telah kami terima. Untuk informasi lebih lanjut silahkan <a href="<?= base_url('kontak') ?>" class="text-decoration-underline" aria-label="Kontak">hubungi kami</a>.</p>
            <div class="alert alert-warning my-3" role="alert">
                <p class="text-center mb-0">Rincian dan bukti reservasi anda telah dikirimkan ke <strong><?= $agentInfo->email ?></strong></p>
            </div>
            <div class="mb-3"></div>
            <a href="<?= base_url() ?>" class="btn btn-outline-primary rounded-pill" aria-label="Beranda">
                <i class="fa-solid fa-chevron-left me-2"></i>Beranda
            </a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>