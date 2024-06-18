<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda - Admin Perpustakaan BAPANAS</title>

        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/png">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/app.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/iconly.css') ?>">

        <!-- Datatable CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/table-datatable-jquery.css') ?>">

    </head>

    <body>
        <script src="<?= base_url('assets/static/js/initTheme.js') ?>"></script>
        <div id="app">
        <?php $this->load->view('layout/admin/sidebar'); ?>
            <div id="main">