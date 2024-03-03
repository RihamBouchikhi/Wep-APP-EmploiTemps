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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liste /</span>Enseignant</h4>
        <!-- Basic Bootstrap Table -->
        <div class="card">
            
            <div class="table-responsive text-nowrap m-2">
        
                <h4 class="H3salle">Nom d'Enseignant : <small>{{ $nomEnseignant }}</small></h4>
         
                <h4 class="H3salle">Prénom d'Enseignant : <small>{{ $prenomEns }}</small></h4>

                <h4 class="H3salle">Mail de L'enseignant: <small>{{ $mailEns }}</small></h4>
         
                <h4 class="H3salle">Numéro de téléphone de l'enseignant: <small>{{ $numTelEns }}</small></h4>

                <h4 class="H3salle">Formations :</h4>
                <ul>
                    @foreach ($formations as $formation)
                        <li>{{ $formation->NomFormation }}</li>
                    @endforeach
                </ul>

          
                <h4 class="H3salle">Disponibilités :</h4>
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Jour</th>
                            <th>Intervalle 1</th>
                            <th>Intervalle 2</th>
                            <th>Intervalle 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($disponibilites as $disponibilite)
                        <tr class="text-center">
                            <td>{{ $disponibilite['Jour'] }}</td>
                            <td>
                                 {{ $disponibilite['Heure début 1'] }} -
                                {{ $disponibilite['Heure fin 1'] }}
                            </td>
                            <td>
                                 {{ $disponibilite['Heure début 2'] }} -
                                {{ $disponibilite['Heure fin 2'] }}
                            </td>
                            <td>
                               {{ $disponibilite['Heure début 3'] }} -
                               {{ $disponibilite['Heure fin 3'] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           

            <div class="d-flex justify-content-end ">
              <button class="btn btn-outline-primary m-3" data-bs-toggle="modal" data-bs-target="#editModal{{ $enseignant->id }}">
                      <i class="fa fa-edit fa-2x"></i> Modiffier
              </button>
                                  
              <button  class="btn btn-outline-danger m-3"  data-bs-toggle="modal" data-bs-target="#deleteModal{{ $enseignant->id }}">
                      <i class="fa fa-trash fa-2x red-icon"></i> Supprimer
              </button>
                        
            </div>
            

            <!-- modal -->                
            <div class="modal fade"  role="dialog" id="deleteModal{{ $enseignant->id }}">
                    <div class="modal-dialog" >
                        <div class="modal-content">
                            <div class="modal-header">
                                
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Etes vous sûr de vouloir supprimer l'Enseignant ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                <form id="deleteForm-{{ $enseignant->id }}" action="{{ route('enseignants.destroy', ['id' => $enseignant->id]) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger" type="submit">Confirmer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="editModal{{ $enseignant->id }}" role="dialog">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Modifier les informations d'enseignant</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('enseignants.update', ['id' => $enseignant->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="form_id" value="2">
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="nomEnseignant">Nom</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomEnseignant" id="nomEnseignant" value="{{ $nomEnseignant }}" placeholder="Entrez le nom de l'enseignant" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="prenomEns">Prénom</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="prenomEns" name="prenomEns" value="{{ $prenomEns }}" placeholder="Entrez le prénom de l'enseignant" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="mailEns">Mail</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="mailEns" id="mailEns" value="{{ $mailEns }}" placeholder="example@example.com" />
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="numTelEns">Tél</label>
                              <div class="col-sm-10">
                                <input type="tel" class="form-control" name="numTelEns" id="numTelEns" value="{{ $numTelEns }}" placeholder="0000000000" />
                              </div>
                            </div>
                        <!--   le choix a partir de la base donnees      -->
                        <div class="row mb-4">
                          <label class="col-sm-2 col-form-label" for="NomFormation">Formations</label>
                          <div class="col-sm-10">
                              <select name="NomFormation[]" id="ModifierformationEns" multiple>
                                @foreach ($formations as $formation)
                                  <option value="{{ $formation->id}}" selected>{{ $formation->NomFormation}}</option>
                                @endforeach                
                              </select>
                              <script>
                                  $(document).ready(function() {
                                      $.ajax({
                                          url: '/formations',  // L'URL vers votre route qui récupère les formations
                                          type: 'GET',
                                          success: function(response) {
                                              var formations = response.formations;
                                              var select = $('#ModifierformationEns');
                                              for (var i = 0; i < formations.length; i++) {
                                                  select.append('<option value="' + formations[i].id + '">' + formations[i].NomFormation + '</option>');
                                              }
                                              new MultiSelectTag('ModifierformationEns');
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
                                <button type="button" id="boutonaffiche" class="btn btn-outline-primary mb-1">Afficher le tableau des disponibilités</button>

                                <table id="tableau-disponibilites" class="table" style="display: none;">
                                  <thead>
                                    <tr>
                                      <th>Jour</th>
                                      <th>Intervalle 1</th>
                                      <th>Intervalle 2</th>
                                      <th>Intervalle 3</th>
                                    </tr>
                                  </thead>
                                  <tbody class="table-border-bottom-0">
                                    @foreach ($disponibilites as $disponibilite)
                                    <tr>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-4">
                                            <select name="Jour_Dispo[]" id="jour" class="form-control">
                                              <option value="lundi" {{ $disponibilite['Jour'] == 'lundi' ? 'selected' : '' }}>Lundi</option>
                                              <option value="mardi" {{ $disponibilite['Jour'] == 'mardi' ? 'selected' : '' }}>Mardi</option>
                                              <option value="mercredi" {{ $disponibilite['Jour'] == 'mercredi' ? 'selected' : '' }}>Mercredi</option>
                                              <option value="jeudi" {{ $disponibilite['Jour'] == 'jeudi' ? 'selected' : '' }}>Jeudi</option>
                                              <option value="vendredi" {{ $disponibilite['Jour'] == 'vendredi' ? 'selected' : '' }}>Vendredi</option>
                                              <option value="samedi" {{ $disponibilite['Jour'] == 'samedi' ? 'selected' : '' }}>Samedi</option>
                                              <option value="dimanche" {{ $disponibilite['Jour'] == 'dimanche' ? 'selected' : '' }}>Dimanche</option>
                                            </select>
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int1"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" class="form-control" id="heureDebut1" name="heureDebut1[]" value="{{ $disponibilite['Heure début 1'] }}">
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time"  class="form-control" id="heureFin1" name="heureFin1[]" value="{{ $disponibilite['Heure fin 1'] }}">
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" class="form-control" id="heureDebut2" name="heureDebut2[]" value="{{ $disponibilite['Heure début 2'] }}">
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" class="form-control" id="heureFin2" name="heureFin2[]" value="{{ $disponibilite['Heure fin 2'] }}">
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                            <input type="time" class="form-control" id="heureDebut3" name="heureDebut3[]" value="{{ $disponibilite['Heure début 3'] }}">
                                          </div>
                                          <div class="col-6 m-1">
                                            <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                            <input type="time" class="form-control" id="heureFin3" name="heureFin3[]" value="{{ $disponibilite['Heure fin 3'] }}">
                                          </div>
                                        </div>
                                      </td>
                                      <td>
                                          <button class="btn btn2 btn-outline-primary m-1" onclick="supprimerLigneDSalle(this)">Supprimer</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                                <button type="button" id="btn_add" class="btn btn2 btn-outline-primary m-1" style="display: none;" onclick="ajouterLigneDSalle()">Ajouter ligne</button>

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
                                              <input type="time" name="heureDebut1[]" class="form-control">
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int1"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="heureFin1[]" class="form-control">
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int2"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="heureDebut2[]" class="form-control">
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int2"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="heureFin2[]" class="form-control">
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="row">
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureDébut_Int3"><small class="form-text text-muted">Heure de début:</small></label>
                                              <input type="time" name="heureDebut3[]" class="form-control">
                                            </div>
                                            <div class="col-6 m-1">
                                              <label for="Disp_HeureFin_Int3"><small class="form-text text-muted">Heure de fin:</small></label>
                                              <input type="time" name="heureFin3[]" class="form-control">
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <button class="btn btn2 btn-outline-primary m-1" onclick="supprimerLigneDSalle(this)">Supprimer</button>
                                        </td>
                                      `;
                                      tableau.appendChild(nouvelleLigne);
                                    } else {
                                      alert("Vous avez atteint le nombre maximum de lignes.");
                                    }
                                  }

                                  function supprimerLigneDSalle(btn) {
                                    var row = btn.parentNode.parentNode;
                                    row.parentNode.removeChild(row);
                                  }
                                </script>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuler</button>
                              <button type="submit" class="btn btn-primary">Modifier</button>
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