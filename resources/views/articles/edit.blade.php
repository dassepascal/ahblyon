@extends('base')
@section('content')

    <div class="container">
        <h1 class="text-center mt-5">Editer un  événement</h1>
        <form action="{{ route('articles.update',$articles->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <label>Titre</label>
                    <input type="text" value="{{ $articles->title}}" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="titre de votre article" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="form-group">
                    <label>Sous-titre</label>
                    <input type="text" value="{{ $articles->subtitle}}"  name="subtitle" class="form-control @error('subitle') is-invalid @enderror" placeholder="Sous-titre de votre article" />
                    <small class="form-text text-muted ">Décrivez le contenu de votre article, le théme traité</small>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }} </strong>
                        </span>
                    @enderror
                </div>
            </div> --}}
            {{-- <div class="col-12">
                <div class="form-group">
                    <label for="category">Categorie</label>
                    <select name="category" id="" class="form-select">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->label }}</option>

                        @endforeach
                    </select>
                </div>
            </div> --}}
            <div class="col-12">
                <div class="form-group">
                    <label> Contenu</label>

                    <textarea id="tinycme-editor"  name="content" class="form-control w-100 @error('content') is-invalid @enderror">{{ $articles->content }}</textarea>
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
                <button type="submit" class="btn btn-primary">Modifier un événement</button>
            </div>
        </form>
    </div>
@endsection
