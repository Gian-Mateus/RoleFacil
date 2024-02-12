<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Role Fácil</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif

    <form action="{{ route('login.auth') }}" method="POST">
        @csrf
        Email: <br> <input type="email" name="user_email"> <br>
        Senha: <br> <input type="password" name="user_password"> <br>
    <button type="submit">Entrar</button>
    </form>
</body>
</html>
