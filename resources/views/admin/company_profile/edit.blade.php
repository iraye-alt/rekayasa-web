@extends('admin.layout.app')

@section('title', 'Edit Profil Perusahaan')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="{{ route('admin.company_profile.update', $company_profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Judul Profil</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $company_profile->title) }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar (Opsional)</label>
                @if($company_profile->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $company_profile->image) }}" width="100" class="rounded">
                    </div>
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Isi/Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $company_profile->description) }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.company_profile.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
