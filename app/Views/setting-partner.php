<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<div class="row">
    <div class="col-lg-4 order-lg-2">
        <section class="position-sticky" style="top: 6.2rem">
            <h3 class="section-title">Tambah Mitra</h3>
            <div class="card border-0 text-dark shadow">
                <div class="card-body">
                    <?= form_open_multipart('dashboard/pengaturan/mitra/tambah'); ?>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="name" name="name" placeholder="Nama Perusahaan">
                            <label for="name"><i class="fa-solid fa-building fa-xs text-secondary me-2"></i>Nama Perusahaan</label>
                        </div>
                        <div class="form-floating overflow-hidden mb-3">
                            <input type="file" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="logo" name="logo" placeholder="Unggah Logo" accept="image/*">
                            <label for="logo"><i class="fa-solid fa-image fa-xs text-secondary me-2"></i>Unggah Logo</label>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100" aria-label="Add">Tambahkan</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-8 order-lg-1">
        <section>
            <h3 class="section-title">Daftar Mitra</h3>
            <?php if(!empty($contents)): ?>
                <ul class="list-unstyled">
                    <?php foreach($contents as $key => $content): ?>
                        <li class="mb-3">
                            <div class="card border-0 text-dark shadow">
                                <div class="card-body d-flex align-items-center justify-content-between p-0 pe-3 gap-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/partner/' . $content['logo']) ?>" class="h-auto rounded-start lazyload" width="120px" alt="<?= $content['name'] ?>">
                                        <h4 class="h6 fw-bold py-3 mb-0"><?= $content['name'] ?></h4>
                                    </div>
                                    <button type="button" class="btn btn-link text-danger p-0" data-bs-toggle="modal" data-bs-target="#contentModal<?= $key ?>" aria-label="Delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="modal fade" id="contentModal<?= $key ?>" tabindex="-1" aria-labelledby="contentModal<?= $key ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <p>Apakah anda yakin ingin menghapus "<strong><?= $content['name'] ?></strong>"?</p>
                                            <div class="alert alert-danger d-flex align-items-center text-start mb-0" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation me-3"></i>
                                                <p class="mb-0">Tindakan ini tidak dapat dikembalikan.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center border-0 pt-0">
                                            <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-dismiss="modal" aria-label="Cancel">Batal</button>
                                            <a href="<?= base_url('dashboard/pengaturan/mitra/hapus?q=' . $content['id']) ?>" class="btn btn-danger rounded-pill" aria-label="Delete">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="alert alert-info d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-circle-info me-3"></i>
                    <p class="mb-0">Belum ada album yang diunggah.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>