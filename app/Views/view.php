<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<div class="row">
    <div class="col-lg-8">
        <section class="container px-0">
            <div class="card border-0 shadow">
                <div class="card-body text-dark">
                    <div class="d-flex align-items-center justify-content-between gap-3 mb-4">
                        <h1 class="section-title mb-0">Reservasi #<?= $contents->code ?></h1>
                        <div class="bg-secondary rounded-pill text-white fw-bold px-3 py-2">
                            Paket <?= $contents->package ?>
                        </div>
                    </div>
                    <div class="bg-light bg-opacity-25 rounded-2 p-3 mb-4">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Keperluan</td>
                                    <td class="px-2">:</td>
                                    <td class="fw-bold"><?= $contents->type ?></td>
                                </tr>
                                <tr>
                                    <td>Penumpang</td>
                                    <td class="px-2">:</td>
                                    <td class="fw-bold"><?= $contents->passenger ?> Orang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="h5 fw-bold text-center mb-3">Keberangkatan</h3>
                            <div class="py-3 border-top border-bottom w-100">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="align-top">Tanggal</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->departureDate ?></td>
                                        </tr>
                                        <tr>
                                            <td class="align-top">Waktu</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->departureTime ?></td>
                                        </tr>
                                        <tr>
                                            <td class="align-top">Bandara</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->departureName ?> (<strong><?= $contents->departure ?></strong>), <?= $contents->departureCity ?></td>
                                        </tr>
                                        <tr>
                                            <td class="align-top">Tujuan</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->destination ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <h3 class="h5 fw-bold text-center mb-3">Kepulangan</h3>
                            <div class="py-3 border-top border-bottom w-100">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="align-top">Tanggal</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->arrivalDate ?></td>
                                        </tr>
                                        <tr>
                                            <td class="align-top">Waktu</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->arrivalTime ?></td>
                                        </tr>
                                        <tr>
                                            <td class="align-top">Bandara</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->arrivalName ?> (<strong><?= $contents->arrival ?></strong>), <?= $contents->arrivalCity ?></td>
                                        </tr>
                                        <tr>
                                            <td class="align-top">Asal</td>
                                            <td class="align-top px-2">:</td>
                                            <td class="align-top fw-bold"><?= $contents->through ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end pt-3 pb-2">
                        <p class="text-light-emphasis small mb-0">diterima pada : <small class="fst-italic"><?= $contents->date ?></small></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-lg-4">
        <section class="container px-0">
            <div class="card border-0 shadow">
                <div class="card-body text-dark">
                    <h2 class="section-title"><?= $contents->agent ?></h2>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center justify-content-between gap-3 mb-2">
                            <p class="mb-0 text-light-emphasis"><i class="fa-solid fa-envelope me-2"></i><?= $contents->agentInfo->email ?></p>
                            <a href="mailto:<?= $contents->agentInfo->email ?>" class="btn btn-outline-primary px-3 py-1 rounded-pill" aria-label="Email">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between gap-3">
                            <p class="mb-0 text-light-emphasis"><i class="fa-solid fa-phone me-2"></i><?= $contents->agentInfo->phone ?></p>
                            <a href="tel:<?= $contents->agentInfo->phone ?>" class="btn btn-outline-primary px-3 py-1 rounded-pill" aria-label="Phone">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>