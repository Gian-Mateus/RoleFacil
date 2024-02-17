@extends('home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h2>Painel Administrativo</h2>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="{{ route('paineladm.create') }}">Adicionar Novo</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $dados["id"] }}</td>
                <td>{{ $dados["nome"] }}</td>
                <td>{{ $dados["email"]}}</td>
                <td>
                    <form action="{{ route('paineladm.destroy', $dados ["id"]) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('paineladm.show', $dados["id"]) }}">Detalhes</a>
                        <a class="btn btn-primary" href="{{ route('paineladm.edit', $dados["id"]) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

