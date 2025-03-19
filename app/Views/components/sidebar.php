<?php
$currentPath = uri_string();
?>

<div class="offcanvas offcanvas-start show offcanvas-setting" data-bs-scroll="true" data-bs-backdrop="false"
    tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header d-flex align-item-center justify-content-between d-md-none">
        <h5><?= session('name') ?? 'Visitor' ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
            style="filter: invert(1); opacity: 1;" onmouseover="this.style.opacity='0.75'"
            onmouseout="this.style.opacity='1'">
        </button>
    </div>

    <div class="offcanvas-body">
        <div class="list-group list-group-flush mb-3">
            <a href="<?= site_url() ?>"
                class="list-group-item list-group-item-action <?= $currentPath === '' || $currentPath === '/' ? 'active' : '' ?>"
                aria-current="true">
                <i class="bi bi-house-door"></i>
                <span class="ms-2">Dashboard</span>
            </a>
            <a href="<?= site_url('projects') ?>"
                class="list-group-item list-group-item-action <?= $currentPath === 'projects' ? 'active' : '' ?>"
                aria-current="true">
                <i class="bi bi-share"></i>
                <span class="ms-2">Projects</span>
            </a>
            <a href="<?= site_url('tasks') ?>"
                class="list-group-item list-group-item-action <?= $currentPath === 'tasks' ? 'active' : '' ?>">
                <i class="bi bi-list-task"></i>
                <span class="ms-2">Tasks</span></a>
            <a href="<?= site_url('reports') ?>"
                class="list-group-item list-group-item-action <?= $currentPath === 'reports' ? 'active' : '' ?>">
                <i class="bi bi-graph-up"></i>
                <span class="ms-2">Reports</span></a>
            <a href="<?= site_url('users') ?>"
                class="list-group-item list-group-item-action <?= $currentPath === 'users' ? 'active' : '' ?>">
                <i class="bi bi-people"></i>
                <span class="ms-2">Users</span></a>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-none m-3">
        <a href="#" class="btn btn-outline-light">
            <i class="bi bi-person me-2"></i>Edit Profile
        </a>
        <a href="<?= site_url('logout') ?>" class="btn btn-danger">
            <i class="bi bi-box-arrow-right me-2"></i>Logout
        </a>
    </div>
</div>