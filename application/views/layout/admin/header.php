<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda - Admin Perpustakaan BAPANAS</title>

        <link rel="shortcut icon" href="<?= base_url('assets/compiled/png/logo-favicon.png') ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= base_url('assets/compiled/png/logo-favicon.png') ?>" type="image/png">
        <link rel="stylesheet" href="<?= base_url('assets/compiled/css/app.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/compiled/css/iconly.css') ?>">
    </head>

    <body>
        <script src="<?= base_url('assets/static/js/initTheme.js') ?>"></script>
        <div id="app">
            <div id="sidebar">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header position-relative">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url('assets/compiled/png/logo-primary.png') ?>" alt="Logo" srcset="" style="height: 3rem;"></a>
                            </div>
                            <div class="sidebar-toggler  x">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title">Menu</li>
                            <li
                                class="sidebar-item active ">
                                <a href="index.html" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Beranda</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last mb-1">
                        <h3 class="mb-2">Beranda</h3>
                        <p class="text-subtitle text-muted">Kelola dan perbarui informasi terbaru, artikel, serta sumber daya utama seputar pangan di halaman utama ini</p>
                    </div>
                    <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
                            </ol>
                        </nav>
                    </div> -->
                </div>
                <div class="page-content"> 
                    <section class="row">
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="d-flex justify-content-start">
                                                <div class="d-flex justify-content-start ">
                                                    <h4><i class="bi bi-book-half"></i></h4>
                                                </div>
                                                <div class="ms-3">
                                                    <h5 class="text-muted font-semibold">Katalog Buku</h5>
                                                    <h6 class="font-extrabold mb-0">1000</h6>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Profile Visit</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-profile-visit"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Profile Visit</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="d-flex align-items-center">
                                                        <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                            style="width:10px">
                                                            <use
                                                                xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                        </svg>
                                                        <h5 class="mb-0 ms-3">Europe</h5>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <h5 class="mb-0 text-end">862</h5>
                                                </div>
                                                <div class="col-12">
                                                    <div id="chart-europe"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="d-flex align-items-center">
                                                        <svg class="bi text-success" width="32" height="32" fill="blue"
                                                            style="width:10px">
                                                            <use
                                                                xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                        </svg>
                                                        <h5 class="mb-0 ms-3">America</h5>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <h5 class="mb-0 text-end">375</h5>
                                                </div>
                                                <div class="col-12">
                                                    <div id="chart-america"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="d-flex align-items-center">
                                                        <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                            style="width:10px">
                                                            <use
                                                                xlink:href="assets/static/images/bootstrap-icons.svg#circle-fill" />
                                                        </svg>
                                                        <h5 class="mb-0 ms-3">Indonesia</h5>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <h5 class="mb-0 text-end">1025</h5>
                                                </div>
                                                <div class="col-12">
                                                    <div id="chart-indonesia"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Latest Comments</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-lg">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Comment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="col-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-md">
                                                                        <img src="./assets/compiled/jpg/5.jpg">
                                                                    </div>
                                                                    <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                                </div>
                                                            </td>
                                                            <td class="col-auto">
                                                                <p class=" mb-0">Congratulations on your graduation!</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar avatar-md">
                                                                        <img src="./assets/compiled/jpg/2.jpg">
                                                                    </div>
                                                                    <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                                </div>
                                                            </td>
                                                            <td class="col-auto">
                                                                <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                                    this design?</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card">
                                <div class="card-body py-4 px-4">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img src="./assets/compiled/jpg/1.jpg" alt="Face 1">
                                        </div>
                                        <div class="ms-3 name">
                                            <h5 class="font-bold">John Duck</h5>
                                            <h6 class="text-muted mb-0">@johnducky</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Recent Messages</h4>
                                </div>
                                <div class="card-content pb-4">
                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="avatar avatar-lg">
                                            <img src="./assets/compiled/jpg/4.jpg">
                                        </div>
                                        <div class="name ms-4">
                                            <h5 class="mb-1">Hank Schrader</h5>
                                            <h6 class="text-muted mb-0">@johnducky</h6>
                                        </div>
                                    </div>
                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="avatar avatar-lg">
                                            <img src="./assets/compiled/jpg/5.jpg">
                                        </div>
                                        <div class="name ms-4">
                                            <h5 class="mb-1">Dean Winchester</h5>
                                            <h6 class="text-muted mb-0">@imdean</h6>
                                        </div>
                                    </div>
                                    <div class="recent-message d-flex px-4 py-3">
                                        <div class="avatar avatar-lg">
                                            <img src="./assets/compiled/jpg/1.jpg">
                                        </div>
                                        <div class="name ms-4">
                                            <h5 class="mb-1">John Dodol</h5>
                                            <h6 class="text-muted mb-0">@dodoljohn</h6>
                                        </div>
                                    </div>
                                    <div class="px-4">
                                        <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start Conversation</button>
                                    </div>
                                </div>
                            </div> 
                            <div class="card">
                                <div class="card-header">
                                    <h4>Visitors Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart-visitors-profile"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                                by <a href="https://saugi.me">Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= base_url('assets/static/js/components/dark.js') ?>"></script>
        <script src="<?= base_url('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
        <script src="<?= base_url('assets/compiled/js/app.js') ?>"></script>

        <!-- Need: Apexcharts -->
        <script src="<?= base_url('assets/extensions/apexcharts/apexcharts.min.js') ?>"></script>
        <script src="<?= base_url('assets/static/js/pages/dashboard.js') ?>"></script>

    </body>

</html>