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
                            <h5 class="card-title fw-bold">LOGIN</h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-1" action="/estabelecimento" method="POST">
                                @csrf

                                <div class="col-md-12">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                  </div>
                                  <div class="col-md-12">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                  </div>
                                <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Entrar</button>
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

