<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>groupes</title>
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
        .red-icon{
            color:red;
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
                <a class="nav-link underLine " href="{{ url('/home') }}">Home</a>
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liste /</span>Groupe</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            
            <div class="table-responsive text-nowrap m-2">
        
                <h4 class="H3salle">Nom de groupe : <small>{{ $nomGrp }}</small></h4>
         
                <h4 class="H3salle">Capacité du groupe : <small>{{ $capaciteGrp }}</small></h4>

                <h4 class="H3salle">Formation : <small>{{ $nomFormation }}</small></h4>
         
                <h4 class="H3salle">Le type de groupe : <small>{{ $typeFormation }}</small></h4>

                <h4 class="H3salle">Le Nombre des Etudiants :<small>{{ $nbrEtudiants }}</small></h4>

                <h4 class="H3salle">Les étudiants :</h4>
            
                <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nom Etudiant</th>
                                    <th>Prénom Etudiant</th>
                                    <th>Email</th>
                                    <th>N°Téléphone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="">

                            @foreach($etudiants as $etudiantData)
                                <tr class="text-center">    
                                    <td>{{ $etudiantData['nomEtd'] }}</td>
                                    <td>{{ $etudiantData['prenomEtd'] }}</td>
                                    <td>{{ $etudiantData['mailEtd'] }}</td>
                                    <td>{{ $etudiantData['numTelEtd'] }}</td>
                                    
                                    <td>
                                        <i class="fa fa-trash fa-2x red-icon"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModalET{{ $etudiantData['etudiant']->id }}">
                                        </i>
                                        
                                        <div class="modal fade" id="deleteModalET{{ $etudiantData['etudiant']->id }}" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p>Etes vous sûr de vouloir supprimer cet étudiant ?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">Annuler</button>
                                                        <form id="deleteFormET-{{ $etudiantData['etudiant']->id }}" action="{{ route('groupes.destroyEtudiantGrp', ['id' => $etudiantData['etudiant']->id, 'idGroupe' => $groupe->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Confirmer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById("deleteFormET-{{ $etudiantData['etudiant']->id }}").addEventListener("submit", function(event){
                                                event.preventDefault();
                                                event.stopPropagation(); // Empêche la propagation de l'événement de soumission du formulaire
                                                this.submit();
                                            });
                                        </script>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                </div>
            </div>
           

            <div class="d-flex justify-content-end ">
              <button class="btn btn-outline-primary m-3" data-bs-toggle="modal" data-bs-target="#editModal{{ $groupe->id }}">
                      <i class="fa fa-edit fa-2x"></i> Modiffier
              </button>
                                  
              <button  class="btn btn-outline-danger m-3"  data-bs-toggle="modal" data-bs-target="#deleteModal{{ $groupe->id }}">
                      <i class="fa fa-trash fa-2x red-icon"></i> Supprimer
              </button>
                        
            </div>
            

            <!-- modal Delete -->                
            <div class="modal fade"  role="dialog" id="deleteModal{{ $groupe->id }}">
                    <div class="modal-dialog" >
                        <div class="modal-content">
                            <div class="modal-header">
                                
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Etes vous sûr de vouloir supprimer le groupe ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                <form id="deleteForm-{{ $groupe->id }}" action="{{ route('groupes.destroy', ['id' => $groupe->id]) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Confirmer</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- modal Update -->  
            <div class="modal fade" id="editModal{{ $groupe->id }}" role="dialog">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier les informations du groupe</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="updateForm-{{ $groupe->id }}" action="{{ route('groupes.update', ['id' => $groupe->id]) }}" method="POST">
                            @csrf
                                @method('PUT')
                                <input type="hidden" name="form_id" value="6">
                                <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nomGrp">Nom</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomGrp" name="nomGrp" value="{{ $nomGrp }}" placeholder="Entrez le nom de groupe" />
                                </div>
                                </div>
                                <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="capaciteGrp">Capacité</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="CapaciteGrp" name="capaciteGrp" value="{{ $capaciteGrp }}" placeholder="0000" />
                                </div>
                                </div>
                                <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nbrEtudiants">Nombre Etudiants</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nbrEtudiants" name="nbrEtudiants" value="{{ $nbrEtudiants }}" placeholder="0000" />
                                </div>
                                </div>
                                <!--   le choix a partir de la base donnees      -->
                                <div class="row mb-4">
                                <label class="col-sm-2 col-form-label" for="NomFormation">Formation</label>
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
                                <label class="col-sm-2 col-form-label" for="typeFormation">Le type de groupe</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="typeFormation" name="typeFormation" aria-label="Default select example" >
                                        <option selected value="{{ $typeFormation}}">{{ $typeFormation}}</option>
                                        <option value="Formation-Normale">Formation-Normale</option>
                                        <option value="Formation-Accélérée">Formation-Accélérée</option>
                                    </select>
                                    <script>
                                        var inputNomGrp = document.getElementById('nomGrp');
                                        var selectTypeFormation = document.getElementById('typeFormation');

                                        
                                        selectTypeFormation.addEventListener('change', function() {
                                        var typeSelectionne = selectTypeFormation.value;
                                        var nomGrp = inputNomGrp.value;

                                        if (nomGrp.trim() !== '') {
                                            
                                            nomGrp += ' (' + typeSelectionne + ')';
                                        }

                                    
                                        inputNomGrp.value = nomGrp;
                                        });
                                    </script>
                                </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuler</button>
                              <button type="submit" class="btn btn-primary" form="updateForm-{{ $groupe->id }}">Modifier</button>
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