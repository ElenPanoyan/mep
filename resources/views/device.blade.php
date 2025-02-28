<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mise en place® – Service Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', Helvetica, Arial, Lucida, sans-serif;
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6, a, p {
            line-height: 1.5;
        }

        body {
            width: 100%;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        body * {
            margin-right: 0;
            max-width: 100%;
            box-sizing: border-box;
        }

        .navbar {
            background-color: #1c1c1c !important;
            padding-top: 25px;
            padding-bottom: 25px;
            position: fixed;
            width: 100%;
            z-index: 100;
            padding-left: 3px;
        }

        .menu-titles {
            padding-left: 50px !important;
        }

        .menu-titles a {
            font-size: 18px;
            font-weight: 400;
            transform: scaleX(0.9);
            margin-right: 5px !important;
        }

        .section-2 {
            background-color: #1C1C1C;
            border-top: 5px solid #EC7A4C;
            position: relative;
            color: #fff;
        }

        .top-nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 1rem;
        }

        .top-nav a:hover {
            text-decoration: underline;
        }

        .info-section p {
            font-size: 14px;
        }

        .footer-section {
            background-color: #f26623;
            color: #fff;
            padding: 2rem 0;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .bg-img {
            width: 100%;
            height: auto;
            display: block;
        }

        .main-title {
            font-size: 32px;
        }

        .landing-block {
            background-color: #2F3030;
            width: 100%;
            height: min-content;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 30px;
        }

        .landing-block img {
            width: 64px;
            height: 64px;
        }

        .footer-section {
            align-items: start;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: rgba(232, 78, 36, 0.6);
            color: white;
            padding-bottom: 0;
        }

        .container {
            padding-left: 0;
            padding-right: 0;
        }

        .landing-block p {
            font-size: 14px;
        }

        .footer-section {
            background-color: #E84E24;
            padding-top: 70px;
        }

        .footer-info span {
            font-size: 14px !important;
            margin-bottom: 60px;
        }

        .footer-info p {
            font-size: 14px !important;
            margin-bottom: 40px;
        }

        .footer-info {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .footer-copyright {
            background-color: rgba(0, 0, 0, 0.4);
            width: 100%;
            margin: 0;
            height: 50px;
            display: flex;
            align-items: center;
        }

        @media (max-width: 1220px) {
            .section-1 {
                height: unset !important;
            }

            .menu-titles a {
                font-size: 15px;
            }

            .navbar {
                display: flex;
                flex-direction: column;
            }

            .menu-titles {
                padding-left: 0 !important;
                margin-top: 10px;
            }

            .footer-first-line {
                flex-direction: column;
            }

            .footer-logo {
                width: 70% !important;
                height: unset !important;
            }
        }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark top-nav">
    <img src="{{asset('images/logo.png')}}" style="width: 183px;height: 74px;">
    <div class="container d-flex justify-content-center menu-titles">
        <a href="#">PROZESSKÜCHE</a>
        <a href="#">KUNDENSTIMMEN</a>
        <a href="#">LIVE ERLEBEN</a>
        <a href="#">FRAGEN</a>
        <a href="#">BETTER JOBS</a>
        <a href="#">SHOP</a>
    </div>
</nav>
<main>
    <section style="height: 600px" class="section-1">
        <img src="{{asset('/images/bg.jpg')}}" class="bg-img">
    </section>
    <section class="section-2">
        <div class="container" style="padding-top: 20px;">
            <p class="main-title">Mise en place® – service center</p>
            <div class="row info-section">
                <div class="col-6">
                    <p>Gerätetyp</p>
                    <p>Seriennummer</p>
                    <p>Standort</p>
                    <p>Gewährleistung bis</p>
                </div>
                <div class="col-6">
                    <p>{{ $device->name ?? 'N/A' }}</p>
                    <p>{{ $device->sn ?? 'N/A' }}</p>
                    <p>{{ $device->adress ?? 'N/A' }}</p>
                    <p>{{ $device->warranty_text ?? 'N/A' }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="landing-block py-3">
                        <img src="{{asset('images/icon1.png')}}">
                        <p class="mb-0 mt-3">Fehler melden</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="landing-block py-3">
                        <img src="{{asset('images/icon2.png')}}">
                        <p class="mb-0 mt-3">Pflegeprodukte / Ersatzteile</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="landing-block py-3">
                        <img src="{{asset('images/icon3.png')}}">
                        <p class="mb-0 mt-3">Handbücher / Videos</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="landing-block py-3">
                        <img src="{{asset('images/icon4.png')}}">
                        <p class="mb-0 mt-3">Techniker-Ebene / Service-Historie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-4">
                <img src="{{asset('/images/transparent-logo.png')}}" class="footer-logo"
                     style="width: 300px; height: 121px">
            </div>
            <div class="col-4 footer-info">
                <div class="d-flex justify-content-between footer-first-line" style="width: 60%">
                    <span>Impressum</span><span>Datenschutz</span><span>Kontakt</span>
                </div>
                <p>Mise en place Gastro Solutions GmbH & Co. KG </p>
                <p>Philosophenweg 21</p>
                <p>47051 Duisburg</p>
                <p>T: +49 203 2982219</p>
                <p>E: info@miseenplace24.com</p>
            </div>
            <div class="col-4">
                <img src="{{asset('images/social.png')}}" style="width:70%">
            </div>
        </div>

    </div>
    <div class="footer-copyright">
        <div class="container">
            © Mise en place® Gastro Solutions GmbH & Co. KG
        </div>
    </div>
</footer>


<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
