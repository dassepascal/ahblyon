@extends('base')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Poster un nouvel article</h1>
        <form action="{{ route('articles.store') }}" method="post">
            {{-- @dump($categories) --}}
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="titre de votre article" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Sous-titre</label>
                    <input type="text" name="subtitle" class="form-control @error('subitle') is-invalid @enderror" placeholder="Sous-titre de votre article" />
                    <small class="form-text text-muted ">Décrivez le contenu de votre article, le théme traité</small>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div>

<div class="col-12">
    <div class="form-group">
        <label for="category">Categorie</label>
        <select name="category" id="" class="form-select">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->label }}</option>

            @endforeach
        </select>
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
                <button type="submit" class="btn btn-primary">Poster l'article</button>
            </div>
        </form>
    </div>
@endsection
