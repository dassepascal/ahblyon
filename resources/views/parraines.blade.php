@extends('base')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <h1 class="display-3 text-center">Je parraine</h1>
    <div class="articles row justify-content-center ">
        @foreach ($parraines as $parraine)
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title ">{{ $parraine->title }}</h5>
                    <a href="{{ route('parraine',$parraine->slug) }}" class="btn btn-primary"> Lire la suite</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">{{ $parraines->links() }}
    </div>
</div>
@endsection
