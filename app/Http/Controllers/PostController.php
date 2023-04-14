<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('updated_at', 'desc')->get(); //Para organizar do mais recente ao mais antigo
        return view('perguntas.index', ['perguntas' => $post]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'post' => ['required', 'max:3000', 'min:10'],
            'disciplina' => ['required'],
        ]);

        $posts = new Post;
        $user = auth()->user();

        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $imagem = Image::make($file);
            $extensao = $file->extension();
            $path = public_path('img/post');

            $nome_imagem = md5($file->getClientOriginalName()) . strtotime("now") . "." . $extensao;
            $imagem->resize(1640, 856);
            $imagem->save($path . '/' . $nome_imagem, 90, 'jpg');

            $posts->imagem = $nome_imagem;
        }

        $posts->user_id = $user->id;
        $posts->pergunta = $request->post;
        $posts->disciplina_id = $request->disciplina;

        $posts->save();
        return redirect(route('post.index'))->with('msg', 'Pergunta Enviada Com Sucesso!');
    }

    public function show($id)
    {
        $pergunta = Post::findOrFail($id);
        return view('perguntas.show', ['pergunta' => $pergunta]);
    }

    public function dashboard()
    {
        $usuario = auth()->user();
        $perguntas = Post::where('user_id', $usuario->id)->orderBy('updated_at', 'desc')->get();

        return view('dashboard', ['perguntas' => $perguntas, 'usuario' => $usuario]);
    }

    public function edit($id)
    {
        $pergunta = Post::findOrFail($id);

        if (auth()->user()->id == $pergunta->user_id) {
            return view('perguntas.edit', ['pergunta' => $pergunta]);
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $post = Post::findOrFail($request->id);

        if (auth()->user()->id == $post->user_id) {
            $request->validate([
                'post' => ['required', 'max:3000', 'min:10'],
                'disciplina' => ['required'],
            ]);

            if ($request->hasFile('img')) {
                $imagemAnterior = 'img/post/' . $post->imagem;

                $file = $request->file('img');
                $imagem = Image::make($file);
                $extensao = $file->extension();
                $path = public_path('img/post');

                $nome_imagem = md5($file->getClientOriginalName()) . strtotime("now") . "." . $extensao;
                $imagem->resize(1640, 856);

                if (File::exists($imagemAnterior)) {
                    File::delete($imagemAnterior);
                }

                $imagem->save($path . '/' . $nome_imagem, 90, 'jpg');

                $post->imagem = $nome_imagem;
            }

            $post->pergunta = $request->post;
            $post->disciplina_id = $request->disciplina;

            $post->update();
            return redirect(route('post.index'))->with('msg', 'Pergunta Actualizada Com Sucesso!');

        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $imagem = 'img/post/' . $post->imagem;

        if (File::exists($imagem)) {
            File::delete($imagem);
        }

        $post->delete();

        return back()->with('msg', 'Pergunta Excluída com Sucesso!');
    }
}
