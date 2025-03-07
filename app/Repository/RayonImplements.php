<?php

    namespace App\Repository;

    use App\Models\Rayon;

    class RayonImplements implements RayonRepository {

        public function store($data) {
            $rayon = new Rayon();
            $rayon->create($data);
    }
}
