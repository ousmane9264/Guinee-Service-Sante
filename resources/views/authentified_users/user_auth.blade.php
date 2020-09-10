@extends('layouts/connected')
@section('user_connected')
<style media="screen">
		.form-control:hover{

				border: 2px solid blue;
		}
</style>
<!-- Revolution Slider Begins -->
	<div class="rev_slider_wrapper fullwidthbanner-container">
			<div id="slider-3" class="rev_slider" style="display:none;" data-version="5.4.1">
					<!-- Slides -->
					<ul>
							<!-- Slide 1 -->
							<li data-transition="fadethroughlight" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off">

									<!-- Main Image -->
									<img src="/customers/images/slider-5.jpg" class="rev-slidebg" data-bgposition="center top">

									<!-- Layer 1 -->
									<div class="tp-caption tp-resizeme" data-x="['left','left','left','left']" data-hoffset="['25','25','25','25']"  data-y="['center','center','center','center']" data-voffset="['-60','-60','-40','-30']"  data-fontsize="['45','45','30','25']" data-lineheight="['65','60','55','45']" data-whitespace="nowrap" data-type="text"  data-responsive_offset="on"  data-startslide="0"  data-endslide="99"  data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" style="font-family: 'Volkhov', serif;">Acheter vos medicament en ligne <br/> 
									avec des spécialistes</div>

									<!-- Layer 2 -->
									<div class="tp-caption tp-resizeme btn btn-primary"  data-x="['left','left','left','left']" data-hoffset="['25','25','25','25']"  data-y="['center','center','center','center']" data-voffset="['60','60','60','60']"  data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"  data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]' data-responsive_offset="on"  data-responsive="off" data-startslide="0"  data-endslide="3"  data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" style="white-space: nowrap;cursor:pointer;">En savoir plus</div>
							</li>

							<!-- Slide 2 -->
							<li data-transition="fadethroughlight" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-fsmasterspeed="2000" data-fsslotamount="7" data-saveperformance="off">

									<!-- Main Image -->
									<img src="/customers/images/slider-6.jpg" class="rev-slidebg" data-bgposition="center top">

									<!-- Layer 1 -->
									<div class="tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['25','25','25','25']"  data-y="['center','center','center','center']" data-voffset="['-60','-60','-40','-30']"  data-fontsize="['45','45','30','25']" data-lineheight="['65','60','55','45']" data-whitespace="nowrap" data-type="text"  data-responsive_offset="on"  data-startslide="0"  data-endslide="99"  data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']"
									style="font-family: 'Volkhov', serif;">Des professionnels de santé <br/> près de chez vous </div>

									<!-- Layer 2 -->
									<div class="tp-caption tp-resizeme btn btn-primary"  data-x="['right','right','right','right']" data-hoffset="['330','330','170','110']"  data-y="['center','center','center','center']" data-voffset="['60','60','60','60']"  data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"  data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]' data-responsive_offset="on"  data-responsive="off" data-startslide="0"  data-endslide="3"  data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['left','left','left','left']" style="white-space: nowrap;cursor:pointer;">Parcourir</div>

							</li>
					</ul>
					<div class="tp-bannertimer hidden-lg"></div>

			</div>
	</div>


	<!-- contenu pour la page -->
	<div class="container mt-80 mb-60">
				<div class="row">
						<div class="col-sm-12">
									<h2 class="text-center">Rechercher un medicament</h2>
									<form method="post" enctype="multipart/form-data" action="" >
										<div class="input-group">
												<input type="text" class="form-control" style="height: 60px;" placeholder="Exp: Paracetamol">
												<span class="input-group-btn">
														<button class="btn btn-primary" type="button" style="height: 60px;">Rechercher</button>
												</span>
										</div>
								</form>

						</div>
				</div>

				<div class="row">
						<div class="col-lg-4">
							<div class="blog-box">
									<div class="blog-header">
											<img src="/customers/images/blog-4.jpg" class="img-responsive" alt="">
											<br>
											<h4 class="heading">50 ways to fight water borne diseases.</h4>
											<div class="blog-meta">
													<ul class="meta-list">
															<li class="posted-on">
																	<a href="#">
																			<span class="date">10</span>
																			<span class="month">Oct</span>
																			<span class="year">2016</span>
																	</a>
															</li>
															<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
															<li><a href="#"><i class="fa fa-heart"></i></a></li>
															<li><a href="#"><i class="fa fa-comment"></i></a></li>
													</ul>
											</div>
									</div>
									<br>
									<div class="blog-excerpt">
											<!-- <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
											<!-- <br> -->
											<a href="blog-single.html" class="btn btn-primary btn-sm">Read More</a>
									</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="blog-box">
									<div class="blog-header">
											<img src="/customers/images/blog-4.jpg" class="img-responsive" alt="">
											<br>
											<h4 class="heading">50 ways to fight water borne diseases.</h4>
											<div class="blog-meta">
													<ul class="meta-list">
															<li class="posted-on">
																	<a href="#">
																			<span class="date">10</span>
																			<span class="month">Oct</span>
																			<span class="year">2016</span>
																	</a>
															</li>
															<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
															<li><a href="#"><i class="fa fa-heart"></i></a></li>
															<li><a href="#"><i class="fa fa-comment"></i></a></li>
													</ul>
											</div>
									</div>
									<br>
									<div class="blog-excerpt">
											<!-- <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
											<!-- <br> -->
											<a href="blog-single.html" class="btn btn-primary btn-sm">Read More</a>
									</div>
							</div>
						</div>


						<div class="col-lg-4">
							<div class="blog-box">
									<div class="blog-header">
											<img src="/customers/images/blog-4.jpg" class="img-responsive" alt="">
											<br>
											<h4 class="heading">50 ways to fight water borne diseases.</h4>
											<div class="blog-meta">
													<ul class="meta-list">
															<li class="posted-on">
																	<a href="#">
																			<span class="date">10</span>
																			<span class="month">Oct</span>
																			<span class="year">2016</span>
																	</a>
															</li>
															<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
															<li><a href="#"><i class="fa fa-heart"></i></a></li>
															<li><a href="#"><i class="fa fa-comment"></i></a></li>
													</ul>
											</div>
									</div>
									<br>
									<div class="blog-excerpt">
											<!-- <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
											<!-- <br> -->
											<a href="blog-single.html" class="btn btn-primary btn-sm">Read More</a>
									</div>
							</div>
						</div>

				</div> <br><br><br>

				<div class="row">
						<div class="col-sm-12">
								<div class="heading-block">
										<h2 class="heading">Nos <span class="color1">Simples</span> Catégories</h2>
										<p class="sub-heading">Behind the word mountains, far from the countries Vokalia and Consonantia,
											there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
								</div>
						</div>
						<div class="col-sm-3 no-gutter">
								<div class="process-box-1">
										<div class="process-box-header">
												<div class="count">
														<span>1</span>
												</div>
										</div>
										<div class="process-box-body">
												<h5 class="heading">Achats de Medicaments</h5>
												<p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
								</div>
						</div>
						<div class="col-sm-3 no-gutter">
								<div class="process-box-1">
										<div class="process-box-header">
												<div class="count">
														<span>2</span>
												</div>
										</div>
										<div class="process-box-body">
												<h5 class="heading">Livraison a domicile</h5>
												<p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
								</div>
						</div>
						<div class="col-sm-3 no-gutter">
								<div class="process-box-1">
										<div class="process-box-header">
												<div class="count">
														<span>3</span>
												</div>
										</div>
										<div class="process-box-body">
												<h5 class="heading">Consultations avec un Medecin</h5>
												<p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
								</div>
						</div>
						<div class="col-sm-3 no-gutter">
								<div class="process-box-1">
										<div class="process-box-header">
												<div class="count">
														<span>4</span>
												</div>
										</div>
										<div class="process-box-body">
												<h5 class="heading">Prestation de services</h5>
												<p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
								</div>
						</div>
				</div><br><br>
				<div class="row">
					<div class="container mt-100">
						<div class="row">
							<div class="col-sm-12">
									<h2 class="text-center">Nous statistiques</h2>
									<hr class="hr-1">
							</div>
						</div>
						</div>


					<div class="container">
						<div class="row">
								<div class="col-sm-3">
										<div class="counter-box-4">
												<div class="fact-icon">
														<i class="fa fa-users"></i>
												</div>
												<div class="fact-body">
														<span class="fact-count" data-from="0" data-to="100" data-speed="3000">912</span>
														<h5 class="heading">Number of Succesful Surgeries</h5>
												</div>
										</div>
								</div>
								<div class="col-sm-3">
										<div class="counter-box-4">
												<div class="fact-icon">
														<i class="fa fa-scissors"></i>
												</div>
												<div class="fact-body">
														<span class="fact-count" data-from="0" data-to="245" data-speed="3000">245</span>
														<h5 class="heading">Experienced Doctors On Panel</h5>
												</div>
										</div>
								</div>
								<div class="col-sm-3">
										<div class="counter-box-4">
												<div class="fact-icon">
														<i class="fa fa-scissors"></i>
												</div>
												<div class="fact-body">
														<span class="fact-count" data-from="0" data-to="930" data-speed="3000">930</span>
														<h5 class="heading">Healthy Meals served to patients</h5>
												</div>
										</div>
								</div>
								<div class="col-sm-3">
										<div class="counter-box-4">
												<div class="fact-icon">
														<i class="fa fa-scissors"></i>
												</div>
												<div class="fact-body">
														<span class="fact-count" data-from="0" data-to="120" data-speed="3000">120</span>
														<h5 class="heading">emergency Vehicles Ready to Help</h5>
												</div>
										</div>
								</div>
						</div>
					</div>

				</div>

				</div>
@stop
