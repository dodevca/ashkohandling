<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<?php
$actualLink = explode('?', "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
$params     = !empty($actualLink[1]) ? '?' . $actualLink[1] : '';
$pParams    = $filter['package'] != null ? str_replace('&p=' . $filter['package'], '', $params) : '';
$tParams    = $filter['type'] != null ? str_replace('&t=' . $filter['type'], '', $params) : '';
$sParams    = $filter['status'] != null ? str_replace('&s=' . urlencode($filter['status']), '', $params) : '';
?>
<section class="container-fluid px-0">
    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
        <h2 class="section-title mb-0">Daftar Reservasi</h2>
        <button type="button" class="btn btn-outline-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#filterModal" aria-label="Filter">
            <i class="fa-solid fa-filter me-2"></i>Filter
        </button>
    </div>
    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-3 mb-4">
        <h3 class="h5 fw-bold mb-0"><?= count($contents) ?> Reservasi</h3>
        <div class="d-flex flex-wrap align-items-center gap-3">
            <?php if($filter['sort'] != null): ?>
                <div class="bg-light rounded-pill text-nowrap px-3 py-2">
                    <p class="d-inline mb-0"><?= $filter['sort'] ?></p>
                </div>
            <?php endif; ?>
            <?php if($filter['package'] != null): ?>
                <div class="bg-light rounded-pill text-nowrap px-3 py-2">
                    <p class="d-inline mb-0"><?= ucwords($filter['package']) ?></p>
                    <a href="<?= base_url('dashboard/reservasi' . $pParams) ?>" class="d-inline btn btn-link p-0" aria-label="Filter">
                        <i class="fa-solid fa-xmark ms-2 text-light-emphasis"></i>
                    </a>
                </div>
            <?php endif; ?>
            <?php if($filter['type'] != null): ?>
                <div class="bg-light rounded-pill text-nowrap px-3 py-2">
                    <p class="d-inline mb-0"><?= ucwords($filter['type']) ?></p>
                    <a href="<?= base_url('dashboard/reservasi' . $tParams) ?>" class="d-inline btn btn-link p-0" aria-label="Filter">
                        <i class="fa-solid fa-xmark ms-2 text-light-emphasis"></i>
                    </a>
                </div>
            <?php endif; ?>
            <?php if($filter['status'] != null): ?>
                <div class="bg-light rounded-pill text-nowrap px-3 py-2">
                    <p class="d-inline mb-0"><?= ucwords($filter['status']) ?></p>
                    <a href="<?= base_url('dashboard/reservasi' . $sParams) ?>" class="d-inline btn btn-link p-0" aria-label="Filter">
                        <i class="fa-solid fa-xmark ms-2 text-light-emphasis"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if(!empty($contents)): ?>
        <ul class="list-unstyled" id="list">
            <?php foreach($contents as $content): ?>
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>" aria-label="Reservasi <?= $content['code'] ?>">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="h5 fw-bold text-dark mb-0">
                                        <?= $content['agent'] ?>
                                    </h3>
                                    <span class="badge rounded-pill bg-primary text-white ms-3"><?= $content['package'] ?></span>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">
                                        <h4 class="h6 text-dark-emphasis">
                                            <i class="fa-solid fa-plane-departure text-secondary me-2"></i>
                                            <?= $content['departure'] ?>
                                        </h4>
                                        <h4 class="h6 text-dark-emphasis">
                                            <i class="fa-solid fa-calendar text-secondary me-2"></i>
                                            <?= $content['departureDate'] ?>
                                        </h4>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="h6 text-dark-emphasis">
                                            <i class="fa-solid fa-plane-arrival text-secondary me-2"></i>
                                            <?= $content['arrival'] ?>
                                        </h4>
                                        <h4 class="h6 text-dark-emphasis">
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
            <p class="mb-0">Belum ada reservasi.</p>
        </div>
    <?php endif ?>
</section>
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <?= form_open('dashboard/reservasi', ['method'=> 'GET']) ?>
                <div class="modal-body">
                    <h5 class="fw-bold text-center">Filter hasil</h5>
                    <h6 class="fw-bold">Urutkan</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="o" id="o" value="agent-asc" <?= $filter['sort'] == 'A-Z' ? 'checked' : ''?>>
                        <label class="form-check-label" for="o">
                            A-Z
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="o" id="o" value="agent-desc" <?= $filter['sort'] == 'Z-A' ? 'checked' : ''?>>
                        <label class="form-check-label" for="o">
                            Z-A
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="o" id="o" value="date-desc" <?= $filter['sort'] == 'Terbaru' ? 'checked' : ''?>>
                        <label class="form-check-label" for="o">
                            Terbaru
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="o" id="o" value="date-asc" <?= $filter['sort'] == 'Terlama' ? 'checked' : ''?>>
                        <label class="form-check-label" for="o">
                            Terlama
                        </label>
                    </div>
                    <h6 class="fw-bold mt-4">Paket</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="p" id="p" value="all" <?= $filter['package'] == null ? 'checked' : ''?>>
                        <label class="form-check-label" for="p">
                            Semua
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="p" id="p" value="international" <?= $filter['package'] == 'international' ? 'checked' : ''?>>
                        <label class="form-check-label" for="p">
                            International
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="p" id="p" value="domestic" <?= $filter['package'] == 'domestic' ? 'checked' : ''?>>
                        <label class="form-check-label" for="p">
                            Domestic
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="p" id="p" value="full" <?= $filter['package'] == 'full' ? 'checked' : ''?>>
                        <label class="form-check-label" for="p">
                            Full
                        </label>
                    </div>
                    <h6 class="fw-bold mt-4">Jenis</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t" id="t" value="all" <?= $filter['type'] == null ? 'checked' : ''?>>
                        <label class="form-check-label" for="t">
                            Semua
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t" id="t" value="haji" <?= $filter['type'] == 'haji' ? 'checked' : ''?>>
                        <label class="form-check-label" for="t">
                            Haji
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t" id="t" value="umroh" <?= $filter['type'] == 'umroh' ? 'checked' : ''?>>
                        <label class="form-check-label" for="t">
                            Umroh
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t" id="t" value="wisata" <?= $filter['type'] == 'wisata' ? 'checked' : ''?>>
                        <label class="form-check-label" for="t">
                            Wisata
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="t" id="t" value="lainnya" <?= $filter['type'] == 'lainnya' ? 'checked' : ''?>>
                        <label class="form-check-label" for="t">
                            Lainnya
                        </label>
                    </div>
                    <h6 class="fw-bold mt-4">Status</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="s" id="s" value="all" <?= $filter['status'] == null ? 'checked' : ''?>>
                        <label class="form-check-label" for="s">
                            Semua
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="s" id="s" value="aktif" <?= $filter['status'] == 'aktif' ? 'checked' : ''?>>
                        <label class="form-check-label" for="s">
                            Aktif
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="s" id="s" value="tidak aktif" <?= $filter['status'] == 'tidak aktif' ? 'checked' : ''?>>
                        <label class="form-check-label" for="s">
                            Tidak aktif
                        </label>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-0 pt-0">
                    <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-dismiss="modal" aria-label="Cancel">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-pill" aria-label="Save">Terapkan</button>
                </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>