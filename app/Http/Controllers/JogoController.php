<?php

namespace App\Http\Controllers;

use App\Http\Requests\JogoRequest;
use App\Models\Jogo;

class JogoController extends Controller
{
    public function index()
    {
        $jogos = Jogo::orderBy('nome')->get();

        return view('jogos.index', compact('jogos'));
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(JogoRequest $request)
    {
        Jogo::create($request->validated());

        return redirect()->route('jogos.index')
            ->with('success', 'Jogo cadastrado com sucesso.');
    }

    public function show(Jogo $jogo)
    {
        return redirect()->route('jogos.index');
    }

    public function edit(Jogo $jogo)
    {
        return view('jogos.edit', compact('jogo'));
    }

    public function update(JogoRequest $request, Jogo $jogo)
    {
        $jogo->update($request->validated());

        return redirect()->route('jogos.index')
            ->with('success', 'Jogo atualizado com sucesso.');
    }

    public function destroy(Jogo $jogo)
    {
        $jogo->delete();

        return redirect()->route('jogos.index')
            ->with('success', 'Jogo removido com sucesso.');
    }
}