<nav id="navbar" class="navbar navbar-expand-lg py-3">
    <div class="container-fluid d-block px-0">
        <div class="row">
            <div class="col-4 col-md-5 col-lg-6 order-md-2 my-auto">
                <div style="min-width: 122.5px">
                    <button type="button" class="btn btn-link d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-label="Menu">
                        <i class="fa-solid fa-bars fa-lg text-light-emphasis"></i>
                    </button>
                    <?= form_open('dashboard/search', ['method'=> 'GET', 'class' => 'd-none d-md-flex bg-transparent', 'style' => 'width: 360px;']) ?>
                        <div class="input-group border rounded-pill rounded-2 py-1">
                            <span class="input-group-text bg-transparent border-0 pe-0">
                                <i class="fa-solid fa-magnifying-glass text-dark-emphasis"></i>
                            </span>
                            <input type="search" class="form-control bg-transparent border-0 text-dark" id="search-desktop" name="q" placeholder="Ketik agen atau bandara" aria-label="Search">
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
            <div class="col-4 col-md-2 col-lg-1 text-center order-md-1 my-auto">
                <a class="navbar-brand m-0 order-md-1" href="<?= base_url('dashboard') ?>" style="width: auto;" aria-label="Logo">
                    <img src="<?= base_url('images/logo.png') ?>" class="logo img-fluid" alt="Logo">
                </a>
            </div>
            <div class="col-4 col-md-5 order-md-3 text-end my-auto">
                <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle text-light-emphasis pe-0" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="User Menu">
                        <i class="fa-solid fa-circle-user fa-lg text-light-emphasis"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?= base_url('dashboard/pengaturan/akun') ?>" aria-label="Akun">Pengaturan Akun</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('dashboard/pengaturan/akun#password') ?>" aria-label="Password">Ganti Password</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a href="<?= base_url('logout') ?>" class="dropdown-item" aria-label="Log Out"><i class="fa-solid fa-right-from-bracket text-danger me-2"></i><span class="text-danger">Log Out</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-md-none px-0 pt-4">
        <?= form_open('dashboard/search', ['method'=> 'GET', 'class' => 'd-flex w-100']) ?>
            <div class="input-group border rounded-pill rounded-2 py-1">
                <span class="input-group-text bg-transparent border-0 pe-0">
                    <i class="fa-solid fa-magnifying-glass text-dark-emphasis"></i>
                </span>
                <input type="search" class="form-control border-0 bg-transparent text-dark" id="search-mobile" name="q" placeholder="Ketik agen atau bandara" aria-label="Search">
            </div>
        <?= form_close() ?>
    </div>
</nav>