<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<div class="row">
    <div class="col-lg-4 order-lg-2">
        <section class="position-sticky" style="top: 6.2rem">
            <h3 class="section-title">Unggah Album</h3>
            <div class="card border-0 text-dark shadow">
                <div class="card-body">
                    <?= form_open_multipart('dashboard/pengaturan/galeri/tambah'); ?>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="title" name="title" placeholder="Judul Album">
                            <label for="name"><i class="fa-solid fa-images fa-xs text-secondary me-2"></i>Judul Album</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="description" name="description" placeholder="Deskripsi Album"></textarea>
                            <label for="description"><i class="fa-solid fa-pen fa-xs text-secondary me-2"></i>Deskripsi Album</label>
                        </div>
                        <div class="form-floating overflow-hidden mb-3">
                            <input type="file" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="images" name="images[]" placeholder="Unggah Foto" accept="image/*" multiple>
                            <label for="images"><i class="fa-solid fa-image fa-xs text-secondary me-2"></i>Unggah Foto</label>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100" aria-label="Add">Unggah</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-8 order-lg-1">
        <section>
            <h3 class="section-title">Daftar Album</h3>
            <?php if(!empty($contents)): ?>
                <ul class="list-unstyled">
                    <?php foreach($contents as $key => $content): ?>
                        <li class="mb-3">
                            <div class="card border-0 text-dark shadow">
                                <div class="card-body d-flex align-items-center justify-content-between p-0 pe-3 gap-3">
                                    <div class="d-flex gap-3">
                                        <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/album/' . $content['image']) ?>" class="h-auto rounded-start lazyload" width="120px" alt="<?= $content['title'] ?>">
                                        <div class="py-3">
                                            <h4 class="h6 fw-bold mb-0"><?= $content['title'] ?></h4>
                                            <p class="mb-0"><i class="fa-solid fa-images text-secondary me-2"></i><?= $content['total'] ?> foto</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end gap-2">
                                        <a href="<?= base_url('galeri/' . $content['title']) ?>" class="btn btn-link" target="_blank" aria-label="View">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <button type="button" class="btn btn-link text-danger p-0" data-bs-toggle="modal" data-bs-target="#contentModal<?= $key ?>" aria-label="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="contentModal<?= $key ?>" tabindex="-1" aria-labelledby="contentModal<?= $key ?>Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <p>Apakah anda yakin ingin menghapus "<strong><?= $content['title'] ?></strong>"?</p>
                                            <div class="alert alert-danger d-flex align-items-center text-start mb-0" role="alert">
                                                <i class="fa-solid fa-triangle-exclamation me-3"></i>
                                                <p class="mb-0">Semua foto dalam album akan dihapus. Tindakan ini tidak dapat dikembalikan.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center border-0 pt-0">
                                            <button type="button" class="btn btn-outline-danger rounded-pill" data-bs-dismiss="modal" aria-label="Cancel">Batal</button>
                                            <a href="<?= base_url('dashboard/pengaturan/galeri/hapus?q=' . $content['title']) ?>" class="btn btn-danger rounded-pill" aria-label="Delete">Hapus</a>
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
            <?php endif ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {
    const desc = document.getElementById("description")

    desc.addEventListener("focus", () => {
        desc.style.height = "8rem"
    })

    desc.addEventListener("blur", () => {
        if(desc.value == "")
            desc.style.height = "58px"
    })
})
</script>
<?= $this->endSection() ?>