@extends('base')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Poster une nouvelle information</h1>
        <form action="{{ route('informes.store') }}" method="post">

            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="titre de votre article" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div>

            <textarea id="tinycme-editor" name="content" class="form-control w-100 @error('content') is-invalid @enderror"></textarea>
            @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }} </strong>
                </span>
            @enderror
    </div>
    <script>
        tinymce.init({
            selector: '#tinycme-editor',

        });
    </script>
    </div>
    <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-primary">Poster l'information</button>
    </div>
    </form>
    </div>
@endsection
