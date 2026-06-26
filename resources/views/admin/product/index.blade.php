@extends('admin.layout.app')

@section('title', 'Kelola Produk & Layanan')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Daftar Produk & Layanan</h6>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary btn-sm">Tambah Baru</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Icon/Gambar</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            @if($item->icon)
                                <span class="fs-4">{{ $item->icon }}</span>
                            @elseif($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" width="50" class="rounded">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ Str::limit($item->description, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.product.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.product.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
