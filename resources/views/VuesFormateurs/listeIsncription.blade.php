@extends('Layouts.base')
@section('content')

    {{-- <a href="{{ url()->previous() }}" class="btn btn-info"> Retour </a> --}}
    <div class="my-3 p-3 bg-body rounded shadow-sm" style="background-color: rgb(38, 105, 47) !important">
        <div class="contentAjout">
            <h2 class="border-bottom pb-2 mb-0">liste des inscriptions en attente.</h2>
        </div>

        <table class="table table-warning table-striped">
              <h4 style="color: rgba(21, 255, 0, 0.997); text-align:center; width:97%">
                @if (Session::has('succes'))
                    {{ Session::get('succes') }}
                @endif
            </h4>
            <h4 style="color: rgba(255, 4, 0, 0.997); text-align:center; widh:90%"> 
                @if (Session::has('status'))
                    {{ Session::get('status') }}
                @endif
            </h4>
            <tbody>
                @if ($atentes == null)
                    <h5 style="color: rgb(255, 255, 255) !important">Aucune inscription non validé.</h5>
                @else
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">numero de telephone</th>
                            <th scope="col">Inscrit depuis le </th>
                            <th scope="col" class="positionActionBouton">
                                <div class="actpo">Action</div>
                            </th>
                        </tr>
                    </thead>

                    <!-- Afficher les éléments ici -->
                    @foreach ($atentes as $atente)
                        <!-- Afficher chaque élément -->
                        <tr>

                            <th scope="row">1</th>
                            <td>{{ $atente->nom }}</td>
                            <td>{{ $atente->prenom }}</td>
                            <td>{{ $atente->detail->telephone }}</td>
                            <td>{{ (new DateTime($atente->created_at))->format('j, F Y H:i') }}</td>
                            <td>
                                <div class="positionActionBouton">
                                    <a href="{{ url('validation/' . $atente->id) }}" class="btn btn-info"> valider </a>
                                    <a href="{{ url('delete/' . $atente->id) }}" class="btn btn-danger"
                                        onclick="if(confirm('Voulez-vous supprimer cette inscription?')){document.getElementById('form-{{ $atente->id }}').submit()}">Supprimer</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>
@endsection
