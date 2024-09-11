<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Use del controller Movies;
use App\Models\Movie;

class PageController extends Controller
{
    // Dichiaro la funzione per il RETURN di Movies;
    public function index(){
        
       return view('home');
    }

    public function movies(){

        //SELECT * FROM 'movies';
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }

    public function contacts(){
        return view(view: 'contacts');
    }

    public function about(){
        return view('about');
    }
}
