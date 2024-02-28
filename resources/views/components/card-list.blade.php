<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset( $img ) }}" class="img-fluid rounded-start img-card-list" alt="...">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <p class="card-text">{{ $text }}</p>
                {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
            </div>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-between">
                <div>
                    @for ($i = 1; $i <= 5; $i++)
                        <x-svg.star-hating/>
                    @endfor
                </div>
                <a href="{{ route('role', $establishment) }}" class="btn btn-primary mb-3">
                    Ver Perfil
                </a>
        </div>
    </div>
</div>

