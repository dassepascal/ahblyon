<nav class="navbar ligth-mode " role="navigation">
    <div class="navbar__logo">
        <img src="{{asset('images/logo-kongodiana.jpg') }}" alt="logo de l'association kongodania" width="80">
  <span  class="ligne" ><h1> Association Kongodania</h1></span>
    </div>
    <ul class="navbar__links">
        <li class="navbar__link first"><a href="#">Accueil</a></li>
        <li class="navbar__link second"><a href="#">Je m'informe</a></li>
        <li class="navbar__link third"><a href="#">Je parraine</a></li>
        <li class="navbar__link four"><a href="#">Je fais un don</a></li>
        <li class="navbar__link five"><a href="#">Contact</a></li>

    </ul>
    <button class="burger">
        <span class="bar"></span>

    </button>
</nav>


 {{-- <ul class="navbar-nav ml-auto ">
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

      </ul> --}}
