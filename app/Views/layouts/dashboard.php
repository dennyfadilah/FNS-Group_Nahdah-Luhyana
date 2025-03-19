<?= $this->extend('layouts/main') ?>

<?= $this->section('style') ?>
<style>
.offcanvas-setting {
    max-width: 18rem;
    margin-top: 3.5rem;
}

.offcanvas-setting,
.list-group-item-action {
    color: #fff;
    background-color: #34495e !important;
    border: 0;
    font-size: 1.2rem;
}

.list-group-item-action.active {
    background-color: #495c6e !important;
}

.list-group-item-action:focus,
.list-group-item-action:hover {
    background-color: #3f4f5f !important;
    color: #fff;
}

.main-content {
    padding-left: 18rem;
    margin-top: 4.5rem;
}

.alert {
    position: fixed;
    top: 4.5rem;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1050;
}

@media (max-width: 768px) {
    .main-content {
        padding-left: 0;
    }

    .offcanvas-setting {
        max-width: 100%;
        margin-top: 0rem;
    }
}
</style>
<?= $this->endSection() ?>

<?= $this->section('main') ?>

<?= view('components/alert') ?>
<?= $this->include('components/navbar') ?>

<div class="main-content">
    <div class="container-fluid">

        <?= $this->include('components/breadcrumb') ?>

        <hr class="border border-warning border-2">

        <?= $this->renderSection('content') ?>

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$(() => {
    $(".navbar-toggler").click(function() {
        // Cek lebar layar
        if ($(window).width() > 768) { // Hanya berlaku untuk layar lebar (desktop)
            if ($('#offcanvasNavbar').hasClass('show')) {
                $('.main-content').animate({
                    paddingLeft: '0rem'
                }, 300); // Animasi selama 300ms
            } else {
                $('.main-content').animate({
                    paddingLeft: '18rem'
                }, 300); // Animasi selama 300ms
            }
        }
    });
});
</script>
<?= $this->endSection() ?>