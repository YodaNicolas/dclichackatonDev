<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\fiche;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompteEntrepriseController extends Controller
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
            if ($portion == 'E') {
                $entreps[] = $utilisat;
            }
        }
        return response()->view('liste_Entreprise', compact('entreps'));
    }

    public function ProfilAprenants()
    {
        $utilisats = User::all();
        foreach ($utilisats as $utilisat) {
            $ident = $utilisat->identifiant;
            $portion = substr($ident, 0, 1);
            if ($portion == 'A') {
                $apn[] = $utilisat;
            }
        }
        return response()->view('VuesEntreprises.listeProfilsApprenant', compact('apn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('VuesEntreprises.formInscriptionETP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nom = $request->input("nomEntr");
        $email = $request->input("email");
        $mot_de_passe1 = $request->input("mot_de_passe1");
        $mot_de_passe2 = $request->input("mot_de_passe2");
        $pays = $request->input("pays");
        $Ville = $request->input("ville");
        $Telephone = $request->input("Telephone");
        $domaines = $request->input("domaines", []);

        $exiteMail = user::where('email', $email)->first();
        if ($exiteMail) {
            return back()->with('status', "Ce email existe dejà!");
        }

        if ($mot_de_passe1 !== $mot_de_passe2) {
            return back()->with('status', "Mot de passe non conforme!");
        }

        $C1 = $C2 = $C3 = $C4 = $C5 = $C6 = 0;
        foreach ($domaines as $domaine) {
            if ($domaine == 'Developpement Web') {
                $C1 = 1;
            } elseif ($domaine == 'Developpement Mobil') {
                $C2 = 1;
            } elseif ($domaine == 'Electronique embarqué') {
                $C3 = 1;
            } elseif ($domaine == 'IOT') {
                $C4 = 1;
            } elseif ($domaine == 'Cloud computing') {
                $C5 = 1;
            } elseif ($domaine == 'Autre') {
                $C6 = 1;
            }
        }
        $CodeDomaine = $C1 . $C2 . $C3 . $C4 . $C5 . $C6;
        $QCA = strval(rand(1000, 9999));
        $Entrep = new User();
        $DetailEntrep = new detail();
        $fiche = new fiche();
        $fiche->save();
        $DetailEntrep->fiche_id = $fiche->id;
        $DetailEntrep->save();
        $Entrep->nom = $nom;
        $Entrep->email = $email;
        $Entrep->identifiant = 'E' . $CodeDomaine . $QCA . $pays;
        $Entrep->password = Hash::make($mot_de_passe1);
        $Entrep->detail_id = $DetailEntrep->id;
        $Entrep->save();
        return redirect('connectionForm/');
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
    public function rendreprofilApprenant($id)
    {
        $apprenant = User::where('id', $id)->first();
        return view('VuesEntreprises.ProfilApn', compact('apprenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
