@extends('base')

@section('content')
{{-- <h2 class="display-5 fw-bold ">Les actualités de l'association Kongodania</h2> --}}

<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <p class="col-md-12 fs-4">Les enfants de Kongodiana, le village de brousse du Burkina Faso, ont besoin de nous, de
        vous ! <br />
        Aidons-les à construire leur avenir grâce à l’éducation
    </p>

    <div class="container-fluid  py-5">
        <section>
            <div class="row">
                <div class="col-md-4">

                    <img src="{{ asset('images/4classe.jpg') }}" alt="image du 32" width="100%" class=" ms-2">
                </div>
                <div class="col-md-4">

                    <img src="{{ asset('images/6-cour-de-ecole.jpg') }}" alt="image du 32" width="100%" height="100%">
                </div>
                <div class="col-md-4">

                    <img src="{{ asset('images/3-ecole-de-kongodiana.jpg') }}" alt="image du 32" width="100%">
                </div>
            </div>
        </section>


        <section>
            <div class="p-5 mb-4 bg-light rounded-3 mt-5">
                @include('articles')
            </div>
        </section>
        <section>
            @include('photos')
        </section>
    </div>
</div>
@endsection
