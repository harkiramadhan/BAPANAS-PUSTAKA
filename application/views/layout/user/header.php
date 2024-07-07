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

        <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-6.5.2-web/css/all.min.css') ?>">

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
                                <a href="<?= site_url('beranda') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'beranda') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Beranda</a>
                                <a href="<?= site_url('koleksi') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'koleksi') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Koleksi</a>
                                <a href="<?= site_url('kategori') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'kategori') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Kategori</a>
                                <a href="<?= site_url('pangan') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'pangan') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Publikasi Pangan</a>
                                <a href="<?= site_url('lokasi') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'lokasi') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Lokasi Perpustakaan</a>
                                <a href="<?= site_url('ppid') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'ppid') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">PPID</a>
                            </li>
                        </ul>
                        <div class="input-group d-none d-lg-flex z-1">
                            <input type="text" class="form-control border-0" placeholder="Cari buku" aria-label="Cari buku" style="background-color: #F3F3F3; padding: 12px 20px;">
                            <button class="btn z-0" type="button" style="background-color: #F3F3F3; border: none;">
                                <i class="bi bi-search" style="color: #A4A4A4;"></i>
                            </button>
                        </div>
                        <img class="rounded border d-none d-lg-block" src="<?= base_url('assets/user/image/flag-id.svg') ?>" alt="">
                        <!-- <div class="gap-2 d-flex">
                            <a href="<?= site_url('login') ?>" class="btn btn-transparent border-0 flex-fill px-5 py-3 fw-bold text-black-50">Masuk</a>
                            <a href="<?= site_url('register') ?>" class="btn btn-success flex-fill px-5 py-3 fw-bold">Daftar</a>
                        </div> -->

                        <!-- Header Ketika Login -->
                        <button class="btn btn-light ms-4 px-3 py-1"><i class="bi bi-journal-arrow-down" style="font-size: 1.5rem;"></i></button>
                        <div class="dropdown ms-2 d-none d-lg-block z-2">
                            <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle border" src="https://st3.depositphotos.com/9998432/13335/v/380/depositphotos_133352010-stock-illustration-default-placeholder-man-and-woman.jpg" alt="User Avatar" width="48" height="48">
                                <div class="ms-2">
                                    <span class="fw-bold text-black">Hai, Alfian</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="<?= site_url('user/akun/') ?>">Profil</a></li>
                                <li><a class="dropdown-item" href="<?= site_url('user/peminjaman/') ?>">Peminjaman</a></li>
                                <li><a class="dropdown-item text-danger" href="<?= site_url('logout') ?>"><i class="fa-solid fa-right-from-bracket me-2"></i>Keluar</a></li>
                            </ul>
                        </div>
                        <ul class="navbar-nav d-block d-lg-none me-auto mt-3 mb-0 mb-lg-0 px-3 py-2 border rounded">
                            <div class="d-flex align-items-center mb-3">
                                <img class="rounded-circle border" src="https://st3.depositphotos.com/9998432/13335/v/380/depositphotos_133352010-stock-illustration-default-placeholder-man-and-woman.jpg" alt="User Avatar" width="48" height="48">
                                <div class="ms-2">
                                    <span class="fw-bold text-black">Hai, Alfian</span>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a href="<?= site_url('user/akun/rofil') ?>" class="nav-link">Profil</a>
                                <a href="<?= site_url('user/peminjaman/') ?>" class="nav-link">Peminjaman</a>
                                <a href="<?= site_url('kategori') ?>" class="nav-link text-danger"><i class="fa-solid fa-right-from-bracket me-2"></i>Keluar</a>
                            </li>
                        </ul>
                        <!-- Header Ketika Login -->
                    </div>
                </div>
            </nav>
        </section>
        <!-- Main Nav -->

        <!-- Sub Nav -->
        <section id="subnav" class="d-none d-lg-block sticky-top z-1">
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container-xl">
                    <div class="navbar-nav gap-4">
                        <a href="<?= site_url('beranda') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'beranda') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Beranda</a>
                        <a href="<?= site_url('koleksi') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'koleksi') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Koleksi</a>
                        <a href="<?= site_url('kategori') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'kategori') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Kategori</a>
                        <a href="<?= site_url('pangan') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'pangan') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Publikasi Pangan</a>
                        <a href="<?= site_url('lokasi') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'lokasi') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">Lokasi Perpustakaan</a>
                        <a href="<?= site_url('ppid') ?>" class="nav-link text-white <?= ($this->uri->segment(1) == 'ppid') ? 'fw-semibold active' : 'fw-medium text-opacity-75' ?>">PPID</a>
                    </div>
                </div>
            </nav>
        </section>

        <div class="input-group d-flex d-lg-none p-3 pt-0">
            <input type="text" class="form-control border-0" placeholder="Cari buku" aria-label="Cari buku" style="background-color: #F3F3F3; padding: 12px 20px;">
            <button class="btn" type="button" style="background-color: #F3F3F3; border: none;">
                <i class="bi bi-search" style="color: #A4A4A4;"></i>
            </button>
        </div>
