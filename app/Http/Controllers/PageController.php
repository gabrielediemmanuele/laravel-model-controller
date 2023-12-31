<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* mi collego al database dal model movie.php */
use App\Models\Movie;

class PageController extends Controller
{
    /* homepage function  */
    public function index()
    {
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }
    /* movies-list function  */
    public function list()
    {
        $movies = Movie::all();
        return view('movies-list', compact('movies'));
    }
}