<?= $this->extend('layouts/main') ?>

<?= $this->section('style') ?>
<style>
    .main-content {
        padding-top: 0;
        padding-bottom: 0;
        background-color: #f5f5f5;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="d-flex align-items-center justify-content-center vh-100 main-content">
    <?= $this->renderSection('content') ?>
</div>
<?= $this->endSection() ?>