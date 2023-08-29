@extends('Layouts.base')
@section('content')
    <section>
        <div class="divAjuste">
            <h4 style="color: rgba(0, 0, 0, 0.997); background-color:rgba(0, 0, 0, 0.55)); text-align:center; width:97%">
                @if (Session::has('succes'))
                    {{ Session::get('succes') }}
                @endif
            </h4>
            <h4 style="color: rgba(255, 4, 0, 0.997); text-align:center; widh:90%"> 
                @if (Session::has('status'))
                    {{ Session::get('status') }}
                @endif
            </h4>
            <div class="form-box">
                <div class="form-value">

                    <form method="POST" action="{{ route('TraitementConnection') }}">
                        @csrf
                        <h2>CONNECTION</h2>

                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input name="email" type="email" required>
                            <label>Email</label>
                        </div>

                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input name="password" type="password" required>
                            <label>Mot de passe</label>
                        </div>

                        <div class="forget">
                            {{-- <label><input type="checkbox">Se souvenir de moi?</label> --}}
                            <a href="#">Mot de passe oublié ? </a>
                        </div>
                        <button type="submit" class="btn btn-primary btncnct">SE CONNECTER</button>
                        <br><br>
                        <a style="text-decoration: none; color:rgb(0, 0, 0) " href="{{ route('Compte.create') }}">Creer un compte ICI</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
  