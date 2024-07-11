<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/publikasi/') ?>">Publikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Publikasi</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Daftar Publikasi</h3>
    </div>
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
        <a href="<?= site_url('admin/pers/tambah') ?>" class="btn icon btn-primary float-end">Tambah Publikasi <i class="bi bi-plus-circle-fill float-end ms-2" style="margin-top: -2px;"></i></a>
    </div>
</div>
<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="daftarBuku">
                        <thead>
                            <tr>
                                <th class="text-center" width="1">No</th>
                                <th class="text-center">Judul Publikasi</th>
                                <th class="text-center">Katagori</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>
                                    <img src="http://localhost/BAPANAS-PUSTAKA/assets/img/cover/25def80aa128fdd57930905be68b8521.jpg" class="rounded-2 mb-3 me-2" height="100px" id="img-before" alt="...">
                                    <strong>Judul</strong>
                                </td>
                                <td class="text-center">
                                    <span class="badge text-bg-primary">Siaran Pers</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                        <button class="btn btn-secondary btn-sm mx-1"><i class="fa-solid fa-eye"></i></button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2.</td>
                                <td>
                                    <img src="http://localhost/BAPANAS-PUSTAKA/assets/img/cover/25def80aa128fdd57930905be68b8521.jpg" class="rounded-2 mb-3 me-2" height="100px" id="img-before" alt="...">
                                    <strong>Judul</strong>
                                </td>
                                <td class="text-center">
                                    <span class="badge text-bg-primary">Media NVA</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                        <button class="btn btn-secondary btn-sm mx-1"><i class="fa-solid fa-eye"></i></button>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>