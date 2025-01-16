<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
</head>

<body>
    <form action="{{ route('siswa.store') }}" method="POST" >
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="mb-3">
            <label for="rombel" class="form-label">Rombel</label>
            <input type="text" class="form-control" id="rombel" name="rombel">
        </div>
        <div class="mb-3">
            <label for="rayon" class="form-label">Rayon</label>
            <input type="text" class="form-control" id="rayon" name="rayon">
        </div>
        <div class="mb-3">
            <label for="nis" class="form-label">Nis</label>
            <input type="number" class="form-control" id="nis" name="nis">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</body>

</html>
