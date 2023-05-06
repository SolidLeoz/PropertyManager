<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homePage')}}">Escrow Property Manager</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('indexProduct')}}">Index Richieste</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('createProduct')}}">Inserisci Richiesta</a>
          </li>
          @endauth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Autenticazione
            </a>
            <ul class="dropdown-menu">
              @guest
              <li class="nav-item">
                <a class="dropdown-item" href="{{route('login')}}">Accedi</a>
              </li>
              <li class="nav-item">
                <a class="dropdown-item" href="{{route('register')}}">Registrati</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              @else
              <li class="nav-item">
                <form id="form-logout" action="{{route('logout')}}" method="POST">@csrf</form>
                <a class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" href="{{route('homePage')}}">Logout</a>
              </li>
              @endguest
              <li>
                @auth
                Ciao, {{Auth::user()->name}}
                @else
                Ciao, Accedi
                @endauth
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>