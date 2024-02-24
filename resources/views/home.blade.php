<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
<script>
    
    var users = {{ Illuminate\Support\Js::from($users) }};
    async function obterLocalizacao() {
        const promise = new Promise((resolve) => {
                 navigator.geolocation.getCurrentPosition((position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    const localizacao = [latitude, longitude];
                    resolve(localizacao);
            });
        });
        const localizacao = await promise;
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
    $(document).ready(function() {
        $('#form-salvar').submit(function(e) {
            e.preventDefault();
            var range_distance = $('#range-distance').val();
            obterLocalizacao().then((localizacao) => {
                obterDistancia(range_distance, localizacao);
            });
        });
    });
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
    <x-eventListCard aboutWhat="Eventos"/>
    <x-eventListCard aboutWhat="Pertos de você"/>
    <x-eventListCard aboutWhat="Restaurantes"/>
    <x-eventListCard aboutWhat="Pubs"/>
    <x-eventListCard aboutWhat="Bar"/>
</div>
@endsection
