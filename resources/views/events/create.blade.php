<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Role Fácil</title>
</head>
<body>
  <h1>Crie seu Evento</h1>
  <form action="/events" method="POST">
    @csrf
    <input type="hidden" name="client_id" value="1">

    <label for="titulo">Título do Evento:</label>
    <input type="text" id="titulo" name="title" required>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="description" rows="5" required></textarea>

    <label for="local">Local:</label>
    <input type="text" id="local" name="local" required>

    <label for="data">Data:</label>
    <input type="date" id="data" name="date" required>

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hour" required>

    <label for="link_social_media">Link para Mídia Social:</label>
    <input type="url" id="link_social_media" name="social_media_link">

    <button type="submit">Criar Evento</button>
  </form>
</body>
</html>