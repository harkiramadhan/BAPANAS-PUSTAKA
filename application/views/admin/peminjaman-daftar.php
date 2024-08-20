<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peminjaman</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Daftar Peminjaman</h3>
    </div>
</div>
<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="daftarPeminjaman">
                        <thead>
                            <tr>
                                <th class="text-center" width="1">No</th>
                                <th class="text-center">Judul Buku</th>
                                <th class="text-center">Peminjam</th>
                                <th class="text-center">Tgl. Pengajuan</th>
                                <th class="text-center">Tgl. Peminjaman</th>
                                <th class="text-center">Tgl. Pengembalian</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pinjaman->result() as $row){ ?>
                                <tr>
                                    <td class="text-center"><?= $no ?>.</td>
                                    <td><?= $row->judul ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td class="text-center"><?= date('d/m/Y H:i:s', strtotime($row->pengajuan)) ?></td>
                                    <td class="text-center"><?= ($row->tanggal) ? date('d/m/Y', strtotime($row->tanggal)) : ' - ' ?></td>
                                    <td class="text-center"><?= ($row->pengembalian) ? date('d/m/Y', strtotime($row->pengembalian)) : ' - ' ?></td>
                                    <td class="text-center">
                                        <?php if($row->status == 1): ?>
                                            <span class="badge text-bg-primary">Sedang diajukan</span>
                                        <?php elseif($row->status == 2): ?>
                                            <span class="badge text-bg-info">Sedang dipinjam</span>
                                        <?php elseif($row->status == 3): ?>
                                            <span class="badge text-bg-success">Selesai dipinjam</span>
                                        <?php elseif($row->status == 4): ?>
                                            <span class="badge text-bg-secondary">Telah dibatalkan</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm me-1 btn-edit" 
                                                data-id="<?= md5($row->id) ?>"
                                                data-nama="<?= $row->nama ?>"
                                                data-judul="<?= $row->judul ?>"
                                                data-tanggal="<?= $row->tanggal ?>"
                                                data-pengembalian="<?= $row->pengembalian ?>"
                                                data-status="<?= $row->status ?>"
                                            ><i class="fa-solid fa-pencil"></i></button>
                                            <!-- <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button> -->
                                        </div>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                            <!-- Tambahkan lebih banyak peminjaman sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade text-left" id="editPeminjaman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Peminjaman</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form method="POST" action="<?= site_url('admin/peminjaman/update') ?>" class="form form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="id" class="edit-id" value="">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mb-0" for="contact-info-horizontal-icon">Peminjam</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control edit-nama" placeholder="Tulis disini ........." id="contact-info-horizontal-icon" value="" disabled>
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-user-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Judul Buku</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control edit-judul" placeholder="Tulis disini ........." id="first-name-horizontal-icon" disabled>
                                        <div class="form-control-icon">
                                            <i class="bi bi-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Tgl. Peminjaman</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                    <input name="tanggal" type="date" class="form-control flatpickr edit-tanggal" placeholder="Select date..">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-clock"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Tgl. Pengembalian</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                    <input name="pengembalian" type="date" class="form-control flatpickr edit-pengembalian" placeholder="Select date..">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-clock"></i>
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
                                        <select name="status" class="form-control form-select edit-status">
                                            <option value="1">Sedang diajukan</option>
                                            <option value="2">Sedang dipinjam</option>
                                            <option value="3">Selesai dipinjam</option>
                                            <option value="4">Telah dibatalkan</option>
                                        </select>
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-clock"></i>
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
                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

