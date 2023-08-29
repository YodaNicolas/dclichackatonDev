<?php

namespace Database\Seeders;

use App\Models\fiche;
use Illuminate\Database\Seeder;

class FicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fiche = new fiche(); 
        $fiche->save();
    }
}
