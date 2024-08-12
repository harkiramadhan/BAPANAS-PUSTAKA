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
            <div class="row">
                <div class="col-md-4">
                    <label for="contact-info-horizontal-icon">Bulan</label>
                </div>
                <div class="col-md-8">
                    <div class="form-group has-icon-left">
                        <div class="position-relative">
                            <select class="form-select" id="select-bulan" name="bulan">
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
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
                                for ($tahun = 2024; $tahun >= 2000; $tahun--) {
                                    echo "<option value=\"$tahun\">$tahun</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <a href="<?= site_url('export/laporan/generateWord') ?>" type="submit" class="btn btn-primary w-100 me-1 mb-0">Buat Laporan</a>
                </div>
            </div>
        </div>
    </div>
</div>