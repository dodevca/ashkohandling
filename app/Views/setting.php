<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<div class="row">
    <div class="col-md-6">
        <section class="container-fluid px-0">
            <h2 class="section-title">Pengaturan</h2>
            <ul class="list-unstyled">
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/pengaturan/cabang') ?>" class="card border-0 shadow" aria-label="Cabang">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h3 class="h6 fw-bold text-dark mb-0"><i class="fa-solid fa-plane text-secondary me-3" style="width: 1rem;"></i>Cabang</h3>
                            <i class="fa-solid fa-chevron-right text-primary"></i>
                        </div>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/pengaturan/galeri') ?>" class="card border-0 shadow" aria-label="Galeri">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h3 class="h6 fw-bold text-dark mb-0"><i class="fa-solid fa-images text-secondary me-3" style="width: 1rem;"></i>Galeri</h3>
                            <i class="fa-solid fa-chevron-right text-primary"></i>
                        </div>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/pengaturan/mitra') ?>" class="card border-0 shadow" aria-label="Mitra">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h3 class="h6 fw-bold text-dark mb-0"><i class="fa-solid fa-handshake-simple text-secondary me-3" style="width: 1rem;"></i>Mitra</h3>
                            <i class="fa-solid fa-chevron-right text-primary"></i>
                        </div>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/pengaturan/akun') ?>" class="card border-0 shadow" aria-label="Akun">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <h3 class="h6 fw-bold text-dark mb-0"><i class="fa-solid fa-user text-secondary me-3" style="width: 1rem;"></i>Akun</h3>
                            <i class="fa-solid fa-chevron-right text-primary"></i>
                        </div>
                    </a>
                </li>
            </ul> 
        </section>
    </div>
</div>
<?= $this->endSection() ?>