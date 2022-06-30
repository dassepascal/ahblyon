<nav class="navbar ligth-mode " role="navigation">

    <ul class="navbar__links">
        <li class="navbar__link first"><a href="{{ route('home')}}">Accueil</a></li>
        <li class="navbar__link second"><a href="{{route('infos')}}">Je m'informe</a></li>
        <li class="navbar__link third"><a href="{{ route ('parraine') }}">Je parraine</a></li>
        <li class="navbar__link four"><a href="{{ route ('don') }}">Je fais un don</a></li>
        <li class="navbar__link five"><a href="{{ route('archives') }}">Archives</a></li>
        <li class="navbar__link six"><a href="{{ route('contact') }}">Contact</a></li>



    </ul>
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
    <button class="burger">
        <span class="bar"></span>

    </button>
