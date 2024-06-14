<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("stylesheets") ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<?= $this->endSection() ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="container-fluid px-0" id="schedule">
    <h2 class="section-title">Jadwal</h2>
    <div class="row">
        <div class="col-lg-5 col-xl-4">
            <?= form_open('') ?>
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <input type="text" class="form-control border-0 text-dark d-none" id="range" name="range" placeholder="Tanggal" readonly>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill mt-3 w-100" aria-label="Save">
                    Tampilkan
                </button>
            <?= form_close() ?>
        </div>
        <div class="col-lg-7 col-xl-8">
            <div class="d-lg-none mt-4 mt-lg-0 border-top"></div>
            <?php if(!empty($contents)): ?>
                <?php
                $selectDate = null;
                ?>
                <ul class="list-unstyled pt-4 pt-lg-0">
                    <?php foreach($contents as $content): ?>
                        <?php if($content['date'] != $selectDate):?>
                            <li class="py-3">
                                <h2 class="h5 fw-bold mb-0"><i class="fa-solid fa-calendar text-secondary me-2"></i><?= $content['date'] ?></h2>
                            </li>
                            <?php
                            $selectDate = $content['date'];
                            ?>
                        <?php endif; ?>
                        <li class="mb-3">
                            <a href="<?= base_url('dashboard/reservasi/' . $content['code']) ?>" aria-label="Reservasi <?= $content['code'] ?>">
                                <div class="card border-0 shadow">
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
                        </li> 
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="alert alert-info d-flex align-items-center" role="alert">
                    <i class="fa-solid fa-circle-info me-3"></i>
                    <p class="mb-0">Tidak ada jadwal untuk <strong><?= $filter['start'] ?></strong> - <strong><?= $filter['end'] ?></strong>.</p>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const dateRange = document.getElementById('range')

        flatpickr(dateRange, {
            inline      : true,
            mode        : "range",
            dateFormat  : "Y-m-d",
             allowInput : true,
            defaultDate : ["<?= $filter['start'] ?>", "<?= $filter['end'] ?>"]
        })
    })
</script>
<?= $this->endSection() ?>