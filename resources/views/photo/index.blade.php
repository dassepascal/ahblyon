@extends('base')
@section('content')


<div class="container ">
    <div class="container">
        <h1 class="text-center my-5">Photos</h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-info my-4" href="{{ route('photo.create') }}">Ajouter une photo</a>
        </div>


        <table class="table table-hover">
            <thead>
                <tr class="table-hover bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Chemin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                <tr>
                    <th>{{ $photo->id }}</th>
                    <th>{{ $photo->name }}</th>
                    <th>{{  $photo->path }}</th>
                    {{-- <th>{{ $photo->dateFormated() }}</th> --}}
                    <td class="d-flex">
                        {{-- editer --}}

                        <a href="{{ route('photo.edit',$photo->id) }}" class="btn btn-warning mx-3">Editer</a>

                        {{-- delete creation d'un formulaire --}}

                        <button type="button" class="btn btn-danger"
                            onclick="document.getElementById('modal-open-{{ $photo->id }}').style.display='block'">Supprimer</button>
                        <form action="{{ route('photo.delete',$photo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal" id='modal-open-{{ $photo->id }}'>
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">La suppression d'un element est definitive </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                onclick="document.getElementById('modal-open-{{ $photo->id }}').style.display='none'"
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
                                                onclick="document.getElementById('modal-open-{{ $photo->id }}').style.display='none'">Annuler</button>
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

        </div>
    </div>

</div>

@endsection
