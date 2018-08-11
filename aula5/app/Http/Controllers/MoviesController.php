<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

use App\Genre;

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
        'release_date' => $request->input('release_date'),
        'genre_id' => $request->input('genre_id')
      ]);

      $salvar = $movie->save();

      if ($salvar) {
        return 'Filme adicionado com sucesso!';
      } else {
        return view('form_filme')->with('generos', $this->getGeneros());
      }
    }

    public function getGeneros() {
      $generos = Genre::all();
      return $generos;
    }

    public function showForm()
    {
      return view('form_filme')->with('generos', $this->getGeneros());
    }

    public function showFilmes()
    {
        $array = [];
        $filmes = Movie::all();
        for ($i=1; $i < count($filmes) ; $i++) {
          $filme = Movie::find($i);
          $ator = $filme->actors()->get();
          foreach ($ator as $key => $value) {
            $array[] = [$filme->title => $value->first_name . " " . $value->last_name];
          }
        }
      return view('todosOsFilmes')->with('array', $array);
    }
}
