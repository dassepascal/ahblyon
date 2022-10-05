@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <div class="container-fluid py-5">
          <h2>Archive</h2>
@dump($articles)
<div>

    {{ $archive->id }}


</div>
       </div>

    </div>
@endsection
