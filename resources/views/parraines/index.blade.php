@extends('base')
@section('content')
{{-- @dump(Session::all()); --}}

<div class="container">
    <h1 class="text-center my-5">je parraine</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-4" href="{{ route('parraines.create') }}">Ajouter un nouveau texte</a>
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
            @foreach ($parraines as $parraine)
            <tr>
                <th>{{ $parraine->id }}</th>
                <th>{{ $parraine->title }}</th>
                <th>{{ $parraine->dateFormated() }}</th>
                <td class="d-flex">
                    {{-- editer --}}
                    <a href="{{ route('parraines.edit',$parraine->id) }}" class="btn btn-warning mx-3">Editer</a>
                    {{-- delete creation d'un formulaire --}}
                    <button type="button" class="btn btn-danger"
                        onclick="document.getElementById('modal-open-{{ $parraine->id }}').style.display='block'">Supprimer</button>
                    <form action="{{ route ('parraines.delete',$parraine->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal" id='modal-open-{{ $parraine->id }}'>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">La suppression d'un element est definitive </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            onclick="document.getElementById('modal-open-{{ $parraine->id }}').style.display='none'"
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
                                            onclick="document.getElementById('modal-open-{{ $parraine->id }}').style.display='none'">Annuler</button>
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
  <div class="d-flex justify-content-center mt-5">{{ $parraines->links() }}</div>
</div>



@endsection
