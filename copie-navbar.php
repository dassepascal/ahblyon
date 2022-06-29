{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="nav-link active" aria-current="page" href="{{ route('home')}}">
        </a>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ">
          {{-- <li class="nav-item mx-3">
            <a class="nav-link" href="{{ route('articles')}}">Evenements</a>
          </li> --}}
          <li><a href="#">Je m'informe</a></li>
          <li><a href="#">Je parainne</a></li>
          <li><a href="#">Je fais un don</a></li>
          <li><a href="#">Archives</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="navbar-nav ml-auto ">
            @if (Auth::user())
            @if (Auth::user()->role === 'ADMIN')
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('articles.index')}} "> Espace Admin</a>
              </li>
            @endif
            <li class="nav-item">
                <form action="{{ route('logout')}}" method="post">
                    @csrf
                <button type="submit" class="btn">Déconnexion</button>
            </form>

              </li>

            @else
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login')}} ">Me connecter</a>
              </li>
            @endif

          </ul>
      </div>

  </nav> --}}
