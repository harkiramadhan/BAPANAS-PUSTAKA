<section class="pt-5 pb-0" style="background: #F3F3F3;">
    
    <div class="container-xl">
        <div class="text-center mb-5">
            <h3 class="mb-3">Mengelola Akun Pustakawan BAPANAS</h3>
            <p class="text-black-50 link-underline-light">Mengelola informasi akun Anda untuk pengalaman perpustakaan yang lebih baik.</p>
        </div>
        <ul class="nav nav-underline nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url('akun') ?>">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?= site_url('user/akun/password') ?>">Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?= site_url('peminjaman') ?>">Peminjaman</a>
            </li>
        </ul>
    </div>
</section>


<section class="py-5" style="background: #FFF;">
    <div class="container-xl">
        <form action="<?= site_url('user/akun/update') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; margin: 0 auto; border: 4px solid;">
                    <?php if(@$user->img): ?>
                        <img id="profile-preview" src="<?= base_url('assets/img/pustakwan/' . $user->img) ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="...">
                    <?php else: ?>
                        <img id="profile-preview" src="https://st3.depositphotos.com/9998432/13335/v/450/depositphotos_133352010-stock-illustration-default-placeholder-man-and-woman.jpg" style="width: 100%; height: 100%; object-fit: cover;" alt="...">
                    <?php endif; ?>
                </div>
                <label for="profile-picture" class="form-label">Foto Profil</label>
                <input type="file" name="profile-picture" accept="image/png, image/jpeg" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="profile-picture">
            </div>

            <script>
                document.getElementById('profile-picture').addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file && (file.type === 'image/png' || file.type === 'image/jpeg')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('profile-preview').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            </script>
            
            <div class="mb-3">
                <label for="jenkel" class="form-label">Jenis Kelamin</label>
                <select name="jenkel" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="jenkel" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option <?= ($user->jenkel == 'L') ? 'selected' : '' ?>  value="L">Laki-laki</option>
                    <option <?= ($user->jenkel == 'P') ? 'selected' : '' ?>  value="P">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <select name="pekerjaan" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="pekerjaan" required>
                    <option value="">-- Pilih Pekerjaan --</option>
                    <option <?= ($user->pekerjaan == 'Pegawai Negeri Sipil (PNS)') ? 'selected' : '' ?> value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                    <option <?= ($user->pekerjaan == 'Pegawai Badan Pangan Nasional') ? 'selected' : '' ?> value="Pegawai Badan Pangan Nasional">Pegawai Badan Pangan Nasional</option>
                    <option <?= ($user->pekerjaan == 'Pengawas Pangan') ? 'selected' : '' ?> value="Pengawas Pangan">Pengawas Pangan</option>
                    <option <?= ($user->pekerjaan == 'Petugas Laboratorium Pangan') ? 'selected' : '' ?> value="Petugas Laboratorium Pangan">Petugas Laboratorium Pangan</option>
                    <option <?= ($user->pekerjaan == 'Peneliti Pangan') ? 'selected' : '' ?> value="Peneliti Pangan">Peneliti Pangan</option>
                    <option <?= ($user->pekerjaan == 'Analis Kebijakan Pangan') ? 'selected' : '' ?> value="Analis Kebijakan Pangan">Analis Kebijakan Pangan</option>
                    <option <?= ($user->pekerjaan == 'Pekerjaan lainnya') ? 'selected' : '' ?> value="Pekerjaan lainnya">Pekerjaan lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan</label>
                <select name="pendidikan" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="pendidikan" required>
                    <option value="">-- Pilih Pendidikan --</option>
                    <option <?= ($user->pendidikan == 'SD/MI') ? 'selected' : '' ?> value="SD/MI">SD/MI</option>
                    <option <?= ($user->pendidikan == 'SMP/MTS') ? 'selected' : '' ?> value="SMP/MTS">SMP/MTS</option>
                    <option <?= ($user->pendidikan == 'SMA/MA/SMK') ? 'selected' : '' ?> value="SMA/MA/SMK">SMA/MA/SMK</option>
                    <option <?= ($user->pendidikan == 'Diploma (D1-D4)') ? 'selected' : '' ?> value="Diploma (D1-D4)">Diploma (D1-D4)</option>
                    <option <?= ($user->pendidikan == 'Sarjana (S1)') ? 'selected' : '' ?> value="Sarjana (S1)">Sarjana (S1)</option>
                    <option <?= ($user->pendidikan == 'Magister (S2)') ? 'selected' : '' ?> value="Magister (S2)">Magister (S2)</option>
                    <option <?= ($user->pendidikan == 'Doktor (S3)') ? 'selected' : '' ?> value="Doktor (S3)">Doktor (S3)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">NIK</label>
                <input type="number" name="nik" value="<?= $user->nik ?>" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" value="<?= $user->nama ?>" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="" required>
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" value="<?= $user->username ?>" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">No Whatsapp</label>
                <input type="number" name="whatsapp" value="<?= $user->whatsapp ?>" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" value="<?= $user->email ?>" class="form-control focus-ring focus-ring-primary" style="background-color: #F3F3F3; padding: 12px 20px;" id="">
            </div>

            <button type="submit" class="btn btn-warning w-100 px-5 py-3 fw-bold mt-4">Ubah dan Simpan</button>
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