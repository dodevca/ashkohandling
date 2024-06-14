<?= $this->extend("layouts/singgle") ?>

<?= $this->section("main") ?>
<section class="container-fluid position-relative vh-100 mb-0 bg-image" style="background-image: url('<?= base_url('images/bg-3.png') ?>');margin-top: -93.19px !important;">   
    <div class="card border-0 shadow top-50 start-50 translate-middle" style="max-width: 480px;">
        <div class="card-body text-dark">
            <h1 class="h5 text-center fw-bold mb-4">Log In</h1>
            <h2 class="h6 text-light-emphasis">Masukkan username dan password untuk masuk kedalam dashboard.</h2>
            <?= form_open('auth') ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="username" name="u" placeholder="Username">
                    <label for="username"><i class="fa-solid fa-user fa-xs text-secondary me-2"></i>Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="password" name="p" placeholder="Password">
                    <label for="password"><i class="fa-solid fa-key fa-xs text-secondary me-2"></i>Password</label>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill w-100 mt-3" aria-label="Log In">
                    Log In
                </button>
            <?= form_close() ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>