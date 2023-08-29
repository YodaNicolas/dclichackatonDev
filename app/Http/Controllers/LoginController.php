<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Connection()
    {
        return view("PageConnection");
    }


    public function TraitementConnection(Request $request)
    {
        $mailvef = $request->input("email");
        $entite = User::where('email', $mailvef)->first();
        if( !$entite ){
            return back()->with('status', "Email et/ou mot de passe incorrect");
        };
        $identifEntite = $entite->identifiant;
        $titre = $identifEntite[0];
        if ($titre == 'A' && $entite->detail->description == 0) {
            return back()->with('status', "Inscription non validé contactez votre formateur pour valider!");
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Connexion réussie 
         
            if ($titre == 'A') {
                return response()->view('VuesApprenants.ProfilApn');
            }elseif($titre == 'R'){
                return redirect()->route('CompteFormat.index');
                // return response()->view('VuesSuperAdmin.liste_formateurs');
            } elseif ($titre == 'F') {
                $utilisats = User::all();
                $atentes = [];
                foreach ($utilisats as $utilisat) {
                    $ident = $utilisat->identifiant;
                    $portion = substr($ident, 0, 1);
                    if ($portion == 'A' && $utilisat->detail->detail_domaine == $identifEntite && $utilisat->detail->description != 0) {
                        $atentes[] = $utilisat;
                    }
                }
                return response()->view('VuesFormateurs.liste_apprenats', compact('atentes'));
            } elseif ($titre == 'E') {
                $utilisats = User::all();
                $apnts = [];
                foreach ($utilisats as $utilisat) {
                    $ident = $utilisat->identifiant;
                    $portion = substr($ident, 0, 1);
                    if ($portion == 'A' && $utilisat->detail->description !== 0) {
                        $apnts[] = $utilisat;
                    }
                }
                return view('VuesEntreprises.listeProfilsApprenant', compact('apnts'));
            }
        } else {
            return back()->with('status', "email et/ou mot de passe incorrect !");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('succes', "Déconnecté avec succès.");
    }
}


    // $CgenreEtModulFormateur = substr($identifEntite, 1, 2);
    // $CodePays = substr($chaine, 10, 3);