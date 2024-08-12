<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/landing/banner') ?>">Landing</a></li>
            <li class="breadcrumb-item active" aria-current="page">Footer</li>
        </ol>
    </nav>
</header>

<div class="row">
    <div class="col-12 col-lg-6 order-md-1 order-last mb-1 text-center text-lg-start">
        <h3 class="mb-2">Footer Landing Page</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="<?= site_url('admin/landing/updateFooter') ?>" enctype="multipart/form-data" >
                    <div class="form-body">
                        <div class="row">
                            <h5 class="card-title mb-4">Logo & Deskripsi</h5>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Logo Footer</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="file" class="image-preview-filepond" name="logo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="first-name-horizontal-icon">Deskripsi Footer</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="first-name-horizontal-icon" name="desc" value="<?= $footer->desc ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-2 mb-3" style="border-style: dashed;">
                            <h5 class="card-title mb-4">Alamat & Kontak</h5>
                            <div class="col-md-4">
                                <label for="email-horizontal-icon">Alamat</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="text-horizontal-icon" name="alamat" value="<?= $footer->alamat ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Telfon</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Tulis disini ........." id="text-horizontal-icon" name="phone" value="<?= $footer->phone ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Email</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="email" class="form-control" placeholder="Tulis disini ........." id="text-horizontal-icon" name="email" value="<?= $footer->email ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person-fill-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <hr class="mt-2 mb-3" style="border-style: dashed;">
                            <h5 class="card-title mb-4">Informasi</h5>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 1</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 2</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 3</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 4</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 5</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <hr class="mt-2 mb-3" style="border-style: dashed;">
                            <h5 class="card-title mb-4">Pintasan</h5>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 1</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 2</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 3</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 4</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Menu 5</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Judul ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <hr class="mt-2 mb-3" style="border-style: dashed;">
                            <h5 class="card-title mb-4">Social Media</h5>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Instagram</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon" name="instagram" value="<?= $footer->instagram ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Facebook</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon" name="facebook" value="<?= $footer->facebook ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Twitter</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon" name="twitter" value="<?= $footer->twitter ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="contact-info-horizontal-icon">Youtube</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-icon-left">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Link ........." id="contact-info-horizontal-icon" name="youtube" value="<?= $footer->youtube ?>">
                                        <div class="form-control-icon">
                                            <i class="bi bi-layout-sidebar-inset-reverse"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end mt-3">
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Batalkan</button>
                                <button type="submit" class="btn btn-primary w-100 me-1 mb-1">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
