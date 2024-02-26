<div class="row mt-5 h-25">
    <div class="head-row d-flex justify-content-between mt-3">
        <h2 class="text-white fw-semibold">{{ $aboutWhat }}</h2>
        <span class="align-self-end"><a href="{{ $link }}">Ver mais...</a></span>
    </div>
    <div class="row-col cards-events">

        {{ $slot }}

    </div>
</div>
