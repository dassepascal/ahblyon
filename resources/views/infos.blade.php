@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <div class="container-fluid py-5">
            <h1 class="display-3 text-center">Je m'informe</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card my-3 ">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5 class="card-title ">Qui sommes nous?</h5>
                                <p class="card-text">Découvrez notre association humanitaire à travers notre histoire, nos
                                    valeurs,
                                    notre équipe, et
                                    l’action de l’association Kongodania</p>
                                <a href="{{ asset('association') }}" class="btn btn-primary"> Découvrez notre
                                    association</a>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3 ">
                        <div class="card-body">
                            <div class="mb-4">

                                <h5 class="card-title ">Le village de Kongodiana et le Burgina faso</h5>
                                <a href="{{ asset('village') }}" class="btn btn-primary"> Découvrez </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card my-3 ">
                        <div class="card-body">
                            <div class="mb-4">

                                <h5 class="card-title ">Projets et réalisations</h5>
                                <a href="{{ asset('projets') }}" class="btn btn-primary"> Découvrez nos projets et
                                    réalisations </a>

                            </div>
                        </div>
                    </div>
                    <div class="card my-3 ">
                        <div class="card-body">
                            <div class="mb-4">

                                <h5 class="card-title ">Comment nous aider ?</h5>
                                <p class="card-text">L’association KONGODIANA étant reconnue d’intérêt général, pour tout
                                    don, nous vous enverrons un reçu fiscal pouvant vous donner droit à une déduction de 66
                                    % de son montant.</p>
                                <a href="{{ asset('aides') }}" class="btn btn-primary"> Découvrez comment nous aider </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
