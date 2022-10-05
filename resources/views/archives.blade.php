@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5">
        <div class="container-fluid py-5">
          <h2>Archives</h2>
{{-- @dump($archives) --}}
@foreach ($archives as $archive)

<div>
    <ul>
        <li><a href="{{ route('archive',$archive->id) }}">{{ $archive->created_at }}</a> </li>
    </ul>

</div>

@endforeach
        </div>

    </div>
@endsection
