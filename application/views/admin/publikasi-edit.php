<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/publikasi') ?>">Publikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
</header>

<div class="row">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Edit Publikasi</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Form Edit Publikasi</h4>
        </div>
        <hr class="my-0">
        <div class="card-content">
            <div class="card-body">
                <form method="POST" action="<?= site_url('admin/publikasi/editPublikasi/' . md5($publikasi->id)) ?>" class="form form-horizontal" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Cover Publikasi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <?php if($publikasi->cover): ?>
                                            <img src="<?= base_url('assets/img/cover/' . $publikasi->cover)?>" class="rounded-2 mb-3" height="200px" id="img-before" alt="...">
                                        <?php endif; ?>
                                        <input type="file" name="cover" class="image-preview-filepond-for-edit">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Judul Publikasi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="judul" class="form-control" value="<?= $publikasi->judul ?>" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
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
                                        <input type="date" name="tanggal" class="form-control" value="<?= $publikasi->tanggal ?>" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
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
                                            <option <?= ($publikasi->kategori == 'Publikasi Pers') ? 'selected' : '' ?> value="Publikasi Pers">Publikasi Pers</option>
                                            <option <?= ($publikasi->kategori == 'Media NVA') ? 'selected' : '' ?> value="Media NVA">Media NVA</option>
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
                                        <textarea id="deskripsiBuku" name="desc"><?= $publikasi->desc ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Batalkan</button>
                                <button type="submit" class="btn btn-primary w-100 me-1 mb-1">Simpan Publikasi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
