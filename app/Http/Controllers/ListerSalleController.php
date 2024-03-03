<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvoirDispoSalle;
use App\Models\Disponibilité;
use App\Models\DispoSalle;
use App\Models\Salle;
use Illuminate\Support\Facades\Session;


class ListerSalleController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $idSalle = $request->input('NomSalle.0'); // Récupérer l'ID de la salle depuis le formulaire

        // Utilisez l'ID pour trouver la salle correspondante
        $salle = Salle::find($idSalle);

        $nomSalle = $salle->NomSalle;
        $capaciteSalle = $salle->CapaciteSalle;

        $avoirDispoSalle = AvoirDispoSalle::where('id_Salle', $salle->id)->get();
        $disponibilites = [];

        foreach ($avoirDispoSalle as $avoir) {
            $dispoSalle = $avoir->dispoSalle->disponibilite; // Modifier cette ligne
            $disponibilites[] = [
                'Jour' => $dispoSalle->Jour_Dispo,
                'Heure début 1' => $dispoSalle->Disp_HeureDébut_Int1,
                'Heure fin 1' => $dispoSalle->Disp_HeureFin_Int1,
                'Heure début 2' => $dispoSalle->Disp_HeureDébut_Int2,
                'Heure fin 2' => $dispoSalle->Disp_HeureFin_Int2,
                'Heure début 3' => $dispoSalle->Disp_HeureDébut_Int3,
                'Heure fin 3' => $dispoSalle->Disp_HeureFin_Int3,
            ];
        }
        

        return view('liste-des-salles')->with('salle', $salle)->with('nomSalle', $nomSalle)->with('capaciteSalle', $capaciteSalle)->with('disponibilites', $disponibilites);
        

    }


    public function destroy($id)
    {
        // Retrouver la salle à supprimer par son ID
        $salle = Salle::findOrFail($id);
        
        // Récupérer les IDs des enregistrements de disponibilité associés à la salle
        $avoirDispoSalles = AvoirDispoSalle::where('id_Salle', $salle->id)->get();

        // Supprimer les enregistrements de disponibilité associés à la salle
        foreach ($avoirDispoSalles as $avoirDispoSalle) {
            $dispoSalle = $avoirDispoSalle->dispoSalle;
            $dispo = $dispoSalle->disponibilite;
            
        
            $dispo->delete();
            $dispoSalle->delete();
            
        }
        
        // Supprimer la salle
        $salle->delete();

         // Ajouter un message flash à la session
         Session::flash('success', 'La supression a été effectuée avec succès.');

    
         return redirect()->route('home');
    }

    


    public function update(Request $request, $id)
    {
        // Retrouver la salle à mettre à jour par son ID
        $salle = Salle::findOrFail($id);
    
        // Mettre à jour les attributs de la salle avec les nouvelles valeurs
        $salle->NomSalle = $request->input('NomSalle');
        $salle->CapaciteSalle = $request->input('capaciteSalle');
        $salle->save();
    
        // Supprimer les anciennes disponibilités de la salle
       // AvoirDispoSalle::where('id_Salle', $salle->id)->delete();


        // Récupérer les IDs des enregistrements de disponibilité associés à la salle
        $avoirDispoSalles = AvoirDispoSalle::where('id_Salle', $salle->id)->get();

        // Supprimer les enregistrements de disponibilité associés à la salle
        foreach ($avoirDispoSalles as $avoirDispoSalle) {
            $dispoSalle = $avoirDispoSalle->dispoSalle;
            $dispo = $dispoSalle->disponibilite;
            
        
            $dispo->delete();
            $dispoSalle->delete();
            
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
            $dispoSalle = new DispoSalle;
            $dispoSalle->id_DispoSalle = $dispo->id;
            $dispoSalle->save();
    
            // Relation Avoir Dispo Salle
            $avoirDispoSalle = new AvoirDispoSalle;
            $avoirDispoSalle->id_Salle = $salle->id;  //clé étrangère de Salle
            $avoirDispoSalle->id_DispoS = $dispoSalle->id;  //clé étrangère de DispoSalle
            $avoirDispoSalle->save();
        }
    
         // Ajouter un message flash à la session
         Session::flash('success_update', 'La modification a été effectuée avec succès.');

    
         return redirect()->route('home');
    }
    

}