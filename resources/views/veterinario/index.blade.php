@extends('templates.main', ['titulo' => "Veterinarios", 'tag' => "VET"])

@section('titulo') Veterinarios @endsection

@section('conteudo')

    <div class='row'>
        <div class='col-sm-6'>
            <a  href="{{ route('veterinario.create') }}" type="button" class="btn btn-primary btn-block">
                <b>Cadastrar Novo Veterinarios</b>
            </a>
        </div>
        <div class='col-sm-5' style="text-align: center">
            <input type="text" list="veterinarios" class="form-control" autocomplete="on" placeholder="buscar">
            <datalist id="veterinarios">
                @foreach ($veterinarios as $item)
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
    <x-tablelist :header="['Veterinarios', 'Eventos']" :data="$veterinarios"/>
    </div>

@endsection
