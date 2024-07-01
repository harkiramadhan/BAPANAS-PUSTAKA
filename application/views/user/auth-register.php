
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">

        <div class="text-center mb-5">
            <h3 class="mb-3">Daftar Akun Perpustakaan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Buat akun Perpustakaan BAPANAS baru untuk mengakses ribuan koleksi buku, jurnal, dan materi digital lainnya. </p>
        </div>
        
        <form>
            <div class="mb-3">
                <label for="" class="form-label">NIK</label>
                <input type="text" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">No Whatsapp</label>
                <input type="text" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="" aria-describedby="emailHelp">
            </div>

            <div class="mb-3 password-container">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="password">
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>
            

            <div class="mb-3 password-container">
                <label for="password" class="form-label">Konfirmasi ata Sandi</label>
                <input type="password" class="form-control focus-ring focus-ring-success" style="background-color: #F3F3F3; padding: 12px 20px;" id="password">
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label btn-success" for="exampleCheck1">Saya menyatakan telah membaca dan menyetujui terkait Kebijakan Privasi</label>
            </div>

            <a href="" class="btn btn-success w-100 px-5 py-3 fw-bold mt-4">Daftar</a>

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