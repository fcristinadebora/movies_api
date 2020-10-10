<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Genres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenresController extends Controller
{
    public $genres;

    public function __construct(){
        $this->genres = new Genres();
    }

    public function get(Request $request){
        $result = $this->genres->list();

        if($request->get('id')){
            $genre = null;

            foreach($result->genres as $genreItem){
                if($genreItem->id == $request->get('id')){
                    $genre = $genreItem;
                    continue;
                }
            }

            $result->genres = [$genre];
        }

        return response()->json($result, 200);
    }
}
