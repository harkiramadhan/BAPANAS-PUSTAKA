<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="index.html">Aktivitas Perpustakaan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Peminjaman</li>
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
                                <th class="text-center">No</th>
                                <th class="text-center">Judul Buku</th>
                                <th class="text-center">Peminjam</th>
                                <th class="text-center">Tgl. Peminjaman</th>
                                <th class="text-center">Tgl. Pengembalian</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td>Mikrobiologi Pangan Edisi 5</td>
                                <td>Alfian Rahmatullah</td>
                                <td class="text-center">2023-06-01</td>
                                <td class="text-center">2023-06-10</td>
                                <td class="text-center"><span class="badge text-bg-primary">Dalam Peminjaman</span></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editPeminjaman"><i class="fa-solid fa-pencil"></i></button>
                                        <button  id="question" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
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
            <div class="modal-body">
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mb-0" for="contact-info-horizontal-icon">Peminjam</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="contact-info-horizontal-icon" value="Alfian Rahmatullah" disabled>
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
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon" value="Mikrobiologi Pangan Edisi 5" disabled>
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
                                    <input type="date" class="form-control flatpickr-no-config" placeholder="Select date..">
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
                                    <input type="date" class="form-control flatpickr-no-config" placeholder="Select date..">
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
                                        <select class="form-control form-select">
                                            <option value="dalamPeminjaman">Dalam Peminjaman</option>
                                            <option value="pengembalianTerlambat">Pengembalian Terlambat</option>
                                            <option value="peminjamanselesai">Peminjaman Selesai</option>
                                        </select>
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-clock"></i>
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

