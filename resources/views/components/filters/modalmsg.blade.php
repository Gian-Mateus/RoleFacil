{{-- <button type="button" class="botaoMsg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="seuemail@email.com">Contato</button> --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enviar Mensagem</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col">
              <label for="recipient-name" class="col-form-label">Nome:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="col">
              <label for="recipient-phone" class="col-form-label">Telefone para contato:</label>
              <input type="text" class="form-control" id="recipient-phone">
            </div>
          </div>
          <div class="mb-3">
            <label for="recipient-email" class="col-form-label">E-mail:</label>
            <input type="text" class="form-control" id="recipient-email">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Mensagem:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
      </div>
    </div>
  </div>
</div>