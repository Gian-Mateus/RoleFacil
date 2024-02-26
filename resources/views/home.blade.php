@if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

<script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
<script>
    
    var users = {{ Illuminate\Support\Js::from($users) }};
    async function obterLocalizacao() {
        const user_location = new Promise((resolve) => {
                    navigator.geolocation.getCurrentPosition((position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    const localizacao = [latitude, longitude];
                    resolve(localizacao);
            });
        });
        const localizacao = await user_location;
        return localizacao;
    }
    function obterDistancia(range_distance, localizacao) {
        var options = {units: 'kilometers'};
        var from = turf.point([localizacao[0], localizacao[1]]);
        for (var user in users) {
            var to = turf.point([users[user]['user_latitude'], users[user]['user_longitude']]);
            var distance = turf.distance(from, to, options);
            if(distance < range_distance) {
                console.log(distance);
            }
        }
    }

    function obterDiferencaDistancia() {
        var range_distance = document.querySelector('#range-distance');
        range_distance = range_distance.value;
        obterLocalizacao().then((localizacao) => {
            obterDistancia(range_distance, localizacao);
        });
    };
</script>

@extends('layout')
@section('content')   

<x-filters.offcanvas/>
<button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
    aria-controls="offcanvasFilters" id="collapse-settings">
    <x-svg.settings/>
</button>

<div class="row mt-5">
    @desktop
    <div class="content-accordion col-md-4">
        <x-filters.accordion/>
    </div>
    @enddesktop
    <div class="content-carousel col-md-8">
        <x-carousel idCarousel="carousel-Home" />
    </div>
</div>

<div class="event-list-cards row">

    <x-eventListCard aboutWhat="Estabelecimentos" link="{{ route('estabelecimentos') }}">
        @foreach( $establishment as $estab )
            @component('components.card', [
                'title' => $estab["name"],
                'text' => $estab["formatted_address"]
                ])
            @endcomponent
        @endforeach
    </x-eventListCard>

    <x-eventListCard aboutWhat="Restaurantes" link="{{ route('whatever') }}">
        @for ($i = 0 ; $i <= 10; $i++ )
            @component('components.card', [
                'title' => $restaurants[$i]["name"],
                'text' => $restaurants[$i]["formatted_address"]
                ])
            @endcomponent
        @endfor
    </x-eventListCard>

    <x-eventListCard aboutWhat="Bares" link="1">
        @for ($i = 0 ; $i <= 10; $i++ )
            @component('components.card', [
                'title' => $bar[$i]["name"],
                'text' => $bar[$i]["formatted_address"]
                ])
            @endcomponent
        @endfor
    </x-eventListCard>

    <x-eventListCard aboutWhat="Padarias" link="1">
        @for ($i = 0 ; $i < ((count($bakery) < 10)?: 10); $i++ )
            @component('components.card', [
                'title' => $bakery[$i]["name"],
                'text' => $bakery[$i]["formatted_address"]
                ])
            @endcomponent
        @endfor
    </x-eventListCard>
    
</div>

@endsection
