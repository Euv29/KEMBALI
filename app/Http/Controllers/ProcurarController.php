<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Post;
use Illuminate\Http\Request;

class ProcurarController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $filtro = $request->filtro;

        if ($search) {


            if ($filtro == 'Posts') {
                $resultado = Post::where([['pergunta', 'like', '%' . $search . '%']])
                    ->orderBy('updated_at', 'desc')
                    ->get();
            }
            if ($filtro == 'Disciplinas') {
                $resultado = Disciplina::where([['nome_disciplina', 'like', '%' . $search . '%']])
                    ->orderBy('updated_at', 'desc')
                    ->get();
            }
        } else {
            $resultado = Post::orderBy('updated_at', 'desc');
        }

        return view('perguntas.search', ['resultados' => $resultado, 'search' => $search, 'filtro' => $filtro]);
    }
}
