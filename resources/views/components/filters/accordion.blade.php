<div class="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <span class="distance-filter">
                Distância
            </span>
        </h2>
        <div>
            <div class="accordion-body">
                @verbatim
                    <input type="text" placeholder="" id="placeHolderInput" class="input-range">
                    <input type="range" min="1" max="150" value="50" name="range-distance" id="range-distance" onchange="setRange()">
                    <script>
                        function setRange() {
                            const valueRange = document.getElementById('range-distance').value;
                            document.getElementById('placeHolderInput').value = valueRange;
                        }

                        // Inicializa o placeholder com o valor padrão ao carregar a página
                        document.addEventListener('DOMContentLoaded', function() {
                            setRange();
                        });
                    </script>
                @endverbatim

        {{--       <input type="text" placeholder="" id="placeHolderInput"/>
                <input type="range" min="1" max="150" value="50" name="range-distance" id="range-distance"> --}}
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

            </div>
        </div>
    </div>
</div>
