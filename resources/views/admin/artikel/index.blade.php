@extends('admin.layout.app')

@section('title', 'Kelola Artikel')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Daftar Artikel</h6>
        <div>
            <a href="{{ route('admin.artikel.pdf') }}" class="btn btn-secondary btn-sm me-2">Export PDF</a>
            <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary btn-sm">Tambah Baru</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikels as $key => $item)
                    <tr>
                        <td>{{ $artikels->firstItem() + $key }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ $item->image_url }}" width="80" class="rounded">
                            @else
                                <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>
                            @if($item->status == 'published')
                                <span class="badge bg-success">Published</span>
                            @elseif($item->status == 'draft')
                                <span class="badge bg-secondary">Draft</span>
                            @else
                                <span class="badge bg-warning">Archived</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.artikel.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.artikel.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
        <div class="mt-3">
            {{ $artikels->links() }}
        </div>
    </div>
</div>
@endsection
