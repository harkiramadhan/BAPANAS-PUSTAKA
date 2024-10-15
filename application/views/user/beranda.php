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
        <div class="row">
            <div class="col-md-4 mb-3">
                <h6 class="mb-3 fw-bolder">Publikasi Pers</h6>
                <div class="slider slider-1 mb-2">
                    <?php foreach($publikasi_pers->result() as $pr){ ?>
                        <div class="slider-item position-relative">
                            <h4 class="text-left fw-bolder w-75">
                                <?php  echo strlen($pr->judul) > 45 ? substr($pr->judul, 0, 45) . '..' : $pr->judul; ?>
                            </h4>
                            <p><i class="fas fa-calendar me-2 text-warning"></i> <?= date('d', strtotime($pr->tanggal)) . ' ' . bulan(date('m', strtotime($pr->tanggal))) . ' ' . date('Y', strtotime($pr->tanggal)) ?></p>
                            <a href="#" class="d-flex text-white mt-auto position-absolute align-items-center z-2 bottom-0 mb-4" style="text-decoration: none;">
                                <button class="btn btn-light rounded-pill me-3" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></button> Selengkapnya
                            </a>
                            <img src="<?= base_url('assets/img/cover/' . $pr->cover) ?>" class="rounded-2 shadow-lg mb-3" alt="" width="170px" style="height: auto; object-fit: cover; object-position: top;">
                        </div>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="#" class="mb-3 text-muted link-underline-light text-center mt-3">lihat semua</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <h6 class="mb-3 fw-bolder">Media NFA</h6>
                <div class="slider slider-2 mb-2">
                    <?php foreach($media_nva->result() as $nv){ ?>
                        <div class="slider-item position-relative">
                            <h4 class="text-left fw-bolder w-75">
                                <?php  echo strlen($nv->judul) > 45 ? substr($nv->judul, 0, 45) . '..' : $nv->judul; ?>
                            </h4>
                            <p><i class="fas fa-calendar me-2 text-warning"></i> <?= date('d', strtotime($nv->tanggal)) . ' ' . bulan(date('m', strtotime($nv->tanggal))) . ' ' . date('Y', strtotime($nv->tanggal)) ?></p>
                            <a href="#" class="d-flex text-white mt-auto position-absolute align-items-center z-2 bottom-0 mb-4" style="text-decoration: none;">
                                <button class="btn btn-light rounded-pill me-3" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></button> Selengkapnya
                            </a>
                            <img src="<?= base_url('assets/img/cover/' . $nv->cover) ?>" class="rounded-2 shadow-lg mb-3" alt="" width="170px" style="height: auto; object-fit: cover; object-position: top;">
                        </div>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="#" class="mb-3 text-muted link-underline-light text-center mt-3">lihat semua</a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <h6 class="mb-3 fw-bolder">Koleksi Terbaru</h6>
                <div class="slider slider-3 mb-2">
                    <?php foreach($bukuBuku->result() as $b){ ?>
                    <div class="slider-item position-relative">
                        <h4 class="text-left fw-bolder w-75">
                            <?php  echo strlen($b->judul) > 45 ? substr($b->judul, 0, 45) . '..' : $b->judul; ?>
                        </h4>
                        
                        <a href="<?= site_url('koleksi/' . md5($b->id)) ?>" class="d-flex text-white mt-auto position-absolute align-items-center z-2 bottom-0 mb-4" style="text-decoration: none;">
                            <button class="btn btn-light rounded-pill me-3" style="width: 40px; height: 40px;"><i class="bi bi-arrow-right"></i></button> Selengkapnya
                        </a>
                        <img src="<?= base_url('assets/img/cover/' . $b->cover) ?>" class="rounded-2 shadow-lg mb-3" alt="" width="170px" style="height: auto; object-fit: cover; object-position: top;">
                    </div>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="<?= site_url('koleksi') ?>" class="mb-3 text-muted link-underline-light text-center mt-3">lihat semua</a>
                </div>
            </div>
        </div>

        <!-- Icon Menu BAPANAS -->
        <!-- xx`x`` -->
    </div>
</section>

<!-- Rekomendasi Buku Pangan -->
<section class="py-5" style="background: #F4F4F4;">
    <div class="container-xl">
        <!-- Rekomendasi Buku Pangan -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0">Publikasi Pangan Terbaru</h3>
            <a href="<?= site_url('pangan') ?>" class="text-black-50 link-underline-light">Lebih banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="row mb-2">
            <?php 
                    foreach($bukupangan->result() as $bp){ 
                ?>
                <div class="col-12 col-md-3 col-lg-3 mb-3">
                    <a href="<?= site_url('koleksi/' . md5($bp->id)) ?>" style="text-decoration: none;">
                        <div class="position-relative px-2">
                            <?php if($bp->cover): ?>
                            <img src="<?= base_url('assets/img/cover/' . $bp->cover) ?>" class="rounded-4 shadow mb-3" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                            <?php endif; ?>
                            <!-- <span class="position-absolute bg-warning shadow text-white py-2 px-4 start-0 mt-5 rounded-end-4 fw-semibold">Pupuler</span> -->
                        </div>
                        
                        <div class="px-2">
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
                        </div>
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
            <a href="<?= site_url('koleksi') ?>" class="text-black-50 link-underline-light">Lebih banyak<i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="row mb-2">
            <?php 
                $delayBuku = 0; // Initial delay
                foreach($buku->result() as $bu){ 
            ?>
            <div class="col-12 col-md-3 col-lg-3 mb-3"
                data-aos="fade-up"
                data-aos-offset="200"
                data-aos-delay="<?= $delayBuku ?>"
                data-aos-duration="800">
                <a href="<?= site_url('koleksi/' . md5($bu->id)) ?>" style="text-decoration: none;">
                    <div class="position-relative px-2">
                        <?php if($bu->cover): ?>
                        <img src="<?= base_url('assets/img/cover/' . $bu->cover) ?>" class="rounded-4 shadow mb-3" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                        <?php endif; ?>
                        <!-- <span class="position-absolute bg-warning shadow text-white py-2 px-4 start-0 mt-5 rounded-end-4 fw-semibold">Pupuler</span> -->
                    </div>

                    <div class="px-2">
                        <?php if(@$bu->jenis != 'null' && @$bu->jenis != NULL): ?>
                            <?php if (in_array("2", json_decode($bu->jenis))) : ?>
                                <p class="text-success mb-2 fw-light">
                                    <i class="bi bi-check-circle-fill me-1"></i>Tersedia Offline
                                </p>
                            <?php elseif (in_array("1", json_decode($bu->jenis))) : ?>
                                <p class="text-success mb-2 fw-light">
                                    <i class="bi bi-link-45deg me-1"></i></i>Tersedia Online
                                </p>
                            <?php endif; ?>
                        <?php endif; ?>
    
                        <h5 class="fw-semibold mb-1 text-black">
                            <?php 
                                $judul = $bu->judul;
                                if($judul){
                                    echo strlen($judul) > 25 ? substr($judul, 0, 25) . '..' : $judul;
                                }
                            ?>
                        </h5>                    
                        <p class="text-secondary mb-2 fw-light"><?= $bu->pengarang ?></p>
                    </div>
                </a>
            </div>
            <?php $delayBuku += 100; } ?>
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
        <?php 
            $delayKat = 0; // Initial delay
            foreach($kategori->result() as $kt){ 
               $count = $this->db->select('id')->from('buku')->where('JSON_CONTAINS(kategori, \'["' . $kt->id . '"]\')')->get()->num_rows();
        ?>
                <div class="col-12 col-md-3 col-lg-2 mb-3"
                    data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="<?= $delayKat ?>"
                    data-aos-duration="800">
                    <a href="<?= site_url('cari?category=' . $kt->id) ?>" style="text-decoration: none;">
                        <div class="d-flex flex-column rounded-3 p-3 shadow-sm position-relative" style="height: 200px; background: linear-gradient(180deg, rgba(220, 167, 3, 0.4) -0.79%, #DCA703 88.82%), url('<?= base_url('assets/img/kategori/' . $kt->cover)?>'); background-size: cover; background-position: center;">
                            <h5 class="fw-semibold mt-auto mb-1 text-white"><?= $kt->kategori ?></h5>
                            <p class="text-white mb-0 fw-light"><?= $count ?>+ Buku</p>
                        </div>
                    </a>
                </div>
            <?php 
                $delayKat += 50; // Increase delay for the next element
            } 
        ?>
        </div>
    </div>
</section>


<!-- Beritas Terbaru Bapans -->
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">
        <!-- Beritas Terbaru Bapans -->
        <div class="text-center mb-5">
            <h3 class="mb-3">Data Perpustakaan Bapanas</h3>
            <p class="text-black-50 link-underline-light">Data terbaru dan tren terkini dari Buku, Publikasi, dan Media NFA untuk memberikan gambaran yang komprehensif tentang kinerja dan interaksi konten kami.</p>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 col-lg-4 mb-3">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-3 p-3 shadow-sm" style="height: 250px; background: linear-gradient(180deg, #1d781610 0%, #1d7816 60%), url('<?= base_url('assets/img/kategori/' . $kt->cover)?>'); background-size: cover; background-position: center;">
                    <h1 class="display-1 fw-semibold mb-0 text-white"><?= $sum_buku->total ?></h1>
                    <p class="text-white text-center mb-2 fw-bolder">BUKU</p>
                    <!-- <p class="text-white text-center mb-3 fw-light" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-4 mb-3">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-3 p-3 shadow-sm" style="height: 250px; background: linear-gradient(180deg, #1d781610 0%, #1d7816 60%), url('<?= base_url('assets/img/kategori/' . $kt->cover)?>'); background-size: cover; background-position: center;">
                    <h1 class="display-1 fw-semibold mb-0 text-white"><?= $sum_kategori->total ?></h1>
                    <p class="text-white text-center mb-2 fw-bolder">KATEGORI BUKU</p>
                    <!-- <p class="text-white text-center mb-3 fw-light" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-4 mb-3">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-3 p-3 shadow-sm" style="height: 250px; background: linear-gradient(180deg, #1d781610 0%, #1d7816 60%), url('<?= base_url('assets/img/kategori/' . $kt->cover)?>'); background-size: cover; background-position: center;">
                    <h1 class="display-1 fw-semibold mb-0 text-white"><?= $sum_publikasi->total ?></h1>
                    <p class="text-white text-center mb-2 fw-bolder">PUBLIKASI</p>
                    <!-- <p class="text-white text-center mb-3 fw-light" style="font-size: 12px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
                </div>
            </div>
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

