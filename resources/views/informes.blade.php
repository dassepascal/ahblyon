@extends('base')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <h1 class="display-3 text-center">Je m'informe</h1>
    <div class="articles row justify-content-center ">
        @foreach ($informes as $informe)
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title ">{{ $informe->title }}</h5>
                    {{-- <p class="card-text" >{!! $informe->content !!}</p> --}}
                    <a href="{{route('informe',$informe->slug)}}" class="btn btn-primary"> Lire la suite</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">{{ $informes->links() }}
    </div>
</div>
@endsection
