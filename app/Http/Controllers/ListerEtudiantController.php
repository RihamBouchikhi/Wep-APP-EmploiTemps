<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\AvoirDispoEtd;
use App\Models\DispoEt;
use App\Models\Disponibilité;
use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Inscription;
use App\Models\Groupe;
use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class ListerEtudiantController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $idEtudiant = $request->input('NomEtd.0'); // Récupérer l'ID de l'etudiant depuis le formulaire

        // Utilisez l'ID pour trouver l'etudiant correspondante
        $etudiant = Etudiant::find($idEtudiant);

        $nomEtd = $etudiant->NomEtd;
        $prenomEtd = $etudiant->PrenomEtd;
        $mailEtd = $etudiant->MailEtd;
        $numTelEtd = $etudiant->NumTelEtd;


        // Récupérer les inscriptions de l'étudiant
        $inscriptions = Inscription::where('id_Etudiant', $etudiant->id)->get();
        $listeInscriptions = [];

        $formation = null;

        foreach ($inscriptions as $inscription) {
            $groupe = Groupe::find($inscription->id_Groupe);
            $formation = $groupe->formation; // Récupérer la formation associée au groupe
        
            $listeInscriptions[] = [
                'id' => $inscription->id, // Ajoutez la clé 'id' avec sa valeur
                'Date Inscription' => $inscription->Date_Inscription,
                'Nom Groupe' => $groupe->NomGrp,
                'Nom Formation' => $formation->NomFormation, 
                
            ];
        }
       

        $avoirDispoEtd = AvoirDispoEtd::where('id_Etudiant', $etudiant->id)->get();
        $disponibilites = [];

        foreach ($avoirDispoEtd as $avoir) {
            $dispoEtd = $avoir->dispoEtd->disponibilite; 
            $disponibilites[] = [
                'Jour' => $dispoEtd->Jour_Dispo,
                'Heure début 1' => $dispoEtd->Disp_HeureDébut_Int1,
                'Heure fin 1' => $dispoEtd->Disp_HeureFin_Int1,
                'Heure début 2' => $dispoEtd->Disp_HeureDébut_Int2,
                'Heure fin 2' => $dispoEtd->Disp_HeureFin_Int2,
                'Heure début 3' => $dispoEtd->Disp_HeureDébut_Int3,
                'Heure fin 3' => $dispoEtd->Disp_HeureFin_Int3,
            ];
        }
        

        return view('liste-des-etudiants')->with('etudiant', $etudiant)->with('nomEtd', $nomEtd)
        ->with('prenomEtd', $prenomEtd)->with('mailEtd', $mailEtd)->with('numTelEtd', $numTelEtd)->with('formation',$formation)
        ->with('inscriptions', $listeInscriptions)->with('disponibilites', $disponibilites);
        

    }







   


    public function destroyInscription($id)
    {
       

        // Logique de suppression de l'inscription avec l'ID donné
     
        $inscription = Inscription::findOrFail($id);
        $inscription->delete();

        // Redirigez l'utilisateur vers la page appropriée 
        return view('home');
    }


    public function updateInscription(Request $request, $id)
    {
        // Récupérer les données du formulaire
        $inscriptionsData = $request->input('inscriptions');
    
        // Parcourir les données d'inscription
        foreach ($inscriptionsData as $inscriptionId => $inscriptionValues) {
            // Récupérer l'inscription correspondante à l'ID
            $inscription = Inscription::find($inscriptionId);
    
            // Mettre à jour les valeurs de l'inscription
            $inscription->Date_Inscription = $inscriptionValues['Date Inscription'];
    
            // Mettre à jour l'ID du groupe
            $groupeId = $inscriptionValues['Nom Groupe'];
            $inscription->id_Groupe = $groupeId;
    
            // Sauvegarder les modifications
            $inscription->save();
        }
    
        return view('home');
    }
    

    
    








    public function destroy($id)
    {
        // Retrouver la salle à supprimer par son ID
        $etudiant = Etudiant::findOrFail($id);
        
        // Récupérer les IDs des enregistrements de disponibilité associés à la salle
        $avoirDispoEtds = AvoirDispoEtd::where('id_Etudiant', $etudiant->id)->get();

        // Supprimer les enregistrements de disponibilité associés à la salle
        foreach ($avoirDispoEtds as $avoirDispoEtd) {
            $dispoEtd = $avoirDispoEtd->dispoEtd;
            $dispo = $dispoEtd->disponibilite;
            
            
            $dispo->delete();
            $dispoEtd->delete();
            
        }
        
        // Supprimer la salle
        $etudiant->delete();

         // Ajouter un message flash à la session
         Session::flash('success', 'La suppression a été effectuée avec succès.');

    
         return redirect()->route('home');
    }
     

   
    


    public function update(Request $request, $id)
    {
        // Retrouver la salle à mettre à jour par son ID
        $etudiant = Etudiant::findOrFail($id);
    
        // Mettre à jour les attributs de la salle avec les nouvelles valeurs
        $etudiant->nomEtd = $request->input('nomEtd');
        $etudiant->prenomEtd = $request->input('prenomEtd');
        $etudiant->mailEtd = $request->input('mailEtd');
        $etudiant->numTelEtd = $request->input('numTelEtd');

        $etudiant->save();
    
        

        // Récupérer les IDs des enregistrements de disponibilité associés à l'étudiant
        $avoirDispoEtds = AvoirDispoEtd::where('id_Etudiant', $etudiant->id)->get();

        // Supprimer les enregistrements de disponibilité associés à l'étudiant
        foreach ($avoirDispoEtds as $avoirDispoEtd) {
            $dispoEtd = $avoirDispoEtd->dispoEtd;
            $dispo = $dispoEtd->disponibilite;
            
            
            $dispo->delete();
            $dispoEtd->delete();
            
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
            $dispoEt = new DispoEt;

            $dispoEt->id_DispoEtudiant = $dispo->id;

            $dispoEt->save();
            //fin de l'héritage

            // Realtion Avoir Dispo ET
            $avoirDispoEtd = new AvoirDispoEtd;

            $avoirDispoEtd->id_Etudiant = $etudiant->id;  //cle etrangere de Etudiant
            $avoirDispoEtd->id_DispoEtd = $dispoEt->id;  //cle etrangere de DispoEtudiant

            $avoirDispoEtd->save();
        }
    
        // Ajouter un message flash à la session
        Session::flash('success_update', 'La modification a été effectuée avec succès.');

    
        return redirect()->route('home');
    }


   

    public function generatePDF(Request $request)
    {
        $modalContent = $request->input('modalContent');
    
        // Créez une instance de Dompdf
        $dompdf = new Dompdf();
    
        // Chargez le contenu HTML avec les styles CSS
        $html = '<html><head><style>' . $modalContent . '</style></head><body></body></html>';
    
        // Générez le PDF en utilisant Dompdf
        $dompdf->loadHtml($html);
        $dompdf->render();
    
        // Définissez les paramètres du document PDF (optionnel)
        $dompdf->getOptions()->set([
            'title' => 'inscription',
            'author' => 'Auteur du document',
        ]);
    
        // Enregistrez ou renvoyez le fichier PDF
        return $dompdf->stream('inscription.pdf');
    }
}