@extends('Layouts.base')
@section('content')
    <br><br>
    <a href="" class="btn btn-info"> Liste inscriptions </a>

    <div class="my-3 p-3 bg-body rounded shadow-sm" style="background-color: rgb(153, 133, 133) !important">
        <div class="contentAjout">
            <h2 class="border-bottom pb-2 mb-0">Liste des formateurs</h2>
            <a href="{{ route('CompteFormat.create') }}" class="ml-4 text-sm text-gray-700 underline btn btn-primary">Ajouter
                un formateur</a>

        </div>
       <h3>
            @if (Session::has('status'))
            {{ Session::get('status') }}
            @endif
        </h3> 
        <table class="table table-dark table-striped">
            <thead>

                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Identifiant</th>
                    <th scope="col" class="positionActionBouton">
                        <div class="actpo">Action</div>
                    </th>
                </tr>

            </thead>

            <tbody>
                @foreach ($formateurs as $formateur)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $formateur->nom }}</td>
                        <td>{{ $formateur->prenom }}</td>
                        <td>{{ $formateur->email }}</td>
                        <td>{{ $formateur->identifiant }}</td>

                        <td>
                            <div class="positionActionBouton">
                                <a class="btn btn-success" href="">Modifier</a>
                                <a href="" class="btn btn-danger"
                                    onclick="if(confirm('Voulez-vous supprimer cet manager?')){document.getElementById.submit()}">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
