<div class="modal fade" id="createProjectModal" tabindex="-1" aria-labelledby="createProjectModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createProjectModalLabel">Create Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= site_url('projects/create') ?>" method="post">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="col border-end">
                            <div class="mb-3">
                                <label for="project_name" class="form-label">Project Name</label>
                                <input type="text" class="form-control" id="project_name" name="project_name"
                                    value="<?= old('project_name') ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="manager_id" class="form-label">Project Manager</label>
                                <input type="text" class="form-control" id="manager_id" name="manager_id">
                            </div>

                            <div class="mb-3">
                                <label for="user_id" class="form-label">Team Project</label>
                                <input type="text" class="form-control" id="user_id" name="user_id">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>
                            <div class="mb-3">
                                <label for="finish_date" class="form-label">Finish Date</label>
                                <input type="date" class="form-control" id="finish_date" name="finish_date">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
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