<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="<?= site_url('admin/beranda') ?>"><img src="<?= base_url('assets/admin/compiled/png/logo-primary.png') ?>" alt="Logo" srcset="" style="height: 3rem;"></a>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item <?= ($this->uri->segment(2) == 'beranda') ? 'active' : '' ?>">
                    <a href="<?= site_url('admin/beranda') ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Beranda</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($this->uri->segment(2) == 'peminjaman') ? 'active' : '' ?>">
                    <a href="<?= site_url('admin/peminjaman/daftar') ?>" class='sidebar-link'>
                        <i class="fa-solid fa-book-bookmark"></i>
                        <span>Peminjaman</span>
                    </a>
                </li>

                <!-- MENU KATEGORI BUKU -->
                <li class="sidebar-item <?= ($this->uri->segment(2) == 'buku') ? 'active' : '' ?> has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-journal-check"></i>
                        <span>Katalog Buku</span>
                    </a>
                    <ul class="submenu <?= ($this->uri->segment(2) == 'buku') ? 'submenu-open' : 'submenu-closed' ?>" style="--submenu-height: 43px;">
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'tambah') ? 'active' : '' ?> mt-2">
                            <a href="<?= site_url('admin/buku/tambah') ?>" class="submenu-link px-2">- Tambah Buku<i class="bi bi-plus-circle-fill float-end" style="margin-top: -2px;"></i></a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'daftar') ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/buku/daftar') ?>" class="submenu-link px-2">- Daftar Buku</a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'kategori') ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/buku/kategori') ?>" class="submenu-link px-2">- Kategori</a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'jenis') ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/buku/jenis') ?>" class="submenu-link px-2">- Jenis</a>
                        </li>
                    </ul>
                </li>
                <!-- MENU KATEGORI BUKU -->
                

                <li class="sidebar-item <?= ($this->uri->segment(2) == 'pustakawan') ? 'active' : '' ?>">
                    <a href="<?= site_url('admin/pustakawan') ?>" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>Pustakawan</span>
                    </a>
                </li>

                <!-- MENU PERS -->
                <li class="sidebar-item <?= ($this->uri->segment(2) == 'publikasi') ? 'active' : '' ?> has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-newspaper"></i>
                        <span>Publikasi</span>
                    </a>
                    <ul class="submenu <?= ($this->uri->segment(2) == 'publikasi') ? 'submenu-open' : 'submenu-closed' ?>" style="--submenu-height: 43px;">
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'publikasi' && $this->uri->segment(3) == 'tambah') ? 'active' : '' ?> mt-2">
                            <a href="<?= site_url('admin/publikasi/tambah') ?>" class="submenu-link px-2">- Tambah Publikasi<i class="bi bi-plus-circle-fill float-end" style="margin-top: -2px;"></i></a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'publikasi' && $this->uri->segment(3) == NULL) ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/publikasi') ?>" class="submenu-link px-2">- Daftar Publikasi</a>
                        </li>
                    </ul>
                </li>
                <!-- MENU PERS -->

                <!-- MENU LAPORAN -->

                <li class="sidebar-item <?= ($this->uri->segment(2) == 'laporan') ? 'active' : '' ?>">
                    <a href="<?= site_url('admin/laporan') ?>" class='sidebar-link'>
                        <i class="fa-solid fa-folder-open"></i>
                        <span>Laporan</span>
                    </a>
                </li>

                <!-- MENU LAPORAN -->


                <!-- MENU LANDING PAGE -->
                <li class="sidebar-item <?= ($this->uri->segment(2) == 'landing') ? 'active' : '' ?> has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-break-fill"></i>
                        <span>Landing Page</span>
                    </a>
                    <ul class="submenu <?= ($this->uri->segment(2) == 'landing') ? 'submenu-open' : 'submenu-closed' ?>" style="--submenu-height: 43px;">
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'landing' && $this->uri->segment(3) == 'banner') ? 'active' : '' ?> mt-2">
                            <a href="<?= site_url('admin/landing/banner') ?>" class="submenu-link px-2">- Banner</a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'landing' && $this->uri->segment(3) == 'footer') ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/landing/footer') ?>" class="submenu-link px-2">- Footer</a>
                        </li>
                    </ul>
                </li>
                <!-- MENU LANDING PAGE -->

                <li class="sidebar-item <?= ($this->uri->segment(2) == 'pengaturan') ? 'active' : '' ?>">
                    <a href="<?= site_url('admin/pengaturan') ?>" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>

                <a href="<?= site_url('admin/auth/logout') ?>" class="btn btn-outline-danger rounded-pill w-100 shadow-sm py-2 mt-3"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Keluar Admin</a>
                
            </ul>
        </div>
    </div>
</div>