<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        // recuperare film db
        $movies = Movie::all();
        // dd($movies);

        return view('home', compact('movies'));
    }
}
