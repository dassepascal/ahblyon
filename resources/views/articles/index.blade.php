@extends('base')
@section('content')
    {{-- @dump(Session::all()); --}}

    <div class="container">
        <h1 class="text-center my-5">Evénements</h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-info my-4" href="{{ route('articles.create') }}">Ajouter un nouvel article</a>
        </div>

<div class="responsive-table-line" style="margin:0px auto; max-width:700px"">
    <table class="table table-hover">
        <thead>
            <tr class=" bg-primary ">
                <th>Id</th>
                <th>Titre</th>
                <th>Crée le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td data-title="Id">{{ $article->id }}</td>
                    <td data-title ="Nom">{{ $article->title }}</td>
                    <td data-title = "Date">{{ $article->dateFormated() }}</td>
                    <td data-title = "Action" class="d-flex">
                        {{-- editer --}}
                        <a href="{{ route ('articles.edit',$article->id)}}" class="btn btn-warning mx-3">Editer</a>

                        {{-- delete  creation d'un formulaire --}}

                        <button type="button" class="btn btn-danger"
                            onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>
                        <form action="{{ route('articles.delete', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal" id='modal-open-{{ $article->id }}'>
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">La suppression d'un element est definitive </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'"
                                                aria-label="Close">
                                                <span aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Etes vous sur de vouloir supprimé! </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">oui</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        {{-- <form action="#" method="delete"></form> --}}

                </tr>
            @endforeach

        </tbody>
    </table>
</div>


    <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}</div>
    </div>
@endsection
