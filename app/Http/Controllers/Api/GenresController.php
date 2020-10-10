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
            foreach($result->genres as $genre){
                if($genre->id == $request->get('id')){
                    return response()->json(['genre' => $genre], 200);
                }
            }

            return response()->json(['genre' => null], 200);
        }

        return response()->json($result, 200);
    }
}
