@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <div class="container-fluid  py-5">
            <div class="row">
                <div class="col">

                    <img src="{{ asset('images/32.jpg') }}" alt="image du 32" width="100%">
                </div>
                <div class="col">

                     <img src="{{ asset('images/32.jpg') }}" alt="image du 32" width="100%">
                </div>
                <div class="col">

                    <img src="{{ asset('images/32.jpg') }}" alt="image du 32" width="100%">
                </div>
            </div>

{{-- <div class="row">

    <div class="p-2 bd-highlight col "><img src="{{ asset('images/32.jpg') }}" alt="image du 32" width=100%
        class="img-fluid  "></div>
    <div class="p-2 bd-highlight   "><img src="{{ asset('images/32.jpg') }}" alt="image du 32" width=100%
        class="img-fluid "></div>
    <div class="p-2 bd-highlight col "><img src="{{ asset('images/32.jpg') }}" alt="image du 32" width=100%
        class="img-fluid "></div>
</div> --}}


            {{-- <div class="p-2 bd-highlight  "><img src="{{ asset('images/classe.jpg') }}" alt="la classe" width=100%
                    class="img-fluid "></div> --}}

            {{-- <img src="{{asset('images/sunset.jpg')}}" class="rounded float-start" alt="soleil"> --}}
            {{-- <img src="{{asset('images/la-classe-de-kongodiania.jpg')}}" class="rounded float-end" alt="la classe"> --}}
            <h2 class="display-5 fw-bold ">Les actualités de l'association Kongodania</h2>
            <p class="col-md-8 fs-4">Les enfants de Kongodiana,le village de brousse du Burkina Faso, ont besoin de nous, de
                vous ! Aidons-les à construire leur avenir grâce à l’éducation
            </p>

            <p>

            <div class="p-5 mb-4 bg-light rounded-3 mt-5">

                <h1 class="display-3 text-center">Evénements</h1>
                <div class="articles row justify-content-center ">
                    @foreach ($articles as $article)
                        <div class="col-md-6">
                            <div class="card my-3">
                                <div class="card-body">
                                    <h5 class="card-title ">{{ $article->title }}</h5>

                                    <p class="card-text">
                                        <span class="publie">Publié le : {{ $article->created_at }}</span>
                                    </p>

                                    <a href="{{ route('article', $article->slug) }}" class="btn btn-primary"> Lire la
                                        suite</a>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}

                </div>

            </div>
            </p>
        </div>

    </div>
@endsection
