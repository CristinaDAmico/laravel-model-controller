<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    // HOMEPAGE
    public function index() {
        // Ottenere i film dal db
        $movies = Movie::all();
        //dump($movies);

        // return the user view
        return view('home', compact('movies'));
    }
}
