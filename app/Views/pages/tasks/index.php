<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>Tasks<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="p-2">
    <table id="tbUsers" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">Column 1</th>
                <th scope="col">Column 2</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script src="<?= base_url('assets/js/datatables/users.js') ?>"></script>
<?= $this->endSection() ?>