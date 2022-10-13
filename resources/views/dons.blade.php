@extends('base')



@section('content')
<div class="p-5 mb-4 bg-light rounded-3 mt-5">

    <h1 class="display-3 text-center">Je fais un don </h1>
    <div class="dons row justify-content-center ">
        @foreach ($dons as $don)
        <div class="col">
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title h5"> {{ $don->title }}</h5>
                    <p class="card-text">{!! $don->content !!} </p>
                    {{-- <a href="#" class="btn btn-primary"> Tout savoir sur le parrainage</a> --}}
                    <a href="{{ asset('pdf/Bulletin_adhésion.pdf') }}">Bulletin adhésion</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('incs.footer')
</div>
@endsection
