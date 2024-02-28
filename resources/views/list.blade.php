@extends('layout')
@section('content')
    <x-breadcrumb routeLinks="Restaurantes"/>

    @foreach ($cli as $c)
        @component('components.card-list', [
        "title" =>  $c["cli_establishment_seed_name"], 
        "text" => $c["cli_establishment_seed_address_formatted"],
        "img" => $c["cli_establishment_seed_imgs"][0],
        "establishment" => $c["cli_establishment_seed_id"]
        ])
        @endcomponent
    @endforeach

   {{--  @for ($i = 0; $i < 15; $i++)
        
        <x-card-list title="" text=""/>
        
    @endfor --}}
@endsection