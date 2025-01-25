<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Daftar Tamu</h1>

    <form action="{{ route('tamu.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari Kode Tamu" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <a href="{{ route('tamu.create') }}" class="btn btn-primary">Tambah Tamu</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Tamu</th>
                <th>Nama Tamu</th>
                <th>Alamat Tamu</th>
                <th>No Telpon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($tamus->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Tidak ada tamu ditemukan.</td>
                </tr>
            @else
                @foreach ($tamus as $tamu)
                <tr>
                    <td>{{ $tamu->kode_tamu }}</td>
                    <td>{{ $tamu->nama_tamu }}</td>
                    <td>{{ $tamu->alamat_tamu }}</td>
                    <td>{{ $tamu->no_telpon }}</td>
                    <td>
                        <a href="{{ route('tamu.edit', $tamu->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
</body>
</html>