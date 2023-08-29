<?php

namespace App\Http\Controllers;

use App\Models\fiche;
use App\Models\User;
use App\Models\detail;
use Illuminate\Http\Request;

class CompteFormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisats = User::all();
        foreach ($utilisats as $utilisat) {
            $ident = $utilisat->identifiant;
            $portion = substr($ident, 0, 1);
            if ($portion == 'F') {
                $formateurs[] = $utilisat;
            }
        }
        return response()->view('VuesSuperAdmin.liste_formateurs', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('VuesSuperAdmin.FormAjoutFormat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input("nomFormat");
        $prenom = $request->input("prenom");
        $email = $request->input("email");
        $genre = $request->input("genre");
        $pays = $request->input("pays");
        $cohorte = $request->input("nomCohorte");
        $telephone = $request->input("telephone");
        $domaine = $request->input("domaine");
        $SCA = strval(rand(1000, 9999));

        $Format = new User();
        $fiche = new fiche();
        $fiche->lien1 = $cohorte;
        $fiche->save();
        $DetailFormat = new detail();
        $DetailFormat->fiche_id = $fiche->id;
        $DetailFormat->telephone = $telephone;
        $DetailFormat->save();
        $Format->nom = $nom;
        $Format->prenom = $prenom;
        $Format->email = $email;
        $Format->identifiant = 'F' . $genre . $domaine . $SCA . $pays;
        $Format->password = 1234;
        $Format->detail_id = $DetailFormat->id;
        $Format->save();
        return redirect('CompteFormat/')->with('status', 'Nouveau manager ajouté son mot de passe par defaut est: 12345678');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $format = user::where('id', $id);
        return response()->view('VuesSuperAdmin.formEdit', compact('format'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function InscriptionListe($identFormat)
    {
        $utilisats = User::all();
        $atentes = [];
        foreach ($utilisats as $utilisat) {
            $ident = $utilisat->identifiant;
            $portion = substr($ident, 0, 1);
            if ($portion == 'A' && $utilisat->detail->detail_domaine == $identFormat && $utilisat->detail->description == 0) {
                $atentes[] = $utilisat;
            }
        }
        return view('VuesFormateurs.listeIsncription', compact('atentes'));
    }
    public function ValideIscript($idApn)
    {
        $utilisat = User::where('id', $idApn)->first();
        $detailUt = detail::where('id', $utilisat->detail_id)->first();
        $detailUt->description = 1;
        $tes = $detailUt->update();
        if ($tes) {
            return back()->with('succes', "Vous venez de valider l'inscription de " . $utilisat->nom . " " . $utilisat->prenom);
        } else {
            return back()->with('status', "Oups!! quelque chose s'est mal passé la validation à échouée.");
        }
    }
}
