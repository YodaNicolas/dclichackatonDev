@extends('Layouts.base')
@section('content')
    <br><br>
    <div class="card">
        <div class="card-header">
            <h3>Profils </h3>
            <div class="contenteDrop">
                <h5>Recherche :</h5>
                <div class="zoneTrie">Pays
                    <select class="form-select dropTri " name="pays">
                        <option select disabled selected>Choix</option>
                        <option value="226">Burkina</option>
                        <option value="225">Cote D'Ivoire</option>
                        <option value="243">Congo</option>
                        <option value="253">Djibouti</option>
                        <option value="221">Senegal</option>
                        <option value="261">Madagascar</option>
                        <option value="222">Mauritanie</option>
                        <option value="223">Mali</option>
                        <option value="227">Niger</option>
                    </select>
                </div>
                <div class="zoneTrie">Domaine
                    <select class="form-select dropTri " name="Domaine">
                        <option select disabled selected>Choix</option>
                        <option value="1">Cloud computing</option>
                        <option value="2">Devellopement Web</option>
                        <option value="3">Devellopement mobil</option>
                        <option value="4">IOT</option>
                        <option value="5">Autre</option>
                    </select>
                </div>
                <div class="zoneTrie">Sexe
                    <select class="form-select dropTri " name="Sexe">
                        <option select disabled selected>Choix</option>
                        <option value="2">Femme</option>
                        <option value="1">Homme</option>
                    </select>
                </div>
                <div class="zoneTrie">Competence
                    <select class="form-select dropTri " name="Competence">
                        <option select disabled selected>Choix</option>
                        <option value="1">HTML</option>
                        <option value="2">CSS</option>
                        <option value="3">JAVASCRIPT</option>
                        <option value="4">PHP</option>
                        <option value="5">LARAVEL</option>
                        <option value="5">PYTHON</option>
                    </select>
                </div>
                <div class="zoneTrie">Statut
                    <select class="form-select dropTri " name="Statut">
                        <option select disabled selected>Choix</option>
                        <option value="226">Disponible</option>
                        <option value="225">Etudiant</option>
                        <option value="243">En quête d'emploi</option>
                        <option value="253">Plus récommandé</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="ListeProfil">
            @if ($apnts == null)
                <h2 style="width: 100%; align-text:center; color:black"> Aucun profil à afficher pour le moment. </h2>
            @else
                <!-- Afficher les éléments ici -->
                @foreach ($apnts as $apnt)
                    <!-- Afficher chaque élément -->
                    <div class="cardProfil">
                        <div class="user text-center">
                            <div class="profile">
                                <img src="https://i.imgur.com/JgYD2nQ.jpg" class="rounded-circle" width="80" />
                            </div>
                        </div>
                        <div class=" text-center">
                            <h5 class="mb-0">{{ $apnt->nom }}</h5>
                            <span class="text-muted d-block mb-2">Los Angles</span>
                            <a class="btn btn-primary btn-sm follow" href="{{ url('vuprofil/' . $apnt->id) }}">Plus de
                                details</a>
                            {{-- <button ></button> --}}

                            <div class="dL">
                                <div class="stats">
                                    <h6 class="mb-0">Note</h6>
                                    <span>8,797</span>
                                </div>

                                <div class="stats">
                                    <h6 class="mb-0">Projets</h6>
                                    <span>142</span>
                                </div>

                                <div class="stats">
                                    <h6 class="mb-0">Demos</h6>
                                    <span>129</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
