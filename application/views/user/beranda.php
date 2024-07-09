<section>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <?php $bsno=0; foreach($banner->result() as $b){ ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $bsno ?>" <?= ($bsno == 0) ? 'class="active" aria-current="true"'  : '' ?> aria-label="<?= $b->judul ?>"></button>
            <?php $bsno++; } ?>
        </div>
        <div class="carousel-inner">
            <?php $bno=1; foreach($banner->result() as $b){ ?>
                <div class="carousel-item <?= ($bno == 1) ? 'active' : '' ?>">
                    <div class="carousel-background" style="background-image: url('<?= base_url('assets/img/banner/' . $b->banner) ?>');"></div>
                    <div class="carousel-foreground">
                        <img src="<?= base_url('assets/img/banner/' . $b->banner) ?>" alt="<?= $b->judul ?>" class="foreground-img">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $b->judul ?></h5>
                            <p><?= $b->sub_judul ?></p>
                        </div>
                    </div>
                </div>
            <?php $bno++; } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<!-- Publikasi Pangan Terbaru -->
<section class="py-5 z-0">
    <div class="container-xl">

        <!-- Publikasi Pangan -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0">Pangan Terbaru</h4>
            <a href="" class="text-black-50 link-underline-light">Tampilkan lebih banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="row mb-2">
            <div class="col-12 col-md-3 col-lg-3 z-0 z-0">
                <a href="" style="text-decoration: none;">
                    <div class="position-relative p-3 pb-0 rounded-4 text-center shadow-sm mb-4 z-1" style="background: #F4F4F4;">
                        <div class="position-absolute w-100 start-0 bottom-0 rounded-4 z-n1" style="background: #CFCFCF; height: 180px;"></div>
                        <h6 class="fw-semibold text-black mb-3">Indeks Ketahanan Pangan Tahun 2022</h6>
                        <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-top-3" alt="" width="90%" style="height: 200px; object-fit: cover; object-position: top;">
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 z-0">
                <a href="" style="text-decoration: none;">
                    <div class="position-relative p-3 pb-0 rounded-4 text-center shadow-sm mb-4 z-1" style="background: #F4F4F4;">
                        <div class="position-absolute w-100 start-0 bottom-0 rounded-4 z-n1" style="background: #CFCFCF; height: 180px;"></div>
                        <h6 class="fw-semibold text-black mb-3">Indeks Ketahanan Pangan Tahun 2022</h6>
                        <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-top-3" alt="" width="90%" style="height: 200px; object-fit: cover; object-position: top;">
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 z-0">
                <a href="" style="text-decoration: none;">
                    <div class="position-relative p-3 pb-0 rounded-4 text-center shadow-sm mb-4 z-1" style="background: #F4F4F4;">
                        <div class="position-absolute w-100 start-0 bottom-0 rounded-4 z-n1" style="background: #CFCFCF; height: 180px;"></div>
                        <h6 class="fw-semibold text-black mb-3">Indeks Ketahanan Pangan Tahun 2022</h6>
                        <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-top-3" alt="" width="90%" style="height: 200px; object-fit: cover; object-position: top;">
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 z-0">
                <a href="" style="text-decoration: none;">
                    <div class="position-relative p-3 pb-0 rounded-4 text-center shadow-sm mb-4 z-1" style="background: #F4F4F4;">
                        <div class="position-absolute w-100 start-0 bottom-0 rounded-4 z-n1" style="background: #CFCFCF; height: 180px;"></div>
                        <h6 class="fw-semibold text-black mb-3">Indeks Ketahanan Pangan Tahun 2022</h6>
                        <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-top-3" alt="" width="90%" style="height: 200px; object-fit: cover; object-position: top;">
                    </div>
                </a>
            </div>
        </div>

        <!-- Icon Menu BAPANAS -->
         <div class="d-flex flex-wrap flex-lg-nowrap gap-4">
            <a href="" style="text-decoration: none;">
                <div class="position-relative flex-fill d-flex flex-row gap-3 border rounded-4 shadow-sm p-3">
                    <img src="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" clas="flex-shrink-1" alt="" height="80">
                    <div class="d-flex flex-column">
                        <h6 class="mb-2 fw-bolder text-black">Peta Pangan Indonesia</h6>
                        <p class="text-body-tertiary mb-0">Peta tematik yang menggambarkan visualisasi geografis wilayah rentan terhadap kerawanan pangan. </p>
                    </div>
                    <i class="position-absolute bi bi-arrow-up-right top-0 end-0 mt-2 me-3" style="font-size: 32px; color: #A4A4A4;"></i>
                </div>
            </a>
            <a href="" style="text-decoration: none;">
                <div class="position-relative flex-fill d-flex flex-row gap-3 border rounded-4 shadow-sm p-3">
                    <img src="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" clas="flex-shrink-1" alt="" height="80">
                    <div class="d-flex flex-column">
                        <h6 class="mb-2 fw-bolder text-black">Peta Pangan Indonesia</h6>
                        <p class="text-body-tertiary mb-0">Peta tematik yang menggambarkan visualisasi geografis wilayah rentan terhadap kerawanan pangan. </p>
                    </div>
                    <i class="position-absolute bi bi-arrow-up-right top-0 end-0 mt-2 me-3" style="font-size: 32px; color: #A4A4A4;"></i>
                </div>
            </a>
         </div>
    </div>
</section>

<!-- Rekomendasi Buku Pangan -->
<section class="py-5" style="background: #F4F4F4;">
    <div class="container-xl">
        <!-- Rekomendasi Buku Pangan -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">Publikasi Pangan Terbaru</h3>
            <a href="<?= site_url('user/pangan') ?>" class="text-black-50 link-underline-light">Lebih banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="row mb-2">
            <?php 
                    foreach($bukupangan->result() as $bp){ 
                ?>
                <div class="col-12 col-md-3 col-lg-3 mb-3">
                    <a href="<?= site_url('user/koleksi/detail/' . md5($bp->id)) ?>" style="text-decoration: none;">
                        <div class="position-relative">
                            <?php if($bp->cover): ?>
                            <img src="<?= base_url('assets/img/cover/' . $bp->cover) ?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                            <?php endif; ?>
                            <!-- <span class="position-absolute bg-warning shadow text-white py-2 px-4 start-0 mt-5 rounded-end-4 fw-semibold">Pupuler</span> -->
                        </div>
                        
                        <?php if (in_array("2", json_decode($bp->jenis))) : ?>
                            <p class="text-success mb-2 fw-light">
                                <i class="bi bi-check-circle-fill me-1"></i>Tersedia Offline
                            </p>
                        <?php elseif (in_array("1", json_decode($bp->jenis))) : ?>
                            <p class="text-success mb-2 fw-light">
                                <i class="bi bi-link-45deg me-1"></i></i>Tersedia Online
                            </p>
                        <?php endif; ?>

                        
                        <h5 class="fw-semibold mb-1 text-black">
                            <?php 
                                $judul = $bp->judul;
                                echo strlen($judul) > 25 ? substr($judul, 0, 25) . '..' : $judul;
                            ?>
                        </h5>                    
                        <p class="text-secondary mb-2 fw-light"><?= $bp->pengarang ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Rekomendasi Buku Lainnya -->
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">
        <!-- Rekomendasi Buku Lainnya -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">Rekomendasi Lainnya</h3>
            <a href="<?= site_url('user/koleksi/') ?>" class="text-black-50 link-underline-light">Lebih banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="row mb-2">
            <?php 
                foreach($buku->result() as $bu){ 
            ?>
            <div class="col-12 col-md-3 col-lg-3 mb-3">
                <a href="<?= site_url('user/koleksi/detail/' . md5($bu->id)) ?>" style="text-decoration: none;">
                    <div class="position-relative">
                        <?php if($bu->cover): ?>
                        <img src="<?= base_url('assets/img/cover/' . $bu->cover) ?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                        <?php endif; ?>
                        <!-- <span class="position-absolute bg-warning shadow text-white py-2 px-4 start-0 mt-5 rounded-end-4 fw-semibold">Pupuler</span> -->
                    </div>

                    <?php if (in_array("2", json_decode($bu->jenis))) : ?>
                        <p class="text-success mb-2 fw-light">
                            <i class="bi bi-check-circle-fill me-1"></i>Tersedia Offline
                        </p>
                    <?php elseif (in_array("1", json_decode($bu->jenis))) : ?>
                        <p class="text-success mb-2 fw-light">
                            <i class="bi bi-link-45deg me-1"></i></i>Tersedia Online
                        </p>
                    <?php endif; ?>

                    <h5 class="fw-semibold mb-1 text-black">
                        <?php 
                            $judul = $bu->judul;
                            echo strlen($judul) > 25 ? substr($judul, 0, 25) . '..' : $judul;
                        ?>
                    </h5>                    
                    <p class="text-secondary mb-2 fw-light"><?= $bu->pengarang ?></p>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Kategori Buku -->
<section class="py-3" style="background: #FFF;">
    <div class="container-xl">
        <!-- Kategori Buku -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">Kategori</h3>
            <a href="<?= site_url('kategori') ?>" class="text-black-50 link-underline-light">Lebih banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="row mb-2">
            <?php foreach($kategori->result() as $kt){ ?>
                <div class="col-12 col-md-3 col-lg-2 mb-3">
                    <a href="" style="text-decoration: none;">
                        <div class="d-flex flex-column rounded-3 p-3 shadow-sm position-relative" style="height: 200px; background: linear-gradient(180deg, rgba(220, 167, 3, 0.4) -0.79%, #DCA703 88.82%), url('<?= base_url('assets/img/kategori/' . $kt->cover)?>'); background-size: cover; background-position: center;">
                            <h5 class="fw-semibold mt-auto mb-1 text-white"><?= $kt->kategori ?></h5>
                            <p class="text-white mb-0 fw-light">214+ Buku</p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<!-- Beritas Terbaru Bapans -->
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">
        <!-- Beritas Terbaru Bapans -->
        <div class="text-center mb-5">
            <h3 class="mb-3">Berita Terbaru BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit,ed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 col-lg-3 mb-3">
                <a href="" style="text-decoration: none;">
                    <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 216px; object-fit: cover; object-position: top;">
                    <h5 class="fw-semibold mb-2 text-black">NFA Perkuat Indikator Peta Ketahanan dan Kerentanan Pangan Secara ...</h5>
                    <p class="text-secondary mb-2 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    <a href="" class="text-success nav-link mb-3" style="text-decoration: none;">Lanjutkan membaca</a>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" class="border rounded-circle p-1" alt="Bootstrap" width="40" height="40">
                        <d class="d-flex flex-column">
                            <p class="fw-semibold mb-0">BAPANAS</p>
                            <span class="mb-0 text-black-50">31 Januari 2024</span>
                        </d>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 mb-3">
                <a href="" style="text-decoration: none;">
                    <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 216px; object-fit: cover; object-position: top;">
                    <h5 class="fw-semibold mb-2 text-black">NFA Perkuat Indikator Peta Ketahanan dan Kerentanan Pangan Secara ...</h5>
                    <p class="text-secondary mb-2 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    <a href="" class="text-success nav-link mb-3" style="text-decoration: none;">Lanjutkan membaca</a>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" class="border rounded-circle p-1" alt="Bootstrap" width="40" height="40">
                        <d class="d-flex flex-column">
                            <p class="fw-semibold mb-0">BAPANAS</p>
                            <span class="mb-0 text-black-50">31 Januari 2024</span>
                        </d>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 mb-3">
                <a href="" style="text-decoration: none;">
                    <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 216px; object-fit: cover; object-position: top;">
                    <h5 class="fw-semibold mb-2 text-black">NFA Perkuat Indikator Peta Ketahanan dan Kerentanan Pangan Secara ...</h5>
                    <p class="text-secondary mb-2 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    <a href="" class="text-success nav-link mb-3" style="text-decoration: none;">Lanjutkan membaca</a>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" class="border rounded-circle p-1" alt="Bootstrap" width="40" height="40">
                        <d class="d-flex flex-column">
                            <p class="fw-semibold mb-0">BAPANAS</p>
                            <span class="mb-0 text-black-50">31 Januari 2024</span>
                        </d>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 mb-3">
                <a href="" style="text-decoration: none;">
                    <img src="<?= base_url('assets/user/image/Indeks Ketahanan Pangan Tahun 2023.png')?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 216px; object-fit: cover; object-position: top;">
                    <h5 class="fw-semibold mb-2 text-black">NFA Perkuat Indikator Peta Ketahanan dan Kerentanan Pangan Secara ...</h5>
                    <p class="text-secondary mb-2 fw-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
                    <a href="" class="text-success nav-link mb-3" style="text-decoration: none;">Lanjutkan membaca</a>
                    <div class="d-flex align-items-center gap-2">
                        <img src="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" class="border rounded-circle p-1" alt="Bootstrap" width="40" height="40">
                        <d class="d-flex flex-column">
                            <p class="fw-semibold mb-0">BAPANAS</p>
                            <span class="mb-0 text-black-50">31 Januari 2024</span>
                        </d>
                    </div>
                </a>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-warning py-3 px-5">Tampilkan Lebih Banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>

<section class="py-5 bg-primary">
    <div class="container-xl">
        <div class="row">
            <div class="col-6">
                <h4 class="text-white lh-base">Menemukan masalah? <br> Kami siap membantu</h4>
            </div>
            <div class="col-6 align-content-center">
                <a href="#" class="btn btn-light flex-fill px-5 py-3 fw-bold float-end">HUBUNGI KAMI</a>
            </div>
        </div>
    </div>
</section>

