
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">

        <div class="text-center mb-5">
            <h3 class="mb-3">Login ke Perpustakaan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Masuk ke akun Perpustakaan BAPANAS Anda untuk mengakses koleksi buku digital, <br> melihat riwayat peminjaman, dan menikmati berbagai layanan perpustakaan yang tersedia. </p>
        </div>
        
        <form method="POST" action="<?= site_url('user/auth/userLogin') ?>">
            <?php if($this->session->flashdata('error')): ?>
                <h5 class="text-danger mb-3"><strong><?= $this->session->flashdata('error') ?></strong></h5>
            <?php endif; ?>

            <div class="mb-3">
                <label for="" class="form-label">Username / NIK / Email</label>
                <input name="username" value="<?= @$this->session->flashdata('username') ?>" type="text" class="form-control focus-ring focus-ring-success <?= ($this->session->flashdata('error_username') == TRUE) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 password-container">
                <label for="password" class="form-label">Kata Sandi</label>
                <input name="password" type="password" class="form-control focus-ring focus-ring-success <?= ($this->session->flashdata('error_password') == TRUE) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" id="password" required>
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label btn-success" for="exampleCheck1">Ingat Saya</label>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 form-check text-end">
                        <a href="<?= site_url('reset-password') ?>" class="link-underline-light text-black text-end">Lupa Kata Sandi?</a>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success w-100 px-5 py-3 fw-bold mt-4">Masuk</button>

            <p class="my-4 text-center">Belum memiliki akun?</p>
            <div class="gap-2 d-flex">
                <a href="<?= site_url('register') ?>" class="btn btn-light w-100 px-5 py-3 text-black">Daftar Sekarang</a>
            </div>
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