<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/landing/banner') ?>">Landing</a></li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-0">Daftar Banner Landing Page</h3>
    </div>
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
        <button class="btn icon btn-primary float-end"  data-bs-toggle="modal" data-bs-target="#tambahBanner">Tambah Banner Landing Page <i class="bi bi-plus-circle-fill float-end ms-2" style="margin-top: -2px;"></i></button>
    </div>
</div>

<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="daftarKategori">
                        <thead>
                            <tr>
                                <th class="text-center" width="1">No</th>
                                <th class="text-center">Banner</th>
                                <th class="text-center" width="10%">Status</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($banner->result() as $row){ ?>
                                <tr>
                                    <td class="text-center"><?= $no ?>.</td>
                                    <td class="d-flex">
                                        <?php if($row->banner): ?>
                                            <img src="<?= base_url('assets/img/banner/' . $row->banner )?>" class="rounded-4" height="100px" alt="...">
                                        <?php endif; ?>
                                        <div class="ms-3">
                                            <p class="m-0 fw-bolder"><?= $row->judul ?></p>
                                            <p class="m-0"><?= $row->sub_judul ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm w-100 <?= ($row->status == 1) ? 'btn-success' : 'btn-danger' ?>"> <?= ($row->status == 1) ? 'ACTIVE' : 'NON ACTIVE' ?></button>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm me-1 btn-edit" data-id="<?= md5($row->id) ?>" data-judul="<?= $row->judul ?>" data-sub-judul="<?= $row->sub_judul ?>" data-img="<?= base_url('assets/img/banner/' . $row->banner) ?>" data-status="<?= $row->status ?>"><i class="fa-solid fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove-<?= md5($row->id) ?>"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>    

                                <div class="modal fade text-left" id="remove-<?= md5($row->id) ?>" tabindex="-1" aria-labelledby="remove-<?= md5($row->id) ?>" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title white" id="myModalLabel120">Hapus Banner
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                Hapus Banner <br>
                                                <?php if(@$row->banner): ?>
                                                    <img src="<?= base_url('assets/img/banner/' . $row->banner)?>" class="rounded-4" height="100px" alt="..."> <br>
                                                <?php endif; ?>
                                                <strong><?= $row->judul ?></strong> <br>
                                                <small><strong><?= $row->sub_judul ?></strong></small>
                                            </div>
                                            <form action="<?= site_url('admin/landing/removeBanner/' . md5($row->id)) ?>" method="post">
                                                <input type="hidden" name="judul" value="<?= $row->judul ?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">Batalkan</button>
                                                    <button type="submit" class="btn btn-sm btn-danger me-1 mb-1">Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade text-left" id="tambahBanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Banner Landing Page</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="<?= site_url('admin/landing/createBanner') ?>" method="POST" class="form form-horizontal" enctype="multipart/form-data" >
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mb-0" for="contact-info-horizontal-icon">Upload Banner</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" name="banner" class="image-preview-filepond">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Judul Banner</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="judul" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Sub Judul</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="sub_judul" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Status</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="1" selected> ACTIVE</option>
                                            <option value="0"> NON ACTIVE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex">
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Banner Landing Page</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="<?= site_url('admin/landing/editBanner') ?>" method="POST" class="form form-horizontal" enctype="multipart/form-data" >
                <input type="hidden" name="id" id="banner-id">
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                    
                            <img src="" id="img-before" class="rounded-4 mb-3" alt="...">
                            
                            <div class="col-md-4 mt-3">
                                <label class="mb-0" for="contact-info-horizontal-icon">Upload Banner</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" name="banner" class="image-preview-filepond-for-edit">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Judul Banner</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="judul" id="judul-edit" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Sub Judul</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="sub_judul" id="sub_judul-edit" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Status</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <select name="status" id="status-edit" class="form-control form-select">
                                            <option value="1" selected> ACTIVE</option>
                                            <option value="0"> NON ACTIVE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="d-flex">
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>