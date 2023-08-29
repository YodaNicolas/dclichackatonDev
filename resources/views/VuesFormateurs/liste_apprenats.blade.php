@extends('Layouts.base')
@section('content')
    <br><br>
  

    <div class="my-3 p-3 bg-body rounded shadow-sm" style="background-color: rgb(153, 133, 133) !important">  <h3>FORMATEUR: {{ Auth::user()->nom .' '. Auth::user()->prenom }}</h3>
        <div class="contentAjout">
            <h2 class="border-bottom pb-2 mb-0">Liste des apprenants inscrit sur D-CLIC Pro</h2>
            <a href="{{ url('listeAtente/' . Auth::user()->identifiant) }}" class="btn btn-info"> Valider des inscriptions
            </a>

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
                @if ($atentes == null)
                    <p>Aucun élément à afficher pour le moment.</p>
                @else
                    <!-- Afficher les éléments ici -->
                    @foreach ($atentes as $apnts)
                        <!-- Afficher chaque élément -->
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $apnts->nom }}</td>
                            <td>{{ $apnts->prenom }}</td>
                            <td>{{ $apnts->email }}</td>
                            <td>{{ $apnts->identifiant }}</td>
                            <td>
                                <div class="positionActionBouton">
                                    <a class="btn btn-success" href="">Modifier</a>
                                    <a href="" class="btn btn-danger"
                                        onclick="if(confirm('Voulez-vous supprimer cet manager?')){document.getElementById.submit()}">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
