<nav class="navbar bg-secondary fixed-top">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between w-100">
            <div class="col-auto mx-5">
                <div class="row">
                    <div class="col-auto">
                        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                            <img src="<?= base_url('assets/images/logo/shiru.webp') ?>" alt="logo" width="30"
                                height="30" class="rounded-5"><span class="fw-bold text-white">FNS Group</span></a>
                    </div>
                    <div class="col-auto">
                        <button class="navbar-toggler navbar-toggler-sm" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="btnDropdown">
                        <i class="bi bi-person"></i> <span class="fs-6">Username</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start show offcanvas-setting" data-bs-scroll="true" data-bs-backdrop="false"
            tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-body">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <i class="bi bi-house-door"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                    <a href="<?= site_url('projects') ?>" class="list-group-item list-group-item-action"
                        aria-current="true">
                        <i class="bi bi-share"></i>
                        <span class="ms-2">Projects</span>
                    </a>
                    <a href="<?= site_url('tasks') ?>" class="list-group-item list-group-item-action">
                        <i class="bi bi-list-task"></i>
                        <span class="ms-2">Tasks</span></a>
                    <a href="<?= site_url('reports') ?>" class="list-group-item list-group-item-action">
                        <i class="bi bi-graph-up"></i>
                        <span class="ms-2">Reports</span></a>
                    <a href="<?= site_url('users') ?>" class="list-group-item list-group-item-action">
                        <i class="bi bi-people"></i>
                        <span class="ms-2">Users</span></a>
                </div>
            </div>
        </div>
    </div>
</nav>