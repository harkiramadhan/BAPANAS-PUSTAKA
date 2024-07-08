<section class="pt-5 pb-0" style="background: #F3F3F3;">
    
    <div class="container-xl">
        <div class="text-center mb-5">
            <h3 class="mb-3">Mengelola Akun Pustakawan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Mengelola informasi akun Anda untuk pengalaman perpustakaan yang lebih baik.</p>
        </div>
        <ul class="nav nav-underline nav-fill">
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?= site_url('akun') ?>">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  aria-current="page" href="<?= site_url('user/akun/password') ?>">Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?= site_url('peminjaman') ?>">Peminjaman</a>
            </li>
        </ul>
    </div>
</section>

<section class="py-5" style="background: #FFF;">
    <div class="container-xl">
        <form>
            <div class="mb-3 password-container">
                <label for="password" class="form-label">Kata Sandi Lama</label>
                <input type="password" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="password">
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>
            
            <div class="mb-3 password-container">
                <label for="password" class="form-label">Kata Sandi Baru</label>
                <input type="password" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="password">
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>

            <a href="" class="btn btn-warning w-100 px-5 py-3 fw-bold mt-4">Ubah dan Simpan</a>

        </form>

    </div>
</section>

<script>
    document.querySelector('.toggle-password').addEventListener('click', function (e) {
        const passwordInput = document.getElementById('password');
        const icon = e.target;

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
</script>