<?php

namespace Database\Seeders;

use App\Models\detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail = new detail();
        $detail->telephone = 01020304;
        $detail->detail_domaine = "devwebweb";
        $detail->cle_inscription = "TER-MIS-TOC-LE";
        $detail->description = "devweb";
        $detail->fiche_id = 1;
        $detail->save();
    }
}
