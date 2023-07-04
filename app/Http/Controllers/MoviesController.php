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
        $url = 'https://api.themoviedb.org/3/discover/movie?api_key=46ed110d0011550ed72c3dcf77411b4e';
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        $film =$data['results'][0];

        return view('landingPage', ['data' => $data['results']], ['film' => $film]);
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
