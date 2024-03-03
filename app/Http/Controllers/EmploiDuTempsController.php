<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\AvoirDispoGroupe;
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
use PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\File;

class EmploiDuTempsController extends Controller
{
    public function calculerDispoGroupe(Request $request)
    {
       


        // récupération de date début et date fin et Création de déroulement

        $déroulement = new Déroulement;

        $déroulement->Date_Début = $request->input('Date_Début');
        $déroulement->Date_Fin = $request->input('Date_Fin');
        $déroulement->save();
         
        // STOCKE Déroulement dans des variables :
        $Date_Début = $déroulement->Date_Début ;
        $Date_Fin = $déroulement->Date_Fin ;



//les étudiants de groupe et leur disponibilités :
        // Récupérer les étudiants du groupe via la table Inscription
        $groupeId = $request->input('groupeId');
        //trouver le groupe
        $groupe = Groupe::find($groupeId);

        //trouver les infomations de groupe 
       
        $nomGrp = $groupe->NomGrp;
        $capaciteGrp = $groupe->CapaciteGrp;
        $nbrEtudiants = $groupe->NbrEtudiants;
        $typeFormation = $groupe->TypeFormation;
        $idFormation = $groupe->id_Formation;

        $formation = Formation::findOrFail($idFormation);
        $nomFormation = $formation->NomFormation;


        // Vérifier si les disponibilités de groupe existent déjà
        $existingAvoirDispoGroupe = AvoirDispoGroupe::where('id_Grp', $groupeId)->get();

        if (!$existingAvoirDispoGroupe->isEmpty()) {
            // Récupérer les identifiants des disponibilités de groupe existantes
            $existingDispoGroupeIds = $existingAvoirDispoGroupe->pluck('id_DispoGrp');

            // Supprimer les enregistrements AvoirDispoGroupe existants
            AvoirDispoGroupe::where('id_Grp', $groupeId)->delete();

            // Supprimer les disponibilités de groupe existantes
            DispoGroupe::whereIn('id', $existingDispoGroupeIds)->delete();
        }



        //// Récupérer les étudiants du groupe via la table Inscription
        $inscriptions = Inscription::where('id_Groupe', $groupeId)->get();
        $etudiants = [];

        // Tableau pour stocker les disponibilités communes des etudiants de groupe
        $dispogroupe = [];

        // Liste des jours de la semaine
        $joursSemaine = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

        foreach ($joursSemaine as $jour) {
            $dispogroupe[$jour] = [
                'Jour_DispoGrp' => $jour,
                'DispoGrp_HeureDébut_Int1' => null,
                'DispoGrp_HeureFin_Int1' => null,
                'DispoGrp_HeureDébut_Int2' => null,
                'DispoGrp_HeureFin_Int2' => null,
                'DispoGrp_HeureDébut_Int3' => null,
                'DispoGrp_HeureFin_Int3' => null,
            ];
        }

        foreach ($inscriptions as $inscription) {
            $etudiant = Etudiant::find($inscription->id_Etudiant);
            $avoirDispoEtds = AvoirDispoEtd::where('id_Etudiant', $etudiant->id)->get();
            $disponibilites = [];

            foreach ($avoirDispoEtds as $avoirDispoEtd) {
                $dispoEt = DispoEt::find($avoirDispoEtd->id_DispoEtd);
                if ($dispoEt) {
                    $disponibilite = Disponibilité::find($dispoEt->id_DispoEtudiant);
                    if ($disponibilite) {
                        $disponibilites[$disponibilite->Jour_Dispo][] = $disponibilite;
                    }
                }
            }

            if (!empty($disponibilites)) {
                $etudiant->disponibilites = $disponibilites;
                $etudiants[] = $etudiant;
            }
        }

        // Parcourir chaque jour de la semaine
        foreach ($joursSemaine as $jour) {
            $interval1DebutNotNull = true;
            $interval1FinNotNull = true;
            $interval2DebutNotNull = true;
            $interval2FinNotNull = true;
            $interval3DebutNotNull = true;
            $interval3FinNotNull = true;

            // Vérifier si le jour existe dans les disponibilités des étudiants
            $hasDay = false;

            // Vérifier les disponibilités des étudiants pour le jour en cours
            foreach ($etudiants as $etudiant) {
                $disponibilites = $etudiant->disponibilites[$jour] ?? [];
                $interval1DebutNotNull = $interval1DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int1');
                $interval1FinNotNull = $interval1FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int1');
                $interval2DebutNotNull = $interval2DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int2');
                $interval2FinNotNull = $interval2FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int2');
                $interval3DebutNotNull = $interval3DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int3');
                $interval3FinNotNull = $interval3FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int3');

                if (!empty($disponibilites)) {
                    $hasDay = true;
                }
            }

            // Définir les heures de début et de fin de chaque intervalle en fonction des disponibilités
            if ($hasDay) {
                if ($interval1DebutNotNull && $interval1FinNotNull) {
                    $dispogroupe[$jour]['DispoGrp_HeureDébut_Int1'] = '09:00';
                    $dispogroupe[$jour]['DispoGrp_HeureFin_Int1'] = '12:00';
                }
                if ($interval2DebutNotNull && $interval2FinNotNull) {
                    $dispogroupe[$jour]['DispoGrp_HeureDébut_Int2'] = '12:00';
                    $dispogroupe[$jour]['DispoGrp_HeureFin_Int2'] = '15:00';
                }
                if ($interval3DebutNotNull && $interval3FinNotNull) {
                    $dispogroupe[$jour]['DispoGrp_HeureDébut_Int3'] = '15:00';
                    $dispogroupe[$jour]['DispoGrp_HeureFin_Int3'] = '18:00';
                }
            } else {
                // Aucune disponibilité pour le jour en cours, définir toutes les heures à null
                $dispogroupe[$jour]['DispoGrp_HeureDébut_Int1'] = null;
                $dispogroupe[$jour]['DispoGrp_HeureFin_Int1'] = null;
                $dispogroupe[$jour]['DispoGrp_HeureDébut_Int2'] = null;
                $dispogroupe[$jour]['DispoGrp_HeureFin_Int2'] = null;
                $dispogroupe[$jour]['DispoGrp_HeureDébut_Int3'] = null;
                $dispogroupe[$jour]['DispoGrp_HeureFin_Int3'] = null;
            }
        }

        
        // Enregistrer les disponibilités du groupe dans la table DispoGroupe
        foreach ($dispogroupe as $jour => $dispo) {
            $dispoGroupe = new DispoGroupe();
            $dispoGroupe->Jour_DispoGrp = $dispo['Jour_DispoGrp'];
            $dispoGroupe->DispoGrp_HeureDébut_Int1 = $dispo['DispoGrp_HeureDébut_Int1'];
            $dispoGroupe->DispoGrp_HeureFin_Int1 = $dispo['DispoGrp_HeureFin_Int1'];
            $dispoGroupe->DispoGrp_HeureDébut_Int2 = $dispo['DispoGrp_HeureDébut_Int2'];
            $dispoGroupe->DispoGrp_HeureFin_Int2 = $dispo['DispoGrp_HeureFin_Int2'];
            $dispoGroupe->DispoGrp_HeureDébut_Int3 = $dispo['DispoGrp_HeureDébut_Int3'];
            $dispoGroupe->DispoGrp_HeureFin_Int3 = $dispo['DispoGrp_HeureFin_Int3'];
            $dispoGroupe->save();

            // Créer un nouvel enregistrement dans la table AvoirDispoGroupe
            $avoirDispoGroupe = new AvoirDispoGroupe();
            $avoirDispoGroupe->id_Grp = $groupeId;
            $avoirDispoGroupe->id_DispoGrp = $dispoGroupe->id;
            $avoirDispoGroupe->save();   
        }







        //calculer la disponibilité commmune de salle ; enseignant; Groupe($dispoGroupe) et stokces dans table DisponibilitéCommune

        //Récuperer la salle et l'enseignant de ce groupe  :

         // Récuperer l'Enseignant choisi pour enseigner ce groupe :
         $enseignantId = $request->input('enseignantId');
        // Utilisez l'ID pour trouver la l'enseignant correspondant
         $enseignant = Enseignant::find($enseignantId);
         //les informations de l'enseignant
        $nomEnseignant = $enseignant->NomEns;
        $prenomEns = $enseignant->PrenomEns;

        //récupérer la salle choisi pour ce groupe 
        $salleId = $request->input('salleId');
        // Utilisez l'ID pour trouver la salle correspondante
        $salle = Salle::find($salleId);
        //les informations de la salle :
        $nomSalle = $salle->NomSalle;
        $capaciteSalle = $salle->CapaciteSalle;
 
        

        // Tableau pour stocker les disponibilités communes
        $disposCommunes= [];

        // Liste des jours de la semaine
        $joursSemaineDc = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

        foreach ($joursSemaineDc as $jourDc) {
            $disposCommunes[$jourDc] = [
                'Jour_DC' => $jourDc,
                'Dc_HeureDébut_Int1' => null,
                'Dc_HeureFin_Int1' => null,
                'Dc_HeureDébut_Int2' => null,
                'Dc_HeureFin_Int2' => null,
                'Dc_HeureDébut_Int3' => null,
                'Dc_HeureFin_Int3' => null,
            ];
        }

        
        //traitement pour récuperer les disponibilites de salle " $salle " et l'enseignant " $enseignant " et groupe "$dispoGroupe"
         // ajouter le traitement ici ...
        //Récuperer les disponibilités de groupe calculés pour les utiliser
        

        
       
         $disponibilitesEnseignant = [];
         $disponibilitesSalle = [];


         if ($enseignant) {
            // Récupérer les disponibilités de l'enseignant
            $avoirDispoEns = AvoirDispoEns::where('id_Ens', $enseignant->id)->get();
            $disponibilitesEnseignant = [];
        
            foreach ($avoirDispoEns as $avoirDispoEns) {
                $dispoEns = DispoEns::find($avoirDispoEns->id_DispoEns);
                if ($dispoEns) {
                    $disponibilite = Disponibilité::find($dispoEns->id_DispoEnseignant);
                    if ($disponibilite) {
                        $disponibilitesEnseignant[$disponibilite->Jour_Dispo][] = $disponibilite;
                    }
                }
            }
        }

        if ($salle) {
            // Récupérer les disponibilités de la salle
            $avoirDispoSalle = AvoirDispoSalle::where('id_Salle', $salle->id)->get();
            $disponibilitesSalle = [];
        
            foreach ($avoirDispoSalle as $avoirDispoSalle) {
                $dispoSalle = DispoSalle::find($avoirDispoSalle->id_DispoS);
                if ($dispoSalle) {
                    $disponibilite = Disponibilité::find($dispoSalle->id_DispoSalle);
                    if ($disponibilite) {
                        $disponibilitesSalle[$disponibilite->Jour_Dispo][] = $disponibilite;
                    }
                }
            }
        
            
        }

        $avoirDispoGroupes = AvoirDispoGroupe::where('id_Grp', $groupeId)->get();
        $disponibilitesGroupe = [];

        foreach ($avoirDispoGroupes as $avoirDispoGroupe) {
            $dispoGroupe = DispoGroupe::find($avoirDispoGroupe->id_DispoGrp);
            if ($dispoGroupe) {
                $disponibilitesGroupe[$dispoGroupe->Jour_DispoGrp][] = $dispoGroupe;
            }
        }


         // Parcourir chaque jour de la semaine
         foreach ($joursSemaineDc as $jourDc) {
            $interval1DebutNotNull = true;
            $interval1FinNotNull = true;
            $interval2DebutNotNull = true;
            $interval2FinNotNull = true;
            $interval3DebutNotNull = true;
            $interval3FinNotNull = true;

            // Vérifier si le jour existe dans les disponibilités de l'enseignant et salle et groupe 
            $hasDay = false;

            // Vérifier les disponibilités de l'enseiganant et salle et groupe pour le jour en cours
        

           // Vérifier les disponibilités de l'enseignant pour le jour en cours
           if (isset($disponibilitesEnseignant[$jourDc])) {
           $disponibilites = $disponibilitesEnseignant[$jourDc];
           $interval1DebutNotNull = $interval1DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int1');
           $interval1FinNotNull = $interval1FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int1');
           $interval2DebutNotNull = $interval2DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int2');
           $interval2FinNotNull = $interval2FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int2');
           $interval3DebutNotNull = $interval3DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int3');
           $interval3FinNotNull = $interval3FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int3');

            // Indiquer que le jour existe dans les disponibilités de l'enseignant et de la salle
             $hasDay = true;
           }

           // Vérifier les disponibilités de la salle pour le jour en cours
           if (isset($disponibilitesSalle[$jourDc])) {
            $disponibilites = $disponibilitesSalle[$jourDc];
            $interval1DebutNotNull = $interval1DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int1');
            $interval1FinNotNull = $interval1FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int1');
            $interval2DebutNotNull = $interval2DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int2');
            $interval2FinNotNull = $interval2FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int2');
            $interval3DebutNotNull = $interval3DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureDébut_Int3');
            $interval3FinNotNull = $interval3FinNotNull && $this->checkIntervalNotNull($disponibilites, 'Disp_HeureFin_Int3');
 
             // Indiquer que le jour existe dans les disponibilités de l'enseignant et de la salle
              $hasDay = true;
            }   

            // Vérifier les disponibilités de groupe pour le jour en cours
            if (isset($disponibilitesGroupe[$jourDc])) {
            $disponibilites = $disponibilitesGroupe[$jourDc];
            $interval1DebutNotNull = $interval1DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'DispoGrp_HeureDébut_Int1');
            $interval1FinNotNull = $interval1FinNotNull && $this->checkIntervalNotNull($disponibilites, 'DispoGrp_HeureFin_Int1');
            $interval2DebutNotNull = $interval2DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'DispoGrp_HeureDébut_Int2');
            $interval2FinNotNull = $interval2FinNotNull && $this->checkIntervalNotNull($disponibilites, 'DispoGrp_HeureFin_Int2');
            $interval3DebutNotNull = $interval3DebutNotNull && $this->checkIntervalNotNull($disponibilites, 'DispoGrp_HeureDébut_Int3');
            $interval3FinNotNull = $interval3FinNotNull && $this->checkIntervalNotNull($disponibilites, 'DispoGrp_HeureFin_Int3');
 
             // Indiquer que le jour existe dans les disponibilités de l'enseignant et de la salle
              $hasDay = true;
            }     



            // Définir les heures de début et de fin de chaque intervalle en fonction des disponibilités
            if ($hasDay) {
                if ($interval1DebutNotNull && $interval1FinNotNull) {
                    $disposCommunes[$jourDc]['Dc_HeureDébut_Int1'] = '09:00';
                    $disposCommunes[$jourDc]['Dc_HeureFin_Int1'] = '12:00';
                }
                if ($interval2DebutNotNull && $interval2FinNotNull) {
                    $disposCommunes[$jourDc]['Dc_HeureDébut_Int2'] = '12:00';
                    $disposCommunes[$jourDc]['Dc_HeureFin_Int2'] = '15:00';
                }
                if ($interval3DebutNotNull && $interval3FinNotNull) {
                    $disposCommunes[$jourDc]['Dc_HeureDébut_Int3'] = '15:00';
                    $disposCommunes[$jourDc]['Dc_HeureFin_Int3'] = '18:00';
                }
            } else {
                // Aucune disponibilité pour le jour en cours, définir toutes les heures à null
                $disposCommunes[$jourDc]['Dc_HeureDébut_Int1'] = null;
                $disposCommunes[$jourDc]['Dc_HeureFin_Int1'] = null;
                $disposCommunes[$jourDc]['Dc_HeureDébut_Int2'] = null;
                $disposCommunes[$jourDc]['Dc_HeureFin_Int2'] = null;
                $disposCommunes[$jourDc]['Dc_HeureDébut_Int3'] = null;
                $disposCommunes[$jourDc]['Dc_HeureFin_Int3'] = null;
            }
        }


        // Enregistrer les disponibilités commmunes de salle et l'eseignant et groupe  dans la table DisponibilitéCommune
        foreach ($disposCommunes as $jourDc => $dispo) {
            $dispoCommune = new DisponibilitéCommune();
            $dispoCommune->Jour_DC = $dispo['Jour_DC'];
            $dispoCommune->Dc_HeureDébut_Int1 = $dispo['Dc_HeureDébut_Int1'];
            $dispoCommune->Dc_HeureFin_Int1 = $dispo['Dc_HeureFin_Int1'];
            $dispoCommune->Dc_HeureDébut_Int2 = $dispo['Dc_HeureDébut_Int2'];
            $dispoCommune->Dc_HeureFin_Int2 = $dispo['Dc_HeureFin_Int2'];
            $dispoCommune->Dc_HeureDébut_Int3 = $dispo['Dc_HeureDébut_Int3'];
            $dispoCommune->Dc_HeureFin_Int3 = $dispo['Dc_HeureFin_Int3'];
            $dispoCommune->save();

        
        }




        return view('dispo-groupe', compact('etudiants', 'dispogroupe'))->with('enseignant', $enseignant)
        ->with('nomEnseignant', $nomEnseignant)->with('prenomEns', $prenomEns)->with('déroulement', $déroulement)
        ->with('Date_Début', $Date_Début)->with('Date_Fin', $Date_Fin)->with('disposCommunes', $disposCommunes)
        ->with('disponibilitesSalle', $disponibilitesSalle)->with('salle', $salle)->with('nomSalle', $nomSalle)
        ->with('capaciteSalle', $capaciteSalle)
        ->with('disponibilitesEnseignant', $disponibilitesEnseignant)
        ->with('disponibilitesGroupe', $disponibilitesGroupe)
        ->with('groupe', $groupe)->with('nomGrp', $nomGrp)
        ->with('capaciteGrp', $capaciteGrp)->with('nbrEtudiants', $nbrEtudiants)->with('nomFormation', $nomFormation)
        ->with('typeFormation', $typeFormation)->with('groupeId', $groupeId)
        ->with('formation', $formation);
    }

    private function checkIntervalNotNull($disponibilites, $heure)
    {
        foreach ($disponibilites as $disponibilite) {
            if ($disponibilite->$heure === null) {
                return false;
            }
        }
        return true;
    }



    public function calculerSeance(Request $request)
    {
        $seance= new Séance;

       // Récupérer la valeur du jour et des heures cochées
        $jourSeance = $request->input('JourSeance')[0];
        $heureDebutSeance = $request->input('HeureDebutSeance')[0];
        $heureFinSeance = $request->input('HeureFinSeance')[0];
        // Récupérer l'ID du groupe
        $id_Groupe = $request->input('groupeId');

        $seance->JourSeance = $jourSeance;
        $seance->HeureDebutSeance = $heureDebutSeance;
        $seance->HeureFinSeance = $heureFinSeance;
        $seance->id_Groupe = $id_Groupe;

        $seance->save();

         // Récupérer les donner pour les afficher dans view seance 
         $Date_Début = $request->input('Date_Début');
         $Date_Fin = $request->input('Date_Fin');
         $Date_Fin = $request->input('Date_Fin');
         $nomGrp = $request->input('nomGrp');
         $nomFormation = $request->input('nomFormation');
         $typeFormation = $request->input('typeFormation');
         $nomEnseignant = $request->input('nomEnseignant');
         $prenomEns = $request->input('prenomEns');
         $nomSalle = $request->input('nomSalle');

        return view('seance')->with('seance', $seance)->with('Date_Début', $Date_Début)
        ->with('Date_Fin', $Date_Fin)->with('nomGrp', $nomGrp)
        ->with('nomFormation', $nomFormation)->with('nomSalle', $nomSalle)
        ->with('typeFormation', $typeFormation)
        ->with('nomEnseignant', $nomEnseignant)->with('prenomEns', $prenomEns)
        ->with('jourSeance', $jourSeance)
        ->with('heureDebutSeance', $heureDebutSeance)->with('heureFinSeance', $heureFinSeance);

    }

    public function generatePDF(Request $request)
    {
        $viewData = [
            'Date_Début' => $request->input('Date_Début'),
            'Date_Fin' => $request->input('Date_Fin'),
            'nomSalle' => $request->input('nomSalle'),
            'nomGrp' => $request->input('nomGrp'),
            'nomFormation' => $request->input('nomFormation'),
            'typeFormation' => $request->input('typeFormation'),
            'nomEnseignant' => $request->input('nomEnseignant'),
            'prenomEns' => $request->input('prenomEns'),
            'jourSeance' => $request->input('jourSeance'),
            'heureDebutSeance' => $request->input('heureDebutSeance'),
            'heureFinSeance' => $request->input('heureFinSeance'),
            
        ];
    
        // Render the view to a string
        $viewContent = view('seance', $viewData)->render();
    
        // Create an instance of Dompdf
        $dompdf = new Dompdf();
    
        // Load the HTML content
        $dompdf->loadHtml($viewContent);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $dompdf->render();
    
        // Output the generated PDF (you can choose to save it or stream it to the browser)
        $dompdf->stream('EmploiTemps.pdf');
    }
}