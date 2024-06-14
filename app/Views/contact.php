<?= $this->extend("layouts/main") ?>

<?= $this->section("main") ?>
<section class="container mt-3 mt-md-5">
    <?= $this->include('partials/breadcrumb') ?>
    <h1 class="section-title">Kontak Kami</h1>
    <div class="row">
        <div class="col-lg-4">
            <div class="mt-0 pb-0 py-4 py-lg-0 h-100">
                <iframe class="rounded-2 lazyload" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Area%20Perkantoran%20Terminal%202%20DOD%2069%20Bandara%20Soekarno-Hatta+(Amanah%20Sabila%20Handling)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="mt-0 pb-0 py-4 py-lg-0 h-100">
                <div class="card border-0 bg-primary bg-opacity-25 h-100">
                    <div class="card-body text-dark">
                        <h1 class="h5 fw-bold mb-4 text-center">Hubungi Kami</h1>
                        <ul class="list-unstyled">
                            <li class="d-flex flex-column align-items-center justify-content-center text-center mb-4">
                                <i class="fa-solid fa-phone fa-2x me-2 text-primary mb-2"></i>
                                <a href="tel:+62859-2156-2580" class="text-dark mb-0" aria-label="Phone">+62 859-2156-2580</a>
                                <a href="tel:+62859-2156-2580"  class="text-dark mb-0" aria-label="Phone">+62 859-2156-2580</a>
                            </li>
                            <li class="d-flex flex-column align-items-center justify-content-center text-center">
                                <i class="fa-solid fa-envelope fa-2x me-2 text-primary mb-2"></i>
                                <a href="mailto:ashkohandling@gmail.com" class="text-dark mb-0" aria-label="Email">ashkohandling@gmail.com</a>
                                <a href="mailto:loremipsum@gmail.com" class="text-dark mb-0" aria-label="Email">loremipsum@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="mt-0 pb-0 py-4 py-lg-0 h-100">
                <div class="card border-0 bg-secondary bg-opacity-25 h-100">
                    <div class="card-body text-dark">
                        <h1 class="h5 fw-bold mb-4 text-center">Sosial Media</h1>
                        <div class="d-flex align-items-center justify-content-center gap-3">
                            <a href="#" class="d-flex align-items-center justify-content-center bg-secondary rounded-circle" style="width: 32px;height: 32px;" aria-label="Facebook">
                                <i class="fa-brands fa-facebook-f text-white"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-center bg-secondary rounded-circle" style="width: 32px;height: 32px;" aria-label="Twitter">
                                <i class="fa-brands fa-twitter text-white"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-center bg-secondary rounded-circle" style="width: 32px;height: 32px;" aria-label="Instagram">
                                <i class="fa-brands fa-instagram text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>