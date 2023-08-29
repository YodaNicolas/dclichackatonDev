<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\CompteFormateurController;
use App\Http\Controllers\CompteEntrepriseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welco/', function () {
    return view('welcome');
});
Route::get('welgco/', function () {
    return view('VuesApprenants.ProfilApn');
});

Route::get('forum', function () {
    return view('forum');
})->name('forumP');

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('table', function () {
    return view('VuesFormateurs.FormAjoutFormat');
});


Route::resource('Compte', CompteController::class);

Route::get('mesapnt/{identformat}', [CompteController::class, 'mesapprenants']);

Route::get('retour', [CompteController::class, 'retour'])->name('retour');

Route::get('niveau/{idApn}', [CompteController::class, 'VuNiveau']);

Route::get('modifniveau', function () { return view('VuesApprenants.EditProfilApn'); })->name('modifniveau');

Route::post('EditPerformance/', [CompteController::class, 'EditPerformance']);

Route::post('remplissage', [CompteController::class, 'remplissage'])->name('remplissage');

Route::resource('CompteEntrep', CompteEntrepriseController::class);

Route::get('vuprofil/{idApn}', [CompteEntrepriseController::class, 'rendreprofilApprenant']);

Route::get('profiliste', [CompteEntrepriseController::class, 'ProfilAprenants' ]);

Route::resource('CompteFormat', CompteFormateurController::class);

Route::get('listeAtente/{identformat}', [CompteFormateurController::class,'InscriptionListe']);

Route::get('validation/{idApn}', [CompteFormateurController::class,'ValideIscript']);

Route::post('TraitementConnection', [LoginController::class, 'TraitementConnection'])->name('TraitementConnection');

Route::get('login/', [LoginController::class, 'Connection'])->name('login');

Route::get('connectionForm', [LoginController::class, 'Connection'])->name('Connection');

Route::get('logout', [LoginController::class, 'logout'])->name('deconnection');






