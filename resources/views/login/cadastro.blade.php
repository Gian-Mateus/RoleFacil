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
                <div class="col col-sm-12 col-md-8">
                    <div class="card">
                        <div class="card-header text-center align-items-center bg-primary">
                            <h5 class="card-title fw-bold">CADASTRE-SE</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-1" action="{{route('login.cadastro')}}" method="POST">
                                @csrf
                                <div class="col-md-9">
                                  <label for="name" class="form-label">Nome</label>
                                  <input type="text" class="form-control" id="name" autofocus required>
                                </div>
                                <div class="col-md-3">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input type="text" class="form-control" id="cep" required>
                                  </div>

                                <div class="col-md-8">
                                  <label for="street" class="form-label">Rua</label>
                                  <input type="text" class="form-control" id="street" required>
                                </div>
                                <div class="col-md-4">
                                  <label for="number" class="form-label">Número</label>
                                  <input type="text" class="form-control" id="number" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="city" class="form-label">Cidade</label>
                                  <input type="text" class="form-control" id="city" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="state" class="form-label">Estado</label>
                                  <x-estado />
                                </div>
                                <div class="col-md-12">
                                  <label for="cnpj" class="form-label">CNPJ</label>
                                  <input type="text" class="form-control" id="cnpj">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="password" required>
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
