@extends('base')
@section('content')
<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <div class="container-fluid ">

        <h1 id="date1" class="display-3 text-center">Archives </h1>
        <div class="articles row justify-content-center ">
            @foreach ($articles as $article )
            @if (($archive->created_at) == ($article->created_at))
            <div class="col-md-6">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $article->title }}</h5>
                        <p class="card-text">
                            <span class="publie">Publié le : {{ $article->dateFormated() }}</span>
                        </p>
                        <p class="text-center">{!! $article->content !!}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        {{-- <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}
        </div> --}}
    </div>
    @include('incs.footer')
</div>
@endsection
