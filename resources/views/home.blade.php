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
                'img' => $estab["cli_establishment_seed_imgs"][0],
                'title' => $estab["cli_establishment_seed_name"],
                'text' => $estab["cli_establishment_seed_address_formatted"]
                ])
            @endcomponent
        @endforeach
    </x-eventListCard>

    <x-eventListCard aboutWhat="Restaurantes">
        @foreach ($restaurants as $rest)
            @component('components.card', [
                "img" => $rest["cli_establishment_seed_imgs"][0],
                'title' => $rest["cli_establishment_seed_name"],
                'text' => $rest["cli_establishment_seed_address_formatted"]
                ])
            @endcomponent
        @endforeach
    </x-eventListCard>

    <x-eventListCard aboutWhat="Bares" link="1">
        @foreach ($bar as $b)
            @component('components.card', [
                "img" => $b["cli_establishment_seed_imgs"][0],
                'title' => $b["cli_establishment_seed_name"],
                'text' => $b["cli_establishment_seed_address_formatted"]
                ])
            @endcomponent
        @endforeach
    </x-eventListCard>

    <x-eventListCard aboutWhat="Padarias" link="1">
        @foreach ($bakery as $bak)
            @component('components.card', [
                "img" => $bak["cli_establishment_seed_imgs"][0],
                'title' => $bak["cli_establishment_seed_name"],
                'text' => $bak["cli_establishment_seed_address_formatted"]
                ])
            @endcomponent
        @endforeach
    </x-eventListCard>

</div>

@endsection
