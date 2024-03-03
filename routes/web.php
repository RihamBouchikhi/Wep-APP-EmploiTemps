<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormsAddController;
use App\Http\Controllers\EmploiDuTempsController;
use App\Http\Controllers\ListerFormationController;
use App\Http\Controllers\ListerSalleController;
use App\Http\Controllers\ListerEnseignantController;
use App\Http\Controllers\ListerEtudiantController;
use App\Http\Controllers\ListerGroupeController;
use App\Models\Administrateur;
use App\Models\AvoirDispoEns;
use App\Models\AvoirDispoEtd;
use App\Models\AvoirDispoSalle;
use App\Models\Définir;
use App\Models\Déroulement;
use App\Models\Déterminer;
use App\Models\DispoEns;
use App\Models\DispoEt;
use App\Models\DispoGroupe;
use App\Models\Disponibilité;
use App\Models\DisponibilitéCommune;
use App\Models\DispoSalle;
use App\Models\Enseignant;
use App\Models\Enseigner;
use App\Models\Etablir;
use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Groupe;
use App\Models\Inscription;
use App\Models\Salle;
use App\Models\Se_déroule;
use App\Models\Séance;
use App\Models\User; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StaticController::class, 'welcom'])->name('wecome');
Route::get('/home',[StaticController::class, 'home'])->name('home')->middleware('auth') ;
Route::get('/adds', [StaticController::class, 'adds']);
Route::get('/ListeGroupe', [StaticController::class, 'ListeGroupe'])->name('ListeGroupe');




Route::post('/emploi-du-temps/pdf', [EmploiDuTempsController::class, 'generatePDF'])->name('dispo-groupe.generatePDF');
//dISPO gROUPE

// Afficher la page emploi-du-temps

Route::get('/emploi-du-temps', function () {
    return view('emploi-du-temps');
})->name('emploi-du-temps');

// calculer la dispoGroupe
Route::post('/emploi-du-temps/calculer', [EmploiDuTempsController::class, 'calculerDispoGroupe'])->name('dispo-groupe.calculer');

Route::post('/emploi-du-temps/Seance', [EmploiDuTempsController::class, 'calculerSeance'])->name('dispo-groupe.calculerSeance');



//User Profile 

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');
Route::put('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('user.profile.update');
Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('user.profile.destroy');


//Formulaires :
// Route pour afficher la vue contenant tous les formulaires
Route::get('/forms', [FormsAddController::class, 'create'])->name('forms.create');

// Route pour traiter la soumission des formulaires
Route::post('/forms', [FormsAddController::class, 'store'])->name('forms.store');

//selection dynamique depuis la base de données 

Route::get('/formations', function () {
    $formations = Formation::all();
    return response()->json(['formations' => $formations]);
});

Route::get('/etudiants', function () {
    $etudiants = Etudiant::all(); // Récupère tous les étudiants de la table 'etudiants'
    return response()->json(['etudiants' => $etudiants]);
});

Route::get('/enseignats', function () {
    $enseignats = Enseignant::all(); // Récupère tous les enseignats de la table 'etudiants'
    return response()->json(['enseignats' => $enseignats]);
});


Route::get('/enseignants/{formationId}', function ($formationId) {
    $enseignants = Enseigner::where('Formation_id', $formationId)->with('enseignant')->get();
    $enseignantsFormatted = $enseignants->map(function ($enseigner) {
        return [
            'id' => $enseigner->enseignant->id,
            'NomEns' => $enseigner->enseignant->NomEns,
            'PrenomEns' => $enseigner->enseignant->PrenomEns,
        ];
    });
    return response()->json(['enseignants' => $enseignantsFormatted]);
});



Route::get('/groupes/{formationId}', function ($formationId) {
    $groupes = Groupe::where('id_Formation', $formationId)->get(); // Récupère les groupes correspondant à l'ID de formation
    return response()->json(['groupes' => $groupes]);
});

Route::get('/salles', function () {
    $salles = Salle::all();
    return response()->json(['salles' => $salles]);
});



//store function Formation

Route::get('/listerFormation', [ListerFormationController::class, 'create'])->name('lister-formation.create');
Route::post('/listerFormation', [ListerFormationController::class, 'store'])->name('lister-formation.store');

//MODIFIER. supprimer.. dans liste des formations 
Route::delete('/formations/{id}', [ListerFormationController::class, 'destroy'])->name('formations.destroy');
Route::put('/formations/{id}', [ListerFormationController::class, 'update'])->name('formations.update');

//store function Salle

Route::get('/ListerSalle', [ListerSalleController::class, 'create'])->name('lister-salle.create');
Route::post('/ListerSalle', [ListerSalleController::class, 'store'])->name('lister-salle.store');

//MODIFIER. supprimer.. dans liste des salles  
Route::delete('/salles/{id}', [ListerSalleController::class, 'destroy'])->name('salles.destroy');
Route::put('/salles/{id}', [ListerSalleController::class, 'update'])->name('salles.update');

//store function Enseignant

Route::get('/ListerEnseignant', [ListerEnseignantController::class, 'create'])->name('lister-enseignant.create');
Route::post('/ListerEnseignant', [ListerEnseignantController::class, 'store'])->name('lister-enseignant.store');

//MODIFIER. supprimer.. dans liste des Enseignant 

Route::delete('/enseignants/{id}', [ListerEnseignantController::class, 'destroy'])->name('enseignants.destroy');
Route::put('/enseignants/{id}', [ListerEnseignantController::class, 'update'])->name('enseignants.update');

//LISTER Etudiant

Route::get('/ListerEtudiant', [ListerEtudiantController::class, 'create'])->name('lister-etudiant.create');
Route::post('/ListerEtudiant', [ListerEtudiantController::class, 'store'])->name('lister-etudiant.store');
Route::post('/generate-pdf', [ListerEtudiantController::class, 'generatePDF'])->name('lister-etudiant.generatePDF');

//MODIFIER. supprimer.. dans liste des Etudiants

Route::delete('/etudiants/{id}', [ListerEtudiantController::class, 'destroy'])->name('etudiants.destroy');
Route::put('/etudiants/{id}', [ListerEtudiantController::class, 'update'])->name('etudiants.update'); 

//MODIFIER. supprimer.. inscription 

Route::delete('/inscriptions/{id}', [ListerEtudiantController::class, 'destroyInscription'])->name('etudiants.destroyInscription');
Route::put('/inscriptions/{id}', [ListerEtudiantController::class, 'updateInscription'])->name('etudiants.updateInscription');


//LISTER Groupe

Route::get('/ListerGroupe', [ListerGroupeController::class, 'create'])->name('lister-groupe.create');
Route::post('/ListerGroupe', [ListerGroupeController::class, 'store'])->name('lister-groupe.store');


//MODIFIER. supprimer.. dans liste des Groupe 
Route::delete('/groupes/{id}', [ListerGroupeController::class, 'destroy'])->name('groupes.destroy');
Route::put('/groupes/{id}', [ListerGroupeController::class, 'update'])->name('groupes.update');
Route::delete('/groupes/{id}/etudiants/{idGroupe}', [ListerGroupeController::class, 'destroyEtudiantGrp'])->name('groupes.destroyEtudiantGrp');