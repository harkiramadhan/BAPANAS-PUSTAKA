<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Mazer Admin Dashboard</title>
        
        <title>Beranda - Admin Perpustakaan BAPANAS</title>

        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?= base_url('assets/admin/compiled/png/logo-favicon.png') ?>" type="image/png">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/app.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/admin/compiled/css/auth.css')?>">

        <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free-6.5.2-web/css/all.min.css') ?>">

        <style>

            .password-wrapper {
                position: relative;
            }
            .password-icon {
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
                cursor: pointer;
            }
        </style>

    </head>

    <body class="bg-white">
        <script src="assets/static/js/initTheme.js"></script>
        <div id="auth">
            
            <div class="row h-100">
                <div class="col-lg-5 col-12">
                    <div id="auth-left">
                        <div class="auth-logo">
                            <a href="index.html"><img src="<?= base_url('assets/admin/compiled/png/logo-primary.png') ?>" style="height: 80px;" alt="Logo"></a>
                        </div>
                        <h1 class="text-black mb-4">Ganti Password Admin</h1>


                        <form action="index.html">
                            <div class="form-group position-relative has-icon-left mb-4">
                                <div class="password-wrapper">
                                    <input type="password" class="form-control form-control-xl focus-ring focus-ring-success" id="password" placeholder="Password Baru">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                    <i class="fa-solid fa-eye-slash password-icon" id="togglePassword"></i>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left mb-4">
                                <div class="password-wrapper">
                                    <input type="password" class="form-control form-control-xl focus-ring focus-ring-success" id="password" placeholder="Ulangi Password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-shield-lock"></i>
                                    </div>
                                    <i class="fa-solid fa-eye-slash password-icon" id="togglePassword"></i>
                                </div>
                            </div>
                            <button class="btn btn-success btn-block btn-lg shadow-lg mt-5">Perbarui Password</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block bg-success">
                    <div id="" class="">

                    </div>
                </div>
            </div>

        </div>
    </body>
    
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // toggle the icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</html>