<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Post;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Disciplina::orderBy('nome_disciplina', 'asc')->get(); //Para organizar do mais recente ao mais antigo
        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $erro = session('erro');
        $data = [];

        if (!empty($erro)) {
            $data = [
                'erro' => $erro
            ];
        }
        return view('perguntas.disciplina.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'disciplina' => ['required'],
        ]);

        $disciplinas = new Disciplina;
        $disciplina = Disciplina::where('nome_disciplina', ucwords(mb_strtolower($request->disciplina)))->first();

        if ($disciplina) {
            /*Erro: Disciplina Já existe */
            session()->flash('erro', 'A disciplina Já Existe');
            return redirect()->route('disciplina.create');
        } else {
            $disciplinas->nome_disciplina = ucwords(mb_strtolower($request->disciplina));
            $disciplinas->save();
            return redirect()->route('post.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $disciplina = Disciplina::find($id);
        $perguntas = Post::where('disciplina_id', $id)->orderBy('updated_at', 'desc')->get();
        return view('perguntas.disciplina.show', ['perguntas' => $perguntas, 'disciplina' => $disciplina]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disciplina $disciplina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disciplina $disciplina)
    {
        //
    }
}
