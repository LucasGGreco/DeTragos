<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <div class="row justify-content-between w-100">
            <div class="col-2">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-3 align-self-center">
                <input type="text" name="search" id="search" placeholder="Busca tu trago..." class="search form-control">
            </div>
            <div class="col-2 align-self-center"> 
                <ul class="navbar-nav">
                    @if (Auth::check())
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle voice-chat-card-header" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">     
                            <img class="avatar">
                            <div class="username me-2">{{Auth::user()->name}}</div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Favoritos</a></li>
                            <li><a class="dropdown-item" href="#">Mi catalogo</a></li>
                            <li><a class="dropdown-item" href="#">Configuracion</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Cerrar session</a></li>
                        </ul>
                    </div>
                    @else
                    <li class="nav-item mx-4">
                        <a class="nav-link p-0 my-2" href="{{route('login.show')}}">
                            <span>Entrar</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>