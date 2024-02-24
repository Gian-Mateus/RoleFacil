<div class="card">
  <img src="https://t.ctcdn.com.br/uTUyqTnv5XqBEX6kUh2dyEFmxJs=/1200x675/smart/i556613.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-title">Oportunidade</h5>
      <p class="card-text">{{ $freelancer->freelancer_title }}</p>
      <div class="text-center">
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ver Vaga</a>
      </div>
  </div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h2 class="modal-title" id="staticBackdropLabel">{{ $freelancer->freelancer_title }}</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body fs-3">
              <p>{{ $freelancer->freelancer_description }}</p>
              <p>{{ $freelancer->freelancer_hour_start }} - {{ $freelancer->freelancer_hour_end }}</p>
              <p>{{ $freelancer->freelancer_money }}</p>
              <p>{{ $freelancer->freelancer_active }}</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
          </div>
      </div>
  </div>
</div>
