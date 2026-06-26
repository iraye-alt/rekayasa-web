@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style>
    .hero-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #374151;
    }

    .hero-sub {
        color: #6b7280;
        max-width: 520px;
    }

    .hero-img {
        width: 100%;
        border-radius: 20px;
    }

    .section-title {
        font-weight: 700;
        color: #374151;
    }

    .card-soft {
        background: #ffffff;
        border-radius: 18px;
        padding: 25px;
        border: 1px solid #f1f1f1;
        text-align: center;
        transition: 0.3s;
    }

    .card-soft:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    .icon-soft {
        font-size: 26px;
        color: #f7b500;
        margin-bottom: 10px;
    }

    .highlight-box {
        background: #fff7d6;
        border-radius: 20px;
        padding: 30px;
    }

    .highlight-title {
        color: #f7b500;
        font-weight: 700;
    }

    .cta-box {
        background: #f7b500;
        color: #ffffff;
        border-radius: 20px;
        padding: 50px;
        text-align: center;
    }
</style>

<div class="container py-5">

    <div class="row align-items-center mb-5">

        <div class="col-lg-6">
            <h1 class="hero-title mb-3">
                Layanan Perbankan Modern yang Lebih Mudah
            </h1>

            <p class="hero-sub mb-4">
                Nikmati pengalaman finansial yang cepat, aman, dan fleksibel untuk kebutuhan harian maupun bisnis Anda.
            </p>

            <a href="/artikel" class="btn btn-main">
                Jelajahi Layanan
            </a>
        </div>

        <div class="col-lg-6">
            <img src="{{ asset('images/mandiri2.jpg') }}" class="hero-img">
        </div>

    </div>

    <div class="row g-4 text-center mb-5">

        @if($products->count() > 0)
            @foreach($products as $product)
            <div class="col-md-4">
                <div class="card-soft h-100">
                    <div class="icon-soft">
                        @if($product->image)
                            <img src="{{ asset('storage/'.$product->image) }}" width="40" alt="{{ $product->name }}">
                        @else
                            {{ $product->icon ?? '⭐' }}
                        @endif
                    </div>
                    <h5 class="fw-bold">{{ $product->name }}</h5>
                    <p class="text-muted small">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
            @endforeach
        @else
            <!-- Default Data jika kosong -->
            <div class="col-md-4">
                <div class="card-soft">
                    <div class="icon-soft">💳</div>
                    <h5 class="fw-bold">Transaksi Mudah</h5>
                    <p class="text-muted small">Transfer, pembayaran, dan top-up dalam satu aplikasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-soft">
                    <div class="icon-soft">📱</div>
                    <h5 class="fw-bold">Digital Banking</h5>
                    <p class="text-muted small">Akses layanan kapan saja melalui mobile banking.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-soft">
                    <div class="icon-soft">🔐</div>
                    <h5 class="fw-bold">Keamanan Tinggi</h5>
                    <p class="text-muted small">Sistem keamanan berlapis untuk melindungi transaksi Anda.</p>
                </div>
            </div>
        @endif

    </div>

    <div class="highlight-box mb-5">
        <div class="row text-center">

            <div class="col-md-4 mb-3">
                <div class="highlight-title">100K+</div>
                <div class="text-muted">Nasabah Aktif</div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="highlight-title">500+</div>
                <div class="text-muted">Cabang Nasional</div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="highlight-title">24/7</div>
                <div class="text-muted">Layanan Digital</div>
            </div>

        </div>
    </div>

    @if(isset($galleries) && $galleries->count() > 0)
    <div class="mb-5">
        <h2 class="section-title text-center mb-4">Galeri Kami</h2>
        <div class="row g-3">
            @foreach($galleries as $gallery)
            <div class="col-md-3">
                <img src="{{ asset('storage/'.$gallery->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $gallery->title }}" style="height: 200px; width: 100%; object-fit: cover;">
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <div class="row align-items-center mb-5">

        <div class="col-lg-6">
            <img src="{{ asset('images/mandiri3.jpg') }}" class="hero-img">
        </div>

        <div class="col-lg-6">
            <h2 class="section-title mb-3">
                Solusi Finansial untuk Semua Kebutuhan
            </h2>

            <p class="text-muted">
                Kami menghadirkan berbagai produk perbankan mulai dari tabungan, kredit, hingga layanan investasi untuk membantu Anda mencapai tujuan finansial.
            </p>
        </div>

    </div>

    <div class="cta-box">
        <h2 class="fw-bold mb-3">Mulai Kelola Keuangan Anda Sekarang</h2>
        <p class="mb-3">Bergabung dan nikmati kemudahan layanan digital terbaik.</p>
        <a href="/contact" class="btn btn-light px-4">
            Daftar Sekarang
        </a>
    </div>

</div>

@endsection