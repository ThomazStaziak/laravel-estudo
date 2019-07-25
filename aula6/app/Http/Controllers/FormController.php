<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class FormController extends Controller
{
    public function storage(Request $request)
    {
      $arquivo = $request->file('arquivo');

      if (empty($arquivo)) {
        abort(400, 'Nenhum arquivo foi enviado');
      }

      // salvando
      $nomePasta = 'uploads';

      $arquivostorePublicly($nomePasta);

      $caminhoAbsoluto = public_path()."/storage/$nomePasta";

      $nomeArquivo = $arquivo->getClientOriginalName();

      $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

     // movendo
      $arquivo->move($caminhoAbsoluto, $nomeArquivo);

      Photo::create([
          'image' => $caminhoRelativo
      ]);

      return redirect('/photos');

    //   return view('imagem')->with('caminho', $caminhoAbsoluto)->with('nomeArquivo', $nomeArquivo)->with('nomePasta', $nomePasta);
    }

    public function index()
    {
        $photos = Photo::all();

        return view('photos')->with('photos', $photos);
    }
}
