@extends('base')

@section('content')

<div class="jumbotron px-5  ">
    <h2 class="display-4 text-center ">{{ $informe->title }}</h2>
    {{-- <div class="container">
    </div> --}}

    <p >
        {!! $informe->content !!}
    </p>

    <div class="d-flex justify-content-center my-5">
        <a class="btn btn-primary" href="{{ route('home') }}">Retour</a>
    </div>

    {{-- <div class="d-flex justify-content-center">

    </div> --}}


</div>
@include('incs.footer')
@endsection
