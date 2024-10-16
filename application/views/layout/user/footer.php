<?php
    $footer = $this->db->get_where('footer', ['id' => 1])->row();
?>
        <!-- Footer -->
        <section id="footer bg-white">

            <hr class="my-0 text-black-50">
            <div class="container-xl pt-5 pb-4">
                <div class="row">
                    <!-- Logo dan Profil -->
                    <div class="col-12 col-lg-4 mb-4">
                        <img src="<?= base_url('assets/img/' . $footer->logo) ?>" alt="" width="" height="80">
                        <p class="text-black-50 mt-4"><?= $footer->desc ?></p>
                    </div>
                    
                    <div class="col-12 col-lg-8">
                        <div class="row">

                            <!-- Alamat dan Kontak -->
                            <div class="col-12 col-lg-6 mb-4">
                                <p class="fw-bolder">Alamat</p>
                                <div class="list-group">
                                    <div class="d-flex py-2">
                                        <i class="bi bi-geo-alt-fill me-2"></i><a href="#" class="list-group-item text-secondary p-0 border-0"><?= $footer->alamat ?></a>
                                    </div>
                                    <div class="d-flex py-2">
                                        <i class="bi bi-telephone-inbound-fill me-2"></i><a href="#" class="list-group-item text-secondary p-0 border-0"><?= $footer->phone ?></a>
                                    </div>
                                    <div class="d-flex py-2">
                                        <i class="bi bi-envelope-at-fill me-2"></i><a href="#" class="list-group-item text-secondary p-0 border-0"><?= $footer->email ?></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Informasi -->
                            <div class="col-12 col-lg-3 mb-4">
                                <p class="fw-bolder">Informasi</p>
                                <div class="list-group">
                                    <a href="#" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>FAQ</a>
                                    <a href="#" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>Whatsapp</a>
                                    <a href="#" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>Email</a>
                                </div>
                            </div>

                            <!-- Pintasan -->
                            <div class="col-12 col-lg-3 mb-4">
                                <p class="fw-bolder">Pintasan</p>
                                <div class="list-group">
                                    <a href="<?= site_url('koleksi') ?>" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>Koleksi</a>
                                    <a href="<?= site_url('kategori') ?>" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>Kategori</a>
                                    <a href="<?= site_url('publikasi') ?>" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>Publikasi Pangan</a>
                                    <a href="<?= site_url('lokasi') ?>" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>Lokasi</a>
                                    <a href="https://badanpangan.go.id/wiki/layanan-dan-akses-informasi-publik" class="list-group-item text-secondary ps-0 border-0"><i class="bi bi-arrow-right me-2"></i>PPID</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <p class="fw-bolder">Ikuti Kami</p>
                        <div class="container">
                            <a href="<?= $footer->facebook ?>" class="btn btn-icon-follow rounded-circle">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="<?= $footer->instagram ?>" class="btn btn-icon-follow rounded-circle">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="<?= $footer->twitter ?>" class="btn btn-icon-follow rounded-circle">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="<?= $footer->youtube ?>" class="btn btn-icon-follow rounded-circle">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="my-0 text-black-50">
            <div class="py-3 text-center">
                <span>Perpustakaan Digital by <a href="https://badanpangan.go.id/" target="_blank" class="link-underline-light text-success">BAPANAS</a>  -  &copy; <span id="year"></span> All Rights Reserved</span>
                <script>document.getElementById('year').textContent = new Date().getFullYear();</script>

            </div>
        </section>

        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        <script src="<?= base_url('assets/user/bootstrap/js/bootstrap.bundle.js') ?>"></script>
        <script src="<?= base_url('assets/user/js/custom.js') ?>"></script>

        <script type="text/javascript" src="<?= base_url('node_modules/aos/dist/aos.js') ?>"></script>
        
        <script>
            AOS.init();
        </script>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('.slider-1, .slider-2, .slider-3').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev btn"><i class="bi bi-arrow-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="bi bi-arrow-right"></i></button>'
                });
            });
        </script>

    </body>

</html>