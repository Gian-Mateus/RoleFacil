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
                <div class="col col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header text-center align-items-center bg-primary">
                            <h5 class="card-title fw-bold">CADASTRE-SE</h5>
                        </div>
                        <div class="card-body">
                            <form class="row" action="{{route('login.cadastro')}}" method="POST">
                                @csrf
                                <div class="col-md-12 mb-2">
                                  <label for="name" class="form-label mb-1">Nome</label>
                                  <input type="text" class="form-control" name="name" id="name" autofocus required>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="cep" class="form-label">Cep</label>
                                    <input type="text" class="form-control" name="cep" id="cep" required>
                                  </div>

                                <div class="col-md-8 mb-3">
                                  <label for="street" class="form-label mb-1">Rua</label>
                                  <input type="text" class="form-control" name="street" id="street" required>
                                </div>
                                <div class="col-md-4 mb-2">
                                  <label for="number" class="form-label">Número</label>
                                  <input type="text" class="form-control" name="number" id="number" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="city" class="form-label">Cidade</label>
                                  <input type="text" class="form-control" name="city" id="city" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="state" class="form-label">Estado</label>
                                  <x-states/>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="cnpj" class="form-label">CNPJ</label>
                                  <input type="text" class="form-control" name="cnpj" id="cnpj">
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                  </div>
                                  <div class="col-md-6 mb-2">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                  </div>
                                  <div class="col-md-6 mb-2">
                                    <label for="confirm-password" class="form-label">Confirme a senha</label>
                                    <input type="confirm-password" class="form-control" name="confirm-password" id="confirm-password" required>
                                  </div>
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Cadastrar</button>
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
