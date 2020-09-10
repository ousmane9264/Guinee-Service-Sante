<!-- Loader -->
<!-- <div class="loader-backdrop">
      <div class="loader">
      </div>
  </div> -->

  <header class="header-2">           <!-- Header Style 2 -->
      <div class="topbar">            <!-- Topbar -->
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <ul class="social">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                      <ul class="contact">
                          <li><span>Email  : </span> gservicesante@gmail.gn</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

      <nav class="navbar navbar-default">         <!-- Navigation Bar -->
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                      <span class="sr-only">Toggle Menu</span>
                      <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="/">
                      <img src="/customers/images/logo.png" alt="">          <!-- Replace with your Logo -->
                  </a>
              </div>

              <div class="collapse navbar-collapse" id="main-navigation">         <!-- Main Menu -->
                  <ul class="nav navbar-nav navbar-right">
                      <li class="active"><a href="/"><i class="fa fa-home"></i> </a></li>
                      <li class="mega-sub-menu">
                        <a href="#">Medicaments</a>
                            <ul class="sub-menu">           <!-- Sub Menu -->
                                <li><a href="#">Acheter</a></li>
                                <li><a href="#">Livraison</a></li>
                                <li><a href="#">Pharmacies</a></li>
                            </ul>
                       </li>
                      <li><a href="#">Consultations </a>
                        <ul class="sub-menu">           <!-- Sub Menu -->
                            <li><a href="#">Trouver un rendez-vous</a></li>
                            <li><a href="#">Livraison</a></li>
                            <li><a href="#">Pharmacies</a></li>
                        </ul>
                      </li>
                      <li class="mega-sub-menu"><a href="#">Services</a>
                        <ul class="sub-menu">           <!-- Sub Menu -->
                            <li><a href="#">Trouver un prestataire services</a></li>

                        </ul>
                      </li>
                      <li><a href="#">blog</a></li>
                      <li><a href="#">Contact</a></li>
                      <!-- <li><a href="/Inscription">Deconnex</a></li> -->

                       <li><a href="#">{{ Session::get('prenom').' '.Session::get('nom') }} </a>
                        <ul class="sub-menu">           <!-- Sub Menu -->
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Livraison</a></li>
                            <li><a href="/deconnexion">Deconnexion</a></li>
                        </ul>
                      </li>

                    
                  </ul>
              </div>
          </div>
      </nav>
  </header>







