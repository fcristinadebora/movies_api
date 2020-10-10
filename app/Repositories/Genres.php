<?php

namespace App\Repositories;

use App\Repositories\TMDBRepository;

class Genres extends TMDBRepository {

    public function list(){
        $response = $this->get('genre/movie/list');

        return $response;
    }
}