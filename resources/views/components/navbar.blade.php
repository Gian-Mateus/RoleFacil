<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <x-svg.logo/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <x-svg.home/>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <x-svg.roles/>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <x-svg.freelancer/>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <x-svg.contact/>
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login/cadastro">
                    <x-svg.login/>
                </a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <div class="input-group">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="input-group-text" type="submit">
                        <x-svg.search/>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>
