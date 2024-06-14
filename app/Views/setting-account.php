<?= $this->extend("layouts/dashboard") ?>

<?= $this->section("main") ?>
<?= $this->include('partials/breadcrumb') ?>
<section class="container-fluid px-0">
    <h3 class="section-title">Pengaturan Akun</h3>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill fw-bold active" id="pills-email-tab" data-bs-toggle="pill" data-bs-target="#pills-email" type="button" role="tab" aria-controls="pills-email" aria-selected="false" aria-label="Email">Email</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill fw-bold" id="pills-username-tab" data-bs-toggle="pill" data-bs-target="#pills-username" type="button" role="tab" aria-controls="pills-username" aria-selected="false" aria-label="Username">Username</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link rounded-pill fw-bold" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false" aria-label="Password">Password</button>
        </li>
    </ul>
    <div class="row">
        <div class="col-md-6">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-email" role="tabpanel" aria-labelledby="pills-email-tab" tabindex="0">
                    <div class="card border-0 shadow">
                        <div class="card-body text-dark">
                            <h4 class="h5 fw-bold">Email</h4>
                            <p class="text-light-emphasis">Email yang tertera adalah email aktif yang digunakan saat ini.</p>
                            <div class="alert alert-warning my-3" role="alert">
                                <p class="mb-0">Ganti email di bawah jika diperlukan. Tekan tombol "<strong>simpan</strong>" untuk mengganti email.</p>
                            </div>
                            <?= form_open('dashboard/pengaturan/akun/simpan?q=email') ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control on-blur bg-transparent border-0 border-bottom rounded-0 text-dark" id="email" name="email" placeholder="Email" value="<?= $contents->email ?>">
                                    <label for="email"><i class="fa-solid fa-envelope fa-xs text-secondary me-2"></i>Email</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end gap-2">
                                    <button type="button" class="btn btn-link reset" data-tab="email" aria-label="Reset" disabled>
                                        <i class="fa-solid fa-rotate-right me-2"></i>Reset
                                    </button>
                                    <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#emailModal" data-tab="email" aria-label="Save" disabled>
                                        <i class="fa-solid fa-floppy-disk me-2"></i>Simpan
                                    </button>
                                </div>
                                <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <p>Apakah anda yakin ingin mengganti email dengan "<strong>Lorem.Ipsum@gmail.com</strong>"?</p>
                                                <div class="alert alert-warning d-flex align-items-center text-start mb-0" role="alert">
                                                    <i class="fa-solid fa-triangle-exclamation me-3"></i>
                                                    <p class="mb-0">Pastikan email baru sudah benar!<br>Semua informasi akan dialihkan ke email yang baru.<br>Data pada email lama tidak dapat dipindahkan.</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center border-0 pt-0">
                                                <button type="button" class="btn btn-outline-primary rounded-pill" data-bs-dismiss="modal" aria-label="Cancel">Batal</button>
                                                <button type="submit" class="btn btn-primary rounded-pill" aria-label="Save">Ganti</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-username" role="tabpanel" aria-labelledby="pills-username-tab" tabindex="0">
                    <div class="card border-0 shadow">
                        <div class="card-body text-dark">
                            <h4 class="h5 fw-bold">Username</h4>
                            <p class="text-light-emphasis">Username ini digunakan saat anda log in ke dalam halaman dashboard.</p>
                            <?= form_open('dashboard/pengaturan/akun/simpan?q=username') ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control on-blur bg-transparent border-0 border-bottom rounded-0 text-dark" id="username" name="username" placeholder="Username" value="<?= $contents->username ?>">
                                    <label for="username"><i class="fa-solid fa-user fa-xs text-secondary me-2"></i>Username</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end gap-2">
                                    <button type="button" class="btn btn-link reset" data-tab="username" aria-label="Reset" disabled>
                                        <i class="fa-solid fa-rotate-right me-2"></i>Reset
                                    </button>
                                    <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#usernameModal" data-tab="username" aria-label="Save" disabled>
                                        <i class="fa-solid fa-floppy-disk me-2"></i>Simpan
                                    </button>
                                </div>
                                <div class="modal fade" id="usernameModal" tabindex="-1" aria-labelledby="usernameModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <p>Apakah anda yakin ingin mengganti username dengan "<strong>LoremIpsum</strong>"?</p>
                                                <div class="alert alert-warning d-flex align-items-center text-start mb-0" role="alert">
                                                    <i class="fa-solid fa-triangle-exclamation me-3"></i>
                                                    <p class="mb-0">Dengan mengganti username anda akan log out dari halaman dashbaord.<br>Silahkan log in kembali dengan username yang baru.</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-center border-0 pt-0">
                                                <button type="button" class="btn btn-outline-primary rounded-pill" data-bs-dismiss="modal" aria-label="Cancel">Batal</button>
                                                <button type="submit" class="btn btn-primary rounded-pill" aria-label="Save">Ganti</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab" tabindex="0">
                    <div class="card border-0 shadow mb-4">
                        <div class="card-body text-dark">
                            <h4 class="h5 fw-bold">Password Saat Ini</h4>
                            <p class="text-light-emphasis">Password ini digunakan saat anda log in ke dalam halaman dashboard.</p>
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="password" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="hint-password" placeholder="Password" value="<?= $contents->hint ?>" readonly>
                                    <label for="hint-password"><i class="fa-solid fa-user fa-xs text-secondary me-2"></i>Password</label>
                                </div>
                                <span class="input-group-text border-0 border-bottom rounded-0 bg-transparent">
                                    <button type="button" class="btn btn-link p-1" id="btn-hint" aria-label="Hint Password">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 shadow">
                        <div class="card-body text-dark">
                            <h4 class="h5 fw-bold">Ganti Password</h4>
                            <?= form_open('dashboard/pengaturan/akun/simpan?q=password') ?>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control on-blur bg-transparent border-0 border-bottom rounded-0 text-dark" id="password" name="password" placeholder="Password Baru">
                                    <label for="password"><i class="fa-solid fa-user fa-xs text-secondary me-2"></i>Password Baru</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control bg-transparent border-0 border-bottom rounded-0 text-dark" id="match-password" name="match-password" placeholder="Masukkan Ulang">
                                    <label for="match-password"><i class="fa-solid fa-user fa-xs text-secondary me-2"></i>Masukkan Ulang</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-end gap-2">
                                    <button type="submit" class="btn btn-primary rounded-pill" data-tab="password" aria-label="Save" disabled>
                                        <i class="fa-solid fa-floppy-disk me-2"></i>Ganti
                                    </button>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const url       = window.location.href
        const hintBtn   = document.getElementById('btn-hint')
        const resetBtn  = document.getElementsByClassName('reset')
        const formInput = document.getElementsByClassName('on-blur')

        if(url.match('#')) {
            let call    = url.split('#')[1]
            let el      = document.querySelector('#pills-' + call + '-tab')

            el.click()
        }

        hintBtn.addEventListener("click", () => {
            let hintEl = document.getElementById('hint-password')

            if(hintEl.type == 'password') {
                hintEl.type = 'text'
            } else {
                hintEl.type = 'password'
            }
        })

        Array.from(resetBtn).forEach(btn =>  {
            btn.addEventListener("click", () => {
                location.reload()
            })
        })

        Array.from(formInput).forEach(input =>  {
            input.addEventListener("change", () => {
                let el = document.querySelectorAll('[data-tab="' + input.id + '"]')
                
                el.forEach(btn => {
                    btn.removeAttribute('disabled')
                })
            })
        })
    })
</script>
<?= $this->endSection() ?>