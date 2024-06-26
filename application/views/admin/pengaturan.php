<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Pengturan Dashboard Admin</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <h5 class="card-title mb-4">Informasi</h5>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Logo Perpustakaan</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" class="image-preview-filepond">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Judul Website</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-3" style="border-style: dashed;">
                            <h5 class="card-title mb-4">Kata Sandi admin</h5>
                            <div class="col-md-4">
                                <label for="email-horizontal-icon">Sandi Baru</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="password" class="form-control" placeholder="Tulis disini ........." id="text-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email-horizontal-icon">Ulangi Kata Sandi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="password" class="form-control" placeholder="Tulis disini ........." id="text-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-3">
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Batalkan</button>
                                <button type="submit" class="btn btn-primary w-100 me-1 mb-1">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
