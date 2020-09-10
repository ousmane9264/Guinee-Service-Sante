<footer class="footer-2">           <!-- footer Style 2  -->
        <div class="footer-pri">            <!-- Primary Footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="widget widget-about">
                            <a href="index-hospital.html">
                             <img src="/customers/images/logo.png" alt=""></a>
                             <br/><br/>
                             <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings
                               of spring which I enjoy with my whole heart.</p>
                             <hr/>

                            <hr/>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget widget-links">
                            <h4 class="heading">Helpful Links</h4>
                            <ul>
                                <li><a href="book-appointment-form.html">Book Appoitment</a></li>
                                <li><a href="about.html">About Medwise</a></li>
                                <li><a href="process.html">Process</a></li>
                                <li><a href="doctors-mini.html">Doctors On Panel</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="widget widget-flickr">
                            <h4 class="heading">Nos partenaires</h4>
                            <ul>
                                <li><img src="/customers/images/flickr-1.jpg" alt=""></li>
                                <li><img src="/customers/images/flickr-2.jpg" alt=""></li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-sec">            <!-- Secondary Footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <span>&copy; {{date('Y')}} tout droit Réservé. <a target="_Blank" href="/">{{config('app.name')}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back"><i class="fa fa-angle-up"></i></div>

    <!-- Modal -->
    <div class="modal fade modal-popup" id="modal1" data-open-onload="true" data-open-delay="15000" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-image:url('/customers/images/modal-background.jpg'); background-size:cover">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 pt-20 pb-20 text-center">

                                <h4 class="heading font34 inverse">Recevez nos meilleurs conseils santé dans votre boite email!</h4>
                                <hr class="hr-2">
                                <p class="font22 text-center">100k de gens sont deja inscrits. vous allez l'adorez!</p>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Entrer votre email">
                                    </div>
                                    <button class="btn btn-black" type="button"><i class="fa fa-paper-plane"></i> Oui, je m'inscris!</button>
                                    <button class="btn btn-primary btn-sm" data-dismiss="modal" type="button">Non, je ne veux pas!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-video" data-open-onload="false" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="video-container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Permission for Setting Cookies -->
    <div class="alert alert-dismissible alert-cookies">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    Medwise custom message to for users to accept terms and conditions.continuer a naviguer sur ce site,vous acceptez nos conditions
                    d'utilisation.
                    &nbsp;&nbsp;
                    <button class="btn btn-primary btn-sm" data-dismiss="alert" type="button">J'accepte</button>
                </div>
            </div>
        </div>
    </div>
