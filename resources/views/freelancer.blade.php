@extends('layout')
@section('content')    
<x-filters.offcanvas/>
<button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
    aria-controls="offcanvasFilters" id="collapse-settings">
    <x-svg.settings/>
</button>
  <h1>Lista de Freelancer</h1>
@endsection
