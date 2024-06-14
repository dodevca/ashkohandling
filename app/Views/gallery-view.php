<?= $this->extend("layouts/main") ?>

<?= $this->section("main") ?>
<section class="container mt-4 mt-md-5">
    <?= $this->include('partials/breadcrumb') ?>
    <h1 class="section-title mb-0"><?= $title ?></h1>
    <time datetime="<?= $date ?>" class="small text-light-emphasis"><i class="fa-solid fa-calendar text-secondary me-2"></i><?= $dateFormat ?></time> 
    <div class="mt-3">
        <?= $description ?>
    </div>
    <div class="d-grid grid-md border-top pt-4 mt-4 gap-3">
        <?php foreach($contents as $content): ?>
            <img src="<?= base_url('images/lazy.png') ?>" data-src="<?= base_url('images/album/' . $content) ?>" class="w-100 h-auto rounded-2 lazyload" alt="<?= $title ?> Image">    
        <?php endforeach; ?>
    </div>
</section>
<?= $this->endSection() ?>