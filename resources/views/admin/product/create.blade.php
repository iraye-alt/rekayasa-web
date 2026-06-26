@extends('admin.layout.app')

@section('title', 'Tambah Produk & Layanan')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Nama Produk/Layanan</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Ikon (Emoji atau text singkat - opsional)</label>
                <input type="text" name="icon" class="form-control" value="{{ old('icon') }}" placeholder="Contoh: 💳">
                @error('icon') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi Singkat</label>
                <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
