<?= $this->extend("layouts/main") ?>

<?= $this->section("main") ?>
<section class="container mt-4 mt-md-5">
    <?= $this->include('partials/breadcrumb') ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="section-title mb-0">Galeri</h1>
        <div class="dropdown">
            <button class="btn btn-outline-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="sort">
                <i class="fa-solid fa-sort me-2"></i><?= $filter['sort'] ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?= base_url('galeri?by=title&o=asc') ?>" aria-label="A-Z">A-Z</a></li>
                <li><a class="dropdown-item" href="<?= base_url('galeri?by=title&o=desc') ?>" aria-label="Z-A">Z-A</a></li>
                <li><a class="dropdown-item" href="<?= base_url('galeri?by=date&o=desc') ?>" aria-label="Terbaru">Terbaru</a></li>
                <li><a class="dropdown-item" href="<?= base_url('galeri?by=date&o=asc') ?>" aria-label="Terlama">Terlama</a></li>
            </ul>
        </div>
    </div>
    <?php if(!empty($contents)): ?>
        <div class="row mt-4">
            <?php foreach($contents as $content): ?>
                <div class="col-md-4 col-lg-3 p-3">
                    <div class="card border-0">
                        <a href="<?= base_url('galeri/' . $content['title']) ?>" aria-label="Galeri">
                            <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/album/' . $content['image']) ?>" class="w-100 h-auto rounded-2 lazyload" style="aspect-ratio: 1 / 1;object-fit: cover;" alt="<?= $content['title'] ?>">
                        </a>
                        <div class="card-body d-flex align-items-center justify-content-between gap-3 text-dark px-0">
                            <h5 class="h6 mb-0"><?= $content['title'] ?></h5>
                            <p class="small bg-secondary bg-opacity-25 px-2 py-1 rounded-pill mb-0"><i class="fa-solid fa-images text-secondary me-2"></i><?= $content['total'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if(count($contents) > 20): ?>
            <div class="text-center">
                <button type="button" class="btn btn-outline-primary rounded-pill mt-4" id="more-btn" aria-label="Load More">
                    Lebih banyak
                </button>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="py-4 text-center">
            <i class="fa-solid fa-circle-info text-warning fa-2x mb-2"></i>
            <p class="mb-0">Galeri masih kosong.</p>
        </div>
    <?php endif; ?>
</section>
<?= $this->endSection() ?>