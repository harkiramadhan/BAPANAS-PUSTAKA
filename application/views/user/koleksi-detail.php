<!-- Publikasi Pangan Terbaru -->
<section class="py-3" style="background: linear-gradient(90deg, #F8FCF7 22.24%, rgba(247, 252, 247, 0.00) 100%);">
    <div class="container-xl">
        <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\' fill=\'%236c757d\' class=\'bi bi-circle-fill\' viewBox=\'0 0 16 16\'%3E%3Ccircle cx=\'8\' cy=\'8\' r=\'8\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('beranda') ?>" class="text-primary fw-bold link-underline-light"><i class="bi bi-house-door-fill me-0 me-md-2"></i><span class="d-none d-md-inline">Beranda</span></a></li>
            <li class="breadcrumb-item d-none d-md-inline"><a href="<?= site_url('koleksi') ?>" class="text-primary fw-bold link-underline-light"></i>Koleksi Buku</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= (strlen($buku->judul) > 20) ? substr($buku->judul, 0, 20) . ' . . . ' : $buku->judul; ?>
            </li>
          </ol> 
        </nav>
    </div>
</section>

<section class="pt-4 pb-5" style="background: #FFF;">
    <div class="container-xl mb-5">
        <div class="row">
            <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                <div class="position-relative">
                    <?php if($buku->cover): ?>
                        <img src="<?= base_url('assets/img/cover/' . $buku->cover)?>" class="rounded-4 shadow mb-4" alt="" width="100%" style="height: 380px; object-fit: cover; object-position: top;">
                    <?php endif; ?>
                    <!-- <span class="position-absolute bg-warning shadow text-white py-2 px-4 start-0 mt-5 rounded-end-4 fw-semibold">Pupuler</span> -->
                </div>
                <?php $jenis_array = json_decode($buku->jenis); ?>
                <?php if (is_array($jenis_array) && in_array("2", $jenis_array)) : ?>
                    <?php if($this->session->userdata('is_loggedin')): ?>
                        <a href="<?= site_url('user/peminjaman/pinjam/' . md5($buku->id)) ?>" class="btn btn-warning w-100 px-5 py-3 fw-medium shadow-lg"><i class="bi bi-bookmark-plus-fill me-2"></i>Pinjam Buku</a>
                    <?php else: ?>
                        <a href="<?= site_url('login') ?>" class="btn btn-warning w-100 px-5 py-3 fw-medium shadow-lg"><i class="bi bi-bookmark-plus-fill me-2"></i>Pinjam Buku</a>
                    <?php endif; ?>
                <?php elseif (is_array($jenis_array) && in_array("1", $jenis_array)) : ?>
                    <a href="" class="btn btn-warning w-100 px-5 py-3 fw-medium shadow-lg"><i class="bi bi-bookmark-plus-fill me-2"></i>Baca Online</a>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-9">

                <?php if (is_array(json_decode($buku->jenis)) && in_array("2", json_decode($buku->jenis))) : ?>
                    <p class="text-success mb-2 fw-light">
                        <i class="bi bi-check-circle-fill me-1"></i>Tersedia Offline
                    </p>
                <?php elseif (is_array(json_decode($buku->jenis)) && in_array("1", json_decode($buku->jenis))) : ?>
                    <p class="text-success mb-2 fw-light">
                        <i class="bi bi-link-45deg me-1"></i></i>Tersedia Online
                    </p>
                <?php endif; ?>

                <?php foreach(json_decode($buku->kategori) as $ktgb){ 
                    $kategori = $this->db->select('kategori')->get_where('kategori', ['id' => $ktgb])->row()->kategori;
                ?>
                    <span class="badge text-bg-primary"><?= @$kategori ?></span>
                <?php } ?>
                <?php 
                    $kategori_array = json_decode($buku->kategori);
                    if (is_array($kategori_array) || is_object($kategori_array)) {
                        foreach($kategori_array as $ktgb){ 
                            $kategori = $this->db->select('kategori')->get_where('kategori', ['id' => $ktgb])->row()->kategori;
                    ?>
                        <span class="badge text-bg-primary"><?= @$kategori ?></span>
                <?php } } ?>

                <h3 class="fw-semibold mb-1 mt-2 text-black"><?= $buku->judul; ?></h3>
                <p class="text-secondary mb-3 fw-light"><i class="fa-solid fa-id-badge me-2 text-warning"></i><?= $buku->pengarang; ?></p>
                <div class="row">
                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3" style="border-radius: 8px 0px 0px 0px;">
                            <p class="mb-0 text-white fw-medium">Edisi</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3" style="border-radius: 0px 8px 0px 0px;">
                            <p class="mb-0 fw-normal"><?= $buku->edisi; ?></p>
                        </div>
                    </div>

                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3">
                            <p class="mb-0 text-white fw-medium">Penerbit</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3">
                            <p class="mb-0 fw-normal"><?= $buku->penerbit; ?></p>
                        </div>
                    </div>

                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3">
                            <p class="mb-0 text-white fw-medium">ISBN</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3">
                            <p class="mb-0 fw-normal"><?= $buku->isbn; ?></p>
                        </div>
                    </div>

                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3">
                            <p class="mb-0 text-white fw-medium">Deskripsi Fisik</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3">
                            <p class="mb-0 fw-normal"><?= $buku->desc_fisik; ?></p>
                        </div>
                    </div>

                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3">
                            <p class="mb-0 text-white fw-medium">Subjek</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3">
                            <p class="mb-0 fw-normal"><?= $buku->subjek; ?></p>
                        </div>
                    </div>

                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3">
                            <p class="mb-0 text-white fw-medium">Bahasa</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3">
                            <p class="mb-0 fw-normal"><?= $buku->bahasa; ?></p>
                        </div>
                    </div>

                    <div class="col-4 pe-0">
                        <div class="bg-secondary h-100 p-2 ps-3" style="border-radius: 0px 0px 0px 8px;">
                            <p class="mb-0 text-white fw-medium">Call Number</p>
                        </div>
                    </div>
                    <div class="col-8 ps-0">
                        <div class="bg-light h-100 p-2 ps-3" style="border-radius: 0px 0px 8px 0px;">
                            <p class="mb-0 fw-normal"><?= $buku->call_number; ?></p>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded mt-3">
                    <p class="mb-2 fw-bold px-3 pt-3">Deskripsi</p>
                    <div class="mb-0 fw-normal px-3 pb-3" style="text-align: justify;"><?= $buku->desc; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
