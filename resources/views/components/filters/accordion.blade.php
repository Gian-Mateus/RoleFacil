<div class="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <span class="distance-filter">
                Distância
            </span>
        </h2>
        <div>
            <div class="accordion-body">
                <input type="number" placeholder="50" id="input-range-distance" class="input-range">
                <input type="range" min="1" max="150" value="50" name="range-distance"
                    id="range-distance">
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Categoria
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
            <div class="accordion-body">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="bar">
                    <label class="form-check-label" for="bar">
                        Bar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="bar">
                    <label class="form-check-label" for="bar">
                        Bar
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="bar">
                    <label class="form-check-label" for="bar">
                        Bar
                    </label>
                </div>
            </div>
        </div>
    </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Ordernar por:
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFilter">
                <div class="accordion-body">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Distancia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Preço
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Data
                        </label>
                    </div>

                </div>
            </div>
        </div>
</div>
