<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<title>App</title>

<div class="container p-5">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </div>
    <div class="card p-2 bg-warning text-center">
        <i class="bi bi-exclamation-triangle fs-1"></i>
        <p class="lead my-0">Views/app</p>
    </div>
</div>
<?= $this->endSection() ?>