<ul class="navbar-nav ml-auto ">
    @if (Auth::user())
    @if (Auth::user()->role === 'ADMIN')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Espace admin
        </a>
        <ul class="dropdown-menu px-2" aria-labelledby="navbarDropdown">
            <li><a href="{{ route('articles.index')}} ">Evenements</a></li>
            <li><a href="{{ route('dons.index') }}">Dons</a></li>
            <li><a href="{{ route('parraines.index') }}">parraine</a></li>
            <li><a href="{{ route('informes.index') }}">Informe</a></li>
            <li><a href="{{ route('photo.index') }}">Photo-index</a></li>
        </ul>
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
