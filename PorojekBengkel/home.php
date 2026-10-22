<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            display: flex;
            justify-content: space-between;
            background-size: contain;
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            gap: 20px;
            border: 1px solid black;
            font-size: 35px;
            background-image: url("mobil.png");
            background-size: cover;
            background-position: center;
        }


        .anu {
            border: 1px solid black;
            margin-top: 20px;
            height: 35px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .anu p {
            flex: 1;
            text-align: center;
        }

        .layanan {
            border: 1px solid black;
            margin-top: 20px;
            height: 1500px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 300px));
            justify-content: center;
            column-gap: 250px;
            row-gap: 30px;
            text-align: center;
        }

        .container div {
            text-align: center;
            border: 1px solid black;
            width: 500px;
            height: 500px;
        }

        .layanan p {
            margin-bottom: 100px;
            margin-left: 350px;
            font-size: 50px;
        }

        .nav {
            margin: 30px;
            color: aliceblue;
        }

        .menu-nav {
            margin: 30px;
            display: flex;
            gap: 10px;
            height: fit-content;
            background-color: rgba(250, 251, 250, 20%);
            border-radius: 10px;
            width: 540px;
            justify-content: center;
            
        }

        .menu-nav a {
            text-decoration: none;
            color: rgba(255, 255, 255, 80%);
        }
    </style>
</head>
<body>
    <header>
    <p class="nav">PitStop</p>
    <nav class="menu-nav">
        <a href="#beranda">Beranda</a>
        <a href="#layanan-unggulan">Layanan</a>
        <a href="#status">Status</a>
        <a href="#notifikasi">Notifikasi</a>
    </nav>
    </header>
    <div class="anu">
        <p>Terpercaya 100%</p>
        <p>Booking Instan</p>
        <p>Teknisi Profesional</p>
    </div>

    <div class="layanan">
        <p id="layanan-unggulan">Layanan Unggulan</p>
        <div class="container">
            <div>layanan 1</div>
            <div>layanan 2</div>
            <div>layanan 3</div>
            <div>layanan 4</div>
            <div>layanan 5</div>
            <div>layanan 6</div>
        </div>
    </div>
</body>
</html>