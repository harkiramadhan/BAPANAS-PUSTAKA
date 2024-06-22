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

                <!-- MENU KATEGORI BUKU -->
                <li class="sidebar-item <?= ($this->uri->segment(2) == 'buku') ? 'active' : '' ?> has-sub">
                    <a href="#" class="sidebar-link mb-3">
                        <i class="bi bi-journal-check"></i>
                        <span>Katalog Buku</span>
                    </a>
                    <ul class="submenu <?= ($this->uri->segment(2) == 'buku') ? 'submenu-open' : 'submenu-closed' ?> ps-3" style="--submenu-height: 43px;">
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'tambah') ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/buku/tambah') ?>" class="submenu-link">- Tambah Buku<i class="bi bi-plus-circle-fill float-end" style="margin-top: -2px;"></i></a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'daftar') ? 'active' : '' ?> pl-2">
                            <a href="<?= site_url('admin/buku/daftar') ?>" class="submenu-link">- Daftar Buku</a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'kategori') ? 'active' : '' ?> pl-2">
                            <a href="<?= site_url('admin/buku/kategori') ?>" class="submenu-link">- Kategori Buku</a>
                        </li>
                    </ul>
                </li>
                <!-- MENU KATEGORI BUKU -->


                <!-- MENU PUSTAKAWAN -->
                <li class="sidebar-item <?= ($this->uri->segment(2) == 'w') ? 'active' : '' ?> has-sub">
                    <a href="#" class="sidebar-link mb-3">
                        <i class="bi bi-journal-check"></i>
                        <span>Katalog Buku</span>
                    </a>
                    <ul class="submenu <?= ($this->uri->segment(2) == 'buku') ? 'submenu-open' : 'submenu-closed' ?> ps-3" style="--submenu-height: 43px;">
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'tambah') ? 'active' : '' ?>">
                            <a href="<?= site_url('admin/buku/tambah') ?>" class="submenu-link">- Tambah Buku<i class="bi bi-plus-circle-fill float-end" style="margin-top: -2px;"></i></a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'daftar') ? 'active' : '' ?> pl-2">
                            <a href="<?= site_url('admin/buku/daftar') ?>" class="submenu-link">- Daftar Buku</a>
                        </li>
                        <li class="submenu-item <?= ($this->uri->segment(2) == 'buku' && $this->uri->segment(3) == 'kategori') ? 'active' : '' ?> pl-2">
                            <a href="<?= site_url('admin/buku/kategori') ?>" class="submenu-link">- Kategori Buku</a>
                        </li>
                    </ul>
                </li>
                <!-- MENU PUSTAKAWAN -->

                
            </ul>
        </div>
    </div>
</div>