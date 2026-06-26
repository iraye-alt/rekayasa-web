<!DOCTYPE html>
<html>
<head>
    <title>Laporan Artikel</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .text-center { text-align: center; }
    </style>
</head>
<body>
    <h2 class="text-center">Laporan Daftar Artikel</h2>
    <p>Tanggal Cetak: {{ date('d-m-Y H:i') }}</p>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $index => $artikel)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $artikel->title }}</td>
                <td>{{ $artikel->kategori }}</td>
                <td>{{ ucfirst($artikel->status) }}</td>
                <td>{{ $artikel->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
