 <ul class="navbar-nav ml-auto ">
        @if (Auth::user())
        @if (Auth::user()->role === 'ADMIN')
        <li class="nav-item ">
             Espace Admin
            <ul>
                <li>
                    <a  href="{{ route('articles.index')}} ">Articles</a>
                </li>
                <li>
                    <a href="{{ route('dons.index') }}">Dons</a>
                </li>
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
