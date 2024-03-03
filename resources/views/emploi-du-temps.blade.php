<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head> 

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Gestion Des Emplois Du Tamps</title>

    <meta name="description" content="" />
      <!-- jQuery --> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Select2 JS --> 
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!--  multiple select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <link rel="stylesheet" href="../assets/vendor/css/style.css" />
   
       <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>
<body>

<!--  Test  de l'emploi du temps  -->


            <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              
           
              <div class="row">
               
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">gérer empoli du temps</h5>
                    </div>
                    <div class="card-body">
                   

                      <form action="{{ route('dispo-groupe.calculer') }}" method="POST">
                        @csrf
                        <input type="hidden" name="formid" value="10">
              
                       


                          <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="idFormation">Nom Formation</label>
                            <div class="col-sm-10">
                                <select name="idFormation" id="formationId" class="form-select form-control">
                                   
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="NomGroupe">Groupes</label>
                            <div class="col-sm-10">
                                <select name="groupeId" id="groupeInsc" class="form-select form-control">
                                 
                                </select>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                // Chargement initial des ID de formation dans la première liste déroulante
                                $.ajax({
                                    url: '/formations',  // L'URL vers votre route qui récupère les formations
                                    type: 'GET',
                                    success: function(response) {
                                        var formations = response.formations;
                                        var select = $('#formationId');
                                        for (var i = 0; i < formations.length; i++) {
                                            select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                        }
                                    }
                                });

                                // Événement de changement sur la première liste déroulante
                                $('#formationId').change(function() {
                                    var selectedFormationId = $(this).val();
                                    if (selectedFormationId) {
                                        // Récupérer les groupes correspondants à l'ID de formation sélectionné
                                        $.ajax({
                                            url: '/groupes/' + selectedFormationId,  // L'URL vers votre route qui récupère les groupes pour une formation donnée
                                            type: 'GET',
                                            success: function(response) {
                                                var groupes = response.groupes;
                                                var select = $('#groupeInsc');
                                                select.empty(); // Vider les options existantes
                                                for (var i = 0; i < groupes.length; i++) {
                                                    select.append('<option value="' + groupes[i].id + '">' + groupes[i].NomGrp + '</option>');
                                                }
                                            }
                                        });
                                    } else {
                                        // Si aucun ID de formation n'est sélectionné, vider la liste des groupes
                                        $('#groupeInsc').empty();
                                    }
                                });
                            });
                        </script>







                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>



 



   
</body>
</html>