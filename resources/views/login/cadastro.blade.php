<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Cadastro de cliente</title>
</head>
<body>
    <main>
        <div class="container vh-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="#">
                        <x-svg.logo width="8rem" height="8rem"/>
                    </a>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header text-center align-items-center bg-primary">
                            <h5 class="card-title fs-4 fw-bold">Crie sua conta!</h5>
                        </div>
                        <div class="card-body">
                            <form class="row" action="{{route('login.cadastro')}}" method="POST">
                                @csrf
                                <div class="col-md-12 mb-2">
                                  <label for="name" class="form-label mb-0">Nome</label>
                                  <input type="text" class="form-control" name="name" id="name" autofocus required>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="street" class="form-label mb-0">Rua</label>
                                  <input type="text" class="form-control" name="street" id="street" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="number" class="form-label mb-0">Número</label>
                                  <input type="text" class="form-control" name="number" id="number" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="cep" class="form-label mb-0">Cep</label>
                                    <input type="text" class="form-control" name="cep" id="cep" required>
                                  </div>
                                <div class="col-md-6 mb-2">
                                  <label for="city" class="form-label mb-0">Cidade</label>
                                  <input type="text" class="form-control" name="city" id="city" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="state" class="form-label mb-0">Estado</label>
                                  <x-states/>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="cnpj" class="form-label mb-0">CNPJ</label>
                                  <input type="text" class="form-control" name="cnpj" id="cnpj">
                                </div>
                                <div class="col-12 mb-3">
                                  <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Rigistrar-se</button>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a class="link-light link-underline-opacity-0" href="{{route('login.login')}}">Já tem uma conta? Faça o login clincando aqui!</a>
                                </div>
                              </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
