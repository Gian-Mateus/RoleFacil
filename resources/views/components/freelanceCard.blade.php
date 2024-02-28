<div class="card" >
    <img src="https://clubedobarman.com/wp-content/uploads/2020/03/Depositphotos_185257888_l-2015-e1585158518691.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $title }}</p>
            <div class="text-center">
                <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ver Vaga</a>
            </div>
    </div>
  </div>

{{-- modal --}}
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title " id="staticBackdropLabel">{{ $title }}</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fs-3">
            <p>{{ $description }}</p>
            <p>Horários: {{ $start }}h até {{ $end }}h</p> 
            @if( $money )      
            <p>Pagamento: R${{ $money }} por hora</p>
            @else
            <p>Valor a combinar.</p>
            @endif
            @if( $phone )
            <p> Whatsapp: <a href="#">{{ $phone }}</a></p>
            @endif
            @if( $telefoneFixo )
            <p> Telefone: <a href="#">{{ $telefoneFixo }}</a></p>
            @endif
            <p> Email: <a href="#">{{ $email }}</a></p>
        </h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>