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
    <a href="/events/create" class="btn btn-info">Criar novo Evento</a>
   <br> 
    <tbody>       
        @foreach($events as $event)
            <tr>
                <td><a href="/events/{{ $event->event_id }}">{{ $event->event_title }}</a></td>
                <td>
                    <a href="/events/edit/{{ $event->event_id }}" class="btn btn-info">Editar</a>
                    <form action="/events/{{ $event->event_id }}" method="POST">
                        @csrf
                        @method('DELETE');
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</body>
</html>

