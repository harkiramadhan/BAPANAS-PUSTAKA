<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/publikasi') ?>">Publikasi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Publikasi</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Daftar Publikasi</h3>
    </div>
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
        <a href="<?= site_url('admin/publikasi/tambah') ?>" class="btn icon btn-primary float-end">Tambah Publikasi <i class="bi bi-plus-circle-fill float-end ms-2" style="margin-top: -2px;"></i></a>
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
                                <th class="text-center" width="1">Tanggal</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($publikasi->result() as $row){ ?>
                                <tr>
                                    <td class="text-center"><?= $no ?>.</td>
                                    <td>
                                        <img src="<?= base_url('assets/img/cover/' . $row->cover) ?>" class="rounded-2 mb-3 me-2" height="100px" id="img-before" alt="...">
                                        <strong><?= $row->judul ?></strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge text-bg-primary"><?= $row->kategori ?></span>
                                    </td>
                                    <td class="text-center">
                                        <?= date('d/m/Y', strtotime($row->tanggal)) ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="<?= site_url('admin/publikasi/edit/' . md5($row->id)) ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="<?= site_url('publikasi/' . md5($row->id)) ?>" target="__BLANK" class="btn btn-secondary btn-sm mx-1"><i class="fa-solid fa-eye"></i></a>
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#remove-<?= md5($row->id) ?>"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade text-left" id="remove-<?= md5($row->id) ?>" tabindex="-1" aria-labelledby="remove-<?= md5($row->id) ?>" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h5 class="modal-title white" id="myModalLabel120">Hapus Publikasi
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                Hapus Publikasi <br>
                                                <img src="<?= base_url('assets/img/cover/' . $row->cover)?>" class="rounded-4" height="100px" alt="..."> <br>
                                                <strong><?= $row->judul ?></strong>
                                            </div>
                                            <form action="<?= site_url('admin/publikasi/removePublikasi/' . md5($row->id)) ?>" method="post">
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