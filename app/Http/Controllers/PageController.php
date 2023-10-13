<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* mi collego al database dal model movie.php */
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }
    public function list()
    {
        $movies = Movie::all();
        return view('movies-list', compact('movies'));
    }
}