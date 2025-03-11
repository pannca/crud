<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Siswa</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center text-primary">Manajemen Data Siswa</h2>
        <hr>
        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <h4>Daftar Siswa</h4>
            <div class="d-flex gap-2">
                <a href="{{ route('siswa.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                <a href="{{ route('rayon.index') }}" class="btn btn-success"><i class="fa-solid fa-list-check"></i> Kelola Data Rayon</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark text-white">
                    <tr>
                        <th>Nama</th>
                        <th>Rayon</th>
                        <th>Rombel</th>
                        <th>Nis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->rayon->nama_rayon }}</td>
                            <td>{{ $item->rombel }}</td>
                            <td>{{ $item->nis }}</td>
                            <td class="d-flex">
                                <a href="{{ route('siswa.edit', $item['id']) }}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <form action="{{ route('siswa.hapus', $item['id']) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm hapus" data-id="{{ $item['id'] }}"><i class="fa-solid fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Tidak ada data tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
    $(document).on('click', '.hapus', function(e) {
        e.preventDefault();
        let form = $(this).closest('form');
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>

</html>
