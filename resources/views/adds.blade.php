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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Gestion Des Emplois Du Tamps</title>

    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>


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
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand ">
              <span class="logo">
              <img src="../assets/img/logo/LOGO_EPG.jpg" alt="LOGO">
              </span>
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
          </div>
          <!--
          <div class="menu-inner-shadow"></div>
          -->

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="/home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>
        
            <!-- Formations -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Formations">Formations</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a data-bs-toggle="modal" data-bs-target=".staticBackdrop1" class="menu-link">
                    <div>Liste des formations</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <!-- liste des groupes -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Groupes">Groupes</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a data-bs-toggle="modal" data-bs-target=".Groupe" class="menu-link">
                    <div>Liste des groupes</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- liste des etudiants -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Etudiants">Etudiants</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a data-bs-toggle="modal" data-bs-target=".ET" class="menu-link">
                    <div>Liste des étudiants</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- liste enseignants -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Ebseignants">Enseignants</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a data-bs-toggle="modal" data-bs-target=".Ens" class="menu-link">
                    <div>Liste de enseignants</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- liste des Salles -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Salles">Salles</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a data-bs-toggle="modal" data-bs-target=".Salle" class="menu-link">
                    <div>Liste des salles</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ route('login') }}" class="menu-link" >
                    <div data-i18n="Basic">Se connecter</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('register') }}" class="menu-link" >
                    <div data-i18n="Basic">S'inscrir</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('password.request') }}" class="menu-link" >
                    <div data-i18n="Basic">Mot de passe oublié</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Paramètres du compte</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/profile" class="menu-link">
                    <div data-i18n="Account">compte</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
         
        </aside>
        
          <!-- / Menu -->

           <!-- Layout container -->
            <div class="layout-page">
            <!-- Navbar -->
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <H3 class="nav-item d-flex align-items-center logotxt mt-2"> Ecole Polytechnique  Des Génies</H3>
              <!-- Search -->
              <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/avatars/{{ Auth::user()->avatar }}" alt class="w-px-40 h-px-40 rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/avatars/{{ Auth::user()->avatar }}" alt class="w-px-40 h-px-40 rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"> {{ Auth::user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/profile">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Mon Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Se déconnécter</span>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->
<!-- --------------------------------------------------------------------------------------------------------------------- -->

        <!--  Content -->
           <!-- Content wrapper -->
           <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Formulaires/</span> Remplir vos formulaires ici</h4>
            </div>
        
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Inscription</h5>
                    </div>
                    <div class="card-body">
                      <!-- Form 5  Inscription -->
                      <form action="{{ route('forms.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_id" value="5">
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label" for="NomEtudiant">Étudiants</label>
                            <div class="col-sm-10">
                                <select name="NomEtudiant[]" id="etudiantGrp1" multiple>
                                </select>
                                <script>
                                    $(document).ready(function() {
                                        $.ajax({
                                            url: '/etudiants',  // L'URL vers votre route qui récupère les étudiants
                                            type: 'GET',
                                            success: function(response) {
                                                var etudiants = response.etudiants;
                                                var select = $('#etudiantGrp1');
                                                for (var i = 0; i < etudiants.length; i++) {
                                                    select.append('<option value="' + etudiants[i].id + '">' + etudiants[i].NomEtd + ' ' + etudiants[i].PrenomEtd + '</option>');
                                                }
                                                new MultiSelectTag('etudiantGrp1');
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="Date_Inscription">Date Inscription</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" name="Date_Inscription" id="Date_Inscription" placeholder="Entez le date de formation" />
                          </div>
                        </div>
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="Formation"> Formation</label>
                          <div class="col-sm-10">
                              <select name="Formation" class="form-select" id="formationId1">
                                  <!-- Options seront ajoutées dynamiquement via AJAX -->
                              </select>
                          </div>
                        </div>
                        <div class="row mb-4">
                              <label class="col-sm-2 col-form-label" for="NomGroupe">Groupes</label>
                              <div class="col-sm-10">
                                  <select name="NomGroupe"  class="form-select form-control" id="groupeInsc">
                                      <!-- Options seront ajoutées dynamiquement via AJAX -->
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
                                          var select = $('#formationId1');
                                          for (var i = 0; i < formations.length; i++) {
                                              select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                          }
                                          //new MultiSelectTag('formationId1');
                                      }
                                  });

                                  // Événement de changement sur la première liste déroulante
                                  $('#formationId1').change(function() {
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

                        <!-- Affichage du message de succès -->
                        @if(session('successMessageInscription'))
                          <div class="row mb-3">
                              <div class="col-sm-12">
                                  <div class="alert alert-success" role="alert">
                                      {{ session('successMessageInscription') }}
                                  </div>
                              </div>
                          </div>
                        @endif
                       
                        <!--  Fin de l'Affichage du message de succès 
                      -->
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

            <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-5">
                    <div class="card-header m-3 d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Formation</h5>
                    </div>
                    <div class="card-body">
                      <!-- Form 1 -->
                 <!-- Form 1 -->
                 <form action="{{ route('forms.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_id" value="1">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NomFormation">Nom</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="NomFormation" name="NomFormation" placeholder="Entrez le nom de formation" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="Catégorie">Catégorie</label>
                          <div class="col-sm-10">
                              <select class="form-select" id="Catégorie" name="Catégorie" aria-label="Default select example" >
                                <option selected>--------------------</option>
                                <option value="Technologie-Web">Technologie Web</option>
                                <option value="Développement-Logiciel">Développement Logiciel</option>
                                <option value="Messagerie-Travail-Collaboratif">Messagerie, Travail Collaboratif</option>
                                <option value="Système-de-Gestion-de-Base-de-Données">Système de Gestion de Base de Données</option>
                                <option value="Big-Data-Intelligence-Artificielle">Big Data, Intelligence Artificielle</option>
                                <option value="Gestion-de-Projet">Gestion de Projet</option>
                                <option value="Cybersécurité">Cybersécurité</option>
                                <option value="Bureautique">Bureautique</option>
                                <option value="Pao-Cao-Graphisme-Multimédia">Pao, Cao, Graphisme, Multimédia</option>
                                <option value="Réseaux-informatique">Réseaux informatique</option>
                                <option value="Virtualisation-Cloud-Devops">Virtualisation, Cloud, Devops</option>
                                <option value="Système-Exploitation">Système D'exploitation</option>
                              </select>
                          </div>
                        </div>
                   <!-- Affichage du message de succès -->
                                  @if(session('successMessage'))
                                  <div class="row mb-3">
                                      <div class="col-sm-12">
                                          <div class="alert alert-success" role="alert">
                                              {{ session('successMessage') }}
                                          </div>
                                      </div>
                                  </div>
                                  @endif
                  <!--  Fin de l'Affichage du message de succès -->
                        <div class="row justify-content-end">
                          <div class="col-sm-10 ">
                            <button type="submit" class="btn btn-primary" value="Envoyer">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Salle</h5>
                    </div>
                    <div class="card-body">
                      <!-- Form 2  Ajouter  Salle  -->
                      <form action="{{ route('forms.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_id" value="2">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NomSalle">Nom</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="NomSalle" name="NomSalle" placeholder="Entrez le nom du Salle " />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="CapaciteSalle">Capacité</label>
                          <div class="col-sm-10">
                            <input
                              type="number"
                              class="form-control"
                              id="CapaciteSalle"
                              name="CapaciteSalle"
                              placeholder="0000"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Disponibilité</label>
                          <div class="col-sm-10">
                            <button type="button" id="boutonaffiche" class="btn btn-outline-primary mb-1">Afficher le tableau des disponibilités</button>
                                
                                  <table id="tableau-disponibilites" class="table" style="display: none;" >
                                  
                                    <thead>
                                      <tr>
                                        <th>Jour</th>
                                        <th>Intervalle 1</th>
                                        <th>Intervalle 2</th>
                                        <th>Intervalle 3</th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                      <tr>
                                        
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-4">
                                              <select name="Jour_Dispo[]" id="jour" class="form-control">
                                                <option value="lundi">Lundi</option>
                                                <option value="mardi">Mardi</option>
                                                <option value="mercredi">Mercredi</option>
                                                <option value="jeudi">Jeudi</option>
                                                <option value="vendredi">Vendredi</option>
                                                <option value="samedi">Samedi</option>
                                                <option value="dimanche">Dimanche</option>
                                              </select>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int1[]" class="form-control">
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int1[]" class="form-control">
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int2[]" class="form-control">
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int2[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int3[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int3[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                    <button  type="button"  id="btn_add" class="btn btn2 btn-outline-primary m-1"  style="display: none;" onclick="ajouterLigneDSalle()">Ajouter ligne</button>
                             
                                 <!-- JavaScript    -->
                                 <script>
                                 
                                          const affichBouton = document.getElementById('boutonaffiche');
                                          const tableau = document.getElementById('tableau-disponibilites');
                                          const deuxiemeBouton = document.getElementById('btn_add');  
                                          affichBouton.addEventListener('click', function() {
                                            tableau.style.display = 'block';
                                            deuxiemeBouton.style.display = 'block';
                                          });
                                    
                                      function ajouterLigneDSalle() {
                                      var tableau = document.getElementById("tableau-disponibilites");
                                      var lignes = tableau.getElementsByTagName("tr");
                                      if (lignes.length < 8) {
                                        var nouvelleLigne = document.createElement("tr");
                                        nouvelleLigne.innerHTML = `
                                        
                                          <td>
                                            <div class="row">
                                              <div class="col-6 m-1">
                                                <select name="Jour_Dispo[]" class="form-control">
                                                  <option value="lundi">Lundi</option>
                                                  <option value="mardi">Mardi</option>
                                                  <option value="mercredi">Mercredi</option>
                                                  <option value="jeudi">Jeudi</option>
                                                  <option value="vendredi">Vendredi</option>
                                                  <option value="samedi">Samedi</option>
                                                  <option value="dimanche">Dimanche</option>
                                                </select>
                                              </div>
                                            </div>
                                          </td>
                                          <td>
                                            <div class="row">
                                              <div class="col-6 m-1">
                                                <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                                <input type="time" name="Disp_HeureDébut_Int1[]" class="form-control" >
                                              </div>
                                              <div class="col-6 m-1">
                                                <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                                <input type="time" name="Disp_HeureFin_Int1[]" class="form-control" >
                                              </div>
                                            </div>        
                                          </td>
                                          <td>
                                            <div class="row">
                                              <div class="col-6 m-1">
                                                <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                                <input type="time" name="Disp_HeureDébut_Int2[]" class="form-control" >
                                              </div>
                                              <div class="col-6 m-1">
                                                <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                                <input type="time" name="Disp_HeureFin_Int2[]" class="form-control" >
                                              </div>
                                            </div>        
                                          </td>
                                          <td>
                                            <div class="row">
                                              <div class="col-6 m-1">
                                                <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                                <input type="time" name="Disp_HeureDébut_Int3[]" class="form-control" >
                                              </div>
                                              <div class="col-6 m-1">
                                                <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                                <input type="time" name="Disp_HeureFin_Int3[]" class="form-control" >
                                              </div>
                                            </div>        
                                          </td>
                                          <td>
                                            <button class="btn btn2 btn-outline-primary m-1" onclick="supprimerLigneDSalle(this)">Supprimer</button>
                                          </td>
                                        `;
                                        tableau.appendChild(nouvelleLigne);
                                      }
                                    }
                                    function supprimerLigneDSalle(button) {
                                      var ligne = button.parentNode.parentNode;
                                      ligne.parentNode.removeChild(ligne);
                                    }
                                  </script>
                          </div>
                        </div>
                        
                        <!-- Affichage du message de succès -->
                        @if(session('successMessageAjoutSalle'))
                                  <div class="row mb-3">
                                      <div class="col-sm-12">
                                          <div class="alert alert-success" role="alert">
                                              {{ session('successMessageAjoutSalle') }}
                                          </div>
                                      </div>
                                  </div>
                                  @endif
                        <!--  Fin de l'Affichage du message de succès -->
                        <div class="row justify-content-end">
                          <div class="col-sm-10 ">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- FORMS 3 & 4 -->
            <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-3w">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Enseignant</h5>
                    </div>
                    <div class="card-body">
                      <!-- From 3 -->
                      <form action="{{ route('forms.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_id" value="3">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NomEns">Nom</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="NomEns" name="NomEns" placeholder="Entrez votre nom" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="PrenomEns">Prénom</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="PrenomEns"
                              name="PrenomEns"
                              placeholder="Entrez votre prénom"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="MailEns">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="MailEns"
                                name="MailEns"
                                class="form-control"
                                placeholder="example@example.com"
                                aria-label=""
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NumTelEns">Numéro Téléphone</label>
                          <div class="col-sm-10">
                            <input
                              type="tel"
                              id="NumTelEns"
                              name="NumTelEns"
                              class="form-control phone-mask"
                              placeholder="0000000000"
                              name="telephone"
                              pattern="[0-9]{10}" required
                            />
                          </div>
                        </div>
                        <!--   le choix a partir de la base donnees      -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="NomFormation">Formations</label>
                          <div class="col-sm-10">
                              <select name="NomFormation[]" id="formationEns" multiple>
                              </select>
                              <script>
                                  $(document).ready(function() {
                                      $.ajax({
                                          url: '/formations',  // L'URL vers votre route qui récupère les formations
                                          type: 'GET',
                                          success: function(response) {
                                              var formations = response.formations;
                                              var select = $('#formationEns');
                                              for (var i = 0; i < formations.length; i++) {
                                                  select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                              }
                                              new MultiSelectTag('formationEns');
                                          }
                                      });
                                  });
                              </script>      
                          </div>
                      </div>

             <!--   le  FIN  DE choix a partir de la base donnees      -->
        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Disponibilité</label>
                          <div class="col-sm-10">
                          <button type="button" id="boutonafficheEns" class="btn btn-outline-primary mb-1">Afficher le tableau des disponibilités</button>
  
                            <table id="tableau-disponibilitesENS" class="table" style="display: none;" >
                                  
                                  <thead>
                                    <tr>
                                      <th>Jour</th>
                                      <th>Intervalle 1</th>
                                      <th>Intervalle 2</th>
                                      <th>Intervalle 3</th>
                                    </tr>
                                  </thead>
                                  <tbody class="table-border-bottom-0">
                                    <tr>
                                      
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-4">
                                            <select name="Jour_Dispo[]" class="form-control">
                                              <option value="lundi">Lundi</option>
                                              <option value="mardi">Mardi</option>
                                              <option value="mercredi">Mercredi</option>
                                              <option value="jeudi">Jeudi</option>
                                              <option value="vendredi">Vendredi</option>
                                              <option value="samedi">Samedi</option>
                                              <option value="dimanche">Dimanche</option>
                                            </select>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" name="Disp_HeureDébut_Int1[]" class="form-control">
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" name="Disp_HeureFin_Int1[]" class="form-control" >
                                          </div>
                                        </div>        
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" name="Disp_HeureDébut_Int2[]" class="form-control" >
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" name="Disp_HeureFin_Int2[]" class="form-control" >
                                          </div>
                                        </div>        
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" name="Disp_HeureDébut_Int3[]" class="form-control" >
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" name="Disp_HeureFin_Int3[]" class="form-control" >
                                          </div>
                                        </div>        
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                  <button  type="button"  id="btn_addDens" class="btn btn2 btn-outline-primary m-1"  style="display: none;" onclick="ajouterLigneDEns()">Ajouter ligne</button>
                           
                               <!-- JavaScript    -->
                               <script>
                                
                                        const affichBoutonEns = document.getElementById('boutonafficheEns');
                                        const tableauEns = document.getElementById('tableau-disponibilitesENS');
                                        const BoutonAddDens = document.getElementById('btn_addDens');  
                                        affichBoutonEns.addEventListener('click', function() {
                                          tableauEns.style.display = 'block';
                                          BoutonAddDens.style.display = 'block';
                                        });
                                  
                                    function ajouterLigneDEns() {
                                    var tableau = document.getElementById("tableau-disponibilitesENS");
                                    var lignes = tableau.getElementsByTagName("tr");
                                    if (lignes.length < 8) {
                                      var nouvelleLigne = document.createElement("tr");
                                      nouvelleLigne.innerHTML = `
                                      
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <select name="Jour_Dispo[]" class="form-control">
                                                <option value="lundi">Lundi</option>
                                                <option value="mardi">Mardi</option>
                                                <option value="mercredi">Mercredi</option>
                                                <option value="jeudi">Jeudi</option>
                                                <option value="vendredi">Vendredi</option>
                                                <option value="samedi">Samedi</option>
                                                <option value="dimanche">Dimanche</option>
                                              </select>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int1[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int1[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int2[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int2[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int3[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int3[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <button class="btn btn2 btn-outline-primary m-1" onclick="supprimerLigne(this)">Supprimer</button>
                                        </td>
                                      `;
                                      tableau.appendChild(nouvelleLigne);
                                    }
                                  }
                                  function supprimerLigne(button) {
                                    var ligne = button.parentNode.parentNode;
                                    ligne.parentNode.removeChild(ligne);
                                  }
                                </script>
                          </div>
                        </div>

                        <!-- Affichage du message de succès -->
                        @if(session('successMessageAjoutEns'))
                                  <div class="row mb-3">
                                      <div class="col-sm-12">
                                          <div class="alert alert-success" role="alert">
                                              {{ session('successMessageAjoutEns') }}
                                          </div>
                                      </div>
                                  </div>
                                  @endif
                        <!--  Fin de l'Affichage du message de succès -->
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header m-4 d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Etudiant</h5>
                    </div>
                    <div class="card-body">
                      <!-- Form 4 --> 
                      <form action="{{ route('forms.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_id" value="4">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NomEtd">Nom</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="NomEtd" name="NomEtd" placeholder="Entrez votre nom" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="PrenomEtd">Prénom</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="PrenomEtd"
                              name="PrenomEtd"
                              placeholder="Entrez votre prénom"
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="MailEtd">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="MailEtd"
                                name="MailEtd"
                                class="form-control"
                                placeholder="example@example.com"
                                aria-label=""
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NumTelEtd">Numéro Téléphone</label>
                          <div class="col-sm-10">
                            <input
                              type="tel"
                              id="NumTelEtd"
                              name="NumTelEtd"
                              class="form-control phone-mask"
                              placeholder="0000000000"
                              name="telephone"
                              pattern="[0-9]{10}" required
                            />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Disponibilité</label>
                          <div class="col-sm-10">
                          <button type="button" id="boutonafficheET" class="btn btn-outline-primary mb-1">Afficher le tableau des disponibilités</button>
                          <table id="tableau-disponibilitesET" class="table" style="display: none;" >
                                  
                                  <thead>
                                    <tr>
                                      <th>Jour</th>
                                      <th>Intervalle 1</th>
                                      <th>Intervalle 2</th>
                                      <th>Intervalle 3</th>
                                    </tr>
                                  </thead>
                                  <tbody class="table-border-bottom-0">
                                    <tr>
                                      
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-4">
                                            <select name="Jour_Dispo[]" class="form-control">
                                              <option value="lundi">Lundi</option>
                                              <option value="mardi">Mardi</option>
                                              <option value="mercredi">Mercredi</option>
                                              <option value="jeudi">Jeudi</option>
                                              <option value="vendredi">Vendredi</option>
                                              <option value="samedi">Samedi</option>
                                              <option value="dimanche">Dimanche</option>
                                            </select>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" name="Disp_HeureDébut_Int1[]" class="form-control" >
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" name="Disp_HeureFin_Int1[]" class="form-control" >
                                          </div>
                                        </div>        
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" name="Disp_HeureDébut_Int2[]" class="form-control" >
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" name="Disp_HeureFin_Int2[]" class="form-control" >
                                          </div>
                                        </div>        
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" name="Disp_HeureDébut_Int3[]" class="form-control" >
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" name="Disp_HeureFin_Int3[]" class="form-control" >
                                          </div>
                                        </div>        
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                  <button  type="button"  id="btn_addDET" class="btn btn2 btn-outline-primary m-1"  style="display: none;" onclick="ajouterLigneET()">Ajouter ligne</button>
                           
                               <!-- JavaScript    -->
                                <script>
                                        const affichBoutonET = document.getElementById('boutonafficheET');
                                        const tableauET = document.getElementById('tableau-disponibilitesET');
                                        const BoutonAddDEt = document.getElementById('btn_addDET');  
                                        affichBoutonET.addEventListener('click', function() {
                                          tableauET.style.display = 'block';
                                          BoutonAddDEt.style.display = 'block';
                                        });
                                  
                                    function ajouterLigneET() {
                                    var tableau = document.getElementById("tableau-disponibilitesET");
                                    var lignes = tableau.getElementsByTagName("tr");
                                    if (lignes.length < 8) {
                                      var nouvelleLigne = document.createElement("tr");
                                      nouvelleLigne.innerHTML = `
                                      
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <select name="Jour_Dispo[]" class="form-control">
                                                <option value="lundi">Lundi</option>
                                                <option value="mardi">Mardi</option>
                                                <option value="mercredi">Mercredi</option>
                                                <option value="jeudi">Jeudi</option>
                                                <option value="vendredi">Vendredi</option>
                                                <option value="samedi">Samedi</option>
                                                <option value="dimanche">Dimanche</option>
                                              </select>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int1[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int1[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int2[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int2[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="Disp_HeureDébut_Int3[]" class="form-control" >
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="Disp_HeureFin_Int3[]" class="form-control" >
                                            </div>
                                          </div>        
                                        </td>
                                        <td>
                                          <button class="btn btn2 btn-outline-primary m-1" onclick="supprimerLigne(this)">Supprimer</button>
                                        </td>
                                      `;
                                      tableau.appendChild(nouvelleLigne);
                                    }
                                  }
                                  function supprimerLigne(button) {
                                    var ligne = button.parentNode.parentNode;
                                    ligne.parentNode.removeChild(ligne);
                                  }
                                </script>
                          </div>
                        </div>
                         <!-- Affichage du message de succès -->
                         @if(session('successMessageAjoutET'))
                                  <div class="row mb-3">
                                      <div class="col-sm-12">
                                          <div class="alert alert-success" role="alert">
                                              {{ session('successMessageAjoutET') }}
                                          </div>
                                      </div>
                                  </div>
                                  @endif
                        <!--  Fin de l'Affichage du message de succès -->
                        <div class="row justify-content-end">
                          <div class="col-sm-10 m-3">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- form 6 -->
            <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Groupe</h5>
                    </div>
                    <div class="card-body">
                      <!-- Form 6  Ajouter Groupe -->
                      <form action="{{ route('forms.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="form_id" value="6">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NomGrp">Nom</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="NomGrp" name="NomGrp" placeholder="Entrez le nom de groupe" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="CapaciteGrp">Capacité</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="CapaciteGrp" name="CapaciteGrp" placeholder="0000" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="NbrEtudiants">Nombre Etudiants</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="NbrEtudiants" name="NbrEtudiants" placeholder="0000" />
                          </div>
                        </div>
                        <!--   le choix a partir de la base donnees      -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="NomFormation">Formations</label>
                          <div class="col-sm-10">
                              <select name="NomFormation[]" id="formationGrp" multiple>
                              </select>
                              <script>
                                  $(document).ready(function() {
                                      $.ajax({
                                          url: '/formations',  // L'URL vers votre route qui récupère les formations
                                          type: 'GET',
                                          success: function(response) {
                                              var formations = response.formations;
                                              var select = $('#formationGrp');
                                              for (var i = 0; i < formations.length; i++) {
                                                  select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                              }
                                              new MultiSelectTag('formationGrp');
                                          }
                                      });
                                  });
                              </script>      
                          </div>
                        </div>

             <!--   le  FIN  DE choix a partir de la base donnees      -->
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="TypeFormation">Le type de formation</label>
                          <div class="col-sm-10">
                              <select class="form-select" id="TypeFormation" name="TypeFormation" aria-label="Default select example" >
                                <option selected>--------------------</option>
                                <option value="Formation-Normale">Formation Normale</option>
                                <option value="Formation-Accélérée">Formation Accélérée</option>
                              </select>
                              <script>
                                var inputNomGroupe = document.getElementById('NomGrp');
                                var selectTypeGroupe = document.getElementById('TypeFormation');

                                
                                selectTypeGroupe.addEventListener('change', function() {
                                  var typeSelectionne = selectTypeGroupe.value;
                                  var nomGroupe = inputNomGroupe.value;

                                  if (nomGroupe.trim() !== '') {
                                    
                                    nomGroupe += ' (' + typeSelectionne + ')';
                                  }

                              
                                  inputNomGroupe.value = nomGroupe;
                                });
                              </script>
                          </div>
                        </div>

                        

                         <!-- Affichage du message de succès -->
                         @if(session('successMessageFormGroupe'))
                                  <div class="row mb-3">
                                      <div class="col-sm-12">
                                          <div class="alert alert-success" role="alert">
                                          {{ session('successMessageFormGroupe') }}
                                          </div>
                                      </div>
                                  </div>
                                  @endif
                  <!--  Fin de l'Affichage du message de succès -->

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

             
        <!-- / Content -->
        
<!----------------------------------------------------------------------------------------------------------------------- -->
        <!-- Footer -->
            <div class="footer-clean">
            <footer>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="https://epg.ma/cr%C3%A9ation-sites-web.php"> Création web</a></li>
                                <li><a href="https://epg.ma/cr%C3%A9ation-application-mobile.php">Création mobile</a></li>
                                <li><a href="https://epg.ma/r%C3%A9f%C3%A9rencement-naturel-seo.php">Référencement web</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <a href="https://epg.ma/A-propos.php"><h3>A propos</h3></a>
                            <ul>
                                <li>Nous somme une Société, entreprise et agence de services informatiques.</li>
                                <li>Une école, établissement et centre de formations supérieur à Fès.</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Dilpomes</h3>
                            <ul>
                                <li><a href="https://epg.ma/Diplome/technicien/">Technicien</a></li>
                                <li><a href="https://epg.ma/Diplome/licenceProfessionel/">Licence Professionnelle</a></li>
                                <li><a href="https://epg.ma/Diplome/masterProfessionel/">Master Professionnel</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-linkedin"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                            <p class="copyright">Ecole Polytechnique Des Génies © 2023</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- / Footer -->
          <!--  Modal ENS -->
      <div>
            <div class="modal fade Ens"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                  <div class="row">
                                    <!-- Basic Layout -->
                                    <div class="col-xxl">
                                      <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                          <h5 class="mb-0">Choisir un enseignant</h5>
                                        </div>
                                        <div class="card-body">
                                          <!-- Form ENSListe -->
                                          <form action="{{ route('lister-enseignant.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="form_id" value="5">
                                            <div class="row mb-4">
                                                <label class="col-sm-2 col-form-label" for="NomEns">Enseignant</label>
                                                <div class="col-sm-10">
                                                    <select name="NomEns[]" id="ENSLISTER" multiple>
                                                    </select>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $.ajax({
                                                                url: '/enseignats',  // L'URL vers votre route qui récupère les étudiants
                                                                type: 'GET',
                                                                success: function(response) {
                                                                    var enseignats = response.enseignats;
                                                                    var select = $('#ENSLISTER');
                                                                    for (var i = 0; i < enseignats.length; i++) {
                                                                        select.append('<option value="' + enseignats[i].id + '">' + enseignats[i].NomEns + ' ' + enseignats[i].PrenomEns + '</option>');
                                                                    }
                                                                    new MultiSelectTag('ENSLISTER');
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>                                                                                  
                                            <div class="row justify-content-end">
                                              <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                              </div>
                                            </div>
                                          </form>

                                          <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             

            </div>
          </div>
           <!--  Modal ET -->
           <div >
            <div class="modal fade ET"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                  <div class="row">
                                    <!-- Basic Layout -->
                                    <div class="col-xxl">
                                      <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                          <h5 class="mb-0">Choisir un enseignant</h5>
                                        </div>
                                        <div class="card-body">
                                          <!-- Form ETListe -->
                                          <form action="{{ route('lister-etudiant.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="form_id" value="5">
                                            <div class="row mb-4">
                                                <label class="col-sm-2 col-form-label" for="NomEtd">Étudiants</label>
                                                <div class="col-sm-10">
                                                    <select name="NomEtd[]" id="etudiantGrp" multiple>
                                                    </select>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $.ajax({
                                                                url: '/etudiants',  // L'URL vers votre route qui récupère les étudiants
                                                                type: 'GET',
                                                                success: function(response) {
                                                                    var etudiants = response.etudiants;
                                                                    var select = $('#etudiantGrp');
                                                                    for (var i = 0; i < etudiants.length; i++) {
                                                                        select.append('<option value="' + etudiants[i].id + '">' + etudiants[i].NomEtd + ' ' + etudiants[i].PrenomEtd + '</option>');
                                                                    }
                                                                    new MultiSelectTag('etudiantGrp');
                                                                }
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                              <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                              </div>
                                            </div>
                                          </form>

                                          <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             

            </div>
          </div>
            
           <!--  Modal Groupe -->
           <div >
            <div class="modal fade Groupe"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                  <div class="row">
                                    <!-- Basic Layout -->
                                    <div class="col-xxl">
                                      <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                          <h5 class="mb-0">Choisir un groupe</h5>
                                        </div>
                                        <div class="card-body">
                                          <!-- Form ETListe -->
                                          <form action="{{ route('lister-groupe.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="form_id" value="5">
                                            <div class="row mb-4">
                                              <label class="col-sm-2 col-form-label" for="NomFormation[]"> Formation</label>
                                              <div class="col-sm-10">
                                                  <select name="NomFormation[]"  class="form-select" id="formationId2">
                                                      <!-- Options seront ajoutées dynamiquement via AJAX -->
                                                  </select>
                                              </div>
                                            </div>
                                            <div class="row mb-4">
                                                  <label class="col-sm-2 col-form-label" for="NomGrp[]">Groupe</label>
                                                  <div class="col-sm-10">
                                                      <select name="NomGrp[]"  class="form-select form-control" id="groupeInsc2">
                                                          <!-- Options seront ajoutées dynamiquement via AJAX -->
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
                                                              var select = $('#formationId2');
                                                              for (var i = 0; i < formations.length; i++) {
                                                                  select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                                              }
                                                              //new MultiSelectTag('formationId');
                                                          }
                                                      });

                                                      // Événement de changement sur la première liste déroulante
                                                      $('#formationId2').change(function() {
                                                          var selectedFormationId = $(this).val();
                                                          if (selectedFormationId) {
                                                              // Récupérer les groupes correspondants à l'ID de formation sélectionné
                                                              $.ajax({
                                                                  url: '/groupes/' + selectedFormationId,  // L'URL vers votre route qui récupère les groupes pour une formation donnée
                                                                  type: 'GET',
                                                                  success: function(response) {
                                                                      var groupes = response.groupes;
                                                                      var select = $('#groupeInsc2');
                                                                      select.empty(); // Vider les options existantes
                                                                      for (var i = 0; i < groupes.length; i++) {
                                                                          select.append('<option value="' + groupes[i].id + '">' + groupes[i].NomGrp + '</option>');
                                                                      }
                                                                      
                                                                  }
                                                              });
                                                          } else {
                                                              // Si aucun ID de formation n'est sélectionné, vider la liste des groupes
                                                              $('#groupeInsc2').empty();
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
                                          <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             

            </div>
          </div>
          <!-- modale Salle -->
          <div>
            <div class="modal fade Salle"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="container-xxl flex-grow-1 container-p-y">
                                  <div class="row">
                                    <!-- Basic Layout -->
                                    <div class="col-xxl">
                                      <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                          <h5 class="mb-0">Choisir la salle</h5>
                                        </div>
                                        <div class="card-body">
                                          <!-- Form 1 -->
                                          <form  action="{{ route('lister-salle.store') }}" method="POST" >
                                                  @csrf

                                                  <!--   le choix a partir de la base donnees      -->
                                                        <div class="row mb-4">
                                                          <label class="col-sm-2 col-form-label" for="NomSalle">Salle</label>
                                                          <div class="col-sm-10">
                                                              <select name="NomSalle[]" id="listeSalle2" multiple >
                                                              </select>
                                                              <script>
                                                                  $(document).ready(function() {
                                                                      $.ajax({
                                                                          url: '/salles',  // L'URL vers votre route qui récupère les formations
                                                                          type: 'GET',
                                                                          success: function(response) {
                                                                              var salles = response.salles;
                                                                              var select = $('#listeSalle2');
                                                                              for (var i = 0; i < salles.length; i++) {
                                                                                  select.append('<option value="' + salles[i].id + '">' + salles[i].NomSalle + '</option>');
                                                                              }
                                                                              new MultiSelectTag('listeSalle2');
                                                                          }
                                                                      });
                                                                  });
                                                              </script>      
                                                          </div>
                                                        </div>

                                                    <!--   le  FIN  DE choix a partir de la base donnees      -->
                                            
                                                  <div class="row justify-content-end">
                                                    <div class="col-sm-10 ">
                                                      <button type="submit" class="btn btn-primary" value="Envoyer">Envoyer</button>
                                                    </div>
                                                  </div>
                                                </form>
                                          <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                                                </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
            </div>
          </div>

        
         

        
       <!-- Modal -->
       <div class="modal fade staticBackdrop1"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              
                              <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                <div class="modal-header">
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="container-xxl flex-grow-1 container-p-y">
                                <div class="row">
                                  <!-- Basic Layout -->
                                  <div class="col-xxl">
                                    <div class="card mb-4">
                                      <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">La formation</h5>
                                      </div>
                                      <div class="card-body">
                                        <!-- Form 1 -->
                                        <form  action="{{ route('lister-formation.store') }}" method="POST" >
                                                @csrf
                                                <div class="row mb-4">
                                                  <label class="col-sm-2 col-form-label" for="NomFormation">Formations</label>
                                                  <div class="col-sm-10">
                                                      <select name="NomFormation[]" id="formation21" multiple>
                                                      </select>
                                                      <script>
                                                          $(document).ready(function() {
                                                              $.ajax({
                                                                  url: '/formations',  // L'URL vers votre route qui récupère les formations
                                                                  type: 'GET',
                                                                  success: function(response) {
                                                                      var formations = response.formations;
                                                                      var select = $('#formation21');
                                                                      for (var i = 0; i < formations.length; i++) {
                                                                          select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                                                      }
                                                                      new MultiSelectTag('formation21');
                                                                  }
                                                              });
                                                          });
                                                      </script>      
                                                  </div>
                                                </div>

                                    <!--   le  FIN  DE choix a partir de la base donnees      -->                                                                                 
                                                <div class="row justify-content-end">
                                                  <div class="col-sm-10 ">
                                                    <button type="submit" class="btn btn-primary" value="Envoyer">Envoyer</button>
                                                  </div>
                                                </div>
                                              </form>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div>
                             

                            </div>
         
  
   
    <!-- Core JS -->
    
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    
  </body>
</html>