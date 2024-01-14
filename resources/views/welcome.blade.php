<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'titlePage'=> 'Authhome','rtemplate' => $rtemplate])


@section('content')

  @auth
    <div class="container-fluid page-cover " id="home">
		<div class="cover">
				<div class="intro-text">
				</div>
				<div class="page-text">
						<p>Hie {{auth()->user()->name}} : Welcome to <span> </span></p>
						
				</div>
		</div>	
    </div>
  @else
	<!--=== Home Section Starts ===-->
	<div id="section-home" class="home-section-wrap center">
		<div class="section-overlay"></div>
		<div id="banner" class="banner-content">			
			<div class="container home">
				<div class="row">
					<div class="col-md-7">
						 <div class="banner-text-content wow fadeInUp" data-wow-duration="1.5s">
						 	@if($rtemplate['appDefaults']->count() != 0)
								<h1 class="banner-title">{{$rtemplate['appDefaults']->brandHeading}}</h1>
								<p class="banner-text">{{$rtemplate['appDefaults']->introText}} </span>
							@else
								<h1 class="banner-title">Enjoy Our Majestic Rooms, Views &amp Splendid Cuisines</h1>
								<p class="banner-text">Come experience our royal 5 star accommodation &amp services!</p>
							@endif
							<div class="home-buttons">
								<a href="#section-about" class="fancy-button button-line button-white vertical">
									Learn more
									<span class="icon">
										<i class="fa fa-gear"></i>
									</span>
								</a>
								<a href="#section-contact" class="fancy-button button-line button-white zoom">
									Get In Touch
									<span class="icon">
										<i class="fa fa-send"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="right-part wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
							<div class="banner-registration text-white">
								<form id="registrationForm" class="registration-form" action="#" method="post">
									<p class="color-scheme center heading">
										Make Reservations
									</p>								
									<p>
										<input type="text" name="name" placeholder="Your Name" required="">
									</p>
									<p>
										<input type="email" name="email" placeholder="Your Email" required="">
									</p>
									<p>
										<input type="tel" name="phone" placeholder="Your Phone" required="">
									</p>
									<p>
										<input type="date" name="date" placeholder="Date" required="">
									</p>									
									<p>
										<input type="time" name="time" placeholder="Time" required="">
									</p>
									<p>
										<input type="text" name="number" placeholder="# of People" required="">
									<button class="fancy-button button-line button-white zoom" type="submit">Book  Now <span class="icon"><i class="fa fa-send"></i></span></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== Home Section Ends ===-->
	
	
	<!--=== Features section Starts ===-->
	<section id="section-feature" class="feature-wrap dark-bg">
		<div class="container features center">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>What We Offer</h3>
				</div>			
						<!--Features container Starts -->
						<div id="card-ul" class="col-lg-12 features-hold baraja-container">
							@if($rtemplate['features']->count() == 0)
								@foreach($rtemplate['features'] as $ft)
									<!-- Single Feature Starts -->
									<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="700" title="Card style">
										@if($rtemplate['featuresImages']->count() != 0)
											@foreach($rtemplate['featuresImages'] as $fi)
												@if($fi->ref_id == $ft->id)
													<img src="{{ asset('storage/'.$fi->imagePath)}}" alt="" class="feature-image" /><!-- Feature Icon --> 
												@endif
											@endforeach
										@else										
											<img src="images/1.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
										@endif
										<h4 class="feature-title color-scheme">{{$ft->text}}</h4>
										<p class="feature-text">
											{{$ft->body}}
										</p>
										
											<a href="#" class="fancy-button button-line btn-col small vertical">
												Details
												<span class="icon">
													<i class="fa fa-leaf"></i>
												</span>
											</a>
									</div>	
								@endforeach
							@else
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="700" title="Card style">
								<img src="images/1.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Quality Service</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut.
								</p>
								
									<a href="#" class="fancy-button button-line btn-col small vertical">
										Details
										<span class="icon">
											<i class="fa fa-leaf"></i>
										</span>
									</a>
								
							</div>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="1000" title="50+ SVG Icon included">
								<img src="images/food.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Quality Food</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</div>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="1300" title="MailChimp Ready">
								<img src="images/room.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Quality Rooms</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</div>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="1600" title="4 home style">
								<img src="images/4.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Quality Entertainment</h4>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<a href="#" class="fancy-button button-line btn-col small zoom">
									Details
									<span class="icon">
										<i class="fa fa-leaf"></i>
									</span>
								</a>
							</div>
							<!-- Single Feature Ends -->
							@endif
						</div>
						<!--Features container Ends -->
			</div>
		</div>
	</section>
	<!--=== Features section Ends ===-->

	<!--=== Step-2 section Starts ===-->
	<section id="section-about" class="section-step step-even step-wrap">
		<div class="container step animated" data-animation="bounceInRight" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-lg-6 col-md-12 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">
							<span class="no-inner">I</span>
						</div>
					</div>
					
					<div class="col-md-10 step-details">
							<h3 class="step-title color-scheme">Get To Know Us Better</h3>
							@if(!$rtemplate['appDefaults']->aboutText)
								<p class="step-description">{{$rtemplate['appDefaults']->aboutText}}</p>
							@else							
								<p class="step-description">Cillum laboris <strong>consequat</strong>, qui elit retro next level 
								skateboard freegan hella. Cillum laboris consequat qui elit retro next level 
								skateboard freegan hella. Cillum laboris consequat skateboard freegan hella</p>
								
								<p class="step-description2">Documenting collected data  qui elit retro next level 
								skateboard freegan hella. Cillum laboris consequat qui elit retro next level 
								skateboard freegan hella. Cillum laboris consequat skateboard freegan hella</p>							
						@endif
					</div><!-- End step-details -->
				</div>
				<!-- Step Description Ends -->
				<div class="col-lg-6 col-md-12 step-img">
					@if($rtemplate['aboutImages']->count() == 1)
						@foreach($rtemplate['aboutImages'] as $ai)
							<img src="{{ asset('storage/'.$ai->imagePath)}}" alt="" /><!-- Step Photo Here --> 
						@endforeach
					@else				
						<img src="images/about/about1.jpg" alt="" /> <!-- Step Photo Here -->
					@endif
				</div>
			</div>
		</div>
	</section>
	<!--=== Step-2 section Ends ===-->
	<!--=== Step-1 section Starts ===-->
	<section id="step-1" class="section-step step-wrap">
	   <!--Client logo-->
	   <div id="carousel-our-gallery" class="owl-carousel text-center margin-top-20">
		@if($rtemplate['carouselImages']->count() > 10)
			@foreach($rtemplate['carouselImages'] as $ci)	
			  <div class="our-gallery"> <a href="#"> <img src="{{ asset('storage/'.$ci->imagePath)}}" class="img-responsive" alt="" /> </a> </div>
			@endforeach
		@else
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-1.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-2.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-3.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-4.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-5.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-6.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-7.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-1.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-2.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-3.jpg" class="img-responsive" alt="" /> </a> </div>
			  <div class="our-gallery"> <a href="#"> <img src="images/rooms/room-4.jpg" class="img-responsive" alt="" /> </a> </div>
		  @endif
	   </div>
	   <!--/Client logo--> 
	</section>
	<!--=== Step-1 section Ends ===-->
	
	<!--=== Services section Starts ===-->
	<section id="section-services" class="services-wrap">
		<div class="container services">
			<div class="row">
			
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>What we do best</h3>
				</div>
				@if($rtemplate['services']->count() == 0)
					@foreach($rtemplate['services'] as $sv)
						<!-- Single Service Starts -->
						<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
							<span class="service-icon center"><i class="lnr lnr-home fa-3x"></i></span>
							<div class="service-desc">
								<h4 class="service-title color-scheme">{{$sv->name}}</h4>
								<p class="service-description justify">
									{{$sv->description}}.
								</p>
							</div>
						</div>
						<!-- Single Service Ends -->	
					@endforeach
				@else
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
					<span class="service-icon center"><i class="lnr lnr-home fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Accomodation</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="lnr lnr-dinner fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Restuarant &amp Bar</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
					<span class="service-icon center"><i class="lnr lnr-sun fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Spa &amp Swimming Pool </h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="lnr lnr-construction fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Gymnasium</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
					<span class="service-icon center"><i class="lnr lnr-music-note fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Entertainment </h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
				
				<!-- Single Service Starts -->
				<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
					<span class="service-icon center"><i class="lnr lnr-car fa-3x"></i></span>
					<div class="service-desc">
						<h4 class="service-title color-scheme">Car Rental</h4>
						<p class="service-description justify">
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat, qui elit retro next level skateboard freegan hella.
						</p>
					</div>
				</div>
				<!-- Single Service Ends -->
			@endif
			</div>
		</div>
	</section>
	<!--=== Services section Ends ===-->
	
	<!--=== Step-1 section Starts ===-->
	<section id="step-1" class="section-step step-wrap">
		<div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-lg-6 col-md-12 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">
							<span class="no-inner">II</span>
						</div>
					</div>
					
					<div class="col-md-10 step-details">
						@if($rtemplate['banners']->count() == 0)
							<h3 class="step-title color-scheme">{{$rtemplate['banners'][0]->heading}}</h3>
							<p class="step-description">{{$rtemplate['banners'][0]->body}}</p>
						@else
							<h3 class="step-title color-scheme">Experience The Luxurious Delights</h3>
							<p class="step-description">Cillum laboris <strong>consequat</strong>, qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat skateboard freegan hella
							Documenting collected data  qui elit retro next level skateboard freegan hella. 
							Cillum laboris consequat qui elit retro next level skateboard freegan hella.
							Cillum laboris consequat skateboard freegan hella</p>	
						@endif								
							<a href="#section-contact" class="fancy-button button-line button-white zoom">
									Book A Room
									<span class="icon">
										<i class="fa fa-send"></i>
									</span>
							</a>
					</div> <!-- End step-details -->
				</div>
				<!-- Step Description Ends -->
				<div class="col-lg-6 col-md-12 step-img">
					@if($rtemplate['bannersImages']->count() != 0)
						@foreach($rtemplate['bannersImages'] as $bi)
							@if($bi->ref_id == 1)
								<img src="{{ asset('storage/'.$bi->imagePath)}}" alt=""/><!-- Step Photo Here --> 
							@endif
						@endforeach
					@else					
						<img src="images/features/couple.jpg" alt="" /> <!-- Step Photo Here -->
					@endif
				</div>
			</div>
		</div>
	</section>
	<!--=== Step-1 section Ends ===-->
	
	<!--=== ScreenShots section Starts ===-->
	<section id="section-screenshots" class="screenshots-wrap">
		<div class="container screenshots animated" data-animation="fadeInUp" data-animation-delay="1000">
			<div class="row porfolio-container">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Our Facilities</h3>
				</div>
			@if($rtemplate['projectTypes']->count() == 0)
				@foreach($rtemplate['projectTypes'] as $pt)
					<!-- Single screenshot starts -->
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="screenshot">
							<div class="photo-box">
								@if($rtemplate['projectTypesImages']->count() != 0)
									@foreach($rtemplate['projectTypesImages'] as $pti)
										@if($pti->ref_class == $pt->name)
											<img src="{{ asset('storage/'.$pti->imagePath)}}"/> 
										@endif
									@endforeach
							    @else
								  <img src="{{ asset('images/7.jpg')}}" alt=""/>									
								@endif
								<div class="photo-overlay">
									<h4>{{$pt->name}}</h4>
								</div>
								<span class="photo-zoom">
									<a href="{{ config('app.url') }}/projectView/{{$pt->id}}" id="project-show-btn" class="project-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
								</span>
							</div>
						</div>
					</div>
					<!-- Single screenshot ends -->					
				@endforeach
			@else
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/rooms/room-2.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Accomodation</h4>
							</div>
							<span class="photo-zoom">
								<a href="{{ config('app.url') }}/facilities/1" id="facilities-show-btn" class="facilities-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/features/g1.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Restuarant &amp Bar</h4>
							</div>
							<span class="photo-zoom">
								<a href="{{ config('app.url') }}/facilities/1" id="facilities-show-btn" class="facilities-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/features/spa.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Spa &amp Swimming Pool</h4>
							</div>
							<span class="photo-zoom">
								<a href="{{ config('app.url') }}/facilities/1" id="facilities-show-btn" class="facilities-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/features/gym.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Gymnasium</h4>
							</div>
							<span class="photo-zoom">
								<a href="{{ config('app.url') }}/facilities/1" id="facilities-show-btn" class="facilities-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/features/ent.jpeg" alt="" />
							<div class="photo-overlay">
								<h4>Entertainment</h4>
							</div>
							<span class="photo-zoom">
								<a href="{{ config('app.url') }}/facilities/1" id="facilities-show-btn" class="facilities-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
				
				<!-- Single screenshot starts -->
				<div class="col-md-4 col-sm-4 col-xs-6">
					<div class="screenshot">
						<div class="photo-box">
							<img src="images/features/car-12.jpg" alt="" />
							<div class="photo-overlay">
								<h4>Car Rental</h4>
							</div>
							<span class="photo-zoom">
								<a href="{{ config('app.url') }}/facilities/1" id="facilities-show-btn" class="facilities-details-lightbox" data-glightbox="type: external"><i class="fa fa-search-plus fa-2x"></i></a>
							</span>
						</div>
						
					</div>
				</div>
				<!-- Single screenshot ends -->
			@endif
			</div>
			
			<div id="portfolio-loader" class="center">
				<div class="loading-circle fa-spin"></div>
			</div> <!--=== Portfolio loader ===-->
			
		</div>
	</section>
	<!--=== ScreenShots section Ends ===-->	
	
	<!--=== Features section Starts ===-->
	<section id="section-feature" class="feature-wrap dark-bg">
		<div id="section-teams" class="container features center">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>Meet the Team</h3>
				</div>			
					<!--Features container Starts -->
					<div id="card-ul" class="col-lg-12 features-hold baraja-container">
						@if($rtemplate['profiles']->count() != 0)
							@foreach($rtemplate['profiles'] as $pf)	
							<!-- Single Feature Starts -->
								<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="700" title="Card style">
									@if($rtemplate['profilesImages']->count() != 0)
										@foreach($rtemplate['profilesImages'] as $pi)
											@if($pi->ref_id == $pf->id)
												<img src="{{ asset('storage/'.$pi->imagePath)}}" alt="" class="feature-image" /><!-- Feature Icon -->
											@endif
										@endforeach
									@else		
										<img src="images/client/team-1.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
									@endif
									<h4 class="feature-title color-scheme">{{$pf->name}}</h4>
									<p class="feature-subtitle color-scheme">{{$pf->title}}</p>
									<p class="feature-text">
										{{$pf->bio}}
									</p>
									<div class="social">
										<a href="{{$pf->twitter}}"><i class="fa fa-twitter"></i></a>
										<a href="{{$pf->facebook}}"><i class="fa fa-facebook"></i></a>
										<a href="{{$pf->instagram}}"><i class="fa fa-instagram"></i></a>
										<a href="{{$pf->linkedin}}"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<!-- Single Feature Ends -->								
							@endforeach
						@else
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="700" title="Card style">
								<img src="images/client/team-1.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Dr Nelson Harvard</h4>
								<p class="feature-subtitle color-scheme">Executive Director</p>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut.
								</p>
								<div class="social">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="1000" title="50+ SVG Icon included">
								<img src="images/client/team-2.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Ms Jane Sands</h4>
								<p class="feature-subtitle color-scheme">Sales Executive</p>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<div class="social">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="1300" title="MailChimp Ready">
								<img src="images/client/team-3.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Mrs Kelly White</h4>
								<p class="feature-subtitle color-scheme">Quality Mgnt Specialist </p>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<div class="social">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- Single Feature Ends -->
							
							<!-- Single Feature Starts -->
							<div class="col-lg-3 col-md-6 col-sm-6 single-feature animated" data-animation="fadeInLeft" data-animation-delay="1600" title="4 home style">
								<img src="images/client/team-4.jpg" alt="" class="feature-image" /><!-- Feature Icon -->
								<h4 class="feature-title color-scheme">Mr Jason Grey</h4>
								<p class="feature-subtitle color-scheme">IT Consultant</p>
								<p class="feature-text">
									Curabitur posuere feugiat ipsum, sed elementum tortor maximus ut
								</p>
								<div class="social">
									<a href=""><i class="fa fa-twitter"></i></a>
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
							<!-- Single Feature Ends -->
						@endif
					</div>
					<!--Features container Ends -->
			</div>
		</div>
	</section>
	<!--=== Features section Ends ===-->	
	
	<!--=== Step-2 section Starts ===-->
	<section id="step-2" class="section-step step-even step-wrap">
		<div class="container step animated" data-animation="bounceInRight" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-md-7 step-desc">
					<div class="col-md-2 center">
						<div class="step-no">
							<span class="no-inner">III</span>
						</div>
					</div>
					
					<div class="col-md-10 step-details">
						<h3 class="step-title color-scheme">Our Achievements</h3>
						@if($rtemplate['banners']->count() == 0)
							<p class="step-description">{{$rtemplate['banners'][1]->body}}</p>							
						@else
							<p class="step-description">Cillum laboris <strong>consequat</strong>, qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat qui elit retro next level 
							skateboard freegan hella. Cillum laboris consequat skateboard freegan hella</p>
						@endif	
							<div class="container animated" data-animation="fadeInLeft" data-animation-delay="700">
								<div class="row facilities-counter g-5">
									<div class="col-sm-6 text-start" >
										<span class="counter-iconR">
											<i class="fas fa-users fa-2x text-start rounded"></i>
										</span>
										<h3 class="purecounter" data-purecounter-start="0" data-purecounter-end="1258" data-purecounter-duration="3">1</h3>
										<p class="color-scheme">Total Staff</p>
									</div>
									<div class="col-sm-6" >
										<span class="counter-iconR">
											<i class="fas fa-award fa-2x rounded "></i>
										</span>
										<h3 class="purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="3">1</h3>
										<p class="color-scheme">Awards</p>
									</div>
									<div class="col-sm-6">
										<span class="counter-iconR">
											<i class="fas fa-smile fa-2x rounded "></i>
										</span>
										<h3 class="purecounter" data-purecounter-start="0" data-purecounter-end="1255" data-purecounter-duration="3">1</h3>
										<p class="color-scheme">Happy Clients</p>
									</div>
									<div class="col-sm-6">
										<span class="counter-iconR">
											<i class="fas fa-comment fa-2x rounded"></i>
										</span>	
										<h3 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157" data-purecounter-duration="3">1</h3>
										<p class="color-scheme">Good Reviews</p>
									</div>
								</div>
							</div> <!-- end of container -->
					</div><!-- End step-details -->
				</div>
				<!-- Step Description Ends -->
				<div class="col-md-5 step-img">
					@if($rtemplate['bannersImages']->count() != 0)
						@foreach($rtemplate['bannersImages'] as $bi)
							@if($bi->ref_id == 2)
								<img src="{{ asset('storage/'.$bi->imagePath)}}" alt=""  /> <!-- Step Photo Here --> 
							@endif
						@endforeach
					@else	
						<img src="images/about/about.jpg" alt="" /> <!-- Step Photo Here -->
					@endif
				</div>
			</div>
		</div>
	</section>
	<!--=== Step-2 section Ends ===-->
	
	<!--=== Testimonials section Starts ===-->
	<section id="section-testimonials" class="testimonials-wrap">
		<div class="section-overlay"></div>
		<div class="container testimonials center animated" data-animation="rollIn" data-animation-delay="500">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h3>What Our Valued Clients Say About us</h3>
				</div>				
				<div class="col-md-8 col-md-offset-2">
				@if($rtemplate['testimonials']->count() == 0)	
					<div class="testimonial-slider">
						@foreach($rtemplate['testimonials'] as $ts)
							<!-- Single Testimonial Starts -->
							<div class="testimonial">
								<p class="comment">
									{{ $ts->comment}}
								</p>				
								<h5 class="happy-client">{{ $ts->name}}</h5>
								<span class="client-info">{{ $ts->title}}.</span>
							</div>
							<!-- Single Testimonial Ends -->					
						@endforeach
					</div>
					<div id="bx-pager" class="client-photos">
						@for($a = 0; $a < 4; $a++)
							@if($rtemplate['testimonialImages']->count() != 0)
								@foreach($rtemplate['testimonialImages'] as $ti)	
									@if($ti->ref_class == $rtemplate['testimonials'][a]->name)
										<a data-slide-index="{{$a}}" href="" class="photo-hold">
											<span class="photo-bg">
												<img src="{{ asset('storage/'.$ti->imagePath)}}" alt="" /> <!-- Client photo 1 -->
											</span>
										</a>
									@endif
								@endforeach	
							@endif	
						@endfor
					</div>
				@else
					<div class="testimonial-slider">
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">Jane Doe</h5>
							<span class="client-info">Executive at CDF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->
						
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Dolor sit amet, consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">JB Jones</h5>
							<span class="client-info">Developer at TTF Corp.</span>
						</div>
						<!-- Single Testimonial Ends -->
						
						<!-- Single Testimonial Starts -->
						<div class="testimonial">
							<p class="comment">
								Consectetur adipiscing elit. Nullam eu sem ante. Nullam quis risus eu 
								purus commodo dignissim. Donec iaculis ac ex vel posuere. Sed posuere, elit vitae mattis condimentum, 
								quam urna fringilla magna
							</p>
							
							<h5 class="happy-client">Chany Jhin</h5>
							<span class="client-info">CEO of MutiNaTakio.</span>
						</div>
						<!-- Single Testimonial Ends -->
					</div>
					<div id="bx-pager" class="client-photos">
						<a data-slide-index="0" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="images/client/client-2.jpg" alt="" /> <!-- Client photo 1 -->
							</span>
						</a>
						<a data-slide-index="1" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="images/client/client-1.jpg" alt="" /> <!-- Client photo 2 -->
							</span>
						</a>
						<a data-slide-index="2" href="" class="photo-hold">
							<span class="photo-bg">
								<img src="images/client/client-3.png" alt="" /> <!-- Client photo 3 -->
							</span>
						</a>
					</div>
				@endif
				</div>
			</div>
		</div>
	</section>
	<!--=== Testimonials section Ends ===-->
	
	
	<!--=== Subscribe section Starts ===-->
	<section id="section-subscribe" class="subscribe-wrap">
		<div class="section-overlay"></div>
		<div class="container subscribe center">
			<div class="row">
				<div class="col-lg-12">
					<p class="subscription-success"></p>
					<p class="subscription-failed"></p>
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Newsletter</h3>
					</div>
					<form id="subscription-form">
						<input type="email" name="EMAIL" required="required" placeholder="Your Email" class="input-email" />
						<button type="submit" id="subscription-btn" class="fancy-button button-line button-white large zoom">
							Subscribe
							<span class="icon">
								<i class="fa fa-sign-in"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Subscribe section Ends ===-->
	
	
	<!--=== Contact section Starts ===-->
	<section id="section-contact" class="contact-wrap">
		<div class="section-overlay"></div>
		<div class="container contact center animated" data-animation="flipInY" data-animation-delay="1000">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-10 col-md-offset-1 center section-title">
						<h3>Get In Touch With Us</h3>
					</div>
					
					<div class="confirmation">
						<p><span class="fa fa-check"></span></p>
					</div>
					
					<form class="contact-form support-form">
						
						<div class="col-lg-12">
							<input id="name" class="input-field form-item field-name" type="text" required="required" name="contact-name" placeholder="Name" />

							<input id="email" class="input-field form-item field-email" type="email" required="required" name="contact-email" placeholder="Email" />

							<input id="subject" class="input-field form-item field-subject" type="text" required="required" name="contact-subject" placeholder="Subject" />
							<textarea id="message" class="textarea-field form-item field-message" rows="10" name="contact-message" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="fancy-button button-line button-white large zoom subform">
							Send message
							<span class="icon">
								<i class="fa fa-paper-plane-o"></i>
							</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--=== Contact section Ends ===-->
	



  @endauth


 


@endsection
 