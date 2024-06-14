<div class="alert-wrapper position-fixed">
    <?php if (session()->has('errors')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="ps-3 m-0">
                <?php foreach(session()->get('errors') as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <button type="button" class="btn btn-link py-0" data-bs-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark text-light-emphasis"></i>
            </button>
        </div>
    <?php endif; ?>
    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->get('error') ?>
            <button type="button" class="btn btn-link py-0" data-bs-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark text-light-emphasis"></i>
            </button>
        </div>
    <?php endif; ?>
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->get('success') ?>
            <button type="button" class="btn btn-link py-0" data-bs-dismiss="alert" aria-label="Close">
                <i class="fa-solid fa-xmark text-light-emphasis"></i>
            </button>
        </div>
    <?php endif; ?>
</div>