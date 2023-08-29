<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\fiche;
use App\Models\detail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $utilisateur = new User();
        $utilisateur->nom = 'Mihin';
        $utilisateur->prenom = 'Hugues Aimé';
        $utilisateur->email = 'mihin@gmail.com';
        $utilisateur->password =  Hash::make('1234');
        $utilisateur->identifiant = 'F112301226';
        $utilisateur->detail_id = 1;
        $utilisateur->save();


        for ($i = 1; $i <= 20; $i++) {
            $ok = detail::where('cle_inscription', 'TER-MIS-TOC-LE')->first();
            $formateur = User::where('detail_id', $ok->id)->first();
            $chaine = $formateur->identifiant;
            $CgenreEtModulFormateur = substr($chaine, 1, 2);
            $CodePays = substr($chaine, 7, 3);
            $QuatreChiffreAleatoire = strval(rand(1000, 9999));

            $apn = new User();
            if ($i == 3) {
                $apn->identifiant = 'R12421202';
                $apn->email = 'katie@gmail.com';
                $apn->nom = 'KATIE';
                $apn->prenom = 'Jean-Baptiste';
            } else {
                $apn->identifiant = 'A1' . $CgenreEtModulFormateur . $QuatreChiffreAleatoire . $CodePays;
                $apn->nom = 'nom apprenantN' . $i;
                $apn->prenom = 'prenom apprenantN' . $i;
                $apn->email = 'apn' . $i . '@gmail.com';
            }
            $apn->password = Hash::make('1234');
            $fiche = new fiche();
            $fiche->save();
            $DetailApn = new detail();
            $DetailApn->fiche_id = $fiche->id;
            $DetailApn->telephone = $i . '000000';
            $DetailApn->detail_domaine = $formateur->identifiant;
            $DetailApn->description = 0;
            $DetailApn->save();
            $apn->detail_id = $DetailApn->id;
            $apn->save();
        }

        $QCA = strval(rand(1000, 9999));
        $Entrep = new User();
        $DetailEntrep = new detail();
        $fiche = new fiche();
        $fiche->save();
        $DetailEntrep->fiche_id = $fiche->id;
        $DetailEntrep->save();
        $Entrep->nom = 'CoderPro';
        $Entrep->email = 'coderpro@gmail.com';
        $Entrep->identifiant = 'E110000' . $QCA . '226';
        $Entrep->password = Hash::make('1234');
        $Entrep->detail_id = $DetailEntrep->id;
        $Entrep->save();
    }
}
