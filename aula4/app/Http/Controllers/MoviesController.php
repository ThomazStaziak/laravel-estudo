<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function adicionar(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'rating' => 'required|numeric',
        'awards' => 'required|numeric|max:2|min:1',
        'length' => 'required|numeric'
      ]);
      $movie = Movie::create([
        'title' => $request->input('title'),
        'rating' => $request->input('rating'),
        'awards' => $request->input('awards'),
        'length' => $request->input('length'),
        'release_date' => $request->input('release_date')
      ]);

      $salvar = $movie->save();

      if ($salvar) {
        return 'Filme adicionado com sucesso!';
      } else {
        return view('form');
      }
    }
}
