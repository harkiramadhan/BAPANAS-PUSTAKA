<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item">Pustakawan</li>
        </ol>
    </nav>
</header>

<div class="row mb-3">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Daftar Pustakawan</h3>
    </div>
</div>
<div class="page-content"> 
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="daftarPustakawan">
                        <thead>
                            <tr>
                                <th class="text-center" width="1">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Jml. Peminjaman</th>
                                <th class="text-center">Tgl. Terdaftar</th>
                                <th class="text-center">Status</th>
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($pustakawan->result() as $row){ 
                                    $getPeminjaman = $this->db->select('id')->get_where('peminjaman', ['id_pustakawan' => $row->id])->num_rows();
                            ?>
                                <tr>
                                    <td class="text-center"><?= $no ?>.</td>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->email ?></td>
                                    <td class="text-center"><span class="badge text-bg-primary"><?= $getPeminjaman ?>x</span></td>
                                    <td class="text-center"><?= @$row->created_at ?></td>
                                    <td class="text-center"><span class="badge <?= (@$row->status == 1) ? 'text-bg-success' : 'text-bg-danger' ?>"><?= (@$row->status == 1) ? 'Aktif' : 'Tidak Aktif' ?></span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPeminjaman<?= $row->id ?>"><i class="fa-solid fa-eye"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <div class="modal fade text-left" id="editPeminjaman<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Data Peminjaman</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form form-horizontal">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">NIK</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="number" class="form-control" value="<?= $row->nik ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">Nama</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" value="<?= $row->nama ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">Jenis Kelamin</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" value="<?= ($row->jenkel === 'L') ? 'Laki Laki' : 'Perempuan' ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">WhatsApp</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="number" class="form-control" value="<?= $row->whatsapp ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">Email</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="email" class="form-control" value="<?= $row->email ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">Pekerjaan</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" value="<?= $row->pekerjaan ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="mb-0" for="contact-info-horizontal-icon">Pendidikan</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="form-group has-icon-left">
                                                                    <div class="position-relative">
                                                                        <input type="text" class="form-control" value="<?= $row->pendidikan ?>" disabled>
                                                                        <div class="form-control-icon">
                                                                            <i class="fa-solid fa-user-check"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="d-flex">
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">Batalkan</button>
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $no++; } ?>
                            <!-- Tambahkan lebih banyak peminjaman sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>