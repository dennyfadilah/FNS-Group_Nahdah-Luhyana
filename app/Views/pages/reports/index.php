<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>Reports<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card border-top-0">
    <div class="card-header border-3 border-top border-bottom-0 border-success">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="card-title my-0">Reports</h5>
            <button type="button" class="btn btn-primary btn-sm" id="btnPrint">
                <i class="bi bi-printer-fill me-2"></i>Print
            </button>
        </div>
    </div>
    <div class="card-body border-top border-0">
        <div class="p-2">
            <table id="tbReport" class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-center">No.</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Task</th>
                        <th scope="col">Task Completed</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td class="text-center">No.</td>
                        <td>
                            <div>
                                <h5 class="text-primary my-0">Project</h5>
                                <small>Due: 12/03/2025</small>
                            </div>
                        </td>
                        <td class="text-center">5</td>
                        <td class="text-center">1</td>
                        <td>Duration</td>
                        <td>
                            <div>
                                <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" style="height: 8px">
                                    <div class="progress-bar bg-success" style="width: 25%"></div>
                                </div>
                                <small>80% Completed</small>
                            </div>
                        </td>
                        <td>On-Progress || On-Hold || Done</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('assets/js/tables/report.js') ?>"></script>
<?= $this->endSection() ?>