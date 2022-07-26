@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <div class="container-fluid py-5">
                <h1 class="display-3 text-center">Je m'informe</h1>
                <div class="card " >
                    <div class="card-body">
<div class="mb-4">
    <h5 class="card-title ">Qui sommes nous?</h5>
    <p class="card-text">Découvrez notre association humanitaire à travers notre histoire, nos valeurs, notre équipe, et
        l’action de l’association Kongodania</p>
    <a href="{{ asset('association') }}" class="btn btn-primary"> Découvrez notre association</a>
</div>




{{-- <div class="mb-4">
    <div class="card-title">
        <h5 class=" ">Notre approche</h5>
        <p class="card-text">
            Les prochains rendez-vous à ne pas manquer
        </p>

        <a href="#" class="btn btn-primary"> Découvrez notre approche</a>
    </div>
</div> --}}
<div class="mb-4">
    <div class="card-title">
        <h5 class=" ">Le village de Kongodiana et le Burgina faso</h5>



        <a href="{{ asset('village') }}" class="btn btn-primary"> Découvrez </a>
    </div>
</div>


                        </div>
                </div>
                {{-- <div class="articles row justify-content-center ">
                    <div class="col">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title ">Nos domaines d'intervention</h5>
                                <p>Découvrez notre association humanitaire à travers notre histoire, nos valeurs, notre équipe, et l’action de l’association Kongodania</p>

                                <a href="#" class="btn btn-primary"> Découvrez nos actions</a>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title ">Appel à bénévoles</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt perferendis similique in inventore ex est reiciendis quia hic incidunt vero?</p>

                                <a href="#" class="btn btn-primary"> Découvrez notre association</a>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <div class="card my-3">
                            <div class="card-body">
                                <h5 class="card-title ">Nos événements</h5>
                                <p>Les prochains rendez-vous à ne pas manquer</p>

                                <a href="#" class="btn btn-primary"> Découvrez les news</a>
                            </div>

                        </div>

                    </div>
                </div> --}}
        </div>
    </div>
@endsection
