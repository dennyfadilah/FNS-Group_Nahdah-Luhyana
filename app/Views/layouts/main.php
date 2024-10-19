<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap-icons/font/bootstrap-icons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/datatables/css/datatables.min.css') ?>">
</head>

<body>

    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('vendor/bootrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('vendor/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('vendor/datatables/js/datatables.min.js') ?>"></script>
</body>

</html>