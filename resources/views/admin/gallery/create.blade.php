@extends('admin.layout.app')

@section('title', 'Tambah Gambar Galeri')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Judul/Keterangan Gambar</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
