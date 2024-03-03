<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

// formId = 1  Formulaire 1 : Ajouter Formation
// formId = 2  Formulaire 2 : Ajouter Salle
// formId = 3  Formulaire 3 : Ajouter enseignant
// formId = 4  Formulaire 4 : Ajouter Etudiant
// formId = 5  Formulaire 5 : Ajouter inscription 
// formId = 6  Formulaire 6 : Ajouter Groupe





class FormsAddController extends Controller
{

    public function create()
    {
        // Afficher la vue adds.blade.php contenant tous les formulaires

        return view('adds');
    }





    public function store(Request $request)
    {
        $formId = $request->input('form_id');






        if ($formId == 1) {

            // Traitement pour le formulaire 1 : Ajouter Formation

            $formation = new Formation;
            $formation->NomFormation = $request->input('NomFormation');
            $formation->NomFormation  = str_replace(' ', '-', $formation->NomFormation);
            $formation->Catégorie = $request->input('Catégorie');
           
            $formation->save();


            // Création du message
            $message = "La formation " . $formation->NomFormation . " a été ajoutée avec succès.";

            // Redirection vers la page avec le message
            return redirect()->back()->with('successMessage', $message);









        } elseif ($formId == 2) {

                    //    Formulaire 2  : Ajouter salle 


                    $salle = new Salle;
                    $salle->NomSalle = $request->input('NomSalle');
                    $salle->CapaciteSalle = $request->input('CapaciteSalle');
                    $salle->save();

                    

                    // Ajout des disponibilités
                    $jours = $request->input('Jour_Dispo');
                    $heuresDebut1 = $request->input('Disp_HeureDébut_Int1');
                    $heuresFin1 = $request->input('Disp_HeureFin_Int1');
                    $heuresDebut2 = $request->input('Disp_HeureDébut_Int2');
                    $heuresFin2 = $request->input('Disp_HeureFin_Int2');
                    $heuresDebut3 = $request->input('Disp_HeureDébut_Int3');
                    $heuresFin3 = $request->input('Disp_HeureFin_Int3');

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


                        // Realtion Avoir Dispo Salle
                        $avoirDispoSalle = new AvoirDispoSalle;

                        $avoirDispoSalle->id_Salle = $salle->id;  //cle etrangere de Salle
                        $avoirDispoSalle->id_DispoS = $dispoSalle->id;  //cle etrangere de DispoSalle

                        $avoirDispoSalle->save();
                    }


                        // Création du message
                        $message = "La salle " . $salle->NomSalle. " a été ajoutée avec succès.";

                        // Redirection vers la page avec le message
                        return redirect()->back()->with('successMessageAjoutSalle', $message);





            


        } elseif ($formId == 3) {

                     // Traitement pour le formulaire 3  Enseignant

                                //ajouter un Enseignant:

                            $enseignant = new Enseignant;

                            $enseignant->NomEns = $request->input('NomEns');
                            $enseignant->PrenomEns = $request->input('PrenomEns');
                            $enseignant->MailEns = $request->input('MailEns');
                            $enseignant->NumTelEns = $request->input('NumTelEns');

                            $enseignant->save();

                                // Récupérez les IDs des formations sélectionnées
                            $formationIds = $request->input('NomFormation');
                            
                                // Associez les formations sélectionnées à l'enseignant

                            foreach ($formationIds as $formationId) {

                                // Créez une nouvelle instance de Enseigners et définissez les relations
                                $enseigners = new Enseigner();
                                $enseigners->Enseignant_id = $enseignant->id;
                                $enseigners->Formation_id = $formationId;

                                // Sauvegardez la relation entre l'enseignant et la formation
                                $enseigners->save();
                            }



                        
                                // Ajout des disponibilités
                                $jours = $request->input('Jour_Dispo');
                                $heuresDebut1 = $request->input('Disp_HeureDébut_Int1');
                                $heuresFin1 = $request->input('Disp_HeureFin_Int1');
                                $heuresDebut2 = $request->input('Disp_HeureDébut_Int2');
                                $heuresFin2 = $request->input('Disp_HeureFin_Int2');
                                $heuresDebut3 = $request->input('Disp_HeureDébut_Int3');
                                $heuresFin3 = $request->input('Disp_HeureFin_Int3');
                                
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
                            
                            

                            // Création du message
                            $message = "L'enseignant " . $enseignant->NomEns. " a été ajouté avec succès.";

                            // Redirection vers la page avec le message
                            return redirect()->back()->with('successMessageAjoutEns', $message);



            

            
            
        } elseif ($formId == 4) {


                 
                    // Formulaire 4   :   Ajouter Etudiant 


                        $etudiant = new Etudiant;

                        $etudiant->NomEtd = $request->input('NomEtd');
                        $etudiant->PrenomEtd = $request->input('PrenomEtd');
                        $etudiant->MailEtd = $request->input('MailEtd');
                        $etudiant->NumTelEtd = $request->input('NumTelEtd');

                        $etudiant->save();
                        
                        // Ajout des disponibilités
                        $jours = $request->input('Jour_Dispo');
                        $heuresDebut1 = $request->input('Disp_HeureDébut_Int1');
                        $heuresFin1 = $request->input('Disp_HeureFin_Int1');
                        $heuresDebut2 = $request->input('Disp_HeureDébut_Int2');
                        $heuresFin2 = $request->input('Disp_HeureFin_Int2');
                        $heuresDebut3 = $request->input('Disp_HeureDébut_Int3');
                        $heuresFin3 = $request->input('Disp_HeureFin_Int3');
                        
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
                        
                        
                        // Création du message
                        $message = "L'etudiant " . $etudiant->NomEtd. " ". $etudiant->PrenomEtd. " a été ajouté avec succès.";

                        // Redirection vers la page avec le message
                        return redirect()->back()->with('successMessageAjoutET', $message);








            
        } elseif ($formId == 5) {


            // Traitement pour le formulaire 5   : Inscription 
            $inscription = new Inscription;


            $etudiantId = $request->input('NomEtudiant')[0]; 

            $inscription->id_Etudiant = $etudiantId;


            $inscription->Date_Inscription = $request->input('Date_Inscription');


            $groupeId = $request->input('NomGroupe'); 

            $inscription->id_Groupe = $groupeId;

            
            
            $inscription->save();
               
             // Création du message
             $message = "L'inscription a été faite avec succès.";


             // Redirection vers la page avec le message
            return redirect()->back()->with('successMessageInscription', $message);


        } elseif ($formId == 6) {



                // Traitement pour le formulaire 6   Ajouter Groupe

            $groupe = new Groupe;
        

            $groupe->NomGrp = $request->input('NomGrp');
            $groupe->CapaciteGrp = $request->input('CapaciteGrp');
            $groupe->NbrEtudiants = $request->input('NbrEtudiants');


            // Récupérez l'ID de la formation choisie

            $formationId = $request->input('NomFormation')[0]; // Récupérez le premier ID du tableau des formations

            $groupe->id_Formation = $formationId;

         
            // Récupérez le type de formation  choisie

            $groupe->TypeFormation = $request->input('TypeFormation');


            $groupe->save();

            // Création du message
            $message = "Le Groupe " . $groupe->NomGrp. " a été ajouté avec succès.";

            // Redirection vers la page avec le message
            return redirect()->back()->with('successMessageFormGroupe', $message);

        }


        
    }

    
}