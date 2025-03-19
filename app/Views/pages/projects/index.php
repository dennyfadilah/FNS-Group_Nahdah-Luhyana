<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>Projects<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card border-top-0">
    <div class="card-header border-3 border-top border-bottom-0 border-success">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title my-0">Projects</h5>
            <button type="button" class="btn btn-primary btn-sm" id="btnModalCreateProject" data-bs-toggle="modal"
                data-bs-target="#createProjectModal">
                Create Project
            </button>
            <?= view('pages/projects/create') ?>
        </div>
    </div>
    <div class="card-body border-top border-0">
        <div class="p-2">
            <table id="tbProject" class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Finish Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $i = 1;
                    foreach ($projects as $project):
                    ?>
                        <tr>
                            <td class="text-center"><?= $i++ ?></td>
                            <td>
                                <div>
                                    <h5><?= $project['project_name'] ?></h5><small><?= $project['description'] ?></small>
                                </div>
                            </td>
                            <td><?= date('d F Y', strtotime($project['start_date'])) ?></td>
                            <td><?= date('d F Y', strtotime($project['finish_date'])) ?></td>
                            <td>
                                <?php if ($project['status'] === 'On-Progress'): ?>
                                    <span class="badge bg-primary">On-Progress</span>
                                <?php elseif ($project['status'] === 'On-Hold'): ?>
                                    <span class="badge bg-warning">On-Hold</span>
                                <?php elseif ($project['status'] === 'Done'): ?>
                                    <span class="badge bg-success">Done</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <div class="dropdown-center">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                        id="btnActions" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-gear me-1"></i>Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#editProjectModal<?= $project['id'] ?>">
                                                Edit
                                            </button>
                                        </li>
                                        <li>
                                            <form action="<?= site_url('projects/delete/' . $project['id']) ?>"
                                                method="post"
                                                onsubmit="return confirm('Are you sure you want to delete this project?')">
                                                <button type="submit" class="dropdown-item">Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                    <div class="text-start"><?= view('pages/projects/edit', ['project' => $project]) ?>
                                    </div>
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
<script src="<?= base_url('assets/js/tables/project.js') ?>"></script>
<?= $this->endSection() ?>