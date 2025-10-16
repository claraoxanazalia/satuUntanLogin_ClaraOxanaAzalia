<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SatuUntan_ClaraOxanaAzalia</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="login-container">

        <div class="left-side">
            <img src="assets/untan.jpg" alt="Gedung Universitas Tanjungpura" class="bg-img">
            <div class="text-overlay">
                <p class="welcome">SELAMAT DATANG</p>
                <h2>
                    Sistem Administrasi Terintegrasi<br>
                    <span><b>Universitas Tanjungpura</b></span>
                </h2>
            </div>
        </div>

        <div class="right-side">
            <div class="login-box">

                <div class="logo-section">
                    <img src="assets/logo_satuuntan.jpg" alt="Logo Satu UNTAN" class="logo">
                    <h3>Masuk dan Verifikasi</h3>
                    <p class="subtext">
                        <b>Baru!</b> Nikmati kemudahan sistem autentikasi tunggal untuk mengakses semua layanan dengan satu akun.
                    </p>
                </div>

                <button type="button" class="google-btn" onclick="loginWithGoogle()">
                    <img src="assets/logoGoogle.png" alt="Logo Google">
                    <span>Masuk dengan Google</span>
                </button>

                <p class="or">---------- atau lanjutkan dengan ----------</p>

                <!-- Form login -->
                <form action="login_process.php" method="POST">
                    <label for="email">Email / Akun Pengguna <span class="required">*</span></label>
                    <input type="text" id="email" name="email" placeholder="Masukkan email / NIM / NIP / username" required>

                    <label for="password">Password <span class="required">*</span></label>
                    <div class="password-box">
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <span class="toggle" onclick="togglePassword()">👁</span>
                    </div>

                    <a href="#" class="forgot">Lupa kata sandi?</a>

                    <button type="submit" class="login-btn">Masuk</button>
                </form>

                <div class="footer">
                    <p>Powered by</p>
                    <img src="assets/logo-sevima.png" alt="Logo SEVIMA" class="sevima-logo">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
