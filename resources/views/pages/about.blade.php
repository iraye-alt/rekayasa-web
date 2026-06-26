@extends('layouts.app')

@section('title', 'About')

@section('content')

<style>
    .about-header {
        text-align: center;
        padding: 60px 0 30px;
    }

    .about-header h1 {
        font-size: 2.6rem;
        font-weight: 700;
        color: #374151;
    }

    .about-header p {
        color: #6b7280;
        max-width: 600px;
        margin: auto;
    }

    .about-img-large {
        width: 100%;
        border-radius: 20px;
        margin: 40px 0;
    }

    .split-box {
        background: #fffdf4;
        border-radius: 20px;
        padding: 40px;
    }

    .split-title {
        font-weight: 700;
        color: #374151;
    }

    .highlight-number {
        font-size: 2rem;
        font-weight: 700;
        color: #f7b500;
    }

    .feature-box {
        text-align: center;
        padding: 20px;
    }

    .feature-icon {
        font-size: 26px;
        color: #f7b500;
        margin-bottom: 10px;
    }

    .timeline-horizontal {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 30px;
    }

    .timeline-item {
        text-align: center;
        flex: 1;
    }

    .timeline-circle {
        width: 12px;
        height: 12px;
        background: #f7b500;
        border-radius: 50%;
        margin: auto;
        margin-bottom: 10px;
    }

    .timeline-item h6 {
        font-weight: 700;
        color: #374151;
    }

    .timeline-item p {
        font-size: 13px;
        color: #6b7280;
    }

    .vision-section {
        background: #fff7d6;
        border-radius: 20px;
        padding: 35px;
        text-align: center;
    }

    .vision-section h5 {
        color: #f7b500;
        font-weight: 700;
    }

    .vision-section p {
        color: #6b7280;
    }
</style>

<div class="container">

    <div class="about-header">
        <h1>Membangun Masa Depan Finansial</h1>
        <p>
            Bank Mandiri hadir sebagai solusi perbankan modern yang mengutamakan kemudahan,
            keamanan, dan inovasi untuk mendukung kehidupan finansial masyarakat Indonesia.
        </p>
    </div>

    <img src="{{ asset('images/mandiri6.jpg') }}" class="about-img-large">

    <div class="row align-items-center mb-5">

        <div class="col-lg-6">
            <div class="split-box">
                <h4 class="split-title mb-3">Komitmen Kami</h4>
                <p class="text-muted">
                    Kami terus berinovasi dalam menghadirkan layanan digital yang relevan,
                    memberikan pengalaman terbaik bagi nasabah dalam setiap transaksi.
                </p>
            </div>
        </div>

        <div class="col-lg-6 text-center">
            <div class="row">
                <div class="col-4">
                    <div class="highlight-number">30+</div>
                    <small>Tahun</small>
                </div>
                <div class="col-4">
                    <div class="highlight-number">100K+</div>
                    <small>Nasabah</small>
                </div>
                <div class="col-4">
                    <div class="highlight-number">500+</div>
                    <small>Cabang</small>
                </div>
            </div>
        </div>

    </div>

    <div class="row text-center mb-5">

        <div class="col-md-4">
            <div class="feature-box">
                <div class="feature-icon">💳</div>
                <h6 class="fw-bold">Digital Banking</h6>
                <p class="text-muted small">Layanan cepat dan praktis dalam satu genggaman.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <div class="feature-icon">🏦</div>
                <h6 class="fw-bold">Jaringan Luas</h6>
                <p class="text-muted small">Didukung cabang di seluruh Indonesia.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <div class="feature-icon">🔐</div>
                <h6 class="fw-bold">Keamanan</h6>
                <p class="text-muted small">Perlindungan maksimal setiap transaksi.</p>
            </div>
        </div>

    </div>

    <div class="mb-5 text-center">
        <h4 class="fw-bold">Perjalanan Kami</h4>

        <div class="timeline-horizontal">

            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <h6>1998</h6>
                <p>Didirikan sebagai bank nasional</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <h6>2010</h6>
                <p>Transformasi digital dimulai</p>
            </div>

            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <h6>2024</h6>
                <p>Inovasi layanan modern</p>
            </div>

        </div>
    </div>

    @if(isset($profiles) && $profiles->count() > 0)
        @foreach($profiles as $profile)
        <div class="vision-section mb-4">
            <h5>{{ $profile->title }}</h5>
            @if($profile->image)
                <img src="{{ asset('storage/'.$profile->image) }}" class="img-fluid rounded my-3" style="max-height: 300px; object-fit: cover;">
            @endif
            <div class="text-muted">
                {!! nl2br(e($profile->description)) !!}
            </div>
        </div>
        @endforeach
    @else
        <div class="vision-section mb-4">
            <h5>Visi & Misi</h5>
            <p class="mb-2">
                Menjadi lembaga keuangan terpercaya dengan layanan digital terbaik.
            </p>
            <p>
                Memberikan solusi finansial yang mudah, cepat, dan aman bagi seluruh masyarakat.
            </p>
        </div>
    @endif

</div>

@endsection