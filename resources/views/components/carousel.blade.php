@php
    $pathImgs = explode(";", $imgs);
@endphp
<div id="{{ $idCarousel }}" class="carousel slide">
    <div class="carousel-indicators">
        @for ($j = 0; $j < count($pathImgs); $j++)
        @if ($j == 0)
        <button type="button" data-bs-target="#{{ $idCarousel }}Indicators" data-bs-slide-to="{{ $j }}"  class="active" aria-current="true" aria-label="Slide {{ $j }}"></button>
        @else
        <button type="button" data-bs-target="#{{ $idCarousel }}Indicators" data-bs-slide-to="{{ $j }}"  aria-label="Slide {{ $j }}"></button>
        @endif
        @endfor
    </div>
    <div class="carousel-inner">
        @foreach ($pathImgs as $i)
        @if ($loop->first)
            <div class="carousel-item active">
        @else 
            <div class="carousel-item">
        @endif
            <img src="{{ asset( $i ) }}" class="d-block w-100" alt="..." class="rounded">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $idCarousel }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $idCarousel }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>