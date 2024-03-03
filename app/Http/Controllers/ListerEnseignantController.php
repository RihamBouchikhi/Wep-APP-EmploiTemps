<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvoirDispoEns;
use App\Models\DispoEns;
use App\Models\Disponibilité;
use App\Models\Enseignant;
use App\Models\Enseigner;
use App\Models\Formation;
use Illuminate\Support\Facades\Session;



class ListerEnseignantController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $idEnseignant = $request->input('NomEns.0'); // Récupérer l'ID de la salle depuis le formulaire

        // Utilisez l'ID pour trouver l'enseignant correspondante
        $enseignant = Enseignant::find($idEnseignant);

        $nomEnseignant = $enseignant->NomEns;
        $prenomEns = $enseignant->PrenomEns;
        $mailEns = $enseignant->MailEns;
        $numTelEns = $enseignant->NumTelEns;

        // Récupérez les formations associées à l'enseignant
        $formations = Enseigner::where('Enseignant_id', $enseignant->id)
        ->join('formations', 'enseigners.Formation_id', '=', 'formations.id')
        ->select('formations.id', 'formations.NomFormation')
        ->get();

       // foreach ($formations as $formation) {
       // $formation->selected = $enseignant->formations->contains('id', $formation->id);
       // }


        $avoirDispoEns = AvoirDispoEns::where('id_Ens', $enseignant->id)->get();
        $disponibilites = [];

        foreach ($avoirDispoEns as $avoir) {
            $dispoEns = $avoir->dispoEns->disponibilite; // Modifier cette ligne
            $disponibilites[] = [
                'Jour' => $dispoEns->Jour_Dispo,
                'Heure début 1' => $dispoEns->Disp_HeureDébut_Int1,
                'Heure fin 1' => $dispoEns->Disp_HeureFin_Int1,
                'Heure début 2' => $dispoEns->Disp_HeureDébut_Int2,
                'Heure fin 2' => $dispoEns->Disp_HeureFin_Int2,
                'Heure début 3' => $dispoEns->Disp_HeureDébut_Int3,
                'Heure fin 3' => $dispoEns->Disp_HeureFin_Int3,
            ];
        }
        

        return view('liste-des-enseignants')->with('enseignant', $enseignant)->with('nomEnseignant', $nomEnseignant)
        ->with('prenomEns', $prenomEns)->with('mailEns', $mailEns)->with('numTelEns', $numTelEns)
        ->with('formations', $formations)->with('disponibilites', $disponibilites);
        

    }


    public function destroy($id)
    {
        // Retrouver la salle à supprimer par son ID
        $enseignant = Enseignant::findOrFail($id);
        
        // Récupérer les IDs des enregistrements de disponibilité associés à la salle
        $avoirDispoEnss = AvoirDispoEns::where('id_Ens', $enseignant->id)->get();

        // Supprimer les enregistrements de disponibilité associés à la salle
        foreach ($avoirDispoEnss as $avoirDispoEns) {
            $dispoEns = $avoirDispoEns->dispoEns;
            $dispo = $dispoEns->disponibilite;
            
            
            $dispo->delete();
            $dispoEns->delete();
            
        }
        
        // Supprimer la salle
        $enseignant->delete();

         // Ajouter un message flash à la session
         Session::flash('success', 'La suppression a été effectuée avec succès.');

    
         return redirect()->route('home');
    }

    


    public function update(Request $request, $id)
    {
        // Retrouver la salle à mettre à jour par son ID
        $enseignant = Enseignant::findOrFail($id);
    
        // Mettre à jour les attributs de la salle avec les nouvelles valeurs
        $enseignant->nomEns = $request->input('nomEnseignant');
        $enseignant->prenomEns = $request->input('prenomEns');
        $enseignant->mailEns = $request->input('mailEns');
        $enseignant->numTelEns = $request->input('numTelEns');

        $enseignant->save();
    
        // Supprimer les anciennes formations de l'enseignant
        Enseigner::where('Enseignant_id', $enseignant->id)->delete();

        // Récupérer les IDs des nouvelles formations sélectionnées
        $formationIds = $request->input('NomFormation');

        // Associer les nouvelles formations sélectionnées à l'enseignant
        foreach ($formationIds as $formationId) {
            $enseigners = new Enseigner();
            $enseigners->Enseignant_id = $enseignant->id;
            $enseigners->Formation_id = $formationId;
            $enseigners->save();
        }


        // Récupérer les IDs des enregistrements de disponibilité associés à la salle
        $avoirDispoEnss = AvoirDispoEns::where('id_Ens', $enseignant->id)->get();

        // Supprimer les enregistrements de disponibilité associés à la salle
        foreach ($avoirDispoEnss as $avoirDispoEns) {
            $dispoEns = $avoirDispoEns->dispoEns;
            $dispo = $dispoEns->disponibilite;
            
        
            $dispo->delete();
            $dispoEns->delete();
            
        }
    
        // Ajouter les nouvelles disponibilités
        $jours = $request->input('Jour_Dispo');
        $heuresDebut1 = $request->input('heureDebut1');
        $heuresFin1 = $request->input('heureFin1');
        $heuresDebut2 = $request->input('heureDebut2');
        $heuresFin2 = $request->input('heureFin2');
        $heuresDebut3 = $request->input('heureDebut3');
        $heuresFin3 = $request->input('heureFin3');
        
    
        // Vérification du nombre de lignes ajoutées
        $numLignes = count($jours);
    
        for ($i = 0; $i < $numLignes; $i++) {
            $dispo = new Disponibilité;
            $dispo->Jour_Dispo = $jours[$i];
            $dispo->Disp_HeureDébut_Int1 = $heuresDebut1[$i];
            $dispo->Disp_HeureFin_Int1 = $heuresFin1[$i];
            $dispo->Disp_HeureDébut_Int2 = $heuresDebut2[$i];
            $dispo->Disp_HeureFin_Int2 = $heuresFin2[$i];
            $dispo->Disp_HeureDébut_Int3 = $heuresDebut3[$i];
            $dispo->Disp_HeureFin_Int3 = $heuresFin3[$i];
            $dispo->save();
    
            // Héritage
            $dispoEns = new DispoEns;
            $dispoEns->id_DispoEnseignant = $dispo->id;
            $dispoEns->save();
            //fin de l'héritage

            // Realtion Avoir Dispo Salle
            $avoirDispoEns = new AvoirDispoEns;

            $avoirDispoEns->id_Ens = $enseignant->id;  //cle etrangere de Salle
            $avoirDispoEns->id_DispoEns = $dispoEns->id;  //cle etrangere de DispoSalle

            $avoirDispoEns->save();
        }
    
         // Ajouter un message flash à la session
         Session::flash('success_update', 'La modification a été effectuée avec succès.');

    
         return redirect()->route('home');
    }
    

}