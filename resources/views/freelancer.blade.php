@extends('layout')
@section('content')   
<x-breadcrumb title="Freelancer" /> 
        <div class="text-center">
          <h2 class="fw-medium fs-1">Lista de Freelances</h2>
          <h3>Encontre aqui uma oportunidade de Freelance que se encaixe com seu perfil!</h3>
        </div>

        
        <div class="container text-center filtrofreela">
          <div class="row">
            <div class="col-md-4">
              <div class="form-check form-check-inline">
                <h2>Filtro</h2>
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Distância
                </label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                  Valor
                </label>
              </div>
            </div>


            <div class="col-md-8">
              <x-freelanceList aboutWhat="Zona"/>
              <x-freelanceList aboutWhat="Pirokada no Daniel"/>
              <x-freelanceList aboutWhat="Pub"/>
            </div>
          </div>
        </div>
@endsection
