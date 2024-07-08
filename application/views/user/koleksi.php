
<!-- Publikasi Pangan Terbaru -->
<section class="py-3" style="background: linear-gradient(90deg, #F8FCF7 22.24%, rgba(247, 252, 247, 0.00) 100%);">
    <div class="container-xl">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\' fill=\'%236c757d\' class=\'bi bi-circle-fill\' viewBox=\'0 0 16 16\'%3E%3Ccircle cx=\'8\' cy=\'8\' r=\'8\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#" class="text-primary fw-bold text-decoration-none"><i class="bi bi-house-door-fill me-2"></i>Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Koleksi Buku</li>
          </ol>
        </nav>
    </div>
</section>


<!-- Rekomendasi Buku Lainnya -->
<section class="pt-4 pb-5" style="background: #FFF;">
    <div class="container-xl mb-5">
        <!-- Rekomendasi Buku Lainnya -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0 fw-normal">Semua Buku Halaman <span class="fw-bold text-primary fst-italic">' 1 '</span> dari 10</h4>
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
    
    <nav aria-label="Page navigation example pt-3">
      <ul class="pagination justify-content-center">
        <li class="page-item pill disabled">
          <a class="page-link text-primary">Sebelumnya</a>
        </li>
        <li class="page-item circle"><a class="page-link text-primary" href="#">1</a></li>
        <li class="page-item circle"><a class="page-link text-primary" href="#">2</a></li>
        <li class="page-item circle"><a class="page-link text-primary" href="#">3</a></li>
        <li class="page-item pill">
          <a class="page-link text-primary" href="#">Selanjutnya</a>
        </li>
      </ul>
    </nav>
</section>