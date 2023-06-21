@extends('base')
@section('content')
{{-- @dump(Session::all()); --}}

<div class="container">
    <h1 class="text-center my-5">je m'informe</h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-4" href="{{ route('informes.create') }}">Ajouter une nouvelle information</a>
    </div>


    <div  class="responsive-table-line" style="margin:0px auto; max-width:1286px">
        <table class="table table-bordered table-condensed table-body-center">
        <thead>
            <tr class="bg-primary text-light">
                <th >Id</th>
                <th >Titre</th>
                <th >Crée le</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informes as $informe)
            <tr>
                <td data-title = "Id">{{ $informe->id }}</td>
                <td data-title ="Nom">{{ $informe->title }}</td>
                <td data-title= "Date">{{ $informe->dateFormated() }}</td>
              
                <td data-title = "Action" class="d-flex">
                    {{-- editer --}}
                    <a href="{{ route('informes.edit',$informe->id) }}" class="btn btn-warning mx-3 text-light">Editer</a>

                    {{-- delete creation d'un formulaire --}}

                    <button type="button" class="btn btn-danger"
                        onclick="document.getElementById('modal-open-{{ $informe->id }}').style.display='block'">Supprimer</button>
                    <form action="{{ route('informes.delete',$informe->slug) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal" id='modal-open-{{ $informe->id }}'>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">La suppression d'un element est definitive </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            onclick="document.getElementById('modal-open-{{ $informe->id }}').style.display='none'"
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
                                            onclick="document.getElementById('modal-open-{{ $informe->id }}').style.display='none'">Annuler</button>
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

    <div class="d-flex justify-content-center mt-5">{{ $informes->links() }}</div>
</div>


@endsection
