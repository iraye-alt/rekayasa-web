<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bank Mandiri')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fffdf7;
        }

        .navbar {
            background: #ffffff;
            padding: 16px 0;
            border-bottom: 1px solid #f1f1f1;
        }

        .navbar-brand span {
            color: #f7b500;
            font-weight: 700;
            margin-left: 10px;
        }

        .navbar-brand img {
            height: 38px;
        }

        .nav-link {
            color: #6b7280 !important;
            font-weight: 500;
            padding: 8px 14px;
            border-radius: 8px;
        }

        .nav-link:hover {
            background: #fff4cc;
            color: #f7b500 !important;
        }

        .btn-main {
            background: #f7b500;
            color: #ffffff;
            border-radius: 30px;
            padding: 8px 22px;
            border: none;
            font-weight: 600;
        }

        .hero {
            padding: 110px 0 70px;
            background: linear-gradient(to bottom, #fff9e6, #ffffff);
        }

        .hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #374151;
        }

        .hero p {
            color: #6b7280;
        }

        .hero-img {
            width: 100%;
            border-radius: 20px;
        }

        .stats {
            background: #fff4cc;
            border-radius: 20px;
            padding: 35px;
            margin-top: 50px;
        }

        .stats h5 {
            color: #f7b500;
            font-weight: 700;
        }

        .stats p {
            color: #6b7280;
        }

        .content-wrapper {
            padding: 60px 0;
        }

        footer {
            background: #fff4cc;
            margin-top: 80px;
        }

        .footer-content {
            padding: 50px 0;
        }

        .footer-title {
            color: #374151;
            font-weight: 600;
        }

        .footer-text {
            color: #6b7280;
            font-size: 0.9rem;
        }

        .footer-bottom {
            border-top: 1px solid #f1e6b8;
            padding: 12px;
            text-align: center;
            font-size: 0.85rem;
            color: #9ca3af;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('images/mandiri1.jpg') }}">
            <span>Mandiri</span>
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center gap-2">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/artikel" class="nav-link">Artikel</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Kontak</a></li>
                <li class="nav-item">
                    <a href="/contact" class="btn btn-main">Layanan</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

@php
    $title = 'Layanan Finansial Modern dan Mudah';
    $desc = 'Nikmati pengalaman perbankan yang lebih simpel, cepat, dan aman untuk semua kebutuhan Anda.';

    if (Request::is('about')) {
        $title = 'Tentang Mandiri';
        $desc = 'Kami terus berinovasi untuk memberikan layanan terbaik bagi masyarakat.';
    } elseif (Request::is('contact')) {
        $title = 'Hubungi Kami';
        $desc = 'Tim kami siap membantu Anda kapan saja.';
    } elseif (Request::is('artikel')) {
        $title = 'Informasi & Artikel';
        $desc = 'Temukan wawasan finansial terbaru di sini.';
    }
@endphp

<section class="hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">
                <h1>{{ $title }}</h1>
                <p class="mt-3">{{ $desc }}</p>
                <a href="/artikel" class="btn btn-main mt-3">Eksplorasi</a>
            </div>

            <div class="col-lg-7">
                <img src="{{ asset('images/mandiri2.jpg') }}" class="hero-img">
            </div>

        </div>

        <div class="stats">
            <div class="row text-center">
                <div class="col-md-4">
                    <h5>100K+</h5>
                    <p>Nasabah</p>
                </div>
                <div class="col-md-4">
                    <h5>500+</h5>
                    <p>Cabang</p>
                </div>
                <div class="col-md-4">
                    <h5>Senin-Jumat</h5>
                    <p>Layanan</p>
                </div>
            </div>
        </div>

    </div>
</section>

<main>
    <div class="container content-wrapper">
        @yield('content')
    </div>
</main>

<footer>
    <div class="container footer-content">
        <div class="row">

            <div class="col-md-4">
                <h5 class="footer-title">Bank Mandiri</h5>
                <p class="footer-text">Solusi finansial modern untuk masa depan Anda.</p>
            </div>

            <div class="col-md-4">
                <h6 class="footer-title">Menu</h6>
                <p class="footer-text">Home</p>
                <p class="footer-text">About</p>
                <p class="footer-text">Artikel</p>
                <p class="footer-text">Kontak</p>
            </div>

            <div class="col-md-4">
                <h6 class="footer-title">Kontak</h6>
                <p class="footer-text">mandiri@bank.co.id</p>
                <p class="footer-text">14000</p>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        © 2026 Bank Mandiri
    </div>
</footer>

<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>