<?php
    namespace App\Repository;

    use App\Models\Siswa;

    class SiswaImplements implements SiswaRepository
    {
        public function store($data)
        {
            $siswa = new Siswa();
            $siswa->create($data);
        }
    }
?>

