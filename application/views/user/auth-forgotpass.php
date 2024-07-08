
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">

        <div class="text-center mb-5">
            <h3 class="mb-3">Reset Kata Sandi Perpustakaan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Lupa kata sandi? Masukkan email terdaftar Anda untuk menerima tautan reset kata sandi. </p>
        </div>
        
        <form>
            <div class="mb-0">
                <label for="" class="form-label">Masukan email akun anda</label>
                <input type="text" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp">
            </div>

            <a href="" class="btn btn-primary w-100 px-5 py-3 fw-bold mt-4">Reset Password</a>

            <p class="my-4 text-center">Sudah memiliki akun?</p>


            <div class="gap-2 d-flex">
                <a href="<?= site_url('login') ?>" class="btn btn-light w-100 px-5 py-3 text-black">Masuk</a>
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