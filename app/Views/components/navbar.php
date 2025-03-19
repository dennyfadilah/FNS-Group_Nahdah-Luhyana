<nav class="navbar bg-secondary fixed-top">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between w-100">
            <div class="col-auto">
                <div class="row align-items-center justify-content-between gap-4">
                    <div class="col-auto">
                        <a class="navbar-brand d-flex align-items-center gap-2" href="<?= site_url() ?>">
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
            <div class="col-auto d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="btnDropdown">
                        <i class="bi bi-person"></i> <span class="fs-6"><?= session('name') ?? 'Visitor' ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('logout') ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?= view('components/sidebar') ?>
    </div>
</nav>