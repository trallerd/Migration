@extends('templates.main', ['titulo' => "Cadastrar Veterinario(a)", 'tag' => "CLI"])

@section('titulo') Novo Veterinario(a) @endsection

@section('conteudo')

<form action="{{ route('veterinario.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class='col-sm-12'>
            <label>Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class='row'>
            <div class='col-sm-6'>
                <label>CRMV</label>
                <input type="text" class="form-control" name="crmv">
            </div>
            <div class='col-sm-6'>
                <label for="inputEspecialide">Especialidade</label>
                <select name='especialidade_id' id="inputEspecialide" class="form-control">
                @foreach($especialidade as $item)
                    <option selected> {{$item->nome}} </option>
                @endforeach
                </select>

            </div>
        </div>
        <div class='row' style="margin-top:20px">
            <div class='col-sm-4'>
                <a href="{{route('veterinario.index')}}" class="btn btn-danger btn-block"><b>Cancelar / Voltar</b></a>
            </div>
            <div class='col-sm-8'>
                <button type="submit" class="btn btn-success btn-block"><b>Confirmar / Salvar</b></button>
            </div>
        </div>
    </div>
    </div>
</form>

@endsection