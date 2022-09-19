@extends('base')
@section('content')

    <div class="container">
        <h1 class="text-center mt-5">Editer un nouveau don</h1>
        <form action="{{ route('dons.update',$dons->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" value="{{ $dons->title}}" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="titre de votre don" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label> Contenu</label>

                    <textarea id="tinycme-editor"  name="content" class="form-control w-100 @error('content') is-invalid @enderror">{{ $dons->content }}</textarea>
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
                <button type="submit" class="btn btn-primary">Modifier un don</button>
            </div>
        </form>
    </div>
@endsection
