<header class="mb-5 d-flex align-items-center justify-content-between">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
    <nav aria-label="breadcrumb" class="breadcrumb-header">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/beranda') ?>"><i class="bi bi-houses-fill me-1"></i> Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Laporan</li>
        </ol>
    </nav>
</header>

<div class="row">
    <div class="col-12 order-md-1 order-last mb-1">
        <h3 class="mb-2">Laporan</h3>
    </div>
</div>
<div class="page-content"> 
    <div class="card">
        <div class="card-body">
            <form action="<?= site_url('export/laporan/generateWord') ?>" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label for="contact-info-horizontal-icon">Bulan</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <select class="form-select" id="select-bulan" name="bulan">
                                    <option <?= (date('m') == 1) ? 'selected' : '' ?> value="01">Januari</option>
                                    <option <?= (date('m') == 2) ? 'selected' : '' ?> value="02">Februari</option>
                                    <option <?= (date('m') == 3) ? 'selected' : '' ?> value="03">Maret</option>
                                    <option <?= (date('m') == 4) ? 'selected' : '' ?> value="04">April</option>
                                    <option <?= (date('m') == 5) ? 'selected' : '' ?> value="05">Mei</option>
                                    <option <?= (date('m') == 6) ? 'selected' : '' ?> value="06">Juni</option>
                                    <option <?= (date('m') == 7) ? 'selected' : '' ?> value="07">Juli</option>
                                    <option <?= (date('m') == 8) ? 'selected' : '' ?> value="08">Agustus</option>
                                    <option <?= (date('m') == 9) ? 'selected' : '' ?> value="09">September</option>
                                    <option <?= (date('m') == 10) ? 'selected' : '' ?> value="10">Oktober</option>
                                    <option <?= (date('m') == 11) ? 'selected' : '' ?> value="11">November</option>
                                    <option <?= (date('m') == 12) ? 'selected' : '' ?> value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <label for="select-tahun">Tahun</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <select class="form-select" id="select-tahun" name="tahun">
                                    <!-- Menggunakan PHP untuk membuat opsi tahun dari 2024 hingga 2000 -->
                                    <?php 
                                        for ($tahun = date('Y'); $tahun >= 2000; $tahun--) {
                                            echo "<option value=\"$tahun\">$tahun</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary w-100 me-1 mb-0">Buat Laporan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>