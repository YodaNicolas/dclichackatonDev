@extends('Layouts.lprofillay')
@section('contentate')
    <div class="bodyProfil">
        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('fond register.jpg') }}" alt="" />
                            <div class="file btn btn-lg btn-primary">
                                Remplacer ma Photo
                                <input type="file" name="file" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{ Auth::user()->nom}}
                            </h5>
                            <h6>
                                <a href="{{ url('niveau/' . Auth::user()->id) }}" style="text-decoration: none; font-size:18px">Voir profil avec niveaux</a>
                            </h6>
                          <p class="proile-rating">NIVEAU: <span>8/10</span></p> 
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Infos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Reponse rapide</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-primary" href="{{ route('modifniveau') }}">Mettre à jour</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>MES LIENS</p>
                            <a href="">Site web</a><br />
                            <a href="">GitHub</a><br />
                            <a href="">LinkDin</a>
                       
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Identifiant</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::user()->identifiant }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nom</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::user()->nom}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Prenom</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::user()->prenom}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::user()->email}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Telephone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ Auth::user()->detail->telephone}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Experience</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Debutant</p>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Projets réalisés</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>230</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Démos</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>4</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Peu se deplace ?</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Oui</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Biographie</label><br />
                                        <p>Pas de bio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
