@extends('templates.main', ['titulo' => "Cadastrar Especialidades", 'tag' => "ESP"])

@section('titulo') Novo Especialidade @endsection

@section('conteudo')

<form action="{{ route('especialidade.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <div class='col-sm-12'>
            <label>Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class='col-sm-12'>
            <label>Descrição</label>
            <input type="text" class="form-control" name="descricao">
        </div>
        <div class='row' style="margin-top:20px">
            <div class='col-sm-4'>
                <a href="{{route('especialidade.index')}}" class="btn btn-danger btn-block"><b>Cancelar / Voltar</b></a>
            </div>
            <div class='col-sm-8'>
                <button type="submit" class="btn btn-success btn-block"><b>Confirmar / Salvar</b></button>
            </div>
        </div>
    </div>
</form>

@endsection