@extends('layout')
@section('content')
<x-breadcrumb routeLinks="Freelancer"/>
        <div class="text-center">
          <h2 class="fw-medium fs-1 titulo">Lista de Freelances</h2>
          <h3>Encontre aqui uma oportunidade de Freelance que se encaixe com seu perfil!</h3>
        </div>

        {{-- container de filtros --}}
        <div class="container">
          <div class="row">
                <div class="col-sm-12 col-md-3 mt-5 text-white">
                {{-- filtro1 --}}
                        <div class="title fw-semibold fs-2">Filtro</div>

                        <select class="form-select form-select-sm" aria-label="Selecione uma categoria">
                          <option selected>Categoria</option>
                          <option value="1">Bartender</option>
                          <option value="2">Garçom</option>
                          <option value="3">Atendente</option>
                          <option value="4">Limpeza</option>
                        </select>

                        <label for="pagamento" class="fs-4">Pagamento</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            R$10 até R$50
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            R$51 até R$100
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                          <label class="form-check-label" for="flexRadioDefault3">
                            R$101 até R$150
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                          <label class="form-check-label" for="flexRadioDefault4">
                            R$151 até R$200
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                          <label class="form-check-label" for="flexRadioDefault5">
                            A combinar
                          </label>
                        </div>

                        {{-- select cidades --}}
                        <div class="select-city">
                        <label class="fs-4 mb-2">Localização:</label>
                            <form action="#">
                                <p>
                                <Label for="estado">Estado</Label>
                                <select name="estado" id="estado" class="form-select form-select-sm">
                                    <option value="">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                                </p>
                            </form>
                    </div>
                        <label for="cidade">Cidade</label>
                        <select name="cidade" id="cidade" class="form-select form-select-sm">
                        <option value="">Selecione</option>
                        </select>
                </div>




                {{-- display de lista --}}
                <div class="col-sm-12 col-md-9 freelancebox">

                    <x-freelanceList aboutWhat="Bartender">
                        @forelse ($freelancers as $fre)
                          @component('components.freelanceCard', [
                            'title' => $fre['freelancer_title'],
                            'description' => $fre['freelancer_description'],
                            'start' => $fre['freelancer_start'],
                            'end' => $fre['freelancer_end'],
                            'money' => $fre['freelancer_money'],
                            'phone' => $fre['freelancer_phone'],
                            'telefoneFixo' => $fre['freelancer_telefone_fixo'],
                            'email' => $fre['freelancer_email']
                          ])
                          @endcomponent
                        @empty
                          <div class="row my-30">
                            <h2>Nenhum serviço encontrado</h2>
                          </div>
                        @endforelse
                    </x-freelanceList>

                      {{-- repetir a ideia do componente acima para os outros tipos de serviços --}}
                </div>
            </div>
        </div>


        <script>
          //selecionar o elemento para manipular o evento change
const selEstados = document.querySelector('#estado');

//adicionando o evento change ao select
selEstados.addEventListener("change", function(){
    let selecionado = this.value

    let estrutura = '<option value="">Selecione</option>'
    //consultar a api

    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${selecionado}/municipios`)
        .then(retorno => retorno.json()) //retorno unico, converte para json
        .then(function(cidades){
            //laço de repetição para preencher as cidades
            for(posicao in cidades){
                estrutura += `<option value="${cidades[posicao].cidades}">${cidades[posicao].nome}</option>`
            }

            //carregar dados no select
            document.querySelector("#cidade").innerHTML = estrutura
        })
})
        </script>
@endsection
