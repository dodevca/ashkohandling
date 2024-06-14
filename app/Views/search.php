<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="container-fluid px-0">
    <div class="d-flex flex-wrap align-items-end justify-content-between mb-4">
        <div>
            <h2 class="section-title">Hasil pencarian : <?= $query ?></h2>
            <h3 class="h6 text-light-emphasis mb-0"><?= count($contents) ?> reservasi ditemukan</h3>
        </div>
        <div class="dropdown">
            <button class="btn btn-outline-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Sort">
                <i class="fa-solid fa-sort me-2"></i><?= $filter['sort'] ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?= base_url('dashboard/search?q=' . urlencode($query) . '&by=agent&o=asc') ?>" aria-label="A-Z">A-Z</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/search?q=' . urlencode($query) . '&by=agent&o=desc') ?>" aria-label="Z-A">Z-A</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/search?q=' . urlencode($query) . '&by=date&o=desc') ?>" aria-label="Terbaru">Terbaru</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/search?q=' . urlencode($query) . '&by=date&o=asc') ?>" aria-label="Terlama">Terlama</a></li>
            </ul>
        </div>
    </div>
    <?php if(!empty($contents)): ?>
        <ul class="list-unstyled" id="list">
            <?php foreach($contents as $content): ?>
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h6 fw-bold text-dark mb-0">
                                        <?= $content['agent'] ?>
                                    </h3>
                                    <span class="badge rounded-pill bg-primary text-white ms-3"><?= $content['package'] ?></span>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <h4 class="h6 text-dark-emphasis small">
                                            <i class="fa-solid fa-plane-departure text-secondary me-2"></i>
                                            <?= $content['departure'] ?>
                                        </h4>
                                        <h4 class="h6 text-dark-emphasis small">
                                            <i class="fa-solid fa-calendar text-secondary me-2"></i>
                                            <?= $content['departureDate'] ?>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="h6 text-dark-emphasis small">
                                            <i class="fa-solid fa-plane-arrival text-secondary me-2"></i>
                                            <?= $content['arrival'] ?>
                                        </h4>
                                        <h4 class="h6 text-dark-emphasis small">
                                            <i class="fa-solid fa-calendar text-secondary me-2"></i>
                                            <?= $content['arrivalDate'] ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li> 
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <i class="fa-solid fa-circle-info me-3"></i>
            <p class="mb-0">Tidak ditemukan reservasi.</p>
        </div>
    <?php endif ?>
</section>
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="fw-bold text-center">Filter hasil</h5>
                <h6 class="fw-bold">Berdasarkan</h6>
                <h6 class="fw-bold">Paket</h6>
                <h6 class="fw-bold">Rencana</h6>
                <h6 class="fw-bold">Jenis</h6>
            </div>
            <div class="modal-footer justify-content-center border-0 pt-0">
                <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-dismiss="modal" aria-label="Cancel">Batal</button>
                <button type="submit" class="btn btn-primary rounded-pill" aria-label="Save">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>