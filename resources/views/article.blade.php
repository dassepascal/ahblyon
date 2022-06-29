@extends('base')

@section('content')

<div class="jumbotron">

    <h2 class="display-4 text-center m-5">{{ $article->title }}</h2>
    <div class="d-flex justify-content-center my-5">
        <a class="btn btn-primary" href="{{ route('home') }}">
        Retour</a>
    </div>
    <h5 class="text-center my-3 pt-3">{{ $article->subtitle }}</h5>
<div class="d-flex justify-content-center">
    <span class="cat  ">{{ $article->category->label }}</span>
</div>
    <div class="container">
</div>

        <p class="text-center">
            {!! $article->content !!}
        </p>
    </div>
</div>

@endsection
