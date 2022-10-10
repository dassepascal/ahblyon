@extends('base')
@section('content')

<div class="container">
    <h1 class="text-center my-5">je parraine</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-4" href="{{ route('parraines.create') }}">Ajouter un nouveau texte</a>
    </div>

    <div  class="responsive-table-line" style="margin:0px auto; max-width:1286px">
        <table class="table table-bordered table-condensed table-body-center">
        <thead>
            <tr class=" bg-primary text-light">
                <th>Id</th>
                <th>Titre</th>
                <th>Crée le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parraines as $parraine)
            <tr>

                <td data-title = "Id">{{ $parraine->id }}</td>
                <td data-title = "Nom">{{ $parraine->title }}</td>
                <td data-title = "Date">{{ $parraine->dateFormated() }}</td>
                <td  data-title = "Action" class="d-flex">
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
</div>

  <div class="d-flex justify-content-center mt-5">{{ $parraines->links() }}</div>
</div>



@endsection
