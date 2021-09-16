<?php

namespace App\Repositories;

use App\Repositories\TMDBRepository;

class Movies extends TMDBRepository {

    public function upcoming($page = 1){
        $response = $this->get('movie/upcoming', ['page' => $page]);

        return $response;
    }

    public function topRated($page = 1){
        $response = $this->get('movie/top_rated', ['page' => $page]);

        return $response;
    }

    public function find($movieId){
        $response = $this->get("movie/$movieId");

        return $response;
    }

    public function similar($movieId, $page = 1){
        $response = $this->get("movie/$movieId/similar", ['page' => $page]);

        return $response;
    }

    public function allSimilars($movieId){
        $page = 1;

        $response = $this->similar($movieId, $page);

        $results = $response->results;
        $lastPage = $response->total_pages;

        for($page = 2; $page <= $lastPage; $page++){
            $response = $this->similar($movieId, $page);

            $results = array_merge($results, $response->results);
        }

        return $results;
    }
}