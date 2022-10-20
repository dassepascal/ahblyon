@extends('base')

@section('content')

<div class="jumbotron">

    <h2 class="display-4 text-center m-5">{{ $article->title }}</h2>

        <p class="text-center">
            {!! $article->content !!}
        </p>
        <div class="d-flex justify-content-center my-5">
        <a class="btn btn-primary" href="{{ route('home') }}">
        Retour</a>
    </div>

{{-- <div class="d-flex justify-content-center">

</div> --}}
    {{-- <div class="container">
</div> --}}


    </div>
    @include('incs.footer')
</div>

@endsection
