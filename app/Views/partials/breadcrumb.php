<?php
$url        = explode('/', (trim(strtok($_SERVER['REQUEST_URI'], '?'))));
$baseUrl    = $url[1] == 'dashboard' ? 'dashboard' : '';
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url($baseUrl) ?>" aria-label="<?= ucwords($url[1]) ?>"><?= $url[1] == 'dashboard' ? 'Dashboard' : 'Beranda' ?></a>
        </li>
        <?php for($i = 0; $i < count($breadcrumb); $i++): ?>
            <?php if($i == count($breadcrumb) - 1): ?>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $breadcrumb[$i][0] ?>
                </li>
            <?php else: ?>
                <li class="breadcrumb-item">
                    <a href="<?= base_url($baseUrl . $breadcrumb[$i][1]) ?>" aria-label="<?= $breadcrumb[$i][0] ?>"><?= $breadcrumb[$i][0] ?></a>
                </li>
            <?php endif; ?>
        <?php endfor ?>
    </ol>
</nav>