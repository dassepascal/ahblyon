@extends('base')

@section('content')

<div class="jumbotron">
    <h2 class="display-4 text-center m-5">{{ $informe->title }}</h2>
    <div class="container">
    </div>

    <p class="text-center">
        {!! $informe->content !!}
    </p>

    <div class="d-flex justify-content-center my-5">
        <a class="btn btn-primary" href="{{ route('home') }}">Retour</a>
    </div>

    {{-- <div class="d-flex justify-content-center">

    </div> --}}


</div>

@endsection
