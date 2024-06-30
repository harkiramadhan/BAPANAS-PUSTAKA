<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Utama</li>
        </ol>
    </nav>
</header>

<div class="row">
    <div class="col-12 order-md-1 order-last mb-1">
        <h3 class="mb-2">Beranda</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="row">
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex justify-content-start ">
                            <h4><i class="bi bi-person-fill-check"></i></h4>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-muted font-semibold">Peminjam</h5>
                            <h6 class="font-extrabold mb-0"><?= $peminjam ?></h6>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex justify-content-start ">
                            <h4><i class="bi bi-people-fill"></i></h4>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-muted font-semibold">Anggota</h5>
                            <h6 class="font-extrabold mb-0"><?= $anggota ?></h6>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex justify-content-start ">
                            <h4><i class="bi bi-book-half"></i></h4>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-muted font-semibold">Jumlah Buku</h5>
                            <h6 class="font-extrabold mb-0"><?= $buku ?></h6>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-4 py-4">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex justify-content-start ">
                            <h4><i class="bi bi-tags-fill"></i></h4>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-muted font-semibold">Kategori</h5>
                            <h6 class="font-extrabold mb-0"><?= $kategori ?></h6>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>