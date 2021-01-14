<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Veterinario;
use \App\Especialidade;
use Illuminate\Support\Facades\Log;

class VeterinarioController extends Controller
{

    public function index()
    {
        $veterinarios = Veterinario::all();
        return view('veterinario.index', compact(['veterinarios']));
    }


    public function create()
    {
        $especialidade = Especialidade::all();
        return view('veterinario.create', compact('especialidade'));
    }

    public function store(Request $request)
    {
        $especialidade = Especialidade::select('*')->where('nome', $request->input('especialidade_id'))->get()->toJson();
        $veterinario = new Veterinario();
        $veterinario->nome = mb_strtoupper($request->input('nome'), 'UTF-8');
        $veterinario->crmv = $request->input('crmv');
        $veterinario->especialidade_id = $especialidade[7];
        $veterinario->save();

        return redirect()->route('veterinario.index');
    }

    public function show($id)
    {
        $especialidades = Especialidade::all();
        $veterinario = Veterinario::find($id);
        $especialidade = Especialidade::find($veterinario->especialidade_id);
        return view('veterinario.show', compact(['veterinario', 'especialidades','especialidade']));
    }

    public function edit($id)
    {
        $especialidades = Especialidade::all();
        $veterinario = Veterinario::find($id);
        $especialidade = Especialidade::find($veterinario->especialidade_id);

        if (isset($veterinario)) {
            return view('veterinario.edit', compact(['veterinario','especialidades','especialidade']));
        }
    }


    public function update(Request $request, $id)
    {
        $especialidade = Especialidade::select('*')->where('nome', $request->input('especialidade_id'))->get()->toJson();
        $veterinario = Veterinario::find($id);
        if (isset($veterinario)) {
            $veterinario->nome = mb_strtoupper($request->input('nome'), 'UTF-8');
            $veterinario->crmv = $request->input('crmv');
            $veterinario->especialidade_id = $especialidade[7];
            $veterinario->save();
        }
        return redirect()->route('veterinario.index');
    }


    public function destroy($id)
    {
        Veterinario::destroy($id);
        return redirect()->route('veterinario.index');
    }
}
