<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda - Perpustakaan Digital Badan Pangan Nasional (BAPANAS)</title>

        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/user/bootstrap/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/user/css/custom.css') ?>">

    </head>

    <body>
        <!-- Main Nav -->
        <section id="mainnav">
            <nav class="navbar navbar-expand-lg bg-white py-3">
                <div class="container-xl justify-content-between">
                    <a class="navbar-brand d-flex align-items-center me-5" href="#">
                        <img src="<?= base_url('assets/user/image/logo-nav.png') ?>" alt="Bootstrap" width="" height="48">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse gap-3" id="navbarSupportedContent">
                        <ul class="navbar-nav d-block d-lg-none me-auto mt-3 mb-2 mb-lg-0 px-3 py-2 bg-success rounded">
                            <li class="nav-item">
                                <a class="nav-link text-white fw-bold active" aria-current="page" href="#">Beranda</a>
                                <a class="nav-link text-white fw-medium text-opacity-75" href="#">Koleksi</a>
                                <a class="nav-link text-white fw-medium text-opacity-75" href="#">Kategori</a>
                                <a class="nav-link text-white fw-medium text-opacity-75" href="#">Publikasi Pangan</a>
                                <a class="nav-link text-white fw-medium text-opacity-75" href="#">Lokasi Perpustakaan</a>
                                <a class="nav-link text-white fw-medium text-opacity-75" href="#">PPID</a>
                            </li>
                        </ul>
                        <div class="input-group d-none d-lg-flex">
                            <input type="text" class="form-control border-0" placeholder="Cari buku" aria-label="Cari buku" style="background-color: #F3F3F3; padding: 12px 20px;">
                            <button class="btn" type="button" style="background-color: #F3F3F3; border: none;">
                                <i class="bi bi-search" style="color: #A4A4A4;"></i>
                            </button>
                        </div>
                        <img class="rounded border d-none d-lg-block" src="<?= base_url('assets/user/image/flag-id.svg') ?>" alt="">
                        <div class="gap-2 d-flex">
                            <a href="" class="btn btn-transparent border-0 flex-fill px-5 py-3 fw-bold text-black-50">Masuk</a>
                            <a href="" class="btn btn-success flex-fill px-5 py-3 fw-bold">Daftar</a>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <!-- Main Nav -->

        <!-- Sub Nav -->
        <section id="subnav" class="d-none d-lg-block">
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container-xl">
                    <div class="navbar-nav gap-4">
                        <a class="nav-link text-white fw-semibold active" aria-current="page" href="#">Beranda</a>
                        <a class="nav-link text-white fw-medium text-opacity-75" href="#">Koleksi</a>
                        <a class="nav-link text-white fw-medium text-opacity-75" href="#">Kategori</a>
                        <a class="nav-link text-white fw-medium text-opacity-75" href="#">Publikasi Pangan</a>
                        <a class="nav-link text-white fw-medium text-opacity-75" href="#">Lokasi Perpustakaan</a>
                        <a class="nav-link text-white fw-medium text-opacity-75" href="#">PPID</a>
                    </div>
                </div>
            </nav>
        </section>

        <div class="input-group d-flex d-lg-none">
            <input type="text" class="form-control border-0" placeholder="Cari buku" aria-label="Cari buku" style="background-color: #F3F3F3; padding: 12px 20px;">
            <button class="btn" type="button" style="background-color: #F3F3F3; border: none;">
                <i class="bi bi-search" style="color: #A4A4A4;"></i>
            </button>
        </div>