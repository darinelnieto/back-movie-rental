<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Movie;
use App\Models\Categorie;
use DB;
use Illuminate\Support\Arr;
use App\Http\Resources\MovieResource;

class MovieController extends Controller
{
    // Create movie
    public function createMovie(Request $request){
        $movie = new Movie();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'stock' => 'required'
        ]);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->stock = $request->stock;
        $movie->save();
        $movie->years()->sync($request->year_id);
        $movie->categories()->sync($request->categorie_id);
    }
    // Get categories and years
    public function getCatYear(){
        $categoies = Categorie::all();
        $years = Year::all();
        return ['categories' => $categoies, 'years' => $years];
    }
    // show movies
    public function showMovies(){
        $movies = Movie::with('categories','years')->get();
        return $movies;
    }
    // get movie
    public function getMovie(Request $request){
        $movie = Movie::find($request);
        return MovieResource::collection($movie);
    }
    // Update
    public function updateMovie(Request $request){
        DB::table('categorie_movie')->where('categorie_id',$request->categorie_id)->delete();
        DB::table('movie_year')->where('year_id',$request->year_id)->delete();

        $movie = Movie::find($request->id);
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->stock = $request->stock;
        $movie->save();
        $movie->years()->sync($request->year_id);
        $movie->categories()->sync($request->categorie_id);
    }
    // delete
    public function deleteMovie(Request $request){
        DB::table("movies")->where('id',$request->id)->delete();
        DB::table('categorie_movie')->where('movie_id',$request->categorie_id)->delete();
        DB::table('movie_year')->where('movie_id',$request->year_id)->delete();
    }
}
