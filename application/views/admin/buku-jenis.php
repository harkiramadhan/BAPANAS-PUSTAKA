<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/buku/daftar') ?>">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Jenis Buku</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-0">Daftar Jenis Buku</h3>
    </div>
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
        <button class="btn icon btn-primary float-end"  data-bs-toggle="modal" data-bs-target="#tambahJenis">Tambah Jenis Buku <i class="bi bi-plus-circle-fill float-end ms-2" style="margin-top: -2px;"></i></button>
    </div>
</div>

<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="daftarJenis">
                        <thead>
                            <tr>
                                <th class="text-center" width="1">No</th>
                                <th class="text-center">Judul Jenis</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($jenis->result() as $row){ ?>
                                <tr>
                                    <td class="text-center"><?= $no ?>.</td>
                                    <td ><span class="badge text-bg-primary ms-3"><?= $row->jenis ?></span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#edit-<?= md5($row->id) ?>"><i class="fa-solid fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove-<?= md5($row->id) ?>"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade text-left" id="edit-<?= md5($row->id) ?>" tabindex="-1" role="dialog" aria-labelledby="edit-<?= md5($row->id) ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Jenis Buku</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form action="<?= site_url('admin/buku/editJenis/' . md5($row->id)) ?>" method="POST" class="form form-horizontal">
                                                <div class="modal-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="first-name-horizontal-icon">Judul Jenis</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="text" name="jenis" value="<?= $row->jenis ?>" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon" required>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-tag"></i>
                                                                        </div>
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

                                <div class="modal fade text-left" id="remove-<?= md5($row->id) ?>" tabindex="-1" aria-labelledby="remove-<?= md5($row->id) ?>" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title white" id="myModalLabel120">Hapus Jenis Buku
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                Hapus Jenis Buku <br>
                                                <strong><?= $row->jenis ?></strong>
                                            </div>
                                            <form action="<?= site_url('admin/buku/removeJenis/' . md5($row->id)) ?>" method="post">
                                                <input type="hidden" name="jenis" value="<?= $row->jenis ?>">
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


<div class="modal fade text-left" id="tambahJenis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jenis Buku</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="<?= site_url('admin/buku/createJenis') ?>" method="POST" class="form form-horizontal">
                <div class="modal-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Judul Jenis</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="jenis" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon" required>
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-tag"></i>
                                        </div>
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