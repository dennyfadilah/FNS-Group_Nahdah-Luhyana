<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aplikasi Task Management">
    <meta name="keywords" content="task, management, project, todo, list">
    <meta name="author" content="Denny Fadilah & Nahdah Luhyana">

    <title><?= $this->renderSection('title') ?></title>

    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/bootstrap-icons/font/bootstrap-icons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/datatables/css/datatables.min.css') ?>">

    <?= $this->renderSection('style') ?>
</head>

<body>

    <?= $this->renderSection('main') ?>

    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('vendor/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('vendor/datatables/js/datatables.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>

    <?= $this->renderSection('script') ?>
</body>

</html>