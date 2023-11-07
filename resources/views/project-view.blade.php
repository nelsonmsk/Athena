<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="env" content="{{ config('app.url') }}">

   <title>{{ config('app.name') }}</title> 

    <!-- Styles  -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">	
	<link href="{{ asset('material/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet"> 
	<link href="{{ asset('css/parsley.css') }}" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">	
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">	
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="{{ asset('css/shortcodes/shortcodes.css') }}" rel="stylesheet">	
   <link href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">	
      <!-- OWL CAROUSEL -->
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css">	
	<link href="{{ asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet">

	<link href="{{ asset('plugins/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/line-icons/line-icons.css') }}" rel="stylesheet">		
	<link href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body class="{{ $class ?? '' }}">
		<!-- ======= Facilities Details Section ======= -->
		<section id="facilities-details" class="facilities-details">
		  <div class="container">

			<div class="row gy-4">

			  <div class="col-lg-12">
				<div class="facilities-details-slider swiper">
				    <div class="swiper-wrapper align-items-center">

					@if($rtemplate['projects']->count() != 0)
						@foreach($rtemplate['projects'] as $pj)
							<div class="swiper-slide">
								<div class="col-lg-8">
								@if($rtemplate['projectsImages']->count() != 0)
									@foreach($rtemplate['projectsImages'] as $pi)
										@if($pi->ref_id == $pj->id)
											<img src="{{ asset('storage/'.$pi->imagePath)}}"/> 
										@endif
									@endforeach
							    @else
								  <img src="{{ asset('images/7.jpg')}}" alt=""/>									
								@endif
								</div>
							  
								<div class="col-lg-4">
									<div class="facilities-info">
									  <h3>{{$pj->type}}</h3>
									  <ul>
										<li><strong>Name</strong>: {{$pj->name}}</li>									  
										<li><strong>Status</strong>: {{$pj->status}}</li>
										<li><strong>Start Date</strong>: {{$pj->sdate}}</li>
										<li><strong>End Date</strong>: {{$pj->edate}}</li>										
									  </ul>
									</div>
									<div class="facilities-description">
									  <h2>Description</h2>
									  <p>
										{{$pj->description}}
									</div>
								</div>
							</div>
						@endforeach
					@else
						<div class="swiper-slide">
							<div class="col-lg-8">
							  <img src="{{ asset('images/rooms/room-7.jpg')}}" alt="">
							</div>
						  
							<div class="col-lg-4">
								<div class="facilities-info">
								  <h3>Single Room</h3>
								  <ul>
									<li><strong>Category</strong>: Accomodation</li>								  
									<li><strong>Price</strong>: US $40 per night</li>
									<li><strong>Status</strong>: Available</li>
								  </ul>
								</div>
								<div class="facilities-description">
								  <h2>Description</h2>
								  <p>
									Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. 
								</div>
							</div>
						</div>						
						<div class="swiper-slide">
							<div class="col-lg-8">
							  <img src="{{ asset('images/rooms/room-3.jpg')}}" alt="">
							</div>
						  
							<div class="col-lg-4">
								<div class="facilities-info">
								  <h3>Double Deluxe</h3>
								  <ul>
									<li><strong>Category</strong>: Accomodation</li>								  
									<li><strong>Price</strong>: US $65 per night</li>
									<li><strong>Status</strong>: Available</li>
								  </ul>
								  </ul>
								</div>
								<div class="facilities-description">
								  <h2>Description</h2>
								  <p>
									Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. 
								  </p>
								</div>
							  </div>
						</div>

						<div class="swiper-slide">
							<div class="col-lg-8">
							  <img src="{{ asset('images/rooms/room-2.jpg')}}" alt="">
							</div>
						  
							<div class="col-lg-4">
								<div class="facilities-info">
								  <h3>Royal Suite</h3>
								  <ul>
									<li><strong>Category</strong>: Accomodation</li>								  
									<li><strong>Price</strong>: US $65 per night</li>
									<li><strong>Status</strong>: Available</li>
								  </ul>
								  </ul>
								</div>
								<div class="facilities-description">
								  <h2>Description</h2>
								  <p>
									Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. 
								  </p>
								</div>
							  </div>
						</div>
					@endif
				    </div>
				  <div class="swiper-pagination"></div>
				</div>
			  </div>

			</div>

		  </div>
		</section><!-- End Portfolio Details Section --> 
		
 	  <!-- main Scripts -->
        <script src="{{ asset('material/js/core/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>					
		<script src="{{ asset('js/ajax-crud.js') }}"></script>	
		<script src="{{ asset('js/parsley.min.js') }}"></script>
	
      <!--   Core JS Files   -->
       <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
     <!--   <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script> -->
       <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
       <!-- Plugin for the momentJs  -->
       <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
       <!--  Plugin for Sweet Alert -->
      <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
       <!-- Forms Validations Plugin -->
       <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
       <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
       <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
       <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
       <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
       <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script> 
     <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ --> 
     <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script> 
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
     <!-- Library for adding dinamically elements -->
      <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
      <!--  Google Maps Plugin    -->
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
      <!-- Chartist JS -->
      <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
       <!--  Notifications Plugin    -->
      <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script> 
      <!-- Control Center for Dashboard: parallax effects, scripts for the example pages etc -->
       <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
      <!-- Material Dashboard DEMO methods, don't include it in your facilities! -->
       <script src="{{ asset('material') }}/demo/demo.js"></script>
      <!-- <script src="{{ asset('material') }}/js/settings.js"></script> -->

   <!--==== Essential files ====-->
<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrapValidator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="{{ asset('js/jquery.baraja.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/jquery.vegas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.bxslider.min.js') }}"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>

<!-- Waypoint and Counters--> 
<script type="text/javascript" src="{{ asset('plugins/counter/waypoints.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('plugins/counter/jquery.counterup.min.js') }}"></script>

<!-- Purecounter counter for statistics numbers -->	
<script type="text/javascript" src="{{ asset('plugins/counter/purecounter.min.js') }}"></script> 
<!-- Owl Carousel--> 
<script type="text/javascript" src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>	

<script src="{{ asset('plugins/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
	  <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>
<!--==== Custom Script files ====-->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('plugins') }}/dropzone/dist/dropzone-min.js"></script> 
<script type="text/javascript" src="{{ asset('js/color-switcher.js') }}"></script>
		 
	 @stack('js')  
</body>	  


