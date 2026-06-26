@extends('admin.layout.app')

@section('title', 'Kelola Galeri')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Daftar Galeri</h6>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-sm">Tambah Gambar Baru</a>
    </div>
    <div class="card-body">
        <div class="row g-3">
            @forelse($galleries as $item)
            <div class="col-md-3">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center p-2">
                        <h6 class="mb-2">{{ $item->title }}</h6>
                        <a href="{{ route('admin.gallery.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">
                <p>Belum ada gambar di galeri.</p>
            </div>
            @endforelse
        </div>
        <div class="mt-4">
            {{ $galleries->links() }}
        </div>
    </div>
</div>
@endsection
