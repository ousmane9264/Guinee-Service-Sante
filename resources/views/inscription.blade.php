@extends('layouts/inscription')
@section('inscription')

 <div class="container mt-80 mb-60">
        <div class="row">
            <div class="col-sm-8">
                <h3>Inscrivez - vous. <span class="color1">C'est simple!</span></h3>
                <p>Joignez vous avec des millions de guinéens, Simplement en vous inscrivant pour pouvoir rechercher vos medicaments dans les differentes pharmacies de la capitale en ligne avec une possibilité de livraison a domicile par la pharmacie en quelques clicks.</p>
                <!-- pour poster le formulare -->
                <div class="panel" style="box-shadow: 2px 5px 2px rgba(0, 0, 0, 0.15);">
				<div class="panel-body">
					<form    action="/save-user" method="post">
						{{csrf_field()}}
						<div class="form-row">
							<div class="form-group col-lg-6">
								<label for="nom">Nom </label>
								<input type="text" name="nom" class="form-control {{ $errors->has('nom') ? 'has-error' : ''}}" id="nom">
								{!! $errors->first('nom', '<span class="help-block text-danger">:message</span>' ) !!}
							</div>
							<div class="form-group col-lg-6">
								<label class="form-label" for="prenom">Prenom</label>
								<input type="text" name="prenom" class="form-control {{ $errors->has('prenom') ? 'has-error' : ''}}" id="prenom">
								{!! $errors->first('prenom', '<span class="help-block text-danger">:message</span>' ) !!}
							</div>
						</div><br>
						<div class="form-row">
							<div class="form-group col-lg-8 col-lg-offset-1">
								<label class="form-label">Genre</label>
								<select class="form-control" name="genre">
									<option>Masculin</option>
									<option>Feminin</option>
								</select>
								<!-- <label class="form-label">Selectionnez votre genre </label> -->
                               <!--  <label class="radio-inline">
                                    <input type="radio" name="optradio" name="mas">Masculin
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Feminin
                                </label> -->
							</div>
						</div> <br>

						<div class="form-row">
							<div class="form-group col-lg-6">
								<label class="form-label">Adresse Email</label>
								<input type="email" class="form-control {{ $errors->has('email') ? 'has-error' : ''}}" name="email" > <br>

								{!! $errors->first('email', '<span class="help-block text-danger">:message</span>' ) !!}
							</div>
							
							<div class="form-group col-lg-6">
								<label class="form-label">Telephone</label>
								<input type="text" class="form-control {{ $errors->has('phone') ? 'has-error' : ''}}" name="phone"><br>
								{!! $errors->first('phone', '<span class="help-block text-danger">:message</span>' ) !!}
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-lg-10">
								<label class="form-label">Mot de passe</label>
								<input type="password" class="form-control {{ $errors->has('password') ? 'has-error' : ''}}" name="password"> <br>
								{!! $errors->first('password', '<span class="help-block text-danger">:message</span>' ) !!}

								<small id="passwordHelpBlock" class="form-text text-muted text-danger">
								  Le mot de passe doit avoir au minimun 5 caracteres
								</small>
							</div>
							
						</div>

						<div class="form-row">
							<div class="form-group col-lg-10">
								<label class="form-label">Confirmation de mot de passe</label>
								<input type="password" class="form-control {{ $errors->has('confirmation') ? 'has-error' : ''}}" name="confirmation"> <br>
								{!! $errors->first('confirmation', '<span class="help-block text-danger">:message</span>' ) !!}
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-lg-12 col-lg-offset-2">
								<label class="checkbox-inline" for="blood-donate-yes">
                                        <input id="blood-donate-yes" type="checkbox" name="state">
                                    Acceptez nos conditions d'utilisations des donnees et regles de confidentialites
                                </label>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-lg-8">
								<button type="submit" class="btn btn-primary"> 
									<i class="fa fa-paper-plane"></i> S'inscrire
								</button>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-lg-12">
								  <p>Vous avez deja un compte sur notre plateforme ? alors 
								  	<a href="/connexion" 
								  	class="btn btn-link" data-toggle="modal" data-target="#modal-booking">Connectez - vous</a>
								  </p>
							</div>
						</div>

						
					</form>




				</div>
			</div>

		<!-- fin pour poster le formulaire -->
        </div>
        <!-- fin de la premiere row -->
            <div class="col-sm-4">
                <aside class="sidebar">
                    <div class="widget widget-text">
                        <h4 class="heading">Besoin d'aide ?</h4>
                        <p class="normal">Si vous avez n'importe quel probleme n'hesitez pas, nous sommes a vos cotès.</p>
                        <p class="color1 bold">Telephone : 1800-123-9876</p>
                        <p class="color1 bold">Email : gservicesante@gmail.com</p>
                    </div>
                    <div class="widget widget-testimonial">
                        <div class="slider-items">
                            <div>
                                <div class="testi-img">
                                    <img src="/customers/images/ousmane.jpg" class="img-circle" alt="">
                                </div>
                                <div class="testi-text">
                                    <i class="fa fa-quote-left"></i>
                                    Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </div>
                                <span class="said-by">Christina Jones</span>
                            </div>
                            <div>
                                <div class="testi-img">
                                    <img src="/customers/images/dioulde.jpg" class="img-circle" alt="">
                                </div>
                                <div class="testi-text">
                                    <i class="fa fa-quote-left"></i>
                                    Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                                </div>
                                <span class="said-by">Christina Jones</span>
                            </div>
                        </div>
                        <div class="slider-nav">
                            <div class="left"><i class="fa fa-angle-left"></i></div>
                            <div class="right"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>
                    <div class="widget widget-social">
                        <h4 class="heading">Reseaux Sociaux</h4>
                        <ul class="social social-2x">
                            <li><a href="gservicesantefacebook"><i class=" fa fa-facebook"></i></a></li>
                            <li><a href="gservicesanterwitter"><i class=" fa fa-twitter"></i></a></li>
                            <li><a href="gservicesantepinterest"><i class=" fa fa-pinterest-p"></i></a></li>
                            <li><a href="gservicesantelinkdin"><i class=" fa fa-linkedin"></i></a></li>
                            <li><a href="gservicesanteinstagram"><i class=" fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>






<!-- Modal -->
   <div class="modal fade" id="modal-booking" data-open-onload="false" data-open-delay="0" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
            <div class="modal-body">
               <div class="container-fluid">
                   <form>
                       <div class="row">
                           <div class="col-sm-12">
                               <h3 class="heading">Connectez - vous. <span class="color1">C'est simple!</span></h3>
                           </div>
                         </div>
                           <div class="form-row">
                               <div class="form-group col-lg-8">
                                  <label class="form-label">Entrez votre Email</label>
                                   <input class="form-control" type="email" placeholder="exemple@gmail.com"required>
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


@stop