<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="{{asset('images/logo-kongodiana.jpg') }}" alt="logo de l'association kongodania" width="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('informes')}}">Je m'informe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('parraine')}}">Je parraine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dons')}}">Je fais un don</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('contact')}}">Contact</a>
          </li>
          {{-- <li class="nav-item">
            <a  class="nav-link active" aria-current="page" href="{{ route('admin') }}">Admin</a>
          </li> --}}
        </ul>

      </div>
      @include('incs.navbar-admin')

    </div>
  </nav>



{{-- <nav class="navbar ligth-mode " role="navigation">
    <div class="navbar__logo">
        <img src="{{asset('images/logo-kongodiana.jpg') }}" alt="logo de l'association kongodania" width="80">
  <span  class="ligne" ><h1> Association Kongodania</h1></span>
    </div>
    <ul class="navbar__links">
        <li class="navbar__link first"><a href="{{ route('home')}}">Accueil</a></li>
        <li class="navbar__link second"><a href="{{ route('infos')}}">Je m'informe</a></li>
        <li class="navbar__link third"><a href="{{ route('parraine')}}">Je parraine</a></li>
        <li class="navbar__link four"><a href="{{ route('don')}}">Je fais un don</a></li>
        <li class="navbar__link five"><a href="{{ route('contact')}}">Contact</a></li>

    </ul>
    <button class="burger">
        <span class="bar"></span>

    </button>
</nav> --}}


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
