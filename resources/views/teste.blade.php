@extends('layout')
@section('content')
<x-filters.offcanvas/>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h1>Portal do Cliente</h1>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Cadastrar Serviços</button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="" method="post">
                                                <div class="col-sm-12 mb-2">
                                                    <label for="title" class="form-label mb-0">Título do serviço</label>
                                                    <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <label for="kind" class="form-label mb-0">Tipo de serviço</label>
                                                    <input type="text" class="form-control" name="kind" id="kind" autofocus required>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <label for="description" class="form-label mb-0">Descrição do serviço</label>
                                                    <div class="form">
                                                        <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <label for="FileMultiple" class="form-label">Escolher as fotos</label>
                                                        <input class="form-control" type="file" name="FileMultiple" id="FileMultiple" multiple>
                                                      </div>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Enviar</button>
                                                      </div>
                                                </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cadastrar Eventos</button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              <form action="" method="post">
                                                @csrf
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="title" class="form-label mb-0">Título do evento</label>
                                                      <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="kind" class="form-label mb-0">Tipo de evento</label>
                                                      <input type="text" class="form-control" name="kind" id="kind" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="description" class="form-label mb-0">Descrição do evento</label>
                                                      <div class="form">
                                                          <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                    <label for="date" class="form-label mb-0">Data do evento</label>
                                                    <x-date-picker/>
                                                    </div>
                                                  <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <label for="formFileMultiple" class="form-label">Escolher as fotos do local </label>
                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                      </div>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Enviar</button>
                                                      </div>
                                                </div>
                                              </form>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Cadastrar Cupons</button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              <form action="" method="post">
                                                @csrf
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="title" class="form-label mb-0">Título do Cupom</label>
                                                      <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2 d-flex">
                                                    <div class="col-6 mt-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Limitado</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mt-2">
                                                        <input type="text" class="form-control" name="zipcode" placeholder="Quantidade" id="zipcode" autofocus required>
                                                    </div>
                                                </div>

                                                  <div class="col-12 mb-2 form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Todas as compras</label>
                                                  </div>
                                                <div class="col-sm-12 mb-2">
                                                    <label for="description" class="form-label mb-0">Produtos válidos</label>
                                                    <div class="form">
                                                        <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Enviar</button>
                                                      </div>
                                                </div>
                                              </form>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Cadastrar Freelancer</button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              <form action="" method="post">
                                                @csrf
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="title" class="form-label mb-0">Tipo de serviço</label>
                                                      <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="title" class="form-label mb-0">Data/peírodo</label>
                                                      <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="description" class="form-label mb-0">Descrição do serviço</label>
                                                      <div class="form">
                                                          <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Enviar</button>
                                                      </div>
                                                </div>
                                              </form>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Horário de funcionamento</button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              <form action="" method="post">
                                                @csrf
                                                  <div class="col-sm-12 mb-2">
                                                    <div class="col mb-2">
                                                        <label for="password" class="form-label mb-0">Data2</label>
                                                        <x-date-picker-range/>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="title" class="form-label mb-0">Tipo de serviço</label>
                                                      <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="description" class="form-label mb-0">Descrição do serviço</label>
                                                      <div class="form">
                                                          <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                      </div>
                                                  </div>
                                                                                                  <div class="col-sm-12 mb-2">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Enviar</button>
                                                      </div>
                                                </div>
                                              </form>
                                          </div>
                                        </div>
                                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
