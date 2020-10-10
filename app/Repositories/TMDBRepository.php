<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class TMDBRepository {

    private $client;
    private $apiKey;

    public function __construct(){
        $this->client = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/'
        ]);

        $this->apiKey = env("TMDB_API_KEY");
    }

    public function get(String $path, Array $params = []){
        try {
            $params['api_key'] = $this->apiKey;
            $options = ['query' => $params];
            
            $response = $this->client->request('GET', $path, $options);
    
            return json_decode($response->getBody()->getContents());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}