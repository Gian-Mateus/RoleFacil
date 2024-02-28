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
                    <a class="navbar-brand" href="/">
                        <x-svg.logo width="10rem" height="10rem"/>
                    </a>
                </div>
                <div class="col col-sm-12 col-md-6">
                    <div class="card">
                        <div class="card-header text-center align-items-center bg-primary">
                            <h5 class="card-title fs-4 fw-bold">Crie sua conta!</h5>
                        </div>
                        <div class="card-body p-4">
                            <form class="row" action="{{route('login.register')}}" method="POST">
                                @csrf
                                <div class="col-md-12 mb-2">
                                  <label for="email" class="form-label mb-0">Email</label>
                                  <input type="text" class="form-control" name="email" id="email" autofocus required>
                                  <i class="fa fa-user text-danger"></i>
                                </div>

                              {{-- Aqui será para criar a senha da empresa --}}
                                <div class="col-md-6 mb-2">
                                  <label for="password" class="form-label mb-0">Senha</label>
                                  <input type="password" class="form-control" name="password" id="password" autofocus required>
                                </div>
                                <div class="col-md-6 mb-2">
                                  <label for="repeatpassword" class="form-label mb-0">Repetir senha</label>
                                  <input type="password" class="form-control" name="repeatpassword" id="repeatpassword" autofocus required>
                                </div>

                                {{-- Nome da empresa --}}
                                <div class="col-md-12 mb-2">
                                  <label for="name" class="form-label mb-0">Nome</label>
                                  <input type="text" class="form-control" name="name" id="name" autofocus required>
                                </div>
                                <div class="col-md-12 mb-2">
                                  <label for="cnpj" class="form-label mb-0">Cnpj</label>
                                  <input type="text" class="form-control" name="cnpj" id="cnpj" required>
                                </div>
                                <div class="col-md-6 text-start">
                                  <x-filters.modal-privacy/>
                                </div>
                                <div class="col-md-6 text-start"> {{-- termos de uso --}}
                                  <x-filters.modal-user/>
                                </div>
                                <div class="col-12 mb-3"> {{-- politicas de privacidade --}}
                                  <button type="submit" class="btn btn-primary w-100 fs-5 fw-bold icon-link-hover">Registrar-se</button>
                                </div>
                                <div class="col-md-12 text-center mb-3">
                                        <a class="link-light link-underline-opacity-0 mb-" href="{{route('login.form')}}">Já tem uma conta? Faça o login aqui!</a>
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
