
<!-- Publikasi Pangan Terbaru -->
<section class="py-3" style="background: linear-gradient(90deg, #F8FCF7 22.24%, rgba(247, 252, 247, 0.00) 100%);">
    <div class="container-xl">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\' fill=\'%236c757d\' class=\'bi bi-circle-fill\' viewBox=\'0 0 16 16\'%3E%3Ccircle cx=\'8\' cy=\'8\' r=\'8\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#" class="text-primary fw-bold link-underline-light"><i class="bi bi-house-door-fill me-2"></i>Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kategori Buku</li>
          </ol>
        </nav>
    </div>
</section>


<!-- Rekomendasi Buku Lainnya -->
<section class="pt-4 pb-5" style="background: #FFF;">
    <div class="container-xl mb-5">
        <!-- Rekomendasi Buku Lainnya -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0 fw-normal">Semua Kategori <span class="fw-bold text-primary fst-italic">' <?= ($page / 12) + 1 ?> '</span> dari <?= ceil($this->db->select('id')->get('kategori')->num_rows() / 12) ?></h4>
        </div>
        <div class="row mb-2">
            <?php foreach($kategori->result() as $kt){ ?>
                <div class="col-12 col-md-3 col-lg-2 mb-3">
                    <a href="<?= site_url('cari?category=' . $kt->id) ?>" style="text-decoration: none;">
                        <div class="d-flex flex-column rounded-3 p-3 shadow-sm position-relative" style="height: 200px; background: linear-gradient(180deg, rgba(220, 167, 3, 0.4) -0.79%, #DCA703 88.82%), url('<?= base_url('assets/img/kategori/' . $kt->cover)?>'); background-size: cover; background-position: center;">
                            <h5 class="fw-semibold mt-auto mb-1 text-white"><?= $kt->kategori ?></h5>
                            <p class="text-white mb-0 fw-light">214+ Buku</p>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <nav aria-label="Page navigation example pt-3">
      <?= $pagination ?>
    </nav>
</section>