<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark justify-content-between">
    <a class="navbar-brand" href="{{route('inicio')}}">Peluches.net</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end gx-5" id="navbarCollapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('peluche.create')}}" class="btn btn-primary">
                    Nuevo Peluche <i class="fa-solid fa-plus"></i></span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('peluche.index')}}">Lista peluches</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('galeria')}}">Galería</a>
            </li>
        </ul>
        <!--
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        -->
    </div>
</nav>

