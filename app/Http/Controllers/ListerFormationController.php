<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Groupe;
use Illuminate\Support\Facades\Session;

class ListerFormationController extends Controller
{
    public function create()
    {
        return view('home');
    }



    public function store(Request $request)
    {
        $idFormation = $request->input('NomFormation.0');

        $formation = Formation::find($idFormation);

        $nomFormation = $formation->NomFormation;
        $catégorie = $formation->Catégorie;

        // Récupérer les groupes de formation 
        $groupes = Groupe::with('formation')->where('id_Formation', $formation->id)->get();
        $listeGroupes = [];

        foreach ($groupes as $groupe) {
            $listeGroupes[] = [
                'id' => $groupe->id,
                'NomGrp' => $groupe->NomGrp,
                'CapaciteGrp' => $groupe->CapaciteGrp,
                'NbrEtudiants' => $groupe->NbrEtudiants,
                'TypeFormation' => $groupe->TypeFormation,
                'formation' => $groupe->formation, 
            ];
        }

        return view('liste-des-formations')->with('formation', $formation)->with('nomFormation', $nomFormation)
            ->with('catégorie', $catégorie)->with('groupes', $listeGroupes);
    }


 

    public function destroy($id)
    {
        // Retrouver la formation à supprimer par son ID
        $formation = Formation::findOrFail($id);

        // Supprimer la formation
        $formation->delete();


          // Ajouter un message flash à la session
         // Session::flash('success', 'La suppression a été effectuée avec succès.');

    
          return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
        // Retrouver la formation à mettre à jour par son ID
        $formation = Formation::findOrFail($id);

        // Mettre à jour les attributs de la formation avec les nouvelles valeurs
        $formation->NomFormation = $request->input('NomFormation');
        $formation->Catégorie = $request->input('Catégorie');
        // ...

        // Sauvegarder les modifications
        $formation->save();

       
         // Ajouter un message flash à la session
         Session::flash('success_update', 'La modification a été effectuée avec succès.');

    
         return redirect()->route('home');
        
    }
}