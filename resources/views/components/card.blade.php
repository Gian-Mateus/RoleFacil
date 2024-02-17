<div class="row mt-5">
    <div class="head-row d-flex justify-content-between">
        <h2 class="text-white fw-semibold">Eventos</h2>
        <span class="align-self-end"><a href="#">Ver mais...</a></span>
    </div>
    <div class="row-col cards-events">
        @for ($i = 0; $i < 10; $i++)
        
    <div class="card" >
        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc655d62fc92e4acd/649bdd9094be10f2698941ed/071123_Val_EP7_China_CG_Banner.jpg?auto=webp&disable=upscale&height=549" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        
        
        @endfor
    </div>
</div>