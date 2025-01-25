<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Tambah Tamu</h1>
    <form action="{{ route('tamu.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_tamu">Kode Tamu</label>
            <input type="text" class="form-control" name="kode_tamu" required>
        </div>
        <div class="form-group">
            <label for="nama_tamu">Nama Tamu</label>
            <input type="text" class="form-control" name="nama_tamu" required>
        </div>
        <div class="form-group">
            <label for="alamat_tamu">Alamat Tamu</label>
            <input type="text" class="form-control" name="alamat_tamu" required>
        </div>
        <div class="form-group">
            <label for="no_telpon">No Telpon</label>
            <input type="text" class="form-control" name="no_telpon" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('tamu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>