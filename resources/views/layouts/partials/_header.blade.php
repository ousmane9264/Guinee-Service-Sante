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
                                <li><a href="/connexion">Acheter</a></li>
                                <li><a href="contact-2.html">Livraison</a></li>
                                <li><a href="contact-3.html">Pharmacies</a></li>
                            </ul>
                       </li>
                      <li><a href="#">Consultations </a>
                        <ul class="sub-menu">           <!-- Sub Menu -->
                            <li><a href="/connexion">Trouver un rendez-vous</a></li>
                            <li><a href="/connexion">Livraison</a></li>
                            <li><a href="/connexion">Pharmacies</a></li>
                        </ul>
                      </li>
                      <li class="mega-sub-menu"><a href="#">Services</a>
                        <ul class="sub-menu">           <!-- Sub Menu -->
                            <li><a href="contact-1.html">Trouver un prestataire services</a></li>

                        </ul>
                      </li>
                      <li><a href="#">blog</a></li>
                      <li><a href="#">Contact</a></li>
                      <li><a href="/Inscription">Inscription</a></li>
                      <li>
                         <a href="" class="btn-emergency" data-toggle="modal" data-target="#modal-booking"><i class="fa fa-plus"></i><br/>Connexion</a>      
                             <!-- Emergency Number -->

                             <!-- <h4>Two Modals on Same Page</h4>
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-booking">Appointment Modal
                              </button> -->
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>

<!-- Modal -->
   <div class="modal fade" id="modal-booking" data-open-onload="false" data-open-delay="0" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            <div class="modal-body">
               <div class="container-fluid">
                   <form action="/auth-user" method="post">
                      @csrf
                       <div class="row">
                           <div class="col-sm-12">
                               <h3 class="heading">Connectez - vous. <span class="color1">C'est simple!</span></h3>
                           </div>
                         </div>
                           <div class="form-row">
                               <div class="form-group col-lg-8">
                                  <label class="form-label">Entrez votre Email</label>
                                   <input class="form-control" type="email" placeholder="exemple@gmail.com" name="email" required>
                               </div>
                           </div>
                           <div class="form-row">
                               <div class="form-group col-lg-8">
                                <label class="form-label">Entrez votre mot de passe</label>
                                   <input class="form-control" type="password" name="password" required>
                               </div>
                           </div>
                          
                     
                      <div class="form-row">
                       <div class="form-group col-lg-8">
                           <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Connexion</button>
                       </div>
                      </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>  





