@extends('layouts.app')

@section('title', 'Artikel')

@section('content')

<style>
    .section-title {
        font-weight: 700;
        color: #374151;
    }

    .section-sub {
        color: #6b7280;
    }

    .article-card {
        border-radius: 20px;
        overflow: hidden;
        background: #ffffff;
        border: 1px solid #f1f1f1;
        transition: 0.3s;
        height: 100%;
    }

    .article-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .card-img-top {
        height: 200px;
        width: 100%;
        object-fit: cover;
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

    .text-muted-soft {
        color: #6b7280;
    }

    .btn-read {
        border-radius: 30px;
        background: #f7b500;
        color: #ffffff;
        padding: 8px;
        text-align: center;
        font-weight: 500;
    }

    .btn-read:hover {
        background: #e0a800;
        color: #fff;
    }
</style>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="section-title">Artikel & Informasi</h1>
        <p class="section-sub">Wawasan terbaru seputar layanan dan dunia finansial</p>
    </div>

    <div class="row g-4">

        @forelse ($artikels as $artikel)

            <div class="col-md-4">

                <a href="{{ route('artikel.show', $artikel->id) }}"
                   class="text-decoration-none text-dark h-100 d-block">

                    <div class="article-card">

                        <img src="{{ $artikel->image_url }}" class="card-img-top">

                        <div class="p-4 d-flex flex-column h-100">

                            <div class="mb-3 d-flex gap-2">
                                <span class="badge-soft">
                                    {{ $artikel->kategori ?? 'Umum' }}
                                </span>

                                <span class="badge-status">
                                    {{ $artikel->status ?? 'Draft' }}
                                </span>
                            </div>

                            <h5 class="fw-bold mb-2">
                                {{ $artikel->title }}
                            </h5>

                            <p class="text-muted-soft small mb-3">
                                {{ Str::limit($artikel->description, 100) }}
                            </p>

                            <span class="btn-read mt-auto">
                                Baca Artikel
                            </span>

                        </div>

                    </div>

                </a>

            </div>

        @empty

            <div class="col-12 text-center">
                <h5 class="text-muted">Belum ada artikel tersedia</h5>
            </div>

        @endforelse

    </div>

    <div class="d-flex justify-content-center mt-5">
        {{ $artikels->links('pagination::bootstrap-5') }}
    </div>

</div>

@endsection