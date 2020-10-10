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

    /**
	 * List Upcoming movies
     * 
     * List the upcoming movies, showing 20 items each page
     * @queryParam page int The page number. Defaults to 1
	 */
    public function upcoming(Request $request){
        $page = $request->get('page') ? $request->get('page') : 1;
        
        $result = $this->movies->upcoming($page);

        return response()->json($result, 200);
    }

    /**
	 * List Top rated movies
     * 
     * List the top rated movies, showing 20 items each page
     * @queryParam page int The page number. Defaults to 1
	 */
    public function topRated(Request $request){
        $page = $request->get('page') ? $request->get('page') : 1;
        
        $result = $this->movies->topRated($page);

        return response()->json($result, 200);
    }

    /**
	 * Movie details
     * 
     * Show details from the given movie and all related movies
     * @urlParam movieId int required The ID of the movie
     * @response {
    *     "adult": false,
    *     "backdrop_path": "\/7c9UVPPiTPltouxRVY6N9uugaVA.jpg",
    *     "belongs_to_collection": null,
    *     "budget": 55000000,
    *     "genres": [
    *         {
    *             "id": 35,
    *             "name": "Comedy"
    *         },
    *         {
    *             "id": 18,
    *             "name": "Drama"
    *         },
    *         {
    *             "id": 10749,
    *             "name": "Romance"
    *         }
    *     ],
    *     "homepage": "",
    *     "id": 13,
    *     "imdb_id": "tt0109830",
    *     "original_language": "en",
    *     "original_title": "Forrest Gump",
    *     "overview": "A man with a low IQ has accomplished great things in his life and been present during significant historic events\u2014in each case, far exceeding what anyone imagined he could do. But despite all he has achieved, his one true love eludes him.",
    *     "popularity": 35.629,
    *     "poster_path": "\/clolk7rB5lAjs41SD0Vt6IXYLMm.jpg",
    *     "production_companies": [
    *         {
    *             "id": 4,
    *             "logo_path": "\/fycMZt242LVjagMByZOLUGbCvv3.png",
    *             "name": "Paramount",
    *             "origin_country": "US"
    *         }
    *     ],
    *     "production_countries": [
    *         {
    *             "iso_3166_1": "US",
    *             "name": "United States of America"
    *         }
    *     ],
    *     "release_date": "1994-07-06",
    *     "revenue": 677387716,
    *     "runtime": 142,
    *     "spoken_languages": [
    *         {
    *             "iso_639_1": "en",
    *             "name": "English"
    *         }
    *     ],
    *     "status": "Released",
    *     "tagline": "Life is like a box of chocolates...you never know what you're gonna get.",
    *     "title": "Forrest Gump",
    *     "video": false,
    *     "vote_average": 8.5,
    *     "vote_count": 18990,
    *     "related": [
    *         {
    *             "adult": false,
    *             "backdrop_path": "\/6esNUoXh4xQvucB7o7e3TCfjI65.jpg",
    *             "genre_ids": [
    *                 35,
    *                 18,
    *                 10749
    *             ],
    *             "id": 522924,
    *             "original_language": "en",
    *             "original_title": "The Art of Racing in the Rain",
    *             "overview": "A family dog\u2014with a near-human soul and a philosopher's mind\u2014evaluates his life through the lessons learned by his human owner, a race-car driver.",
    *             "poster_path": "\/mi5VN4ww0JZgRFJIaPxxTGKjUg7.jpg",
    *             "release_date": "2019-08-08",
    *             "title": "The Art of Racing in the Rain",
    *             "video": false,
    *             "vote_average": 8.4,
    *             "vote_count": 631,
    *             "popularity": 34.464
    *         }, ...
    *     ]
    * }
	*/
    public function find(int $movieId){        
        $result = $this->movies->find($movieId);

        $result->related = $this->movies->allSimilars($movieId);

        return response()->json($result, 200);
    }
}
