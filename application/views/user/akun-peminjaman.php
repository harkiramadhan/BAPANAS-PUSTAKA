<section class="pt-5 pb-0" style="background: #F3F3F3;">
    
    <div class="container-xl">
        <div class="text-center mb-5">
            <h3 class="mb-3">Mengelola Akun Pustakawan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Mengelola informasi akun Anda untuk pengalaman perpustakaan yang lebih baik.</p>
        </div>
        <ul class="nav nav-underline nav-fill">
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?= site_url('akun') ?>">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?= site_url('user/akun/password') ?>">Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url('peminjaman') ?>">Peminjaman</a>
            </li>
        </ul>
    </div>
</section>

<section class="py-5 rounded">
    <div class="container-xl">
        <div class="card p-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0" id="daftarPeminjaman">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul Buku</th>
                                <th class="text-center">Tgl. Pengajuan</th>
                                <th class="text-center">Tgl. Peminjaman</th>
                                <th class="text-center">Tgl. Pengembalian</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pinjaman->result() as $row){ ?>
                                <tr>
                                    <td valign="middle" class="text-center"><?= $no ?>.</td>
                                    <td valign="middle"><?= $row->judul ?></td>
                                    <td valign="middle" class="text-center"><?= date('d/m/Y H:i:s', strtotime($row->pengajuan)) ?></td>
                                    <td valign="middle" class="text-center"><?= ($row->tanggal) ? date('d/m/Y H:i:s', strtotime($row->tanggal)) : ' - ' ?></td>
                                    <td valign="middle" class="text-center"><?= ($row->pengembalian) ? date('d/m/Y H:i:s', strtotime($row->pengembalian)) : ' - ' ?></td>
                                    <td valign="middle" class="text-center">
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
                                    <td valign="middle" class="text-center">
                                        <?php if($row->status == 1): ?>
                                            <button class="btn btn-danger btn-sm">Batalkan</button>
                                        <?php elseif($row->status == 2): ?>
                                        <?php elseif($row->status == 3): ?>
                                            
                                        <?php elseif($row->status == 4): ?>
                                            <button class="btn btn-secondary disabled btn-sm">Dibatalkan</button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php $no++; } ?>
                            <!-- Tambahkan lebih banyak peminjaman sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
