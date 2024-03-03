<!DOCTYPE html>
<html>
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

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>


    <script src="../assets/js/config.js"></script>


    <style>
    h1 {
        color: black;
    }

    ul {
        color: black;
        list-style-type: disc;
        margin-left: 20px;
    }

   

    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
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
            <form id="pdfForm" action="{{ route('dispo-groupe.generatePDF') }}" method="POST">
                @csrf  
                <input type="hidden" name="Date_Début" value="{{ $Date_Début }}">
                <input type="hidden" name="Date_Fin" value="{{ $Date_Fin }}">
                <input type="hidden" name="nomFormation" value="{{ $nomFormation }}">
                <input type="hidden" name="nomGrp" value="{{ $nomGrp }}">
                <input type="hidden" name="typeFormation" value="{{ $typeFormation }}">
                <input type="hidden" name="nomEnseignant" value="{{ $nomEnseignant }}">
                <input type="hidden" name="prenomEns" value="{{ $prenomEns }}">
                <input type="hidden" name="nomSalle" value="{{ $nomSalle }}">
                <input type="hidden" name="jourSeance" value="{{ $jourSeance  }}">
                <input type="hidden" name="heureDebutSeance" value="{{ $heureDebutSeance }}">
                <input type="hidden" name="heureFinSeance" value="{{ $heureFinSeance  }}">
                <h4 class="fw-bold py-3 mb-4">Emploi Du Temps :</h4>
                <!-- Basic Bootstrap Table -->
                <div class="card">
                    
                    <div class="table-responsive text-nowrap m-2">
                        <table  class="table table-striped">
                            <tr>
                                <td colspan="4"><h4 class="H3salle">Du<small>{{ $Date_Début }}</small> à <small>{{ $Date_Fin }}</small></h4></td>
                            </tr>
                            <tr>
                                <td><h4 class="H3salle">Formation : <small>{{ $nomFormation }}</small></h4></td>
                                <td><h4 class="H3salle">Nom de groupe : <small>{{ $nomGrp }}</small></h4></td>
                            </tr>
                            <tr>
                                <td><h4 class="H3salle">Nom d'Enseignant : <small>{{ $nomEnseignant }} {{ $prenomEns }}</small></h4></td>
                                <td><h3 class="H3salle">Nom de la salle : <small>{{ $nomSalle }}</small></h3></td>
                            </tr>
                            <tr>
                                <td colspan="4"><h4 class="H3salle">Jour Séance : <small>{{ $jourSeance }}</small></h4></td>
                            </tr>
                            <tr>
                                <td><h4 class="H3salle">Heure Début Séance : <small>{{ $heureDebutSeance }}</small></h4></td>
                                <td><h4 class="H3salle">Heure Fin Séance : <small>{{ $heureFinSeance }}</small></h4></td>
                                
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Affichez le contenu du bouton seulement si ce n'est pas en mode PDF -->
                <button type="submit" id="generatePDFButton" class="btn btn-primary" name="generatePDF">Télécharger en PDF</button>



                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var form = document.getElementById('pdfForm');
                        var generatePDFButton = document.getElementById('generatePDFButton');

                        generatePDFButton.addEventListener('click', function() {
                            form.submit();
                        });
                    });
                </script>
            </fom>
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