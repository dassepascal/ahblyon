@extends('base')

@section('content')



    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <div class="container-fluid py-5">
            <div class="p-2 bd-highlight  "><img src="{{asset('images/32.jpg')}}" alt="image du logo" width=100%
                class="img-fluid "></div>
                <div class="p-2 bd-highlight  "><img src="{{asset('images/classe.jpg')}}" alt="la classe" width=100%
                    class="img-fluid "></div>

            {{-- <img src="{{asset('images/sunset.jpg')}}" class="rounded float-start" alt="soleil"> --}}
            {{-- <img src="{{asset('images/la-classe-de-kongodiania.jpg')}}" class="rounded float-end" alt="la classe"> --}}
          <h1 class="display-5 fw-bold">Association Kongodania</h1>
          <p class="col-md-8 fs-4">Les enfants de Kongodiana,le village de brousse du Burkina Faso, ont besoin de nous, de vous ! Aidons-les à construire leur avenir grâce à l’éducation
        </p>
          <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
      </div>




@endsection
