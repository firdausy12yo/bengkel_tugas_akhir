
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PitStop.id</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: #08066f;
        }

        /* LAYOUT UTAMA */
        .login-page {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: stretch;
            overflow: hidden;
            position: relative;
            background: linear-gradient(
                115deg,
                #08065e,
                #1009b7 55%,
                #08065e
            );
        }

        /* BAGIAN KIRI */
        .branding {
            width: 52%;
            min-height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: white;
        }

        .branding::before {
            content: "";
            position: absolute;
            width: 330px;
            height: 520px;
            left: 95px;
            top: 31%;
            background: linear-gradient(
                145deg,
                #17147d,
                #1110b0
            );
            transform: skewX(-10deg);
        }

        /* ORNAMEN LINGKARAN */
        .circle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .circle-one {
            width: 390px;
            height: 390px;
            background: #08085c;
            top: -95px;
            left: -105px;
        }

        .circle-two {
            width: 390px;
            height: 390px;
            background: #10104f;
            top: 19%;
            right: -105px;
        }

        .circle-three {
            width: 230px;
            height: 230px;
            background: #090951;
            bottom: -110px;
            left: -65px;
        }

        /* LOGO DAN SLOGAN */
        .brand-content {
            position: absolute;
            z-index: 2;
            top: 36%;
            left: 8%;
            right: 3%;
            text-align: center;
        }

        .brand-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 18px;
        }

        .brand-logo {
            width: 75px;
            height: 75px;
            object-fit: contain;
            border-radius: 50%;
            background: white;
        }

        .brand-title h1 {
            font-size: clamp(30px, 4vw, 42px);
            font-weight: 700;
            letter-spacing: -1.5px;
        }

        .tagline {
            margin-top: 17px;
            font-size: 15px;
            font-weight: 600;
        }

        /* GAMBAR MOBIL */
        .car-container {
            position: absolute;
            z-index: 3;
            width: 82%;
            left: 7%;
            top: 57%;
        }

        .car-image {
            width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
        }

        /* PANEL LOGIN */
        .login-panel {
            width: 44.5%;
            min-height: calc(100vh - 56px);
            margin: 28px 2.8% 28px 0;
            padding: 0 16px;
            background: #fff;
            border-radius: 15px;
            position: relative;
            z-index: 5;

            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* JUDUL LOGIN */
        .login-header {
            width: 100%;
            max-width: 390px;
            margin-top: 117px;
            padding: 0 28px;
        }

        .login-header h2 {
            font-size: 23px;
            color: #080808;
            font-weight: 700;
            letter-spacing: -0.8px;
        }

        .login-header p {
            margin-top: 15px;
            color: #4b4b4b;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.5;
        }

        /* FORM */
        .login-form {
            width: 100%;
            max-width: 390px;
            margin-top: 75px;
        }

        .input-group {
            position: relative;
            width: 100%;
            margin-bottom: 26px;
        }

        .input-group input {
            width: 100%;
            height: 56px;
            border: 1.5px solid #777;
            border-radius: 16px;
            outline: none;
            padding: 0 55px 0 18px;
            font-family: inherit;
            font-size: 18px;
            font-weight: 600;
            color: #222;
            background: #fff;
            transition: 0.2s;
        }

        .input-group input::placeholder {
            color: #a6a6a6;
            opacity: 1;
        }

        .input-group input:focus {
            border-color: #443cf0;
            box-shadow: 0 0 0 3px rgba(68, 60, 240, 0.12);
        }

        /* IKON INPUT */
        .input-icon {
            position: absolute;
            width: 30px;
            height: 30px;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            fill: none;
            stroke: #a5a5a5;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
            pointer-events: none;
        }

        /* TOMBOL LOGIN */
        .login-button {
            width: 100%;
            height: 53px;
            margin-top: 2px;
            border: none;
            border-radius: 20px;
            background: #443cf0;
            color: white;
            font-size: 22px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            background: #3028d9;
        }

        .login-button:active {
            transform: scale(0.99);
        }

        /* LINK DAFTAR */
        .register-text {
            width: 100%;
            max-width: 390px;
            margin-top: 14px;
            text-align: center;
            font-size: 14px;
            font-weight: 700;
            color: #080808;
        }

        .register-text a {
            color: #3929ed;
            text-decoration: none;
            margin-left: 6px;
        }

        .register-text a:hover {
            text-decoration: underline;
        }

        /* RESPONSIVE TABLET */
        @media (max-width: 900px) {
            .branding {
                width: 48%;
            }

            .login-panel {
                width: 49%;
                margin-right: 2%;
            }

            .brand-title {
                gap: 10px;
            }

            .brand-logo {
                width: 55px;
                height: 55px;
            }

            .brand-title h1 {
                font-size: 30px;
            }

            .tagline {
                font-size: 12px;
            }

            .login-header {
                padding: 0 12px;
                margin-top: 100px;
            }

            .login-header h2 {
                font-size: 21px;
            }

            .login-header p {
                font-size: 12px;
            }

            .login-form {
                margin-top: 60px;
            }
        }

        /* RESPONSIVE HP */
        @media (max-width: 650px) {
            .login-page {
                min-height: 100vh;
                padding: 24px 16px;
                flex-direction: column;
                align-items: center;
                gap: 24px;
                overflow: auto;
            }

            .branding {
                width: 100%;
                min-height: 230px;
                flex-shrink: 0;
            }

            .branding::before {
                width: 250px;
                height: 300px;
                left: 50%;
                top: 0;
                transform: translateX(-50%) skewX(-10deg);
            }

            .circle-one {
                width: 220px;
                height: 220px;
                top: -100px;
                left: -70px;
            }

            .circle-two {
                width: 220px;
                height: 220px;
                top: 50px;
                right: -100px;
            }

            .circle-three {
                width: 130px;
                height: 130px;
            }

            .brand-content {
                top: 18px;
                left: 0;
                right: 0;
            }

            .brand-logo {
                width: 55px;
                height: 55px;
            }

            .brand-title h1 {
                font-size: 32px;
            }

            .tagline {
                margin-top: 10px;
                font-size: 13px;
            }

            .car-container {
                width: 78%;
                left: 11%;
                top: 115px;
            }

            .login-panel {
                width: 100%;
                min-height: 440px;
                margin: 0;
                padding: 35px 22px;
                border-radius: 15px;
            }

            .login-header {
                margin-top: 5px;
                padding: 0;
            }

            .login-header h2 {
                font-size: 23px;
            }

            .login-header p {
                margin-top: 10px;
                font-size: 13px;
            }

            .login-form {
                margin-top: 35px;
            }

            .input-group {
                margin-bottom: 18px;
            }

            .input-group input {
                height: 54px;
                font-size: 16px;
            }

            .login-button {
                height: 52px;
                font-size: 20px;
            }

            .register-text {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <main class="login-page">

        <!-- BRANDING KIRI -->
        <section class="branding">

            <div class="circle circle-one"></div>
            <div class="circle circle-two"></div>
            <div class="circle circle-three"></div>

            <div class="brand-content">
                <div class="brand-title">

                    <!-- Ganti dengan lokasi logo milikmu -->
                    <img
                        src="assets/logo-pitstop.png"
                        alt="Logo PitStop.id"
                        class="brand-logo"
                    >

                    <h1>PitStop.id</h1>
                </div>

                <p class="tagline">
                    Booking Service, Jadi Lebih Mudah!
                </p>
            </div>

            <div class="car-container">

                <!-- Ganti dengan lokasi gambar mobil milikmu -->
                <img
                    src="assets/mobil.png"
                    alt="Mobil PitStop.id"
                    class="car-image"
                >

            </div>

        </section>

        <!-- FORM LOGIN KANAN -->
        <section class="login-panel">

            <div class="login-header">
                <h2>Login ke PitStop.id</h2>
                <p>Masukkan Kata Sandi dan Username Anda</p>
            </div>

            <form class="login-form" action="#" method="post">

                <!-- Username -->
                <div class="input-group">

                    <input
                        type="text"
                        name="username"
                        placeholder="Username"
                        aria-label="Username"
                        autocomplete="username"
                        required
                    >

                    <svg
                        viewBox="0 0 24 24"
                        class="input-icon"
                        aria-hidden="true"
                    >
                        <circle cx="12" cy="7.5" r="4"></circle>
                        <path d="M4 21v-2a8 8 0 0 1 16 0v2"></path>
                    </svg>

                </div>

                <!-- Password -->
                <div class="input-group">

                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        aria-label="Password"
                        autocomplete="current-password"
                        required
                    >

                    <svg
                        viewBox="0 0 24 24"
                        class="input-icon"
                        aria-hidden="true"
                    >
                        <rect
                            x="4"
                            y="10"
                            width="16"
                            height="12"
                            rx="2"
                        ></rect>

                        <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                    </svg>

                </div>

                <!-- Tombol login -->
                <button type="submit" class="login-button">
                    Log In
                </button>

            </form>

            <!-- Link pendaftaran -->
            <p class="register-text">
                Belum Punya Akun?
                <a href="register.php">Daftar Sekarang!</a>
            </p>

        </section>

    </main>

</body>
</html>
