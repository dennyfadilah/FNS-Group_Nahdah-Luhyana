<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>Users<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card border-top-0">
    <div class="card-header border-3 border-top border-bottom-0 border-success">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title my-0">Users</h5>
            <button type="button" class="btn btn-primary btn-sm" id="btnModalCreateUser" data-bs-toggle="modal"
                data-bs-target="#createUserModal">
                Create User
            </button>
            <?= view('pages/users/create') ?>
        </div>
    </div>
    <div class="card-body border-top border-0">
        <div class="p-2">
            <table id="tbUser" class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php $i = 1;
                    foreach ($users as $user) : ?>
                        <tr>
                            <td class="text-center"><?= $i++ ?></td>
                            <td><?= $user['firstname'] . ' ' . $user['lastname'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['role'] ?></td>
                            <td class="text-center">
                                <div class="dropdown-center">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        id="btnActions" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-gear me-1"></i>Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#editUserModal<?= $user['id'] ?>">
                                                Edit
                                            </button>
                                        </li>
                                        <li class="<?= $user['role'] == 'admin' ? 'd-none' : '' ?>">
                                            <form action="<?= site_url('users/delete/' . $user['id']) ?>" method="post"
                                                onsubmit="return confirm('Are you sure you want to delete this user?')">
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="text-start"><?= view('pages/users/edit', ['user' => $user]) ?></div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('assets/js/tables/user.js') ?>"></script>

<script>
    const sessionError =
        '<?= session('errors.firstname') || session('errors.lastname') || session('errors.email') || session('errors.password') || session('errors.confirmPassword') ?>';

    if (sessionError) {
        $('#btnModalCreateUser').trigger('click');
    }
</script>
<?= $this->endSection() ?>