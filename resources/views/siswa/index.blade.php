<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Siswa</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="p-5">
    <a href=" {{ route('siswa.create') }}"><button type="button" class="btn btn-success">Tambah Data</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Rayon</th>
                <th scope="col">Rombel</th>
                <th scope="col">Nis</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody >
            @forelse ($siswa as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->rayon }}</td>
                    <td>{{ $item->rombel }}</td>
                    <td>{{ $item->nis }}</td>
                    <td class="d-flex">
                        <form action="{{ route('siswa.hapus' , $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    @empty
        <tbody>
            <tr>
                <td>tidak ada data tersedia</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
