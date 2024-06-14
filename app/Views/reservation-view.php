<?= $this->extend("layouts/singgle") ?>

<?= $this->section("main") ?>
<section class="container my-4 my-md-5">
    <div class="overflow-auto px-3 py-4">
        <div id="softcopy" class="card border-0 shadow mx-auto" style="width: 992px;">
            <div class="card-body text-dark">
                <div class="d-flex align-items-center justify-content-between gap-3 mb-3 w-100">
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/logo.png') ?>" class="logo img-fluid lazyload" alt="Logo">
                        <h3 class="h6 fw-bold mb-0">Amanah Sabila<br>Handling</h3>
                    </div>
                    <div class="bg-secondary px-3 py-2 rounded-pill">
                        <span class="text-white"><?= $contents->package ?></span>
                    </div>
                </div>
                <h2 class="h4 text-center fw-bold mb-3">Bukti Reservasi</h2>
                <div class="bg-primary text-white p-3 rounded-2 mb-3">
                    <div class="row">
                        <div class="col-6">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Oleh</td>
                                        <td class="px-2">:</td>
                                        <td><?= $contents->agent ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pada</td>
                                        <td class="px-2">:</td>
                                        <td><?= $contents->date ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Keperluan</td>
                                        <td class="px-2">:</td>
                                        <td><?= $contents->type ?></td>
                                    </tr>
                                    <tr>
                                        <td>Penumpang</td>
                                        <td class="px-2">:</td>
                                        <td><?= $contents->passenger ?> Orang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h3 class="h5 fw-bold text-center mb-3">Keberangkatan</h3>
                        <div class="py-3 w-100">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="align-top">Tanggal</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->departureDate ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">Waktu</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->departureTime ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">Bandara</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->departureName ?> (<strong><?= $contents->departure ?></strong>), <?= $contents->departureCity ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">Tujuan</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->destination ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-6">
                        <h3 class="h5 fw-bold text-center mb-3">Kepulangan</h3>
                        <div class="py-3 w-100">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="align-top">Tanggal</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->arrivalDate ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">Waktu</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->arrivalTime ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">Bandara</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->arrivalName ?> (<strong><?= $contents->arrival ?></strong>), <?= $contents->arrivalCity ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top">Asal</td>
                                        <td class="align-top px-2">:</td>
                                        <td class="align-top"><?= $contents->through ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <p class="text-light fw-bold fst-italic fs-4 mb-0">#<?= $contents->code ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){
    const opt = {
        margin      : [0.5, 0, 0.5, 0],
        filename    : 'Amanah Sabila Handling - Reservasi <?= $contents->code ?>.pdf',
        image       : {type: 'png', quality: 1},
        html2canvas : {scale: 2},
        jsPDF       : {unit: 'in', format: 'A4', orientation: 'landscape'}
    }
    
    const element = document.getElementById('softcopy')
    
    const downloadPdf = () => {
        html2pdf().set(opt).from(element).save()
    }
        
    setTimeout(() => {
        downloadPdf()
    }, "1000")
})
</script>
<?= $this->endSection() ?>