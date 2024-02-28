@extends('layout')
@section('content')
    <x-breadcrumb routeLinks="Roles, {{$establishment->cli_establishment_seed_name}}" />
    <div class="content-main">
        <div class="mt-2 title">
            <h2 class="fw-medium text-center fs-1">{{ $establishment->cli_establishment_seed_name }}</h2>
        </div>
        <div class="ctg-ht flex-column">
            <div class="row-categories w-100 text-center">
                @foreach ($categories as $cat)
                    <div class="categoria">
                        {{ $cat }}
                    </div>
                @endforeach
            </div>
            <div class="row">
                <span class="mb-2">
                    @for ( $k = 0; $k < 5; $k++ )
                        <x-svg.star-hating/>
                    @endfor
                </span>
            </div>
        </div>
        <div class="content-carousel">
            @component('components.carousel', [
                "idCarousel" => "carousel-Event",
                "imgs" => $establishment["cli_establishment_seed_imgs"]
            ])
            @endcomponent
        </div>

        <div class="how-us bg-secondary rounded p-3 shadow">
            <h3>Quem somos:</h3>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel fugit optio
                odit ab quibusdam quidem odio at ipsum! Quod vel nostrum minus consectetur similique laboriosam quam eligendi.
                Reprehenderit, libero.</p>
        </div>

        <div class="infos bg-secondary rounded p-3 shadow">
            <h4>Informações:</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi suscipit ut facilis aliquam atque esse sapiente officiis ratione porro quaerat non possimus placeat, repudiandae incidunt ipsum, ducimus iure reiciendis qui?</p>
        </div>

        <div class="address bg-secondary rounded p-3 shadow">
            <div class="row">
                <div class="col-6 col-lg-12 text-center">
                    <h4 class="d-inline">Endereço:</h4>
                </div>
                <div class="col-6 col-lg-12">
                    <p><a href="{{ $establishment->cli_establishment_seed_gmap }}">
                    {{ $establishment->cli_establishment_seed_address_formatted }}
                    </a></p>
                </div>
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed/v1/view?key={{getenv("API_KEY_MAPS")}}&center={{ $establishment->cli_establishment_seed_lat }},{{ $establishment->cli_establishment_seed_lng }}&zoom=18&maptype=satellite
                        " width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="tab-evt-links bg-secondary rounded p-3 shadow mb-3">
            <x-tabnav-events
                id1="events"
                item1="Eventos"
                id2="profile"
                item2="Links"
            />
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="events-tab-pane" role="tabpanel" aria-labelledby="events-tab" tabindex="0">
                    @forelse ($event as $e)
                        {{-- <x-card-list/> --}}

                    @empty
                        <div class="row ms-2 mt-4">
                            <h2>Nenhum evento...</h2>
                        </div>
                    @endforelse
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row ms-2 my-3">
                        <div class="col-12">
                            <h4>Acesse:
                                <a href="{{ $establishment->cli_establishment_seed_link_website }}">
                                    {{ $establishment->cli_establishment_seed_link_website }}
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
