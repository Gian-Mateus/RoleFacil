<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Role Fácil</title>
</head>
<body>
    <x-navbar/>
    
    <main class="container">
        <button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
            aria-controls="offcanvasFilters" id="collapse-settings">
            <x-svg.settings/>
        </button>
    
        <x-filters.offcanvas/>

        <div class="ad-carousel">
            <x-carousel idCarousel="carouselHome" classCarousel="carousel-home"/>
        </div>

        <div class="event-list-cards">
            <x-eventListCard aboutWhat="Eventos"/>
            <x-eventListCard aboutWhat="Pertos de você"/>
            <x-eventListCard aboutWhat="Restaurantes"/>
            <x-eventListCard aboutWhat="Pubs"/>
            <x-eventListCard aboutWhat="Bar"/>
        </div>

    </main>

    <x-footer/>
</body>
</html>
