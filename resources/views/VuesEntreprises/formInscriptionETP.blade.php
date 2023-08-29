     @extends('Layouts.base')
     @section('content')
         <div class="bodyRegisterEntrep">
             <div class="container ">
                 <h1 class="form-title">Enregistrement entreprise</h1>
                 <h3 style="color: rgba(255, 4, 0, 0.997); text-align:center; widh:100%">
                     @if (Session::has('status'))
                         {{ Session::get('status') }}
                     @endif
                 </h3>
                 <form method="POST" action="{{ route('CompteEntrep.store') }}">
                     @csrf
                     <div class="main-user-info">

                         <div class="user-input-box">
                             <label for="fullName">Nom</label>
                             <input type="text" id="fullName" name="nomEntr" placeholder="Entrer votre nom" required />
                         </div>
                         <div class="user-input-box">
                             <label for="confirmPassword">Email</label>
                             <input type="email" id="email" name="email" placeholder="Email " required />
                         </div>
                         <div class="user-input-box">
                             <label for="password">Mot de passe</label>
                             <input type="password" id="password" name="mot_de_passe1"
                                 placeholder="Entre votre mot de passe" required />
                         </div>
                         <div class="user-input-box">
                             <label for="confirmPassword">Confirmer le mot de passe</label>
                             <input type="password" id="confirmPassword" name="mot_de_passe2"
                                 placeholder="Confirmez votre mot de passe" required />
                         </div>

                         <div class="user-input-box">
                             <label for="confirmPassword">Clé d'inscription</label>
                             <input type="password" id="confirmPassword" name="cle_inscription"
                                 placeholder="Entre la clé fourni par D-CLIC" required />
                         </div>
                         <div class="user-input-box">
                             <label for="validationCustom02" class="form-label">Pays</label>
                             <select class="form-select col-md-3" name="pays">
                                 <option select disabled selected>selectionnez le pays</option>
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
                     </div>


                     <label for="domaines" style="color: rgb(255, 255, 255); font-size:18px">Cochez votre ou vos
                         domaines</label>

                     <div class="cochDomaine">
                         <div class="divCoch">
                             <input class="form-check-input" type="checkbox" name="domaines[]" value="Developpement Web"
                                 id="flexCheckChecked">
                             <label class="form-check-label" for="flexCheckChecked"> Developpement Web </label>
                         </div>
                         <div class="divCoch">
                             <input class="form-check-input" type="checkbox" name="domaines[]" value="Developpement Mobil"
                                 id="flexCheckChecked">
                             <label class="form-check-label" for="flexCheckChecked"> Developpement Mobil </label>
                         </div>
                         <div class="divCoch">
                             <input class="form-check-input" type="checkbox" name="domaines[]" value="Electronique embarqué"
                                 id="flexCheckChecked">
                             <label class="form-check-label" for="flexCheckChecked"> Electronique embarqué </label>
                         </div>
                         <div class="divCoch">
                             <input class="form-check-input" type="checkbox" name="domaines[]" value="IOT"
                                 id="flexCheckChecked">
                             <label class="form-check-label" for="flexCheckChecked"> IOT </label>
                         </div>
                         <div class="divCoch">
                             <input class="form-check-input" type="checkbox" name="domaines[]" value="Cloud computing"
                                 id="flexCheckChecked">
                             <label class="form-check-label" for="flexCheckChecked"> Cloud computing </label>
                         </div>
                         <div class="divCoch">
                             <input class="form-check-input" type="checkbox" name="domaines[]" value="Autre"
                                 id="flexCheckChecked">
                             <label class="form-check-label" for="flexCheckChecked"> Autre </label>
                         </div>
                     </div>

                     <div class="form-submit-btn">
                         <input type="submit" value="Enregistrer" />
                     </div>
                     <br>
                     <a href="{{ route('login') }}">Vous avez dejà un compte?</a>
                 </form>
             </div>
         @endsection
