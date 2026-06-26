@extends('admin.layout.app')

@section('title', 'Edit Artikel')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Judul Artikel</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $artikel->title) }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $artikel->kategori) }}" required>
                @error('kategori') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                @if($artikel->image)
                    <div class="mb-2">
                        <img src="{{ $artikel->image_url }}" width="100" class="rounded">
                    </div>
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="draft" {{ old('status', $artikel->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $artikel->status) == 'published' ? 'selected' : '' }}>Published</option>
                    <option value="archived" {{ old('status', $artikel->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Isi/Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $artikel->description) }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.artikel.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
