{{-- <button type="button" class="botaoMsg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="seuemail@email.com">Contato</button> --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enviar Mensagem</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/contact">
          @csrf
          <div class="row mb-3">
            <div class="col">
              <label for="recipient-name" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="recipient-email" class="col-form-label">E-mail:</label>
            <input type="text" class="form-control" id="recipient-email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Mensagem:</label>
            <textarea class="form-control" id="message-text" name="message" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>