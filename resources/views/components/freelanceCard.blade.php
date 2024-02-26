@foreach($freelancers as $freelancer)
<div class="card" >
    <img src="https://t.ctcdn.com.br/uTUyqTnv5XqBEX6kUh2dyEFmxJs=/1200x675/smart/i556613.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$freelancer['freelancer_title']}}</h5>
        <p class="card-text">{{$freelancer['freelancer_title']}}</p>
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
          <h2 class="modal-title " id="staticBackdropLabel">{{$freelancer['freelancer_title']}}</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fs-3">
            <p>{{$freelancer['freelancer_description']}}</p>
            <p>{{$freelancer['freelancer_start']}} até {{$freelancer['freelancer_end']}}</p> 
            @if($freelancer['freelancer_money'])      
            <p>R${{$freelancer['freelancer_money']}} por hora</p>
            @else
            <p>Valor a combinar.</p>
            @endif
            @if($freelancer['freelancer_phone'])
            <p> Whatsapp: <a href="#">{{$freelancer['freelancer_phone']}}</a></p>
            @endif
            @if($freelancer['freelancer_telefone_fixo'])
            <p> Telefone: <a href="#">{{$freelancer['freelancer_phone']}}</a></p>
            @endif
            <p> Email: <a href="#">{{$freelancer['freelancer_email']}}</a></p>
        </h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
@endforeach