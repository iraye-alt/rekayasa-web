@extends('layouts.app')

@section('title', 'Detail Artikel')

@section('content')

<style>
    .hero-img {
        width: 100%;
        max-height: 420px;
        object-fit: cover;
        border-radius: 20px;
    }

    .badge-soft {
        font-size: 11px;
        padding: 6px 12px;
        border-radius: 20px;
        background: #fff4cc;
        color: #f7b500;
    }

    .badge-status {
        font-size: 11px;
        padding: 6px 12px;
        border-radius: 20px;
        background: #f3f4f6;
        color: #6b7280;
    }

    .article-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: #374151;
    }

    .meta-text {
        color: #9ca3af;
        font-size: 14px;
    }

    .content-text {
        line-height: 1.9;
        color: #4b5563;
        font-size: 15px;
    }

    .info-box {
        background: #fff7d6;
        border-radius: 18px;
        padding: 25px;
    }

    .info-box h5 {
        color: #f7b500;
        font-weight: 700;
    }

    .btn-soft {
        border-radius: 30px;
        padding: 8px 20px;
        font-weight: 500;
    }

    .btn-back {
        background: #f3f4f6;
        color: #374151;
    }

    .btn-contact {
        background: #f7b500;
        color: #ffffff;
    }

    .btn-contact:hover {
        background: #e0a800;
        color: #fff;
    }
</style>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <img src="{{ $artikel->image_url }}" class="hero-img mb-4">

            <div class="mb-3 d-flex gap-2">
                <span class="badge-soft">
                    {{ $artikel->kategori ?? 'Umum' }}
                </span>

                <span class="badge-status">
                    {{ $artikel->status ?? 'Draft' }}
                </span>
            </div>

            <h1 class="article-title mb-3">
                {{ $artikel->title }}
            </h1>

            <p class="meta-text mb-4">
                Dipublikasikan oleh Bank Mandiri
            </p>

            <div class="content-text mb-5">
                {{ $artikel->description }}
            </div>

            <div class="info-box mb-5">
                <h5 class="mb-2">Informasi</h5>
                <p class="mb-0 text-muted">
                    Artikel ini merupakan bagian dari komitmen Bank Mandiri dalam memberikan edukasi dan informasi finansial yang relevan bagi masyarakat.
                </p>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('artikel') }}" class="btn btn-soft btn-back">
                    ← Kembali
                </a>

                <a href="/contact" class="btn btn-soft btn-contact">
                    Hubungi Kami →
                </a>
            </div>

        </div>
    </div>

</div>

@endsection