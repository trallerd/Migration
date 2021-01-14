@extends('templates.main', ['titulo' => "Especialidades", 'tag' => "ESP"])

@section('titulo') Especialidades @endsection

@section('conteudo')

    <div class='row'>
        <div class='col-sm-6'>
            <a  href="{{ route('especialidade.create') }}" type="button" class="btn btn-primary btn-block">
                <b>Cadastrar Novo Especialidade</b>
            </a>
        </div>
        <div class='col-sm-5' style="text-align: center">
            <input type="text" list="especialidades" class="form-control" autocomplete="on" placeholder="buscar">
            <datalist id="especialidades">
                @foreach ($especialidades as $item)
                    <option value="{{ $item->nome }}">
                @endforeach
            </datalist>
        </div>
        <div class='col-sm-1' style="text-align: center">
            <button type="button" class="btn btn-default btn-block">
                <img src="{{ asset('img/icons/search.svg') }}">
            </button>
        </div>
    </div>
    <br>
    <x-tablelist :header="['Especialidades', 'Eventos']" :data="$especialidades"/>
    </div>

@endsection
