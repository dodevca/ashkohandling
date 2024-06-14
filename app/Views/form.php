<?= $this->extend("layouts/singgle") ?>

<?= $this->section("main") ?>
<section id="form" class="container-fluid my-0 py-5">
    <div class="card border-0 mx-auto shadow" style="max-width: 992px;">
        <div class="card-body text-dark">
            <h1 class="h4 fw-bold text-center mb-4">Reservasi Layanan</h1>
            <?= form_open('reservasi/submit'); ?>
                <h2 class="h6 fw-bold">Informasi Travel Agent</h2>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="name" name="name" placeholder="Nama Agen">
                            <label for="name"><i class="fa-solid fa-building fa-xs text-secondary me-2"></i>Nama Agen</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="email" name="email" placeholder="Email">
                            <label for="email"><i class="fa-solid fa-envelope fa-xs text-secondary me-2"></i>Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="phone" name="phone" placeholder="Telepon / WhatsApp">
                            <label for="phone"><i class="fa-solid fa-phone fa-xs text-secondary me-2"></i>Telepon / WhatsApp</label>
                        </div>
                    </div>
                </div>
                <h2 class="h6 fw-bold">Keberangkatan</h2>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="departure-date" name="departure-date" placeholder="Tanggal">
                            <label for="departure-date"><i class="fa-solid fa-calendar fa-xs text-secondary me-2"></i>Tanggal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="time" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="departure-time" name="departure-time" placeholder="Waktu">
                            <label for="departure-time"><i class="fa-solid fa-clock fa-xs text-secondary me-2"></i>Waktu</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select bg-transparent border-0 border-bottom rounded-0 text-dark" id="departure" name="departure" aria-label="Bandara">
                                <option class="text-light-emphasis" selected>Pilih bandara</option>
                                <?php foreach($contents as $content): ?>
                                    <option value="<?= $content['code'] ?>"><?= $content['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="departure"><i class="fa-solid fa-plane-departure fa-xs text-secondary me-2"></i>Bandara</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="destination" name="destination" placeholder="Tujuan">
                            <label for="destination"><i class="fa-solid fa-plane-arrival fa-xs text-secondary me-2"></i>Tujuan</label>
                        </div>
                    </div>
                </div>
                <h2 class="h6 fw-bold">Kepulangan</h2>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="arrival-date" name="arrival-date" placeholder="Tanggal">
                            <label for="arrival-date"><i class="fa-solid fa-calendar fa-xs text-secondary me-2"></i>Tanggal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="time" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="arrival-time" name="arrival-time" placeholder="Waktu">
                            <label for="arrival-time"><i class="fa-solid fa-clock fa-xs text-secondary me-2"></i>Waktu</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="through" name="through" placeholder="Asal">
                            <label for="through"><i class="fa-solid fa-plane-arrival fa-xs text-secondary me-2"></i>Asal</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select bg-transparent border-0 border-bottom rounded-0 text-dark" id="arrival" name="arrival" aria-label="Bandara">
                                <option class="text-light-emphasis" selected>Pilih bandara</option>
                                <?php foreach($contents as $content): ?>
                                    <option value="<?= $content['code'] ?>"><?= $content['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="arrival"><i class="fa-solid fa-plane-departure fa-xs text-secondary me-2"></i>Bandara</label>
                        </div>
                    </div>
                </div>
                <h2 class="h6 fw-bold">Informasi Layanan</h2>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select bg-transparent border-0 border-bottom rounded-0 text-dark" id="type" name="type" aria-label="Jenis Layanan">
                                <option selected>Pilih tujuan penerbangan</option>
                                <option value="wisata">Wisata</option>
                                <option value="haji">Haji</option>
                                <option value="umroh">Umroh</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                            <label for="type"><i class="fa-solid fa-plane-departure fa-xs text-secondary me-2"></i>Tujuan Penerbangan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="passenger" name="passenger" placeholder="Jumlah Penumpang">
                            <label for="passenger"><i class="fa-solid fa-plane-arrival fa-xs text-secondary me-2"></i>Jumlah Penumpang</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <select class="form-select bg-transparent border-0 border-bottom rounded-0 text-dark" id="package" name="package" aria-label="Jenis Layanan">
                                <option selected>Pilih paket layanan</option>
                                <option value="international">International</option>
                                <option value="domestic">Domestic</option>
                                <option value="full">Full</option>
                            </select>
                            <label for="package"><i class="fa-solid fa-plane-departure fa-xs text-secondary me-2"></i>Jenis Layanan</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
                <!-- <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="checkbox">
                    <label class="form-check-label" for="checkbox">
                        Check me out
                    </label>
                </div> -->
                <button type="submit" class="btn btn-primary rounded-pill w-100" aria-label="Submit Reservation">
                    Reservasi
                </button>
            <?= form_close() ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>