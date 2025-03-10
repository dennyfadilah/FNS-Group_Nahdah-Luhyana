<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>Users<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title my-0">Users</h5>
            <a href="<?= base_url('users/create') ?>" class="btn btn-outline-primary btn-sm">Create User</a>
        </div>
    </div>
    <div class="card-body">
        <div class="p-2">
            <table id="tbUsers" class="table table-striped table-hover">
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
                    <tr>
                        <td class="text-center">1</td>
                        <td>John Doe</td>
                        <td>D5M8t@example.com</td>
                        <td>Admin</td>
                        <td class="text-center">
                            <div class="dropdown-center">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                    id="btnActions" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-gear me-1"></i>Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>John Doe</td>
                        <td>D5M8t@example.com</td>
                        <td>Admin</td>
                        <td class="text-center">
                            <div class="dropdown-center">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle btnActions"
                                    type="button" id="btnActions" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-gear me-1"></i>Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('assets/js/datatables/users.js') ?>"></script>

<script>
$('#btnActions').each(function() {
    $(this).on('click', function() {
        $(this).dropdown("toggle");
    });
})
</script>
<?= $this->endSection() ?>