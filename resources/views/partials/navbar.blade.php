<nav class="navbar navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="#"><img src="logo3.png" width="50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="text-warning nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="text-warning nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Juegos
        </a>
        <div class="bg-dark dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="text-warning dropdown-item" href="#">Accion</a>
          <a class="text-warning dropdown-item" href="#">Aventuras</a>
          <a class="text-warning dropdown-item" href="#">Deportes</a>
          <a class="text-warning dropdown-item" href="#">RPG</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="text-warning nav-link" href="#">Contacto</a>
      </li>
    </ul>
     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    <span class="navbar-text">
        <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Escribe aqui..." aria-label="Buscar">
    <button class="text-dark bg-warning btn my-2 my-sm-0" type="submit">Buscar</button>
  </form>
    </span>
  </div>
</nav>