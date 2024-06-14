<?= $this->extend("layouts/main") ?>

<?= $this->section("stylesheets") ?>
<link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
<?= $this->endSection() ?>

<?= $this->section("main") ?>
<section class="container-fluid jumbotron">
    <div class="d-flex flex-column align-items-center justify-content-center py-5 gap-4">
        <div class="bg-primary rounded-pill bg-opacity-25 mt-4 py-2 px-3">
            <p class="text-primary fw-bold mb-0">Amanah Sabila Handling</p>
        </div>
        <div>
            <h1 class="text-center">
                Pelayanan jasa handling <span class="text-secondary">wisata, haji, dan umroh</span>
                <br>
                di bandara-bandara Indonesia
            </h1>
            <p class="text-center text-light-emphasis mb-0">
                Pelayanan berkualitas dengan sumber daya manusia yang handal
                <br>
                dan profesional serta bersertifikasi khusus
            </p>
        </div>
        <a href="<?= base_url('reservasi') ?>" class="btn btn-primary rounded-pill" aria-label="Reservasi">
            Reservasi Sekarang
        </a>
    </div>
</section>
<section id="tentang" class="container-fluid bg-light bg-opacity-25 paralax-wrapper mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 p-3">
                <div class="text-end">
                    <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/img-1.jpg') ?>" class="w-75 h-auto rounded-2 shadow paralax-top lazyload" alt="Amanah Sabila Handling 1">
                </div>
                <div class="text-start">
                    <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/img-2.jpg') ?>" class="w-75 h-auto rounded-2 shadow paralax-bottom lazyload" alt="Amanah Sabila Handling 2">
                </div>
            </div>
            <div class="sibling col-lg-6 order-lg-1 py-3 my-auto">
                <h3 class="section-subtitle">Tentang Kami</h3>
                <h2 class="section-title">Jasa Pelayanan Wisata, Haji, dan Umroh</h2>
                <p>
                    PT. Amanah Sabila Handling (ASHKO Handling) adalah perusahaan yang bergerak dibidang jasa pelayanan wisata, haji dan umroh. ASHKO didirikan pada tanggal 23 januari 2019.
                </p>
                <p>
                    Saat ini PT. Amanah Sabila Handling memberikan pelayanan yang berfokus pada jasa handling wisata, haji dan umroh di bandara soekarno-hatta dan beberapa bandara lainnya di Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="layanan" class="container">
    <h3 class="section-subtitle text-center">Layanan Kami</h3>
    <h2 class="section-title text-center">Pelayanan Yang Kami Berikan</h2>
    <div class="row">
        <div class="col-md-6 col-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-calendar-day text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Penanganan Blokseat dan One Day Before Checkin</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-person-walking-luggage text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Pengantaran/assist jama'ah menuju ruang tunggu</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-plane-arrival text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Penjemputan jama'ah saat kepulangan (after imigrasi)</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-id-card text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Membantu pengisian data Electronic Customs Declaration (E-CD) H-3 sebelum kedatangan</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-cart-flatbed-suitcase text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Penanganan bagasi jama'ah (keberangkatan dan kedatangan)</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-bottle-water text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Penanganan dan pembagian air zam-zam (saat kedatangan)</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4 text-center pb-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <i class="fa-solid fa-person-military-to-person text-secondary display-3 mb-2"></i>
                    <p class="text-dark px-3 px-md-5 mb-0 pt-4">Membantu dan mendampingi jama'ah melaporkan kekurangan bagasi dan zam-zam ke petugas airlines</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 offset-lg-2">
            <h4 class="h5 fw-bold text-center my-4">Layanan Tambahan</h4>
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center pb-3">
                    <p class="mb-0"><i class="fa-solid fa-couch text-secondary me-2"></i>Reservasi lounge</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center pb-3">
                    <p class="mb-0"><i class="fa-solid fa-hotel text-secondary me-2"></i>Reservasi hotel</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center offset-md-3 offset-lg-0">
                    <p class="mb-0"><i class="fa-solid fa-utensils text-secondary me-2"></i>Nasi box & snack</p>
                </div>
            </div>
        </div>    
    </div>
</section>
<section id="paket" class="container-fluid bg-image" style="background-image: url(<?= base_url('images/bg-2.png') ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 offset-lg-6 py-5 my-auto">
                <div class="card border-0 shadow">
                    <div class="card-body text-dark">
                        <h3 class="section-subtitle text-center">Paket</h3>
                        <h2 class="section-title text-center">Paket Layanan</h2> 
                        <ul class="nav nav-tabs d-flex justify-content-center" id="handlingTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#type1" type="button" role="tab" aria-controls="type1" aria-selected="true" aria-label="International">International</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#type2" type="button" role="tab" aria-controls="type2" aria-selected="false" aria-label="Domestic">Domestic</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#type3" type="button" role="tab" aria-controls="type3" aria-selected="false" aria-label="Full">Full</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="handlingTabContent">
                            <div class="tab-pane px-lg-3 fade pt-3 show active" id="type1" role="tabpanel" aria-labelledby="type1-tab">
                                <ul class="list-unstyled">
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>One day before check-in
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Pengantaran/assist jama'ah saat keberangkatan dan penjemputan jama'ah saat kepulangan (after imigrasi)
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Penangganan bagasi saat keberangkatan & kedatangan
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Membantu pengisian E-CD & pengambilan zam-zam saat kedatangan
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane px-lg-3 fade pt-3" id="type2" role="tabpanel" aria-labelledby="type2-tab">
                                <ul class="list-unstyled">
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Penjemputan dan pengantaran/assist jama'ah saat kedatangan dan keberangkatan
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Penanganan bagasi saat kedatangan
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Membantu check-in jama'ah saat keberangkatan
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Membantu penanganan bagasi dan zam-zam saat keberangkatan
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane px-lg-3 fade pt-3" id="type3" role="tabpanel" aria-labelledby="type3-tab">
                                <ul class="list-unstyled">
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Inlcude International Handling (PP)
                                    </li>
                                    <li class="d-flex my-2">
                                        <i class="fa-solid fa-circle-check text-secondary me-2" style="line-height: inherit;"></i>Include Domestic Handling (PP)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 mt-3">
                            <a href="<?= base_url('reservasi') ?>" class="btn btn-primary rounded-pill" aria-label="Reservasi">
                                <i class="fa-solid fa-file-pen me-2"></i>Reservasi
                            </a>
                            <a href="<?= base_url('kontak') ?>" class="btn btn-outline-primary rounded-pill" aria-label="Kontak">
                                <i class="fa-solid fa-phone me-2"></i>Hubungi Kami
                            </a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cabang" class="container">
    <h3 class="section-subtitle text-center">Cabang</h3>
    <h2 class="section-title text-center">Pelayanan Diberbagai Bandara</h2>
    <?php if(!empty($contents['airport'])): ?> 
        <div id="airport-wrapper">
            <div class="d-flex flex-wrap justify-content-center column-gap-3 row-gap-4 pb-4">
                <?php foreach($contents['airport'] as $airport): ?>
                    <div class="d-flex align-items-center gap-2 rounded-pill shadow px-3 py-2">
                        <i class="fa-solid fa-location-dot text-secondary me-1"></i>
                        <div class="pe-2">
                            <h4 class="h6 fw-bold mb-0"><?= $airport['name'] ?></h4>
                            <p class="small mb-0"><?= $airport['city'] ?> (<?= $airport['code'] ?>)</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="<?= count($contents['airport']) < 5 ? 'd-none invisible' : ''; ?> text-center">
            <button type="button" class="btn btn-link fw-bold mt-4" id="more-btn" aria-label="Load More">
                <p class="m-0">Lebih banyak</p><i class="fa-solid fa-chevron-down"></i>
            </button>
        </div>
    <?php else: ?>
        <div class="text-center">
            <i class="fa-solid fa-circle-info text-warning fa-2x mb-2"></i>
            <p class="mb-0">Belum ada cabang terdaftar.</p>
        </div>
    <?php endif; ?>
</section>
<section id="mitra" class="container">
    <h3 class="section-subtitle text-center">Mitra</h3>
    <h2 class="section-title text-center">Mitra Yang Bekerja Sama</h2>
    <?php if(!empty($contents['partner'])): ?> 
        <div class="slider">
            <div class="d-flex align-content-center overflow-auto px-3 pb-3 gap-5" id="slider-content" style="scroll-behavior: smooth;">
                <?php foreach($contents['partner'] as $partner): ?>
                    <button type="button" class="btn btn-link p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="<?= $partner['name'] ?>" aria-label="<?= $partner['name'] ?>">
                        <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/partner/' . $partner['logo']) ?>" class="lazyload" alt="<?= $partner['name'] ?>">
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="text-center">
            <i class="fa-solid fa-circle-info text-warning fa-2x mb-2"></i>
            <p class="mb-0">Belum ada mitra terdaftar.</p>
        </div>
    <?php endif; ?>
</section>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const tooltipTriggerList    = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList           = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        
        const moreBtn   = document.getElementById("more-btn")
        const wrapper   = document.getElementById("airport-wrapper")

        moreBtn.addEventListener("click", () => {
            if(wrapper.classList.contains("expanded")) {
                wrapper.classList.remove("expanded")

                moreBtn.innerHTML = '<p class="m-0">Lebih banyak</p><i class="fa-solid fa-chevron-down"></i>'
            } else {
                wrapper.classList.add("expanded")

                moreBtn.innerHTML = '<i class="fa-solid fa-chevron-up"></i><p class="m-0">Lebih sedikit</p>'
            }
        })
    })
</script>
<?= $this->endSection() ?>