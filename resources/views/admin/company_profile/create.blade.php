@extends('admin.layout.app')

@section('title', 'Tambah Profil Perusahaan')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.company_profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Judul Profil (Contoh: Visi, Misi, Sejarah)</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Isi/Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.company_profile.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
