@extends('home')
@section('content')
    <x-breadcrumb title="Meu ovo esquerdo" />
    <div class="content-main">
        <div class="mt-2 title">
            <h2 class="fw-medium text-center fs-1">Casa de aborto Criança Feliz</h2>
        </div>
        <div class="ctg-ht">
            <h5 class="pt-1">Categoria</h5>
            <span class="mb-2">
                @for ( $k = 0; $k < 5; $k++ )
                    <x-svg.star-hating/>
                @endfor
            </span>
        </div>
        <div id="carouselGalery" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselGaleryIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                @for ($j = 1; $j < 5; $j++)
                <button type="button" data-bs-target="#carouselGaleryIndicators" data-bs-slide-to="{{$j}}" aria-label="Slide {{$j}}"></button>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselGalery" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselGalery" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
                    <p><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.728060679754!2d-49.06977672378887!3d-26.88037969185506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df1e5d3d98bae7%3A0xb5ae26a0cdf70a1c!2sNahrung%20Haus%20-%20Festival%20de%20Sushi%20e%20Mini%20Hamburguer!5e0!3m2!1spt-BR!2sbr!4v1708462331368!5m2!1spt-BR!2sb">R. Francisco Vahldieck, 796 - Fortaleza, Blumenau - SC, 89056-001</a></p>
                </div>
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.728060679754!2d-49.06977672378887!3d-26.88037969185506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df1e5d3d98bae7%3A0xb5ae26a0cdf70a1c!2sNahrung%20Haus%20-%20Festival%20de%20Sushi%20e%20Mini%20Hamburguer!5e0!3m2!1spt-BR!2sbr!4v1708462331368!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="tab-evt-links bg-secondary rounded p-3 shadow mb-3">
            <x-tabnav-events/>
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="events-tab-pane" role="tabpanel" aria-labelledby="events-tab" tabindex="0">
                    @for ($i = 0; $i < 5; $i++)
                    <x-card-list/>
                    @endfor
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="row my-3">
                        <div class="col-12">
                            <h4>Rede social 1:
                                <a href="">@blablabla</a>
                            </h4>
                        </div>
                        <div class="col-12">
                            <h4>Rede social 2:
                                <a href="">@blablabla</a>
                            </h4>
                        </div>
                        <div class="col-12">
                            <h4>Rede social 3:
                                <a href="">@blablabla</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
