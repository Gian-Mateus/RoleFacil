<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://cdn.folhape.com.br/img/pc/1100/1/dn_arquivo/2020/03/reveal-reactora-valorant.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <p class="card-text">{{ $text }}</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center justify-content-between">
                <div>
                    @for ($i = 1; $i <= 5; $i++)
                        <x-svg.star-hating/>
                    @endfor
                </div>
                <a href="" class="btn btn-primary mb-3">
                    Ver Perfil
                </a>
        </div>
    </div>
</div>

