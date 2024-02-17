<div>
    <button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
        aria-controls="offcanvasFilters" id="collapse-settings">
        <x-svg.settings/>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasFilters" aria-labelledby="offcanvasFiltersLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Filtros</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <x-filters.accordion/>
            
        </div>
    </div>
</div>