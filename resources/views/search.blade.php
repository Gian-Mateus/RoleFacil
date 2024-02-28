@extends('layout')
@section('content')   
<x-breadcrumb title="Freelancer" /> 
        <div class="text-center">
          <h2 class="fw-medium fs-1">Pesquisa</h2>
        </div>
        @foreach($resultados as $resultado)
          <p>{{ $resultado->cli_establishment_seed_name }}</p>
        @endforeach
@endsection
