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
                                <th class="text-center" width="1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1.</td>
                                <td class="d-flex">
                                    <img src="<?= base_url('assets/admin/static/images/faces/2.jpg')?>" class="rounded-4" height="100px" alt="...">
                                    <div class="ms-3">
                                        <p class="m-0 fw-bolder">FGD Tata Kelola Perberasan Nasional</p>
                                        <p class="m-0">Tata kelola perberasan nasional menjadi perhatian bersama mengingat komoditas pangan pokok strategis ini dikonsumsi oleh mayoritas masyarakat Indonesia. Aspek ketersediaan dan stabilitas beras menjadi penting karena berdampak pada stabilitas ekonomi.  </p>
                                        
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#tambahBanner"><i class="fa-solid fa-pencil"></i></button>
                                        <button id="question" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            
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
            <div class="modal-body">
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="mb-0" for="contact-info-horizontal-icon">Upload Banner</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" class="image-preview-filepond">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="mb-0" for="first-name-horizontal-icon">Judul Banner</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
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
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-tag"></i>
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
                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>