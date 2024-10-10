<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/publikasi') ?>">Publikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
</header>

<div class="row">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Tambah Publikasi</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Form Tambah Publikasi</h4>
        </div>
        <hr class="my-0">
        <div class="card-content">
            <div class="card-body">
                <form method="POST" action="<?= site_url('admin/publikasi/createPublikasi') ?>" class="form form-horizontal" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Cover Publikasi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" name="cover" class="image-preview-filepond">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Judul Publikasi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="judul" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Tanggal Publikasi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="date" name="tanggal" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Kategori</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <select class="form-select" name="kategori">
                                            <option value="Publikasi Pers">Publikasi Pers</option>
                                            <option value="Media NFA">Media NFA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Deskripsi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <textarea id="deskripsiBuku" name="desc">

                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Batalkan</button>
                                <button type="submit" class="btn btn-primary w-100 me-1 mb-1">Tambah Publikasi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
