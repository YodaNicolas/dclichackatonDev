@extends('Layouts.base')
@section('content')
    <h1>Entrez les informations pour ajouter un nouveau formateur</h1>

    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('Compte.update' }}">
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nom</label>
            <input type="text" name="nomFormat" value="{{ $format->nom }}" class="form-control" id="validationCustom01" required
                placeholder="Entrez son nom">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Prenoms</label>
            <input type="text" name="prenom" value="{{ $format->prenom }}" class="form-control" id="validationCustom02" required
                placeholder="Entrez tout ses prénoms sans abreviation!">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" name="email" value="{{ $format->email }}" class="form-control" id="validationCustom02" required
                placeholder="Entrez son email">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">Genre</label>
            <select class="form-select col-md-3" name="genre">
                <option select disabled selected>selectionnez le genre</option>
                <option value="1">Homme</option>
                <option value="2">Femme</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Telephone</label>
            <input type="text" name="telephone" value="{{ $format->detail->telephone }}" class="form-control" id="validationCustom05" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Formation de base</label>
            <input type="text" name="formation_base" class="form-control" id="validationCustom03" required
                placeholder="Ex: Licence en Lettre moderne">
         
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Cohorte dirigée</label>
            <input type="text" name="nomCohorte" class="form-control" id="validationCustom05" required
                placeholder="Entrez le nom de la cohorte qu'il tiendra">
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Module </label>
            <select class="form-select col-md-3" name="domaine">
                <option select disabled selected>selectionnez le domaine de formation</option>
                <option value="1">Developpement Web</option>
                <option value="2">Developpement Mobil</option>
                <option value="3">Electronique embarqué Web</option>
                <option value="4">IOT</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">Pays</label>
            <select class="form-select col-md-3" name="pays">
                <option select disabled selected>selectionnez le Pays</option>
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



        <div class="col-12">
            <button class="btn btn-primary" type="submit">Envoyer</button>
        </div>
    </form>
@endsection
