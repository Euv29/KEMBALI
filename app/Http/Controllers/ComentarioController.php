<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use \App\Notifications\NovoComentario;


class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $comentario = new Comentario;
        $user = auth()->user();
        $userPost = User::find($request->usuarioPost);

        if ($request->hasFile('img-comentario')) {

            $file = $request->file('img-comentario');
            $imagem = Image::make($file);
            $extensao = $file->extension();
            $path = public_path('img/comentario');

            $nome_imagem = md5($file->getClientOriginalName()) . strtotime("now") . "." . $extensao;
            $imagem->resize(1640, 856);
            $imagem->save($path . '/' . $nome_imagem, 90, 'jpg');

            $comentario->imagem = $nome_imagem;
        }

        $comentario->user_id = $user->id;
        $comentario->post_id = $id;
        $comentario->comentario = $request->comentario;

        $comentario->save();

        if ($user != $userPost) {
            $userPost->notify(new NovoComentario($comentario)); //Enviar uma notificação na base de dados
        }

        return redirect('/perguntas/' . $id)->with('msg', 'Comentário Enviado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comentario = Comentario::findOrFail($id);
        // $post = $comentario->post_id;

        if (auth()->user()->id == $comentario->user_id) {
            return view('perguntas.comentario.edit', ['comentarioEditar' => $comentario]);
        } else {
            return redirect('/');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $comentario = Comentario::findOrFail($request->id);

        if (auth()->user()->id == $comentario->user_id) {

            if ($request->hasFile('img-comentario')) {
                $imagemAnterior = 'img/comentario/' . $comentario->imagem;

                $file = $request->file('img-comentario');
                $imagem = Image::make($file);
                $extensao = $file->extension();
                $path = public_path('img/comentario');

                $nome_imagem = md5($file->getClientOriginalName()) . strtotime("now") . "." . $extensao;
                $imagem->resize(1640, 856);

                if (File::exists($imagemAnterior)) {
                    File::delete($imagemAnterior);
                }

                $imagem->save($path . '/' . $nome_imagem, 90, 'jpg');
                $comentario->imagem = $nome_imagem;
            }

            $comentario->comentario = $request->comentario;

            $comentario->update();

            if (auth()->user() != $comentario->post->user) {
                $comentario->post->user->notify(new NovoComentario($comentario)); //Enviar uma notificação na base de dados
            }

            return redirect('/perguntas/' . $comentario->post_id)->with('msg', 'Comentário Actualizado Com Sucesso!');

        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comentario = Comentario::findOrFail($id);
        $imagem = 'img/comentario/' . $comentario->imagem;


        if (File::exists($imagem)) {
            File::delete($imagem);
        }

        $comentario->delete();

        return back()->with('msg', 'Comentário Excluído com Sucesso!');
    }
}
