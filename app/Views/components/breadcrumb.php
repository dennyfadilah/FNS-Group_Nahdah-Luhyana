<?php
$currentPath = uri_string();
?>

<nav aria-label="breadcrumb">
    <h2 class="my-1"><?= $currentPath === '' || $currentPath === '/' ? 'Dashboard' : ucfirst($currentPath) ?></h2>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= site_url() ?>" class="text-decoration-none"><i
                    class="bi bi-house-door me-2"></i>Dashboard</a></li>
        <li class="<?= $currentPath === '' || $currentPath === '/' ? 'd-none' : 'breadcrumb-item active' ?>"
            aria-current="page"><?= ucfirst($currentPath) ?></li>
    </ol>
</nav>