<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>formations</title>
    <meta name="description" content="" />

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
   

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/css/style.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>

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
   

    <style>
        td, th {
            vertical-align: middle !important;            
        }
        i{
          font-size: 1.3em !important;
        }
        .red-icon1{
            color:red;
            cursor: pointer;
        }
        .modiff{
            color: blue;
            cursor: pointer;
        }
        
    </style> 
</head>
<body>

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
                <a class="nav-link underLine" href="{{ url('/home') }}">Home</a>
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

    <div class="container-xl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liste /</span>Formation</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            
            <div class="table-responsive text-nowrap m-2">
        
                <h4 class="H3salle">Nom de Formaion : <small>{{ $nomFormation  }}</small></h4>
         
                <h4 class="H3salle">Catégorie : <small>{{ $catégorie }}</small></h4>

                <h4 class="H3salle">Groupes :</h4>
                @if(count($groupes) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom du Groupe</th>
                                <th>Capacité du Groupe</th>
                                <th>Type de Formation</th>
                                <th>Nombre des Etudiants</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groupes as $groupe)
                            <tr class="text-center">
                                <td>{{ $groupe['NomGrp'] }}</td>
                                <td>
                                    {{ $groupe['CapaciteGrp'] }} 
                                </td>
                                <td>
                                    {{ $groupe['TypeFormation'] }} 
                                </td>
                                <td>
                                    {{ $groupe['NbrEtudiants'] }} 
                                </td>        
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <p class="alert alert-danger" role="alert">Aucun groupe trouvé pour cette formation!!</p>
                    @endif

                          
        </div>
           

            <div class="d-flex justify-content-end ">
              <button class="btn btn-outline-primary m-3" data-bs-toggle="modal" data-bs-target="#editModal{{ $formation->id }}">
                      <i class="fa fa-edit fa-2x"></i> Modiffier
              </button>
                                  
              <button  class="btn btn-outline-danger m-3"  data-bs-toggle="modal" data-bs-target="#deleteModal{{ $formation->id }}">
                      <i class="fa fa-trash fa-2x red-icon"></i> Supprimer
              </button>
                        
            </div>
            

            <!-- modal -->                
            <div class="modal fade"  role="dialog" id="deleteModal{{ $formation->id }}">
                    <div class="modal-dialog" >
                        <div class="modal-content">
                            <div class="modal-header">
                                
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Etes vous sûr de vouloir supprimer la formation ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                <form id="deleteForm-{{ $formation->id }}" action="{{ route('formations.destroy', ['id' => $formation->id]) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Confirmer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="editModal{{ $formation->id }}" role="dialog">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Modifier les informations de cette formation</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('formations.update', ['id' => $formation->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="nom-formation">Nom de la formation</label>
                                <input type="text" class="form-control" id="nom-formation" name="NomFormation" value="{{ $formation->NomFormation }}" required>
                              </div>
                              <div class="form-group">
                                <label for="categorie">Catégorie</label>
                                <select class="form-select" id="categorie" name="Catégorie" aria-label="Default select example">
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                          </form>
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

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

</body>
</html>