<?php if (session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> <?= session('success') ?>
        <button type="button" class="btn-sm btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>