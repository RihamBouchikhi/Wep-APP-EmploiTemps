<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DispoGroupe;
use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Groupe;
use App\Models\Inscription;
use Illuminate\Support\Facades\Session;





class ListerGroupeController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $idGroupe = $request->input('NomGrp.0');
    
        $groupe = Groupe::find($idGroupe);
    
        $nomGrp = $groupe->NomGrp;
        $capaciteGrp = $groupe->CapaciteGrp;
        $nbrEtudiants = $groupe->NbrEtudiants;
        $typeFormation = $groupe->TypeFormation;
        $idFormation = $groupe->id_Formation;

    
        $formation = Formation::findOrFail($idFormation);
    
        $nomFormation = $formation->NomFormation;
    
        // Récupérer les étudiants du groupe via la table Inscription
        $inscriptions = Inscription::where('id_Groupe', $idGroupe)->get();
        $etudiants = [];
    
        foreach ($inscriptions as $inscription) {
            $etudiant = Etudiant::find($inscription->id_Etudiant);
            if ($etudiant) {
                $etudiants[] = [
                    'etudiant' => $etudiant,
                    'nomEtd' => $etudiant->NomEtd,
                    'prenomEtd' => $etudiant->PrenomEtd,
                    'mailEtd' => $etudiant->MailEtd,
                    'numTelEtd' => $etudiant->NumTelEtd,
                ];
            }
        }
        
    
        return view('liste-des-groupes')->with('groupe', $groupe)->with('nomGrp', $nomGrp)
        ->with('capaciteGrp', $capaciteGrp)->with('nbrEtudiants', $nbrEtudiants)->with('nomFormation', $nomFormation)
        ->with('typeFormation', $typeFormation)->with('etudiants', $etudiants)
        ->with('formation', $formation);
    }
    

    public function destroy($id)
    {
        // Retrouver la salle à supprimer par son ID
        $groupe = Groupe::findOrFail($id);
        
        
        // Supprimer la salle
        $groupe->delete();

        Session::flash('success', 'La supression a été effectuée avec succès.');

    
         return redirect()->route('home');
    }


    public function update(Request $request, $id)
    {
        // Retrouver le groupe à mettre à jour par son ID
        $groupe = Groupe::findOrFail($id);
    
        // Récupérez l'ID de la formation choisie
        $formationId = $request->input('NomFormation')[0]; // Récupérez le premier ID du tableau des Formations
    
        // Mettre à jour les attributs du groupe 
        $groupe->NomGrp = $request->input('nomGrp');
        $groupe->CapaciteGrp = $request->input('capaciteGrp');
        $groupe->TypeFormation = $request->input('typeFormation');
        $groupe->NbrEtudiants = $request->input('nbrEtudiants');
        $groupe->id_Formation = $formationId;
    
        // Enregistrer les modifications dans la base de données
        $groupe->save();
    
        Session::flash('success_update', 'La modification a été effectuée avec succès.');

    
        return redirect()->route('home');
    }


    public function destroyEtudiantGrp($id, $idGroupe)
    {
        $inscription = Inscription::where('id_Etudiant', $id)
        ->where('id_Groupe', $idGroupe)
        ->first();
    
        $inscription->delete();
        
    
        Session::flash('success', 'La supression a été effectuée avec succès.');

    
         return redirect()->route('home');
    }
    
  

}