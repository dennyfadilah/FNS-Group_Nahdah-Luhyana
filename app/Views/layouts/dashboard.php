<?= $this->extend('layouts/main') ?>

<?= $this->section('style') ?>
<style>
    .offcanvas-setting {
        max-width: 18rem;
        margin-top: 3.5rem;
    }

    .offcanvas-setting,
    .list-group-item {
        color: #fff;
        background-color: #34495e !important;
        border: 0;
        font-size: 1.2rem;
    }

    .list-group-item.active {
        background-color: #495c6e !important;
    }

    .list-group-item:focus,
    .list-group-item:hover {
        background-color: #3f4f5f !important;
        color: #fff;
    }

    .main-content {
        padding-left: 18rem;
        margin-top: 4.5rem;
    }

    @media (max-width: 992px) {
        .main-content {
            padding-left: 0;
        }
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<?= $this->include('components/navbar') ?>
<div class="main-content">
    <div class="container-fluid">
        <?= $this->renderSection('content') ?></div>
</div>
<?= $this->endSection() ?>