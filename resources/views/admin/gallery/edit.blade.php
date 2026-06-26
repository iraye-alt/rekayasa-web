@extends('admin.layout.app')

@section('title', 'Edit Gambar Galeri')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Judul/Keterangan Gambar</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $gallery->title) }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                @if($gallery->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $gallery->image) }}" width="150" class="rounded">
                    </div>
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
