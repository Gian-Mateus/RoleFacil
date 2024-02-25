@extends('layout')
@section('content')   
<x-breadcrumb title="Freelancer" /> 
{{-- <x-filters.offcanvas/>
<button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
    aria-controls="offcanvasFilters" id="collapse-settings">
    <x-svg.settings/>
</button> --}}
        <div class="text-center">
          <h2 class="fw-medium fs-1">Lista de Freelances</h2>
          <h3>Encontre aqui uma oportunidade de Freelance que se encaixe com seu perfil!</h3>
        </div>

        {{-- lista de cards --}}
      <div class="event-list-cards row">

        <x-freelanceList aboutWhat="Zona"/>
        <x-freelanceList aboutWhat="Pirokada no Daniel"/>
        <x-freelanceList aboutWhat="Pub"/>

    </div>
@endsection
