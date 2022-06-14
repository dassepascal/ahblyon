@extends('base')
@section('content')
<div class="container">
    <h1 class="text-center my-5">Articles</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-4" href="{{ route('articles.create')}}">Ajouter un nouvel article</a>
    </div>


<table class="table table-hover">
    <thead>
      <tr class="table-hover bg-primary text-light">
        <th scope="col">Id</th>
        <th scope="col">Titre</th>
        <th scope="col">Crée le</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
<tr>
    <th>{{ $article ->id}}</th>
    <th>{{ $article->title }}</th>
    <th>{{ $article->dateFormated() }}</th>
    <td class="d-flex">
<a href="#" class="btn btn-warning mx-3">Editer</a>
<a href="#" class="btn btn-danger mx-3">Supprimer</a>
</tr>
      @endforeach

    </tbody>
  </table>
</div>
  <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}</div>
</div>
@endsection
