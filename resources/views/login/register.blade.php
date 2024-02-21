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
                            <form class="row" action="{{route('login.register')}}" method="POST">
                                @csrf
                                <div class="col-md-12 mb-2">
                                  <label for="email" class="form-label mb-0">Email</label>
                                  <input type="text" class="form-control" name="email" id="email" autofocus required>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="password" class="form-label mb-0">Senha</label>
                                  <input type="text" class="form-control" name="password" id="password" autofocus required>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="repeatpassword" class="form-label mb-0">Repetir senha</label>
                                  <input type="text" class="form-control" name="repeatpassword" id="repeatpassword" autofocus required>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="name" class="form-label mb-0">Nome</label>
                                  <input type="text" class="form-control" name="name" id="name" autofocus required>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="cnpj" class="form-label mb-0">Cnpj</label>
                                  <input type="text" class="form-control" name="cnpj" id="cnpj" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="zipcode" class="form-label mb-0">Número</label>
                                  <input type="text" class="form-control" name="zipcode" id="zipcode" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="complement" class="form-label mb-0">Complemento</label>
                                    <input type="text" class="form-control" name="complement" id="complement" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="address" class="form-label mb-0">Rua</label>
                                  <input type="text" class="form-control" name="address" id="address" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="number_address" class="form-label mb-0">Número Rua</label>
                                  <input type="text" class="form-control" name="number_address" id="number_address" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="city" class="form-label mb-0">Cidade</label>
                                  <input type="text" class="form-control" name="city" id="city" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="neighborhood" class="form-label mb-0">Bairro</label>
                                  <input type="text" class="form-control" name="neighborhood" id="neighborhood" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="uf" class="form-label mb-0">Estado</label>
                                  <input type="text" class="form-control" name="uf" id="uf" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="ddd_celular" class="form-label mb-0">DDD</label>
                                  <input type="text" class="form-control" name="ddd_celular" id="ddd_celular">
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="celular" class="form-label mb-0">Celular</label>
                                  <input type="text" class="form-control" name="celular" id="celular">
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="ddd_telefone_fixo" class="form-label mb-0">DDD</label>
                                  <input type="text" class="form-control" name="ddd_telefone_fixo" id="ddd_telefone_fixo">
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="telefone_fixo" class="form-label mb-0">Telefone Fixo</label>
                                  <input type="text" class="form-control" name="telefone_fixo" id="telefone_fixo">
                                </div>
                                <div class="col-12 mb-3">
                                  <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Rigistrar-se</button>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a class="link-light link-underline-opacity-0" href="{{route('login.logar')}}">Já tem uma conta? Faça o login clincando aqui!</a>
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
