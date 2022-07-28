@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5 ">

        <h1 class="display-3 text-center">Comment nous aider ?</h1>
        <div class="articles row justify-content-center ">

            <div class="col">
                <div class="card my-3">
                    <div class="card-body">

                        <p class="card-text">
                            - en devenant membres : <a href="{{ asset('pdf/Bulletin_adhésion.pdf') }}">Bulletin d'adhésion
                            </a> <br>
                            - en faisant un don ou un legs. <br />
                            - en parrainant : <a href="{{ asset('pdf/Bulletin.pdf') }}">Bulletin de parrainage
                            </a> <br> <br />
                            - en devenant bénévole.

                        </p>
                    </div>
                </div>

            </div>
        </div>
    @endsection
