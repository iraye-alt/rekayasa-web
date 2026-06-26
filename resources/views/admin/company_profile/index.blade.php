@extends('admin.layout.app')

@section('title', 'Kelola Profil Perusahaan')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Daftar Profil Perusahaan</h6>
        <a href="{{ route('admin.company_profile.create') }}" class="btn btn-primary btn-sm">Tambah Baru</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" width="80" class="rounded">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a href="{{ route('admin.company_profile.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.company_profile.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
