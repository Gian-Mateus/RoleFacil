@extends('layout')
@section('content')   
<x-breadcrumb routeLinks="Pesquisa" /> 
        <div class="text-center">
          <h2 class="fw-medium fs-1">Pesquisa</h2>
        </div>
        @foreach($resultados as $resultado)
        @php
          $img = explode(";", $resultado["cli_establishment_seed_imgs"]);
        @endphp
        @component('components.card-list', [
          "title" =>  $resultado["cli_establishment_seed_name"], 
          "text" => $resultado["cli_establishment_seed_address_formatted"],
          "img" => $img[0],
          "establishment" => $resultado["cli_establishment_seed_id"]
          ])
          @endcomponent
        @endforeach
@endsection
