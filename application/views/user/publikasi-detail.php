<!-- Publikasi Pangan Terbaru -->
<section class="py-3" style="background: linear-gradient(90deg, #F8FCF7 22.24%, rgba(247, 252, 247, 0.00) 100%);">
    <div class="container-xl">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\' fill=\'%236c757d\' class=\'bi bi-circle-fill\' viewBox=\'0 0 16 16\'%3E%3Ccircle cx=\'8\' cy=\'8\' r=\'8\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('beranda') ?>" class="text-primary fw-bold link-underline-light"><i class="bi bi-house-door-fill me-2"></i>Beranda</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('publikasi') ?>" class="text-primary fw-bold link-underline-light"></i>Publikasi Pers</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $publikasi->judul ?></li>
          </ol>
        </nav>
    </div>
</section>

<section class="pt-4 pb-5" style="background: #FFF;">
    <div class="container-xl mb-5">
        <div class="row">
            <div class="col-12 col-lg-3 mb-4 mb-lg-0">

                <div class="position-relative">
                    <img src="<?= base_url('assets/img/cover/' . $publikasi->cover) ?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                </div>
                <button class="btn btn-warning w-100 px-5 py-3 fw-medium shadow-lg" data-bs-toggle="modal" data-bs-target="#zoomGambar">
                    <i class="bi bi-zoom-in me-2"></i>Perbesar Gambar
                </button>
                                    
            </div>

            <div class="col-12 col-lg-9">
                <span class="badge text-bg-primary"><?= $publikasi->kategori ?></span>
                <h3 class="fw-semibold mb-1 mt-2 text-black"><?= $publikasi->judul ?></h3>
                <div class="d-flex flex-lg-row flex-column mb-2">
                  <p class="text-secondary mb-0 fw-light me-3"><i class="fa-solid fa-calendar me-2 text-warning"></i>Senin, 12 Agustus 2024</p>
                  <p class="text-secondary mb-0 fw-light"><i class="fa-solid fa-id-badge me-2 text-warning"></i>Humas Badan Pangan Nasional</p>
                </div>
                <div class="bg-light rounded mt-0">
                    <p class="mb-2 fw-bold px-3 pt-3">Deskripsi</p>
                    <div class="mb-0 fw-normal px-3 pb-1" style="text-align: justify;">
                      <?= $publikasi->desc ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="zoomGambar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Gambar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="<?= base_url('assets/img/cover/' . $publikasi->cover) ?>" class="rounded-4 shadow mb-0" alt="" width="100%" style="height: auto; object-fit: cover; object-position: top;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
