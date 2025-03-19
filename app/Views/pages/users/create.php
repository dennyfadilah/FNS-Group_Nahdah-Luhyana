<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createUserModalLabel">Create User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('users/create') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col border-end">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    value="<?= old('firstname') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    value="<?= old('lastname') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" id="role" name="role" required>
                                    <option value="admin" <?= old('role') === 'admin' ? 'selected' : '' ?>>Admin
                                    </option>
                                    <option value="user" <?= old('role') !== 'admin' ? 'selected' : '' ?>>User</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input type="file" class="form-control" id="avatar" name="avatar">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" id="email"
                                    name="email" value="<?= old('email') ?>" required>
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <input type="password"
                                        class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>"
                                        id="password" name="password" aria-label="password"
                                        aria-describedby="togglePassword" required>
                                    <span class="input-group-text rounded-end"><i class="bi bi-eye-slash-fill"
                                            id="togglePassword"></i></span>
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <div class="input-group mb-3">
                                    <input type="password"
                                        class="form-control <?= session('errors.confirmPassword') ? 'is-invalid' : '' ?>"
                                        id="confirmPassword" name="confirmPassword" aria-label="confirmPassword"
                                        aria-describedby="toggleConfirmPassword" required>
                                    <span class="input-group-text rounded-end"><i class="bi bi-eye-slash-fill"
                                            id="toggleConfirmPassword"></i></span>
                                    <div class="invalid-feedback">
                                        <?= session('errors.confirmPassword') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>