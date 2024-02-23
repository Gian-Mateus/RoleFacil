@extends('layout')
@section('content')
    <x-breadcrumb title="Restaurantes"/>
    @for ($i = 0; $i < 15; $i++)
        
    <x-card-list/>
    @endfor
@endsection