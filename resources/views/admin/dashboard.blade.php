@extends('admin.layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title">Total Artikel</h5>
                <h2 class="fw-bold">{{ $artikelCount }}</h2>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-success text-white">
            <div class="card-body">
                <h5 class="card-title">Profil Perusahaan</h5>
                <h2 class="fw-bold">{{ $profileCount }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-warning text-dark">
            <div class="card-body">
                <h5 class="card-title">Total Produk</h5>
                <h2 class="fw-bold">{{ $productCount }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-info text-white">
            <div class="card-body">
                <h5 class="card-title">Total Galeri</h5>
                <h2 class="fw-bold">{{ $galleryCount }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
