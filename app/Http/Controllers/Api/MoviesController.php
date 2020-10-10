<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\Movies;

class MoviesController extends Controller
{
    public $movies;

    public function __construct(){
        $this->movies = new Movies();
    }

    //List the upcoming movies, 20 items per page
    public function upcoming(Request $request){
        $page = $request->get('page') ? $request->get('page') : 1;
        
        $result = $this->movies->upcoming($page);

        return response()->json($result, 200);
    }

    //List the top 20 rated movies
    public function topRated(Request $request){
        $page = $request->get('page') ? $request->get('page') : 1;
        
        $result = $this->movies->topRated($page);

        return response()->json($result, 200);
    }

    //List details for given movieId
    public function find($movieId){        
        $result = $this->movies->find($movieId);

        $result->related = $this->movies->allSimilars($movieId);

        return response()->json($result, 200);
    }
}
