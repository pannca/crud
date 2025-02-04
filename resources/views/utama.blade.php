<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column align-items-center justify-content-center vh-100 bg-light">

    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="card-body text-center">
            <h1 class="card-title mb-3 text-primary">Kelola Data Siswa</h1>
            <p class="card-text text-muted">Kelola data siswa dengan mudah dan efisien. Akses informasi secara cepat dan terstruktur untuk pengalaman yang lebih baik.</p>
            <a href="{{ route('siswa.index') }}" class="btn btn-primary w-100 mt-3">Lihat Data Siswa</a>
        </div>
    </div>

</body>
</html>
