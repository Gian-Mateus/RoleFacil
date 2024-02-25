@extends('layout')
@section('content')
<x-filters.offcanvas/>

    <div class="container d-flex">
        <div class="row">
            <div class="col col-sm-12 col-md-3">
                <div class="row text-center mb-3">
                    <h1>Portal do Cliente</h1>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="col col-sm-12 col-md-6 d-flex">
                            <div class="col-6 me-4">
                                <div class="col-sm-12 mb-2">
                                    <div class="input-group">
                                        <label class="form-control">Custom Input Text
                                          <input type="file" class="invisible">
                                        </label>
                                    </div>
                                    <label for="photo" class="form-label mb-0">Alterar imagem</label>
                                    <input type="file" class="form-control invisible" name="photo" id="photo" autofocus required>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <div class="card">
                                        <img src="https://images.contentstack.io/v3/assets/bltb6530b271fddd0b1/bltc655d62fc92e4acd/649bdd9094be10f2698941ed/071123_Val_EP7_China_CG_Banner.jpg?auto=webp&disable=upscale&height=549" class="card" alt="...">
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <input type="text" class="form-control" name="password" placeholder="Cadastrar categorias" id="password" autofocus required>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <input type="text" class="form-control" name="password" placeholder="Editar Cassificação" id="password" autofocus required>
                                </div>
                            </div>
                            <div class="col-6 me-4">
                                <div class="col-sm-12 mb-2">
                                    <label for="title" class="form-label mb-0">Título do serviço</label>
                                    <input type="text" class="form-control" name="title" id="title" autofocus required>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <label for="type-service" class="form-label mb-0">Tipo de serviço</label>
                                    <input type="text" class="form-control" name="type-service" id="type-service" autofocus required>
                                </div>
                                <div class="col-sm-12 mb-2">
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <label for="time" class="form-label mb-0">Horário de funcionamento</label>
                                    <input type="text" class="form-control" name="password" id="password" autofocus required>
                                </div>
                                <div class="col-sm-12 mb-2">
                                    <label for="password" class="form-label mb-0">Site</label>
                                    <input type="text" class="form-control" name="password" id="password" autofocus required>
                                </div>
                                <div class="col-12 mb-2">
                                    <label for="password" class="form-label mb-0">Rede social</label>
                                    <input type="text" class="form-control" name="password" id="password" autofocus required>
                                </div>
                            </div>
                            <div class="col-6 me-4">
                                <div class="col-sm-12 mb-2 d-flex">
                                    <div class="col-6 me-3 mt-2">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Limitado</label>
                                        </div>
                                    </div>

                                      <div class="col-5">
                                        <input type="text" class="form-control" name="zipcode" placeholder="Quant." id="zipcode" autofocus required>
                                    </div>
                                </div>

                                  <div class="col-12 mb-2 form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Todas as compras</label>
                                  </div>
                                <div class="col-sm-12 mb-2">
                                    <label for="description" class="form-label mb-0">Descrição</label>
                                    <div class="form">
                                        <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 me-4">
                                <div class="col-sm-12 mb-2">
                                    <label for="description" class="form-label mb-0">Descriçãodo evento</label>
                                    <div class="form">
                                        <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <label for="password" class="form-label mb-0">Data</label>
                                    <x-date-picker/>
                                </div>
                                <div class="col mb-2">
                                    <label for="password" class="form-label mb-0">Data2</label>
                                    <x-date-picker-range/>
                                </div>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
@endsection
