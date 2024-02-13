<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Role Fácil</title>
</head>
<body>
  <h1>Edite seu Evento</h1>
  <form action="/events/update/{{ $event->event_id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="titulo">Título do Evento:</label>
    <input type="text" id="titulo" name="event_title" value="{{ $event->event_title }}" required>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="event_description" rows="5" required>{{ $event->event_description }}</textarea>

    <label for="local">Local:</label>
    <input type="text" id="local" name="event_local" value="{{ $event->event_local }}" required>

    <label for="data">Data:</label>
    <input type="date" id="data" name="event_date" value="{{ $event->event_date }}" required>

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="event_hour" value="{{ $event->event_hour }}" required>

    <label for="social_media_link">Link para Mídia Social:</label>
    <input type="url" id="social_media_link" name="event_social_media_link" value="{{ $event->event_social_media_link }}">

    <button type="submit">Editar Evento</button>
  </form>
</body>
</html>