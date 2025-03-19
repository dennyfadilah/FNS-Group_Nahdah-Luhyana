<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card w-100" style="max-width: 300px; background-color: rgba(255, 255, 255, 0.5);">
    <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
            <img src="<?= base_url('assets/images/logo/shiru.webp') ?>" alt="logo" class="" width="50">
            <h2>FNS Group</h2>
        </div>
        <form action="<?= site_url('login') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <div class="input-group mb-3">
                    <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>"
                        id="email" name="email" value="<?= old('email') ?>" aria-label="email"
                        aria-describedby="basic-addon1">
                    <span class="input-group-text rounded-end" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group mb-3">
                    <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>"
                        id="password" name="password" aria-label="password" aria-describedby="basic-addon1">
                    <span class="input-group-text rounded-end"><i class="bi bi-eye-slash-fill"
                            id="togglePassword"></i></span>
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary w-100">Sign In</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>

</script>
<?= $this->endSection() ?>