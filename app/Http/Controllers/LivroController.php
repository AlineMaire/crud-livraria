<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{

    public function create()
    {
        return view('livros/create');
    }

    public function store(Request $request)
    {
        $livro = new Livro;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->preco = $request->preco;
        $livro->isbn = $request->isbn;
        $livro->resumo = $request->resumo;
        $livro->save();
        return redirect("/livros/{$livro->id}");
    }

   public function show(Livro $livro){
    return view('livros/show', [
        'livro' => $livro
    ]);
   }
}
