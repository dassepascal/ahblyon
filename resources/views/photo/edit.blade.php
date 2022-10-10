@extends('base')
@section('content')

    <div class="container">
        <h1 class="text-center mt-5">Editer une  photo</h1>
        <form action="{{ route('photo.update',$photo->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="mt-2  ">
                {{-- <img src="{{ Storage::url($photo->path)}}" alt="#" class="mx-auto d-block"> --}}
                <img src="{{ url('/').'/storage/'.$photo->path}}" alt="#" class="d-block mx-auto">
            </div>
            {{-- <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" value="{{ $photo->path}}" name="path" class="form-control @error('title') is-invalid @enderror" placeholder="titre de votre article" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div> --}}

            <div class="col-12">
                <div class="form-group">
                    <label for="category">Categories</label>
                    <select name= "category"  class="form-select" aria-label="Default select example">
                        @foreach ($categories as $category)
                        @dump($category)
                        <option value="{{  $category->id }}">{{  $category->label }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="d-flex justify-content-center my-4">
                <button type="submit" class="btn btn-primary">Modifier une image</button>
            </div>
        </form>
    </div>
@endsection
