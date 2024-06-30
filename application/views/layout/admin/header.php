<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda - Admin Perpustakaan BAPANAS</title>

        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/png">
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/admin/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/table-datatable-jquery.css') ?>">

        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/app.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/iconly.css') ?>">


        <link rel="stylesheet" href="<?= base_url('assets/admin/extensions/flatpickr/flatpickr.min.css')?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/extensions/choices.js/public/assets/styles/choices.css')?>">

        <!-- Place the first <script> tag in your HTML's <head> -->
        <?php if(
            ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'tambah') ||
            ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'edit')
        ): ?>
            <script src="https://cdn.tiny.cloud/1/2obp7gbxwuz79fd24bafjam688l4cn76aymkx3sa9py0j3xv/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <?php endif; ?>


        <link rel="stylesheet" href="<?= base_url('assets/admin/extensions/filepond/filepond.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/extensions/toastify-js/src/toastify.css') ?>">

        <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-6.5.2-web/css/all.min.css') ?>">

    </head>

    <body>
        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
        <script>
        tinymce.init({
            selector: '#deskripsiBuku',
            plugins: 'link image lists',
            toolbar: 'undo redo | bold italic underline | link image | bullist numlist | removeformat',
        });
        </script>

        <script src="<?= base_url('assets/admin/static/js/initTheme.js') ?>"></script>
        <div id="app">
        <?php $this->load->view('layout/admin/sidebar'); ?>
            <div id="main">