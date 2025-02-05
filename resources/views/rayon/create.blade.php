<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Rayon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4 rounded-3">
            <h2 class="text-center text-primary mb-4">Tambah Data Rayon</h2>

            @if (Session::get('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            @if (Session::get('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            <form action="{{ route('rayon.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_rayon" class="form-label">Nama Rayon</label>
                    <input type="text" class="form-control" id="nama_rayon" name="nama_rayon" required placeholder="Masukkan Nama Rayon Baru...">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('rayon.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</html>
