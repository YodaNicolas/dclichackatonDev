@extends('Layouts.base')
@section('content')
    {{-- <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('Compte.store') }}">
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="validationCustom01" required
                placeholder="Entrez votre nom">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Prenoms</label>
            <input type="text" name="prenom" class="form-control" id="validationCustom02" required
                placeholder="Entrez tout vos prénoms sans abreviation!">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Date de naissance</label>
            <input type="date" name="date_naissance" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        

        <div class="col-md-3">
        <label for="validationCustom02" class="form-label" >Genre</label>
        <select class="form-select col-md-3" name="genre">
            <option select disabled >selectionnez le genre</option>
            <option value="1">Homme</option>
            <option value="2">Femme</option>
        </select>
        </div>

        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Telephone</label>
            <input type="text" name="telephone" class="form-control" id="validationCustom05" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Formation de base</label>
            <input type="text" name="formation_base" class="form-control" id="validationCustom03" required placeholder="Ex: Licence en Lettre moderne">
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Clée</label>
            <input type="text" name="cle_inscription" class="form-control" id="validationCustom05" required
                placeholder="Entrez la clée fournie par le formateur">
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div> 
       
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form> --}}

    <div class="bodyRegister">
        <br><br>
        <div class="container ">
            <h1 class="form-title">Enregistrement apprenant</h1>
            <h3 style="color: rgba(255, 4, 0, 0.997); text-align:center; widh:100%">
                @if (Session::has('status'))
                    {{ Session::get('status') }}
                @endif
            </h3>
            <form method="POST" action="{{ route('Compte.store') }}">
                @csrf
                <div class="main-user-info">

                    <div class="user-input-box">
                        <label for="fullName">Nom</label>
                        <input type="text" id="fullName" name="nom" placeholder="Entrer votre nom" required />
                    </div>
                    <div class="user-input-box">
                        <label for="username">Prenom</label>
                        <input type="text" id="username" name="prenom" placeholder="Entre vos prenoms sans abréviation"
                            required />
                    </div>
                    <div class="user-input-box">
                        <label for="date">Date de naissance</label>
                        <input type="date" id="date" name="date_naissance" />
                    </div>
                    <div class="user-input-box">
                        <label for="phoneNumber">Numero</label>
                        <input type="text" id="phoneNumber" name="telephone" placeholder="Entre votre numero "
                            required />
                    </div>
                    <div class="user-input-box">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="mot_de_passe1" placeholder="Entre votre mot de passe"
                            required />
                    </div>
                    <div class="user-input-box">
                        <label for="confirmPassword">Confirmer le mot de passe</label>
                        <input type="password" id="confirmPassword" name="mot_de_passe2"
                            placeholder="Confirmez votre mot de passe" required />
                    </div>
                    <div class="user-input-box">
                        <label for="confirmPassword">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email " required />
                    </div>
                    <div class="user-input-box">
                        <label for="confirmPassword">Clé d'inscription</label>
                        <input type="password" id="confirmPassword" name="cle_inscription"
                            placeholder="Entre la clé fourni par votre formateur" required />
                    </div>

                </div>
                <div class="gender-details-box">
                    <span class="gender-title">Genre</span>
                    <div class="gender-category">
                        <input type="radio" name="genre" value="0" disabled checked style="display:none;">
                        <input type="radio" name="genre" value="1" id="male" />
                        <label for="male">Homme</label>
                        <input type="radio" name="genre" value="2" id="female" />
                        <label for="female">Femme</label>
                    </div>
                </div>
                <div class="form-submit-btn">
                    <input type="submit" value="Envoyer" />
                </div>
                <br>
                <a style="text-decoration: none; color:rgb(237, 192, 29) " href="{{ route('login') }}">Vous avez dejà un compte?</a><br>
                <a style="text-decoration: none; color:rgb(237, 192, 29) " href="{{ route('CompteEntrep.create') }}">Créer un compte pour une entreprise ICI</a>
            </form>
        </div>
    </div>
@endsection
