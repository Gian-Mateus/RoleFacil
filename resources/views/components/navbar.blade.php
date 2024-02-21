
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <x-svg.logo width="15rem" height="15rem"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex busca" role="search">
            <div class="input-group">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="input-group-text" type="submit">
                    <x-svg.search/>
                </button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <div class="icone-home">
                        <x-svg.home/>
                        </div>
                        <h4>Home</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="icone-roles">
                            <x-svg.roles/>
                        </div>
                        <h4>Rolês</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="icone-freelancer">
                            <x-svg.freelancer/>
                        </div>
                        <h4>Freelancer</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="icone-contato">
                            <x-svg.contact/>
                        </div>
                        <h4>Contato</h4>
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login/cadastro">
                    <div class="icone-login">
                        <x-svg.login/>
                    </div>
                    <h4>Login</h4>
                </a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<x-filters.modalmsg/>