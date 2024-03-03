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

    <title>welcom Page</title>

    <meta name="description" content="" />

   
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
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
                    placeholder="recherche..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                @if (Route::has('login'))
                
                @auth
                <li class="nav-item m-2">
                  <a class="nav-link underLine " href="{{ url('/home') }}">Home</a>
                </li>
                @else
                <li class="nav-item m-2">
                  <a class="nav-link underLine " href="{{ route('login') }}">Se Connecter</a>
                </li>

                    @if (Route::has('register'))
                    <li class="nav-item m-2">
                      <a class="nav-link underLine" href="{{ route('register') }}">S'inscrir</a>
                    </li>
                    @endif
                @endauth
           
            
        @endif

                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <div class="content-wrapper IMGbackground">    

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

            <div class="container-xxl flex-grow-1 container-p-y"> 
            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Connectez-vous à votre compte</h5>
                    <p class="card-text">Bienvenue sur notre application de gestion des emplois du temps ! Nous sommes ravis de vous accueillir ici, où vous pourrez optimiser et simplifier votre organisation quotidienne.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary  cardbtn">Se Connecter</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Créer votre compte</h5>
                    <p class="card-text">Bienvenue sur notre application de gestion des emplois du temps ! Nous sommes ravis de vous accueillir ici, où vous pourrez optimiser et simplifier votre organisation quotidienne.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary  cardbtn">S'inscrir</a>
                  </div>
                </div>
              </div>
            </div>

            </div>

          </div>  





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

    


</body>
</html>