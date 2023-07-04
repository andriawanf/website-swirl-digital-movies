<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // list Movies
        $url = 'https://api.themoviedb.org/3/discover/movie?api_key=46ed110d0011550ed72c3dcf77411b4e';
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        $dataMovies = $data['results'];

        // Top Rated Movies
        $urlTopRatedMovies = 'https://api.themoviedb.org/3/movie/top_rated?api_key=46ed110d0011550ed72c3dcf77411b4e';
        $getTopRatedMovies = file_get_contents($urlTopRatedMovies);
        $dataTopRatedMovies = json_decode($getTopRatedMovies, true);
        $topRatedMovies = $dataTopRatedMovies['results'];
        // Genre Movies
        $urlGenreMovies = 'https://api.themoviedb.org/3/genre/movie/list?api_key=46ed110d0011550ed72c3dcf77411b4e';
        $getContent = file_get_contents($urlGenreMovies);
        $dataGenreMovies = json_decode($getContent, true);
        $genres = $dataGenreMovies['genres'];

        $filmsWithGenres = [];

        foreach ($topRatedMovies as $film) {
            $genreNames = [];

            foreach ($film['genre_ids'] as $genreId) {
                foreach ($genres as $genre) {
                    if ($genreId == $genre['id']) {
                        $genreNames[] = $genre['name'];
                        break;
                    }
                }
            }   
            $film['genre_names'] = $genreNames;
            $filmsWithGenres[] = $film;
        }


        // $film = $data['results'][0];

        return view('landingPage', ['data' => $data['results']], ['filmsWithGenres' => $filmsWithGenres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movies $movies)
    {
        //
    }
}
