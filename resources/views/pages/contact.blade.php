@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<style>
    .contact-title {
        font-size: 2rem;
        font-weight: 700;
        color: #374151;
    }

    .contact-sub {
        color: #6b7280;
        max-width: 500px;
    }

    .contact-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 25px;
        border: 1px solid #f1f1f1;
        transition: 0.3s;
        height: 100%;
    }

    .contact-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .icon-box {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        background: #fff4cc;
        color: #f7b500;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-bottom: 12px;
    }

    .form-box {
        background: #fff;
        border-radius: 20px;
        padding: 30px;
        border: 1px solid #f1f1f1;
    }

    .btn-send {
        background: #f7b500;
        color: #fff;
        border-radius: 30px;
        padding: 10px;
        border: none;
        width: 100%;
    }

    .btn-send:hover {
        background: #e0a800;
    }

    .info-banner {
        background: #fff7d6;
        border-radius: 20px;
        padding: 25px;
        text-align: center;
    }
</style>

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="contact-title">Hubungi Kami</h1>
        <p class="contact-sub mx-auto">
            Tim Bank Mandiri siap membantu kebutuhan finansial Anda dengan layanan terbaik.
        </p>
    </div>

    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <div class="contact-card text-center">
                <div class="icon-box mx-auto">📍</div>
                <h6 class="fw-bold">Alamat</h6>
                <p class="text-muted small mb-0">
                    Jl. Jenderal Sudirman No. 54, Jakarta
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="contact-card text-center">
                <div class="icon-box mx-auto">📞</div>
                <h6 class="fw-bold">Telepon</h6>
                <p class="text-muted small mb-0">
                    14000
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="contact-card text-center">
                <div class="icon-box mx-auto">✉️</div>
                <h6 class="fw-bold">Email</h6>
                <p class="text-muted small mb-0">
                    mandiri@bank.co.id
                </p>
            </div>
        </div>

    </div>

    <div class="row g-4 align-items-start">

        <div class="col-lg-6">
            <div class="form-box">

                <h5 class="fw-bold mb-3">Kirim Pesan</h5>

                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Pesan"></textarea>
                    </div>

                    <button class="btn-send">
                        Kirim Pesan
                    </button>
                </form>

            </div>
        </div>

        <div class="col-lg-6">
            <div class="info-banner">

                <h5 class="fw-bold mb-2">Butuh Bantuan Cepat?</h5>
                <p class="text-muted mb-3">
                    Hubungi layanan pelanggan kami yang tersedia 24 jam untuk membantu Anda.
                </p>

                <h4 class="fw-bold text-warning">14000</h4>

            </div>
        </div>

    </div>

</div>

@endsection