<header class="mb-3 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="index.html">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Kategori</li>
        </ol>
    </nav>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
            <h3 class="mb-2">Daftar Kategori Buku</h3>
            <p class="text-subtitle text-muted">Kelola daftar kategori buku yang tersedia di perpustakaan BAPANAS.</p>
        </div>
        <div class="col-12 col-lg-6 order-md-1 order-last mb-1 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
            <a href="#" class="btn icon btn-primary float-end">Tambah Kategori Buku <i class="bi bi-plus-circle-fill float-end ms-2" style="margin-top: -2px;"></i></a>
        </div>
    </div>

    <div class="page-content"> 
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="daftarKategoriBuku">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kategori 1</td>
                                    <td>Deskripsi Kategori 1</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kategori 2</td>
                                    <td>Deskripsi Kategori 2</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-secondary btn-sm"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak kategori sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>