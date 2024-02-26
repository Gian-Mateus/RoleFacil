@extends('layout')
@section('content')
<x-filters.offcanvas/>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <h1>Portal do Cliente</h1>
            </div>
<<<<<<< HEAD
            <div class="container">
                <div class="row">
                    <div class="painel col-sm-12 col-md-8">
                        <div class="mb-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Cadastrar Serviços</button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form action="" method="post">
                                            <div class="container">
=======
                <div class="container">
                    <div class="row">
                        <div class="painel col-sm-12 col-md-8">
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
                                                    <label for="service" class="form-label mb-0">Tipo de serviço</label>
                                                    <input type="text" class="form-control" name="service" id="service" autofocus required>
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
                                                    <input type="date" class="form-control"  name=""  id="coupon_end" autofocus required>
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

                                      {{-- CUPOM - CADASTRO DO CUPOM --}}
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Cadastrar Cupons</button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              <form action="" method="post">
                                                @csrf
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="coupon_title" class="form-label mb-0">Título do Cupom</label>
                                                      <input type="text" class="form-control" name="coupon_title" id="coupon_title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12">
                                                    <label for="title" class="form-label mb-0">Prazo de validade:</label>
                                                    <div class="row">
                                                        <div class="col-6 mt-2">
                                                            <label for="coupon_start" class="form-label mb-0">Início</label>
                                                            <input type="date" class="form-control" name="coupon_start" id="coupon_start" autofocus required>
                                                        </div>
                                                        <div class="col-6 mt-2">
                                                            <label for="coupon_end" class="form-label mb-0">Final</label>
                                                            <input type="date" class="form-control" name="coupon_end" id="coupon_end" autofocus required>
                                                        </div>
                                                    </div>
                                                </div>
>>>>>>> d8ee7b78ac758c979cf87bca9df9b3c55fc5f4ce
                                                <div class="row">
                                                    <div class="col">
                                                        <h4>Categorias</h4>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Bar
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Restaurante
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Cervejaria
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        Pizzaria
                                                                    </label>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col">
                                                        <h4>Tipo de serviço</h4>
                                                        <div class="col-sm-12 mb-2">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Delivery</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Rodízio</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">A la carte</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-check-label" for="flexCheckDefault">Buffet</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
<<<<<<< HEAD
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
                                        <button class="accordion-button fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cadastrar Eventos</button>
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
=======
                                              </form>
                                          </div>
                                        </div>
                                      </div>

                                      {{-- CADASTRO DO FREELANCER AQUI --}}
                                      <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Cadastrar Freelancer</button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                          <div class="accordion-body">
                                              <form action="" method="post">
                                                @csrf
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="freelancer_title" class="form-label mb-0">Título de serviço</label>
                                                      <input type="text" class="form-control" name="freelancer_title" id="freelancer_title" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                    <label for="freelancer_description" class="form-label mb-0">Descrição do serviço</label>
>>>>>>> d8ee7b78ac758c979cf87bca9df9b3c55fc5f4ce
                                                    <div class="form">
                                                        <textarea rows="3" class="form-control" name="freelancer_description" id="freelancer_description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                <label for="date" class="form-label mb-0">Data do evento</label>
                                                <input type="date" class="form-control"  name=""  id="coupon_end" autofocus required>
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
                                        <button class="accordion-button fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Cadastrar Cupons</button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="" method="post">
                                            @csrf
                                                <div class="col-sm-12 mb-2">
                                                    <label for="title" class="form-label mb-0">Título do Cupom</label>
                                                    <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                </div>
                                                <div class="col-sm-12">
                                                <label for="title" class="form-label mb-0">Prazo de validade:</label>
                                                <div class="row">
                                                    <div class="col-6 mt-2">
<<<<<<< HEAD
                                                        <label for="title" class="form-label mb-0">início</label>
                                                        <input type="date" class="form-control" name="coupon_start" id="coupon_start" autofocus required>
=======
                                                        <label for="freelancer_start" class="form-label mb-0">Início</label>
                                                        <input type="date" class="form-control" name="freelancer_start" id="freelancer_start" autofocus required>
>>>>>>> d8ee7b78ac758c979cf87bca9df9b3c55fc5f4ce
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="freelancer_end" class="form-label mb-0">Final</label>
                                                        <input type="date" class="form-control" name="freelancer_end" id="freelancer_end" autofocus required>
                                                    </div>
                                                </div>
<<<<<<< HEAD
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mb-2 d-flex">
                                                    <div class="col-6 mt-3">
                                                        <div class="form-check">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexRadioDefault2">Limitado</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row me-2">
                                                <div class="col-12 d-flex">
                                                    <div class="col-6 mb-2 me-4">
                                                        <label for="title" class="form-label mb-0">Tipo de cupom</label>
                                                        <input type="text" class="form-control" name="title" placeholder="Escolha o tipo" id="title" autofocus required>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="title" class="form-label mb-0">Valor do cupom</label>
                                                        <input type="text" class="form-control" name="zipcode" id="zipcode" autofocus required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <label for="description" class="form-label mb-0">Descrição</label>
                                                <div class="form">
                                                    <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row me-2">
                                                <div class="col-12 d-flex">
                                                    <div class="col-6 mb-2 me-4">
                                                        <label for="title" class="form-label mb-0">Código do Cupom</label>
                                                        <input type="text" class="form-control" name="title" id="title" autofocus required>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="title" class="form-label mb-0">Quantidade</label>
                                                        <input type="text" class="form-control" name="zipcode" id="zipcode" autofocus required>
                                                    </div>
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
                                        <button class="accordion-button fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Cadastrar Freelancer</button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="" method="post">
                                            @csrf
                                                <div class="col-sm-12 mb-2">
                                                    <label for="freelancer_title" class="form-label mb-0">Título de serviço</label>
                                                    <input type="text" class="form-control" name="freelancer_title" id="freelancer_title" autofocus required>
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                <label for="description" class="form-label mb-0">Descrição do serviço</label>
                                                <div class="form">
                                                    <textarea rows="3" class="form-control" name="description" id="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6 mt-2">
                                                    <label for="title" class="form-label mb-0">Início</label>
                                                    <input type="date" class="form-control" name="coupon_start" id="coupon_start" autofocus required>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <label for="title" class="form-label mb-0">Final</label>
                                                    <input type="date" class="form-control" name="coupon_end" id="coupon_end" autofocus required>
                                                </div>
                                            </div>
                                                <div class="col-sm-12 mb-2">
                                                    <label for="title" class="form-label mb-0">Email de contato</label>
                                                    <input type="text" class="form-control" name="title" id="title" autofocus required>
=======
                                                  <div class="col-sm-12 mb-2">
                                                      <label for="freelancer_email" class="form-label mb-0">Email de contato</label>
                                                      <input type="text" class="form-control" name="freelancer_email" id="freelancer_email" autofocus required>
                                                  </div>
                                                  <div class="col-sm-12 mb-2">
                                                    <label for="freelancer_money" class="form-label mb-0">Valor</label>
                                                    <input type="text" class="form-control" name="freelancer_money" id="freelancer_money" autofocus required>
>>>>>>> d8ee7b78ac758c979cf87bca9df9b3c55fc5f4ce
                                                </div>
                                                <div class="col-sm-12 mb-2">
                                                <label for="title" class="form-label mb-0">Valor</label>
                                                <input type="text" class="form-control" name="title" id="title" autofocus required>
                                            </div>
                                            <div class="col-md-9 mb-3">
                                                <label for="celular" class="form-label mb-0">Celular</label>
                                                <input type="text" class="form-control" name="celular" id="celular">
                                                <div class="col-md-9 mb-3">
<<<<<<< HEAD
                                                <label for="telefone_fixo" class="form-label mb-0">Telefone Fixo</label>
                                                <input type="text" class="form-control" name="telefone_fixo" id="telefone_fixo">
                                                </div>
=======
                                                    <label for="freelancer_phone" class="form-label mb-0">Celular</label>
                                                    <input type="text" class="form-control" name="freelancer_phone" id="freelancer_phone">
                                                  <div class="col-md-9 mb-3">
                                                    <label for="freelancer_telefone_fixo" class="form-label mb-0">Telefone Fixo</label>
                                                    <input type="text" class="form-control" name="freelancer_telefone_fixo" id="freelancer_telefone_fixo">
                                                  </div>
>>>>>>> d8ee7b78ac758c979cf87bca9df9b3c55fc5f4ce

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
                                        <button class="accordion-button fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Horário de funcionamento</button>
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
