<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Role Fácil</title>
</head>
<body>
    <x-navbar/>
    @if (Request::is('/'))
    <button class="btn btn-primary ms-2 mt-2 border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
        aria-controls="offcanvasFilters" id="collapse-settings">
        <x-svg.settings/>
    </button>
    @endif

    <main class="container">
        @if (Request::is('/'))
        <x-filters.offcanvas/>
        @endif
        @yield('content')
    </main>

    <x-footer/>
</body>
</html>
