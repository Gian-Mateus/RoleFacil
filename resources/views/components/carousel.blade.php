<div id="{{ $idCarousel }}" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#{{ $idCarousel }}Indicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        @for ($j = 1; $j < 5; $j++)
        <button type="button" data-bs-target="#{{ $idCarousel }}Indicators" data-bs-slide-to="{{$j}}" aria-label="Slide {{$j}}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc655d62fc92e4acd/649bdd9094be10f2698941ed/071123_Val_EP7_China_CG_Banner.jpg?auto=webp&disable=upscale&height=549"
                class="d-block w-100" alt="..." class="rounded">
        </div>
        @for ($i = 1; $i < 5; $i++)
        <div class="carousel-item">
            <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc655d62fc92e4acd/649bdd9094be10f2698941ed/071123_Val_EP7_China_CG_Banner.jpg?auto=webp&disable=upscale&height=549"
                class="d-block w-100" alt="..." class="rounded">
        </div>
        @endfor
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