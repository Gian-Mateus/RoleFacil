<nav class="navbar navbar-expand-xl">
    <div class="container">
        <a class="navbar-brand" href="#">
            <x-svg.logo width="6rem" height="6rem"/>
        </a>
        <form class="d-flex form-search" role="search">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="input-group-text" type="submit">
                    <x-svg.search/>
                </button>
            </div>
        </form>
        <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <div class="icon">
                        <x-svg.home/>
                        </div>
                        <h4>Home</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="icon">
                            <x-svg.roles/>
                        </div>
                        <h4>Rolês</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="icon">
                            <x-svg.freelancer/>
                        </div>
                        <h4>Freelancer</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="icon">
                            <x-svg.contact/>
                        </div>
                        <h4>Contato</h4>
                    </a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login/cadastro">
                        <div class="icon">
                            <x-svg.login/>
                        </div>
                        <h4>Login</h4>
                    </a>
                </li>
                @if (Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="login/cadastro">
                        <div class="icon ps-1">
                            <x-svg.logout/>
                        </div>
                        <h4>Sair</h4>
                    </a>
                </li>
                @endif
            </ul>

        </div>
    </div>
</nav>

<x-filters.modalmsg/>