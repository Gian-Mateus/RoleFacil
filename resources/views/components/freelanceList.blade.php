    <div class="row mt-5 h-25">
    <div class="head-row d-flex justify-content-between">
        <h2 class="text-white fw-semibold">{{ $aboutWhat }}</h2>
        
    </div>
    <div class="row-col cards-events freelance-list">
        @foreach ($pathimg as $p)
            @component("components.freelanceCard", [
                
            ])
                
            @endcomponent
        @endforeach ($i = 0; $i < 10; $i++)
        <x-freelanceCard/>
        @endfor
    </div>
</div> 
