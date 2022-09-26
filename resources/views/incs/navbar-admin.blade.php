 <ul class="navbar-nav ml-auto ">
        @if (Auth::user())
        @if (Auth::user()->role === 'ADMIN')

            {{-- <ul>
                <li>
                    <a  href="{{ route('articles.index')}} ">Articles</a>
                </li>
                <li>
                    <a href="{{ route('dons.index') }}">Dons</a>
                </li>
            </ul> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Espace admin
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="{{ route('articles.index')}} ">Articles</a></li>
                <li><a href="{{ route('dons.index') }}">Dons</a></li>
                <li><a href="{{ route('parraines.index') }}">parraine</a></li>
                <li><a href="{{ route('informes.index') }}">Informe</a></li>
                {{-- Route store n'est pas defini  --}}
                <li><a href="{{ route('image.store') }}">Image-upload</a></li>
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
