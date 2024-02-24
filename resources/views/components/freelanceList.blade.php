{{-- 
    <div class="row mt-5 h-25">
    <div class="head-row d-flex justify-content-between">
        <h2 class="text-white fw-semibold">{{ $aboutWhat }}</h2>
        
    </div>
    <div class="row-col cards-events">
        @for ($i = 0; $i < 10; $i++)
        <x-freelanceCard/>
        @endfor
    </div>
</div> 
--}}

@foreach ($freelancers as $freelancer)
    <x-freelance-card :freelancerId="$freelancer->freelancer_id" />
@endforeach

