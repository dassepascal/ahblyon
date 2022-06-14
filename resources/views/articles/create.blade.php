@extends('base')
@section('content')
<div class="container">
    <h1 class="text-center mt-5">Poster un nouvel article</h1>
<form action="{{ route ('articles.store')}}" method="post">
    @csrf
    <div class="col-12">
        <div class="form-group">
            <label >Titre</label>
            <input type="text" name="title" class="form-control" placeholder="titre de votre article" />
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label >Sous-titre</label>
            <input type="text" name="subtitle" class="form-control" placeholder="Sous-titre de votre article" />
            <small class="form-text text-muted ">Décrivez le contenu de votre article, le théme traité</small>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
           <label> Contenu</label>

            <textarea  name="content"  class="form-control w-100"></textarea>
        </div>
        {{-- <script>
            tinymce.init({
              selector: '#tinymce-editor',

            });
          </script> --}}
    </div>
    <div class="d-flex justify-content-center my-4">
        <button type="submit" class="btn btn-primary">Poster l'article</button>
    </div>
</form>
</div>

@endsection
