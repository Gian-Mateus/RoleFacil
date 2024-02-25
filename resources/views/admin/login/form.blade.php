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
                    <x-svg.logo width="10rem" height="10rem"/>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header text-center align-items-center bg-primary">
                            <h5 class="card-title fs-4 fw-bold">Faça o Login</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-1" action="{{ route('login.auth') }}" method="POST">
                                @csrf
                                <div class="col-md-12 mb-2">
                                    <label for="email" class="form-label  mb-0">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                  </div>
                                  <div class="col-md-12 mb-2">
                                    <label for="password" class="form-label  mb-0">Senha</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                  </div>
                                  <div class="col-md-12 mb-2">
                                  <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Entrar</button>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a class="link-light link-underline-opacity-0" href="{{ route('login.register') }}">Crie uma conta</a>
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

