<?php

namespace App\Http\Controllers;

use App\Models\Falha;
use Illuminate\Http\Request;

class FalhaController extends Controller
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
        return view('reportar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'falha' => ['required', 'max:3000', 'min:10'],
        ]);

        $falhas = new Falha;
        $user = auth()->user();

        $falhas->user_id = $user->id;
        $falhas->descricao = $request->falha;

        $falhas->save();
        return redirect(route('post.index'))->with('msg', 'Falha Reportada com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Falha $falha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Falha $falha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Falha $falha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Falha $falha)
    {
        //
    }
}
