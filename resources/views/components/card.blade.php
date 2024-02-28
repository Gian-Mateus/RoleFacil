<div class="card">
    <img src="{{ asset( $img ) }}" class="card-img-top" alt="{{ $title }}"/>
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text position-relative">
            {{ $text }}
        </p>
        <a href="{{ route('role', $establishment) }}" class="btn btn-primary position-absolute button-card">Ver Detalhes</a>
    </div>
</div>
