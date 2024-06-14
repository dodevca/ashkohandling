<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<div class="row">
    <div class="col-lg-7 col-xl-8">
        <section class="container px-0" id="schedule">
            <div id="schedule-carousel" class="carousel slide shadow rounded-2 p-3" data-bs-wrap="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#schedule-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#schedule-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#schedule-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner px-3 pb-5">
                    <div class="carousel-item active">
                        <div class="text-dark">
                            <div class="carousel-title d-flex align-items-center justify-content-between pt-2 pb-4">
                                <h5 class="fw-bold mb-0"><?= $contents['schedule']['date'][0] ?></h5> 
                                <a href="<?= base_url('dashboard/jadwal') ?>" class="btn btn-outline-primary rounded-pill px-2 py-1 ms-3" style="width: 2rem;height: 2rem;" aria-label="Jadwal">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <?php if(!empty($contents['schedule']['result'][0])): ?>
                                <div class="d-flex flex-column align-items-center justify-content-center gap-3"> 
                                    <?php foreach($contents['schedule']['result'][0] as $content): ?>
                                        <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>" class="w-100" aria-label="Reservasi <?= $content['code'] ?>">
                                            <div class="card bg-light bg-opacity-25 border-0 w-100">
                                                <div class="card-body d-flex align-items-center justify-content-between gap-3">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="fa-solid <?= $content['status'] == 'departure' ? 'fa-plane-departure' : 'fa-plane-arrival' ?> fa-2x text-secondary text-opacity-50"></i>
                                                        <div>
                                                            <h3 class="h6 fw-bold mb-0 text-dark">
                                                                <?= $content['city'] ?> (<?= $content['airportCode'] ?>)
                                                            </h3>
                                                            <h4 class="h6 text-light-emphasis mb-0">
                                                                <?= $content['agent'] ?>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <span class="badge rounded-pill bg-primary"><i class="fa-solid fa-clock me-2"></i><?= $content['time'] ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    <i class="fa-solid fa-circle-info me-3"></i>
                                    <p class="mb-0">Tidak ada jadwal untuk <strong><?= $contents['schedule']['date'][0] ?></strong>.</p>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-dark">
                            <div class="carousel-title d-flex align-items-center justify-content-between pt-2 pb-4">
                                <h5 class="fw-bold mb-0"><?= $contents['schedule']['date'][1] ?></h5> 
                                <a href="<?= base_url('dashboard/jadwal') ?>" class="btn btn-outline-primary rounded-pill px-2 py-1 ms-3" style="width: 2rem;height: 2rem;" aria-label="Jadwal">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <?php if(!empty($contents['schedule']['result'][1])): ?>
                                <div class="d-flex flex-column align-items-center justify-content-center gap-3"> 
                                    <?php foreach($contents['schedule']['result'][1] as $content): ?>
                                        <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>" class="w-100" aria-label="Reservasi <?= $content['code'] ?>">
                                            <div class="card bg-light bg-opacity-25 border-0 w-100">
                                                <div class="card-body d-flex align-items-center justify-content-between gap-3">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="fa-solid <?= $content['status'] == 'departure' ? 'fa-plane-departure' : 'fa-plane-arrival' ?> fa-2x text-secondary text-opacity-50"></i>
                                                        <div>
                                                            <h3 class="h6 fw-bold mb-0 text-dark">
                                                                <?= $content['city'] ?> (<?= $content['airportCode'] ?>)
                                                            </h3>
                                                            <h4 class="h6 text-light-emphasis mb-0">
                                                                <?= $content['agent'] ?>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <span class="badge rounded-pill bg-primary"><i class="fa-solid fa-clock me-2"></i><?= $content['time'] ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    <i class="fa-solid fa-circle-info me-3"></i>
                                    <p class="mb-0">Tidak ada jadwal untuk <strong><?= $contents['schedule']['date'][1] ?></strong>.</p>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-dark">
                            <div class="carousel-title d-flex align-items-center justify-content-between pt-2 pb-4">
                                <h5 class="fw-bold mb-0"><?= $contents['schedule']['date'][2] ?></h5> 
                                <a href="<?= base_url('dashboard/jadwal') ?>" class="btn btn-outline-primary rounded-pill px-2 py-1 ms-3" style="width: 2rem;height: 2rem;" aria-label="Jadwal">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                            <?php if(!empty($contents['schedule']['result'][2])): ?>
                                <div class="d-flex flex-column align-items-center justify-content-center gap-3"> 
                                    <?php foreach($contents['schedule']['result'][2] as $content): ?>
                                        <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>" class="w-100" aria-label="Reservasi <?= $content['code'] ?>">
                                            <div class="card bg-light bg-opacity-25 border-0 w-100">
                                                <div class="card-body d-flex align-items-center justify-content-between gap-3">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <i class="fa-solid <?= $content['status'] == 'departure' ? 'fa-plane-departure' : 'fa-plane-arrival' ?> fa-2x text-secondary text-opacity-50"></i>
                                                        <div>
                                                            <h3 class="h6 fw-bold mb-0 text-dark">
                                                                <?= $content['city'] ?> (<?= $content['airportCode'] ?>)
                                                            </h3>
                                                            <h4 class="h6 text-light-emphasis mb-0">
                                                                <?= $content['agent'] ?>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <span class="badge rounded-pill bg-primary"><i class="fa-solid fa-clock me-2"></i><?= $content['time'] ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    <i class="fa-solid fa-circle-info me-3"></i>
                                    <p class="mb-0">Tidak ada jadwal untuk <strong><?= $contents['schedule']['date'][2] ?></strong>.</p>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#schedule-carousel" data-bs-slide="prev" aria-label="Prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <i class="fa-solid fa-chevron-left text-primary fa-lg"></i>
                    </span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#schedule-carousel" data-bs-slide="next" aria-label="Next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <i class="fa-solid fa-chevron-right text-primary fa-lg"></i>
                    </span>
                </button>
            </div>
        </section>
        <div class="row">
            <div class="col-xl-6">
                <section class="container px-0" id="agent">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="section-title mb-0">Travel Agent</h2>
                        <a href="<?= base_url('dashboard/agen') ?>" class="btn btn-outline-primary rounded-pill px-2 py-1 ms-3" style="width: 2rem;height: 2rem;" aria-label="Agen">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <?php if(!empty($contents['agent'])): ?>
                        <ul class="list-unstyled">
                            <?php foreach($contents['agent'] as $content): ?>
                                <li class="mb-3">
                                    <a href="<?= base_url('dashboard/search?q=' . $content['agent']) ?>" aria-label="Agen <?= $content['agent'] ?>">
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
            </div>
            <div class="col-xl-6">
                <section class="container px-0" id="airport">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="section-title mb-0">Bandara</h2>
                        <a href="<?= base_url('dashboard/bandara') ?>" class="btn btn-outline-primary rounded-pill px-2 py-1 ms-3" style="width: 2rem;height: 2rem;" aria-label="Bandara">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <?php if(!empty($contents['airport'])): ?>
                        <ul class="list-unstyled">
                            <?php foreach($contents['airport'] as $content): ?>
                                <li class="mb-3">
                                    <a href="<?= base_url('dashboard/search?q=' . $content['code']) ?>" aria-label="Bandara <?= $content['name'] ?>">
                                        <div class="card border-0 shadow">
                                            <div class="card-body d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h3 class="h6 fw-bold mb-0 text-dark"><?= $content['name'] ?></h3>
                                                    <p class="text-dark mb-0"><?= $content['city'] ?> (<?= $content['code'] ?>)</p>
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
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-xl-4">
        <section class="container px-0" id="latest">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="section-title mb-0">Terbaru</h2>
                <a href="<?= base_url('dashboard/reservasi') ?>" class="btn btn-outline-primary rounded-pill px-2 py-1 ms-3" style="width: 2rem;height: 2rem;">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <?php if(!empty($contents['latest'])): ?>
                <ul class="list-unstyled" id="list">
                    <?php foreach($contents['latest'] as $content): ?>
                        <li class="mb-3">
                            <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>">
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
    </div>
</div>
<?= $this->endSection() ?>