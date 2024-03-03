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

    <title>Profile settings</title>

    <meta name="description" content="" />

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
    <link rel="stylesheet" href="../assets/vendor/css/core.css"  />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css"/>
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="css/profileStyle.css" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

   
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
                  <a href="#" class="menu-link">
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
                  <a href="#" class="menu-link">
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
                  <a href="#" class="menu-link">
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
                  <a href="#" class="menu-link">
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
                  <a href="#" class="menu-link">
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
                  <a href="/auth.login" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Se connecter</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/auth.register" class="menu-link" target="_blank">
                    <div data-i18n="Basic">S'inscrir</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/auth.forgotpassword" class="menu-link" target="_blank">
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
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">compte</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
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

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
                  <!-- container-xxl -->
            <div class="< flex-grow-1 container-p-y">
              
              <div class="row">
                <div class="col">
                  <div class="card ">
                    <h5 class="card-header">Détails de profil</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">

                        <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                          @csrf
    
                          @if (session('success'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('success') }}
                              </div>
                          @endif
                         
                          <div class="button-wrapper">
                            <div class="row">
                              <label for="avatar" class="form-label ">Avatar :</label>
                              <div class="col-sm-10 m-2">
                              <img src="/avatars/{{ Auth::user()->avatar }}" style="width:200px;height: 200px; margin-top: 10px;">
                              </div>
                            </div>
                            
                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
                            
                            
                            @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                            <button type="submit" class="btn btn-outline-primary m-4">
                              <i class="bx bx-reset d-block d-sm-none"></i>
                              <span class="d-none d-sm-block">Upload Image</span>
                            </button>

                            <p class="text-muted mb-0">Autorisé JPG, GIF ou PNG. Taille maximale  de 800K</p>
                          </div>
                        </form>  
                          
                      </div>
                    </div>





                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" action="{{ route('user.profile.update') }}" method="POST"  >
                      @csrf
                      @method('PUT')
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="prenom"
                              value="{{ Auth::user()->prenom }}"
                              autofocus
                              placeholder="Votre prénom"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Nom</label>
                            <input class="form-control" type="text" name="name" id="lastName" value="{{ Auth::user()->name }}"  placeholder="Votre nom" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label"  >E-mail </label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="{{ Auth::user()->email }}"
                              placeholder="example@example.com"
                            />
                          </div>
                          
                          
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Enregistrer les modifications</button>
                          <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Supprimer le compte</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Êtes-vous sûr(e) de vouloir supprimer votre compte </h6>
                          <p class="mb-0">Une fois que vous supprimez votre compte, il n'y a pas de retour en arrière possible. Veuillez être certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" action="{{ route('user.profile.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >Je confirme la désactivation de mon compte</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Désactiver</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>  
          </div>
      </div>
    </div>   

    <script>
      function updateNavbarLogo(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            var imageElement = document.getElementById("uploadedAvatar");
            imageElement.src = e.target.result;
          };

          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
            <!-- / Content -->
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

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    
  </body>
</html>