
<section class="py-5" style="background: #FFF;">
    <div class="container-xl">

        <div class="text-center mb-5">
            <h3 class="mb-3">Daftar Akun Perpustakaan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Buat akun Perpustakaan BAPANAS baru untuk mengakses ribuan koleksi buku, jurnal, dan materi digital lainnya. </p>
        </div>
        
        <form action="<?= site_url('user/auth/userRegister') ?>" method="POST">
            <?php if($this->session->flashdata('error')): ?>
                <label class="mb-2" for=""><strong class="text-danger">*) <?= $this->session->flashdata('error') ?></strong></label>
            <?php endif; ?>

            <div class="mb-3">
                <label for="" class="form-label">NIK <?= (@$this->session->flashdata('error_nik')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_nik') . '</strong>' : '' ?></label>
                <input value="<?= @$this->session->flashdata('nik') ?>" type="number" name="nik" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_nik')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap <?= (@$this->session->flashdata('error_nama')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_nama') . '</strong>' : '' ?></label>
                <input value="<?= @$this->session->flashdata('nama') ?>" type="text" name="nama" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_nama')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Jenis Kelamin <?= (@$this->session->flashdata('error_jenkel')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_jenkel') . '</strong>' : '' ?></label>
                <select name="jenkel" id="" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_jenkel')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" required>
                    <option value="">L/P</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'L') ? 'selected' : '' ?> value="L">Laki Laki</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'P') ? 'selected' : '' ?> value="P">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Pekerjaan <?= (@$this->session->flashdata('error_pekerjaan')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_pekerjaan') . '</strong>' : '' ?></label>
                <select name="pekerjaan" id="" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_pekerjaan')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" required>
                    <option value="">PILIH PEKERJAAN</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Pegawai Negeri Sipil (PNS)') ? 'selected' : '' ?> value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Pegawai Badan Pangan Nasional') ? 'selected' : '' ?> value="Pegawai Badan Pangan Nasional">Pegawai Badan Pangan Nasional</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Pengawas Pangan') ? 'selected' : '' ?> value="Pengawas Pangan">Pengawas Pangan</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Petugas Laboratorium Pangan') ? 'selected' : '' ?> value="Petugas Laboratorium Pangan">Petugas Laboratorium Pangan</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Peneliti Pangan') ? 'selected' : '' ?> value="Peneliti Pangan">Peneliti Pangan</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Analis Kebijakan Pangan') ? 'selected' : '' ?> value="Analis Kebijakan Pangan">Analis Kebijakan Pangan</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Pekerjaan lainnya') ? 'selected' : '' ?> value="Pekerjaan lainnya">Pekerjaan lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Pekerjaan <?= (@$this->session->flashdata('error_pendidikan')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_pendidikan') . '</strong>' : '' ?></label>
                <select name="pendidikan" id="" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_pendidikan')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" required>
                    <option value="">PILIH PENDIDIKAN</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'SD/MI') ? 'selected' : '' ?> value="SD/MI">SD/MI</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'SMP/MTS') ? 'selected' : '' ?> value="SMP/MTS">SMP/MTS</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'SMA/MA/SMK') ? 'selected' : '' ?> value="SMA/MA/SMK">SMA/MA/SMK</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Diploma (D1-D4)') ? 'selected' : '' ?> value="Diploma (D1-D4)">Diploma (D1-D4)</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Sarjana (S1)') ? 'selected' : '' ?> value="Sarjana (S1)">Sarjana (S1)</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Magister (S2)') ? 'selected' : '' ?> value="Magister (S2)">Magister (S2)</option>
                    <option <?= (@$this->session->flashdata('jenkel') == 'Doktor (S3)') ? 'selected' : '' ?> value="Doktor (S3)">Doktor (S3)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">No Whatsapp <?= (@$this->session->flashdata('error_whatsapp')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_whatsapp') . '</strong>' : '' ?></label>
                <input value="<?= @$this->session->flashdata('whatsapp') ?>" type="number" name="whatsapp" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_whatsapp')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" id="" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email <?= (@$this->session->flashdata('error_email')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_email') . '</strong>' : '' ?></label>
                <input value="<?= @$this->session->flashdata('email') ?>" type="email" name="email" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_email')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" id="" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Username <?= (@$this->session->flashdata('error_username')) ? '<strong class="text-danger">*) ' . @$this->session->flashdata('error_username') . '</strong>' : '' ?></label>
                <input value="<?= @$this->session->flashdata('username') ?>" type="text" name="username" class="form-control focus-ring focus-ring-primary <?= (@$this->session->flashdata('error_username')) ? 'is-invalid' : '' ?>" style="background-color: #F3F3F3; padding: 12px 20px;" id="" required>
            </div>

            <div class="mb-3 password-container">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="password" required>
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>

            <div class="mb-3 password-container">
                <label for="password" class="form-label">Konfirmasi ata Sandi</label>
                <input type="password" name="password" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="confirm-password" required>
                <i class="fa-solid fa-eye-slash fa-lg toggle-password mt-3 me-2"></i>
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" name="ok" value="1" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label btn-primary" for="exampleCheck1">Saya menyatakan telah membaca dan menyetujui terkait Kebijakan Privasi</label>
            </div>

            <button type="submit" class="btn btn-warning w-100 px-5 py-3 fw-bold mt-4 btn-register" disabled>Daftar</button>

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