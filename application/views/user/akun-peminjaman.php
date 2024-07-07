<section class="pt-5 pb-0" style="background: #F3F3F3;">
    
    <div class="container-xl">
        <div class="text-center mb-5">
            <h3 class="mb-3">Mengelola Akun Pustakawan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Mengelola informasi akun Anda untuk pengalaman perpustakaan yang lebih baik.</p>
        </div>
        <ul class="nav nav-underline nav-fill">
            <li class="nav-item">
                <a class="nav-link text-success" href="<?= site_url('user/akun/') ?>">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-success" href="<?= site_url('user/akun/password') ?>">Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url('user/peminjaman') ?>">Peminjaman</a>
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
                            <tr class="py-3">
                                <th class="text-center">No</th>
                                <th class="text-center">Judul Buku</th>
                                <th class="text-center">Tgl. Peminjaman</th>
                                <th class="text-center">Tgl. Pengembalian</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td valign="middle" class="text-center">1.</td>
                                <td valign="middle">Mikrobiologi Pangan Edisi 5</td>
                                <td valign="middle" class="text-center">2023-06-01</td>
                                <td valign="middle" class="text-center">2023-06-10</td>
                                <td valign="middle" class="text-center"><span class="badge text-bg-primary">Dalam Peminjaman</span></td>
                                <td valign="middle" class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPeminjaman"><i class="fa-solid fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Tambahkan lebih banyak peminjaman sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
