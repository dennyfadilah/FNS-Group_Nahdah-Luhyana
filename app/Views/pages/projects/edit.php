<div class="modal fade" id="editProjectModal<?= $project['id'] ?>" tabindex="-1" aria-labelledby="editProjectModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editProjectModalLabel">Edit Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('projects/edit/' . $project['id']) ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col border-end">
                            <div class="mb-3">
                                <label for="project_name" class="form-label">Project Name</label>
                                <input type="text" class="form-control" id="project_name" name="project_name"
                                    value="<?= $project['project_name'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="manager_id" class="form-label">Project Manager</label>
                                <input type="text" class="form-control" id="manager_id" name="manager_id"
                                    value="<?= $project['manager_id'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="user_id" class="form-label">Team Project</label>
                                <input type="text" class="form-control" id="user_id" name="user_id"
                                    value="<?= $project['user_id'] ?>">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select text-dark">
                                    <option value="On-Progress"
                                        <?= $project['status'] === 'On-Progress' ? 'selected' : '' ?>>On-Progress
                                    </option>
                                    <option value="On-Hold" <?= $project['status'] === 'On-Hold' ? 'selected' : '' ?>>
                                        On-Hold</option>
                                    <option value="Done" <?= $project['status'] === 'Done' ? 'selected' : '' ?>>Done
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    value="<?= $project['start_date'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="finish_date" class="form-label">Finish Date</label>
                                <input type="date" class="form-control" id="finish_date" name="finish_date"
                                    value="<?= $project['finish_date'] ?>">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description"
                                    name="description"><?= $project['description'] ?></textarea>
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