<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

use App\Genre;

class GenreController extends Controller
{
    // public function show($id) {
    //   $genero = Genre::find($id);
    //   return view('filmes')->with('genero', $genero);
    // }
    
    public function show($id) {
      $genero = Genre::find($id);
      $filme = $genero->movies()->get();
      return view('filmes')->with('filme', $filme)->with('genero', $genero);
    }
}
