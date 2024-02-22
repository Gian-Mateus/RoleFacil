@extends('layout')
@section('content')    
<x-filters.offcanvas/>
<button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
    aria-controls="offcanvasFilters" id="collapse-settings">
    <x-svg.settings/>
</button>

<x-carousel idCarousel="carousel-Home" />

<div class="event-list-cards">
    <x-eventListCard aboutWhat="Eventos"/>
    <x-eventListCard aboutWhat="Pertos de você"/>
    <x-eventListCard aboutWhat="Restaurantes"/>
    <x-eventListCard aboutWhat="Pubs"/>
    <x-eventListCard aboutWhat="Bar"/>
</div>
@endsection
