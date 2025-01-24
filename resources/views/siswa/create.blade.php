<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    @if (Session::get('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        <form action="{{ route('siswa.store') }}" method="POST" class=" card p-5">
            <h1>Tambah Data Siswa</h1>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="rombel" class="form-label">Rombel</label>
                <input type="text" class="form-control" id="rombel" name="rombel" required>
            </div>
            <div class="mb-3">
                <label for="rayon" class="form-label">Rayon</label>
                <select name="rayon" id="rayon" class="form-select" required>
                    <option value="" disabled selected hidden>Pilih Rayon</option>
                    <option value="rayon_a">Rayon A</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="number" class="form-control" id="nis" name="nis" min="0" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
            </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
