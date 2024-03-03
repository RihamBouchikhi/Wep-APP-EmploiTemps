
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

    c

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

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>


    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <div>
      @if (Session::has('success_update'))
        <!-- Ajoutez ici le code pour afficher la boîte de dialogue -->
          <div class="modal fade" id="myModal12" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="MUD">La modification bien été faite</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        
      @endif
      <script>
        $(document).ready(function() {
          @if (Session::has('success_update'))
            $('#myModal12').modal('show');
          @endif
        });
      </script>
    </div>

    <div>
      @if (Session::has('success'))
        <!-- Ajoutez ici le code pour afficher la boîte de dialogue -->
          <div class="modal fade" id="myModal12Delete" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="MUD">La suppression bien été faite</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        
      @endif
      <script>
        $(document).ready(function() {
          @if (Session::has('success'))
            $('#myModal12Delete').modal('show');
          @endif
        });
      </script>
    </div>
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
              <a class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Formations">Formations</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a class="menu-link" data-bs-toggle="modal" data-bs-target=".staticBackdrop1">
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
                    <div>Liste des enseignants</div>
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
                  <a href="{{ route('login') }}" class="menu-link">
                    <div data-i18n="Basic">Se connecter</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('register') }}" class="menu-link">
                    <div data-i18n="Basic">S'inscrir</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ route('password.request') }}" class="menu-link">
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
                            <span class="fw-semibold d-block">  {{ Auth::user()->name }}</span>
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
      <div class="content-wrapper">    
        <section>
          <div class="container-xxl flex-grow-1 container-p-y">  
            <div class="slider">
                  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                      <div class="carousel-item active c-item">
                        <img src="../assets/img/imageSlider/2.jpg" class="d-block w-100 c-img" alt="...">
                          <div class="carousel-caption top-0 mt-5">
                            <H1>Planifier votre emplois du temps</H1>
                            <p>Optimisez votre temps et réduisez le stress lié à la planification de votre emploi du tempsgrace à notre solution en ligne.</p>
                            
                          </div>
                      </div>
                      <div class="carousel-item c-item">
                        <img src="../assets/img/imageSlider/2.jpg" class="d-block w-100 c-img" alt="...">
                        <div class="carousel-caption top-0 mt-5">
                          <H1>Planifier votre emplois du temps</H1>
                          <p>S'implifiez la gestion de votre emploi du temps avec notre outil de planification.</p>
                        </div>
                      </div>
                      <div class="carousel-item c-item">
                        <img src="../assets/img/imageSlider/2.jpg" class="d-block w-100 c-img" alt="...">
                        <div class="carousel-caption top-0 mt-5">
                          <H1>Planifier votre emplois du temps</H1>
                          <p>Gardez le controle sur votre emploi du temps en les gérant facilement.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
          </div>
          <div class="content-wrapper">   
            <div class="container">
          
            <button class="btn GET"  data-bs-toggle="modal" data-bs-target=".staticBackdrop-GET">Créer un emplois du temps</button>
                             <!-- Modal -->
                            <div class="modal fade staticBackdrop-GET"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              
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
                                        <h5 class="mb-0">Créer Votre Emploit Du Temps</h5>
                                      </div>
                                      <div class="card-body">
                                        <!-- Form 1 -->
                                        <form  action="{{ route('dispo-groupe.calculer') }}" method="POST" >
                                                @csrf
                                                <div class="row mb-4 ">
                                                  <label for="Disp_HeureDébut_Int2" class="col-sm-2 col-form-label">Date de début:</label>
                                                  <div class="col-sm-10">
                                                    <input type="date" name="Date_Début" class="form-control">
                                                  </div>
                                                </div>  
                                                <div class="row mb-4">
                                                  <label for="Disp_HeureFin_Int2" class="col-sm-2 col-form-label">Date de fin:</label>
                                                  <div class="col-sm-10">                                                   
                                                    <input type="date" name="Date_Fin" class="form-control" >
                                                  </div>
                                                </div> 
                                                <div class="row mb-4">
                                                  <label class="col-sm-2 col-form-label" for="NomFormation[]"> Formation</label>
                                                  <div class="col-sm-10">
                                                      <select name="NomFormation[]" class="form-select form-control"  id="formationIdGET">
                                                          <!-- Options seront ajoutées dynamiquement via AJAX -->
                                                      </select>
                                                  </div>
                                                  </div>
                                                  <div class="row mb-4">
                                                        <label class="col-sm-2 col-form-label" for="NomGrp[]">Groupe</label>
                                                        <div class="col-sm-10">
                                                            <select name="groupeId"  class="form-select form-control" id="groupeGET">
                                                                <!-- Options seront ajoutées dynamiquement via AJAX -->
                                                            </select>
                                                        </div>
                                                  </div>
                                                  

                                                  <div class="row mb-4">
                                                        <label class="col-sm-2 col-form-label" for="NomEns[]">Enseignat</label>
                                                        <div class="col-sm-10">
                                                            <select name="enseignantId"  class="form-select form-control" id="enseignatGET">
                                                                <!-- Options seront ajoutées dynamiquement via AJAX -->
                                                            </select>
                                                        </div>
                                                  </div>
                                                  <div class="row mb-4">
                                                          <label class="col-sm-2 col-form-label" for="NomSalle">Salle</label>
                                                          <div class="col-sm-10">
                                                              <select name="salleId" id="listeSalleGET" class="form-select">
                                                              </select>
                                                              <script>
                                                                  $(document).ready(function() {
                                                                      $.ajax({
                                                                          url: '/salles',  // L'URL vers votre route qui récupère les formations
                                                                          type: 'GET',
                                                                          success: function(response) {
                                                                              var salles = response.salles;
                                                                              var select = $('#listeSalleGET');
                                                                              for (var i = 0; i < salles.length; i++) {
                                                                                  select.append('<option value="' + salles[i].id + '">' + salles[i].NomSalle + '</option>');
                                                                              }
                                                                            
                                                                          }
                                                                      });
                                                                  });
                                                              </script>      
                                                          </div>
                                                  </div>
                                                  <script>
                                                       $(document).ready(function() {
                                                  // Chargement initial des ID de formation dans la première liste déroulante
                                                  $.ajax({
                                                      url: '/formations',
                                                      type: 'GET',
                                                      success: function(response) {
                                                          var formations = response.formations;
                                                          var select = $('#formationIdGET');
                                                          for (var i = 0; i < formations.length; i++) {
                                                              select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                                          }
                                                      }
                                                  });

                                                  // Événement de changement sur la première liste déroulante
                                                  $('#formationIdGET').change(function() {
                                                      var selectedFormationId = $(this).val();
                                                      if (selectedFormationId) {
                                                          // Récupérer les groupes correspondants à l'ID de formation sélectionné
                                                          $.ajax({
                                                              url: '/groupes/' + selectedFormationId,
                                                              type: 'GET',
                                                              success: function(response) {
                                                                  var groupes = response.groupes;
                                                                  var select = $('#groupeGET');
                                                                  select.empty(); // Vider les options existantes
                                                                  for (var i = 0; i < groupes.length; i++) {
                                                                      select.append('<option value="' + groupes[i].id + '">' + groupes[i].NomGrp + '</option>');
                                                                  }
                                                              }
                                                          });

                                                          // Récupérer les enseignants correspondants à l'ID de formation sélectionné
                                                          $.ajax({
                                                              url: '/enseignants/' + selectedFormationId,
                                                              type: 'GET',
                                                              success: function(response) {
                                                                  var enseignants = response.enseignants;
                                                                  var select = $('#enseignatGET');
                                                                  select.empty(); // Vider les options existantes
                                                                  for (var i = 0; i < enseignants.length; i++) {
                                                                      select.append('<option value="' + enseignants[i].id + '">' + enseignants[i].NomEns + ' ' + enseignants[i].PrenomEns + '</option>');
                                                                  }
                                                              }
                                                          });
                                                      } else {
                                                          // Si aucun ID de formation n'est sélectionné, vider la liste des groupes et des enseignants
                                                          $('#groupeGET').empty();
                                                          $('#enseignatGET').empty();
                                                      }
                                                  });
                                              });

                                                  </script>
                                                </div>

                                    <!--   le  FIN  DE choix a partir de la base donnees      -->
                                          
                                                <div class="row justify-content-end">
                                                  <div class="col-sm-10 ">
                                                    <button type="submit" class="btn btn-primary" value="Envoyer">Créer Emploit Du Temps</button>
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

            </div>
            
            
          </div>
          
         <div class="content-wrapper">   
            <div class="container">
      
              <div class="row">

                  <!-- Card 1 -->
                  <div class="card" style="width: 15rem;height: 24rem;">
                    <img src="../assets/img/CadrsImg/formation.jpg" class="card-img-top  imgcard">
                    <div class="card-body">
                      <h5 class="card-title">Ajouter Formation</h5>
                      <p class="card-text">Ajouter une formation à la liste des formations</p>
                      <a href="/adds"><button class="btn cardbtn">Ajouter</button></a>
                    </div>
                  </div>

                  <!-- Card 2 -->
                  <div class="card" style="width: 15rem; height: 24rem;">
                    <img src="../assets/img/CadrsImg/2206272-cours-du-soir-daeu-lille-300x250.webp" class="card-img-top  imgcard">
                    <div class="card-body">
                      <h5 class="card-title">Ajouter Enseignant</h5>
                      <p class="card-text">Ajouter un enseignant à la liste des enseignants</p>
                      <a href="/adds"><button class="btn cardbtn">Ajouter</button></a>
                    </div>
                  </div>

                  <!-- Card 3 -->
                  <div class="card" style="width: 15rem; height: 24rem;" >
                    <img src="../assets/img/CadrsImg/ET.png" class="card-img-top" id="imgEt">
                    <div class="card-body">
                      <h5 class="card-title">Ajouter Etudiant</h5>
                      <p class="card-text">Ajouter un étudiant à la liste des étudiants</p>
                      <a href="/adds"><button class="btn cardbtn">Ajouter</button></a>
                    </div>
                  </div>
                  <!-- Card 4 -->
                  <div class="card" style="width: 14rem; height: 24rem;" >
                    <img src="../assets/img/CadrsImg/students_09.jpg" class="card-img-top  imgcard">
                    <div class="card-body">
                      <h5 class="card-title">Ajouter Groupe</h5>
                      <p class="card-text">Ajouter un groupe à la liste des groupes</p>
                      <a href="/adds"><button class="btn cardbtn">Ajouter</button></a>
                    </div>
                  </div>
                  <!-- Card 5 -->
                  <div class="card" style="width: 15rem; height: 24rem;" >
                    <img src="../assets/img/CadrsImg/125.jpg" class="card-img-top imgcard">
                    <div class="card-body">
                      <h5 class="card-title">Ajouter Salle</h5>
                      <p class="card-text">Ajouter une salle à la liste des salles</p>
                      <a href="/adds"><button class="btn cardbtn">Ajouter</button></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>  
       </section>  
        <!-- / Content -->
      </div>  
      
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
        <!-- / Modale Formation -->
        <div>
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
                                        <h5 class="mb-0">Choisir la formation</h5>
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
        </div>
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
                                                  <select name="NomFormation[]" class="form-select form-control"  id="formationId">
                                                      <!-- Options seront ajoutées dynamiquement via AJAX -->
                                                  </select>
                                              </div>
                                            </div>
                                            <div class="row mb-4">
                                                  <label class="col-sm-2 col-form-label" for="NomGrp[]">Groupe</label>
                                                  <div class="col-sm-10">
                                                      <select name="NomGrp[]"  class="form-select form-control" id="groupeInsc">
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
                                                              var select = $('#formationId');
                                                              for (var i = 0; i < formations.length; i++) {
                                                                  select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                                              }
                                                              //new MultiSelectTag('formationId');
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
      
        <div class="buy-now" >
          <button class="btn lastbtn btn-buy-now" data-bs-toggle="modal" data-bs-target=".staticBackdrop-GET">Créer emploi du temps</button>
        </div>
        

         
         
  
    <!-- Modals -->
     <!-- Modal3 -->
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
                                                              <select name="NomSalle[]" id="listeSalle" class="form-select">
                                                              </select>
                                                              <script>
                                                                  $(document).ready(function() {
                                                                      $.ajax({
                                                                          url: '/salles',  // L'URL vers votre route qui récupère les formations
                                                                          type: 'GET',
                                                                          success: function(response) {
                                                                              var salles = response.salles;
                                                                              var select = $('#listeSalle');
                                                                              for (var i = 0; i < salles.length; i++) {
                                                                                  select.append('<option value="' + salles[i].id + '">' + salles[i].NomSalle + '</option>');
                                                                              }
                                                                            
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

  <!-- Modal2 -->

</html>
