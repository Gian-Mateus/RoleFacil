@extends('admin.layouts.app')

@section('content')
    <h1>Lista de Itens</h1>
    <!-- Aqui você lista os itens -->
    <h1>{{ $dados['titulo'] }}</h1>
    <p>{{ $dados['conteudo'] }}</p>

@endsection
