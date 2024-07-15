<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/buku/daftar') ?>">Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
</header>

<div class="row">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Tambah Katalog Buku</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Form Tambah Buku</h4>
        </div>
        <hr class="my-0">
        <div class="card-content">
            <div class="card-body">
                <form method="POST" action="<?= site_url('admin/buku/createBuku') ?>" class="form form-horizontal" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Cover Buku</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" name="cover" class="image-preview-filepond">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Judul Buku</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="judul" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email-horizontal-icon">Pengarang</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" name="pengarang" class="form-control" placeholder="Tulis disini ........." id="text-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill-check"></i>
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
                                        <select class="choices form-select multiple-remove" name="id_kategori[]" multiple="multiple">
                                            <?php foreach($kategori->result() as $ktg){ ?>
                                                <option value="<?= $ktg->id ?>"> <?= $ktg->kategori ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Jenis</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <select class=" form-select name="id_jenis[]">
                                            <?php foreach($jenis->result() as $jns){ ?>
                                                <option value="<?= $jns->id ?>"> <?= $jns->jenis ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">File Buku</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" name="filebuku" class="file-buku-preview">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Edisi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="edisi" placeholder="Tulis disini ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Penerbit</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="penerbit" placeholder="Tulis disini ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-journal-bookmark-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">ISBN</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="isbn" placeholder="Tulis disini ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-upc-scan"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Deskripsi Fisik</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="desc_fisik" placeholder="Tulis disini ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-body-text"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Subjek</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <select class=" form-select" name="">
                                            <option value="">000: Ilmu Komputer, Informasi, dan Karya Umum</option>
                                            <option value="">100: Filsafat dan Psikologi</option>
                                            <option value="">200: Agama</option>
                                            <option value="">300: Ilmu-ilmu Sosial</option>
                                            <option value="">400: Bahasa</option>
                                            <option value="">500: Ilmu-ilmu Alam dan Matematika</option>
                                            <option value="">600: Teknologi dan Ilmu-ilmuTerapan</option>
                                            <option value="">700: Kesenian, Hiburan, dan Olahraga</option>
                                            <option value="">800: Kesusastraan</option>
                                            <option value="">900: Sejarah dan Geografi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Bahasa</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="bahasa" placeholder="Tulis disini ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-translate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Call Number</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="call_number" placeholder="Tulis disini ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-phone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Deskripsi</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <textarea id="deskripsiBuku" name="desc">

                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Batalkan</button>
                                <button type="submit" class="btn btn-primary w-100 me-1 mb-1">Tambah Buku</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
