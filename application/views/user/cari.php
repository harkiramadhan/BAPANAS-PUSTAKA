
<!-- Publikasi Pangan Terbaru -->
<section class="py-3" style="background: linear-gradient(90deg, #F8FCF7 22.24%, rgba(247, 252, 247, 0.00) 100%);">
    <div class="container-xl">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\' fill=\'%236c757d\' class=\'bi bi-circle-fill\' viewBox=\'0 0 16 16\'%3E%3Ccircle cx=\'8\' cy=\'8\' r=\'8\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#" class="text-primary fw-bold text-decoration-none"><i class="bi bi-house-door-fill me-2"></i>Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pencarian Buku <i>'<?= isset($keyword) ? $keyword : '' ?>'</i></li>
          </ol>
        </nav>
    </div>
</section>

<!-- Rekomendasi Buku Lainnya -->
<section class="pt-4 pb-5" style="background: #FFF;">
    <div class="container-xl mb-5">

        <div class="mb-4">

            <form method="get" action="<?= site_url('user/cari') ?>">
                <div class="input-group z-1" style="background-color: #F3F3F3; padding: 12px; border-radius: 5px;">
                    <input type="text" name="keyword" class="form-control border-0 focus-ring focus-ring-light" placeholder="Cari Nama/Pengarang buku" aria-label="Cari buku" style="background-color: #F3F3F3;" value="<?= isset($keyword) ? $keyword : '' ?>">
                    <button class="btn z-0" type="submit" style="background-color: #F3F3F3; border: none;">
                        <i class="bi bi-search" style="color: #A4A4A4;"></i>
                    </button>
                </div>
            </form>

        </div>

        <!-- Rekomendasi Buku Lainnya -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h5 class="mb-0 fw-normal">Hasil untuk <span class="fw-bold text-primary fst-italic">'<?= isset($keyword) ? $keyword : '' ?>'</span></h5>
        </div>
        
        <div class="row mb-2">
            <?php if(isset($buku) && $buku->num_rows() > 0) : ?>
                <?php foreach($buku->result() as $bu) {
                    $kategoriBuku = json_decode($bu->kategori);
                ?>
                    
                <div class="col-12 col-md-3 col-lg-3 mb-3">
                    <a href="<?= site_url('user/koleksi/detail/' . md5($bu->id)) ?>" style="text-decoration: none;">
                        <div class="position-relative">
                            <?php if($bu->cover) : ?>
                            <img src="<?= base_url('assets/img/cover/' . $bu->cover) ?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                            <?php endif; ?>
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

                        <?php foreach($kategoriBuku as $ktgb){ 
                            $kategori = $this->db->select('kategori')->get_where('kategori', ['id' => $ktgb])->row()->kategori;
                        ?>
                            <span class="badge text-bg-primary"><?= @$kategori ?></span>
                        <?php } ?>
                        
                        <h5 class="fw-semibold mb-1 mt-2 text-black">
                            <?php 
                                $judul = $bu->judul;
                                echo strlen($judul) > 25 ? substr($judul, 0, 25) . '..' : $judul;
                            ?>
                        </h5>                    
                        <p class="text-secondary mb-2 fw-light"><?= $bu->pengarang ?></p>
                    </a>
                </div>
                <?php } ?>
            <?php else : ?>
                <p class="text-center">Tidak ada hasil ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
