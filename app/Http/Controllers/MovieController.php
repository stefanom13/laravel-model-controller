<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        // recuperare film db
        $movies = [];
        return view('home', compact('movies'));
    }
}
