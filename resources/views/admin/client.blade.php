@extends('layout')
@section('content')
<x-filters.offcanvas/>
    <div class="container d-flex">
        <div class="row text-center mb-3">
            <h1>Portal do Cliente</h1>
        </div>
        <form action="" method="post">
            @csrf
            <div class="col col-sm-12 col-md-6 d-flex">
                    <div class="col-6 me-4">
                        <div class="col-sm-12 mb-2">
                            <label for="password" class="form-label mb-0">Cadastrar categorias</label>
                            <input type="text" class="form-control" name="password" id="password" autofocus required>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <label for="password" class="form-label mb-0">Cadastrar categorias</label>
                            <input type="file" class="form-control" name="password" id="password" autofocus required>
                        </div>
                        <div class="col mb-2">
                            <label for="password" class="form-label mb-0">Data</label>
                            <x-date-picker/>
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
                            <label for="description" class="form-label mb-0">Descrição</label>
                            <div class="form">
                                <textarea rows="5" class="form-control" name="description" id="description"></textarea>
                            </div>
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
                        <div class="col-sm-12 mb-2">
                            <label for="password" class="form-label mb-0">Criar cupom</label>
                            <input type="text" class="form-control" name="password" id="password" autofocus required>
                        </div>
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
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>

@endsection
