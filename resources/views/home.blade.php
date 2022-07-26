@extends('base')

@section('content')
    {{-- <h2 class="display-5 fw-bold ">Les actualités de l'association Kongodania</h2> --}}

    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <p class="col-md-12 fs-4">Les enfants de Kongodiana, le village de brousse du Burkina Faso, ont besoin de nous, de
            vous ! Aidons-les à construire leur avenir grâce à l’éducation
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
            {{-- <section>
                <div class="p-5 mb-4 bg-light rounded-3 mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title ">Parrainages</h5>
                                        <p>Parrainer des enfants,c'est du bonheur partager.</p>
                                        <a href="{{ asset('parraine') }}" class="btn btn-primary"> Lire
                                            la
                                            suite</a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title ">Evenements</h5>
                                            <p>Journées d'unformation, Forums, marché de Noël.</p>
                                        <a href="#evenements" class="btn btn-primary"> Lire
                                            la
                                            suite</a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title ">Projets er réalisations</h5>
                                        <p>Ce que nous avons déjà accompli. Cequ'il rest ç faire.</p>
                                        <a href="{{ asset('projets') }}" class="btn btn-primary"> Lire
                                            la
                                            suite</a>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title ">L'association</h5>
                                        <p>qui sommes-nous</p>
                                        <a href="{{ asset('association') }}" class="btn btn-primary"> Lire
                                            la
                                            suite</a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title ">Comment nous aider</h5>
                                        <p>Adhésion, dons</p>
                                        <a href="#" class="btn btn-primary"> Lire
                                            la
                                            suite</a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title "> Le village de kongodania, le burkina faso</h5>



                                        <a href="#" class="btn btn-primary"> Lire
                                            la
                                            suite</a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

        </div>

    </div>

    </section> --}}


     <section>
        <div class="p-5 mb-4 bg-light rounded-3 mt-5">
            <div class="container-fluid ">
                <h1 id="evenements" class="display-3 text-center">Evénements</h1>
                <div class="articles row justify-content-center ">
                    @foreach ($articles as $article)
                        <div class="col-md-6">
                            <div class="card my-3">
                                <div class="card-body">
                                    <h5 class="card-title ">{{ $article->title }}</h5>

                                    <p class="card-text">
                                        <span class="publie">Publié le : {{ $article->dateFormated() }}</span>
                                    </p>

                                    <a href="{{ route('article', $article->slug) }}" class="btn btn-primary"> Lire
                                        la
                                        suite</a>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}

                </div>

            </div>

        </div>
    </section>


    </div>
    </div>
@endsection
