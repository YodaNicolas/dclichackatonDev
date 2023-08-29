<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\fiche;
use App\Models\detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CompteController extends Controller
{
    function DecodeDomaine($ChifDomaine)
    {
        if ($ChifDomaine == 1) {
            return 'Developpement Web';
        } elseif ($ChifDomaine == 2) {
            return 'IOT';
        }
    }

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
            $portionGenre = substr($ident, 1, 1);
            if ($portion == 'A') {
                $apnts[] = $utilisat;
            }
            if ($portionGenre == 1) {
                $apntsHommes[] = $utilisat;
            } else {
                $apntsFilles[] = $utilisat;
            }
        }
        return response()->view('VuesEntreprises.listeApprenant', compact('apnts', 'apntsHommes', 'apntsFilles'));
    }

    public function mesapprenants($identifFormateur)
    {
        $utilisats = User::all();
        foreach ($utilisats as $utilisat) {
            if ($utilisat->detail->detail_domaine == $identifFormateur) {
                $ident = $utilisat->identifiant;
                $portion = substr($ident, 0, 1);
                $portionGenre = substr($ident, 1, 1);
                if ($portion == 'A') {
                    $apnts[] = $utilisat;
                }
                if ($portionGenre == 1) {
                    $apntsHommes[] = $utilisat;
                } else {
                    $apntsFilles[] = $utilisat;
                }
            }
        }
        return response()->view('VuesEntreprises.listeApprenant', compact('apnts', 'apntsHommes', 'apntsFilles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('VuesApprenants.formInscriptionAPN');
    }
    public function retour()
    {
        return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input("nom");
        $prenom = $request->input("prenom");
        $date_naissance = $request->input("date_naissance");
        $telephone = $request->input('telephone');
        $email = $request->input('email');
        $mot_de_passe1 = $request->input('mot_de_passe1');
        $mot_de_passe2 = $request->input('mot_de_passe2');
        $cle_inscription = $request->input('cle_inscription');
        $genre = $request->input('genre');


        if ($genre == 0) {
            return back()->with('status', "Selectionnez le genre!");
        }
        // LES VERIFICATIONS AVANT INSCRIPTION
        $exiteMail = user::where('email', $email)->first();
        if ($exiteMail) {
            return back()->with('status', "Ce email existe dejà!");
        }

        if ($mot_de_passe1 !== $mot_de_passe2) {
            return back()->with('status', "Mot de passe non conforme!");
        }

        if ($cle_inscription == 0 || $cle_inscription == 1) {
            return back()->with('status', "La clé d'inscription est invalide");
        }
        $ok = detail::where('cle_inscription', $cle_inscription)->first();
        if (!$ok) {
            return back()->with('status', "La clé d'inscription est invalide");
        } else {
            $formateur = User::where('detail_id', $ok->id)->first();
            $chaine = $formateur->identifiant;
            $CgenreEtModulFormateur = substr($chaine, 1, 2);
            $CodePays = substr($chaine, 7, 3);
            $QuatreChiffreAleatoire = strval(rand(1000, 9999));

            $apn = new User();
            $apn->identifiant = 'A' . $genre . $CgenreEtModulFormateur . $QuatreChiffreAleatoire . $CodePays;
            $apn->nom = $nom;
            $apn->prenom = $prenom;
            $apn->password = Hash::make($mot_de_passe1);
            $apn->email = $email;
            $apn->date_de_naissance = $date_naissance;

            $fiche = new fiche();
            $fiche->save();
            $DetailApn = new detail();
            $DetailApn->fiche_id = $fiche->id;
            $DetailApn->telephone = $telephone;
            $DetailApn->detail_domaine = $formateur->identifiant;
            $DetailApn->description = 0;
            $DetailApn->save();
            $apn->detail_id = $DetailApn->id;
            $succes = $apn->save();
            if ($succes) {
                return redirect('connectionForm')->with('succes', "Inscription réussi attendez la validation avant de vous connecter. Bon courage!");
            } else {
                return back()->with('status', " Oupss! quelque chose s'est mal passée réesayez avez des information correct.");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apnt = User::where('id', $id)->first();
        $compet = $apnt->detail->fiche->code_competence;
        return response()->view('VuesApprenants.niveauApnnt', compact('compet'));
    }
    public function VuNiveau($id)
    {
        $apnt = User::where('id', $id)->first();
        $compet = $apnt->detail->fiche->code_competence;
        return response()->view('VuesApprenants.niveauApnnt', compact('compet'));
    }

    public function remplissage(Request $request)
    {

        $autreTechno = $request->input('autreTechno');
        $autreCompetence = $request->input('autreCompetence');

        $html = $request->input('html');

        return response('ok');
    }

    public function EditPerformance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pdf' => 'required|mimes:pdf|max:2048', // Limite de 2 Mo pour les fichiers PDF
            'video' => 'required|mimes:mp4,mov,avi|max:5120', // Limite de 5 Mo pour les fichiers vidéo
        ]);
        $videoName = null;
        $pdfName = null;
        if ($validator->fails()) {
            // return redirect()->back()->withErrors($validator)->withInput();
            echo 'erreur';
        }
        // ... Suite du code pour le téléversement des fichiers
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads'), $pdfName);
        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $video->move(public_path('uploads'), $videoName);
        }
        $id = $request->input('idUt');
        $html = $request->input('html');
        $css = $request->input('css');
        $javascript = $request->input('javascript');
        $php = $request->input('php');
        $laravel = $request->input('laravel');
        $python = $request->input('python');
        $apnt = User::where('id', $id)->first();
        $fiche = fiche::where('id', $apnt->detail->fiche_id)->first();
        $fiche->code_competence = $css .  $html . $javascript  . $laravel . $php . $python;

        if ($pdfName !== null) {
            $fiche->cv = $pdfName;
        }
        if ($videoName !== null) {
            $fiche->demo1 = $videoName;
        }
        $fiche->update();
        return redirect('niveau/' . $id);
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
