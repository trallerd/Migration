<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Especialidade;

class especialidadeController extends Controller
{

    public function index()
    {
        $especialidades = Especialidade::all();
        return view('especialidade.index', compact(['especialidades']));
    }


    public function create()
    {
        return view('especialidade.create');
    }

    public function store(Request $request)
    {
        $especialidade = new Especialidade();
        $especialidade->nome = mb_strtoupper($request->input('nome'), 'UTF-8');
        $especialidade->descricao = $request->input('descricao');
        $especialidade->save();

        return redirect()->route('especialidade.index');
    }

    public function show($id){
        $especialidade = Especialidade::find($id);
        return view('especialidade.show', compact('especialidade'));
    }

    public function edit($id)
    {
        $especialidade = Especialidade::find($id);
        if (isset($especialidade)) {
            return view('especialidade.edit', compact('especialidade'));
        }
    }


    public function update(Request $request, $id){
        $especialidade = Especialidade::find($id);
        if (isset($especialidade)) {
            $especialidade->nome = mb_strtoupper($request->input('nome'), 'UTF-8');
            $especialidade->descricao = $request->input('descricao');
            $especialidade->save();
        }
        return redirect()->route('especialidade.index');
    }


    public function destroy($id){
       Especialidade::destroy($id);
       return redirect()->route('especialidade.index');
    }
}
