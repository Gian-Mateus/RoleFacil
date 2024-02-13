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
    @foreach($events as $event)
        <h2>Título: {{ $event->event_title }}</h2> <br>
        <h2>Descrição: {{ $event->event_description }}</h2> <br>
        <h2>Local: {{ $event->event_local }}</h2> <br>
    @endforeach
</body>
</html>

