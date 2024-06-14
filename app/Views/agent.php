<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="container-fluid px-0">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="section-title mb-0">Daftar Travel Agent</h2>
        <div class="dropdown">
            <button class="btn btn-outline-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Sort">
                <i class="fa-solid fa-sort me-2"></i><?= $filter['sort'] ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?= base_url('dashboard/agen?by=agent&o=asc') ?>" aria-label="A-Z">A-Z</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/agen?by=agent&o=desc') ?>" aria-label="Z-A">Z-A</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/agen?by=total&o=desc') ?>" aria-label="Paling Banyak">Paling banyak</a></li>
                <li><a class="dropdown-item" href="<?= base_url('dashboard/agen?by=total&o=asc') ?>" aria-label="Paling Sedikit">Paling sedikit</a></li>
            </ul>
        </div>
    </div>
    <?php if(!empty($contents)): ?>
        <ul class="list-unstyled">
            <?php foreach($contents as $content): ?>
                <li class="mb-3">
                    <a href="<?= base_url('dashboard/search?q=' . $content['agent']) ?>" aria-label="<?= $content['agent'] ?>">
                        <div class="card border-0 shadow">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div>
                                    <h3 class="h6 fw-bold mb-0 text-dark"><?= $content['agent'] ?></h3>
                                    <p class="text-light-emphasis mb-0"><?= $content['agentInfo']->email ?></p>
                                </div>
                                <span class="badge rounded-pill bg-primary text-dark ms-3">
                                    <p class="fs-6 fw-light text-white mb-0"><?= $content['total'] ?></p>
                                </span>
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
<?= $this->endSection() ?>