	<!--=== Footer section Starts ===-->
<footer class="position-relative" id="footer-main">	
       <div class="footer pt-lg-7 footer-dark bg-dark-2">
            
            <!-- Footer -->
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                        <a class="footer-name" href="">
							@if ($rtemplate['appDefaults']->appTitle)
								{{$rtemplate['appDefaults']->appTitle}}
							@else
								{{ __('Athena') }}
							@endif
                        </a>
                        <!-- Webpixels' mission -->
						@if ($rtemplate['appDefaults']->contactText)
							<p class="mt-4 text-sm opacity-8 pr-lg-4">{{$rtemplate['appDefaults']->contactText}}</p>							
							
						@else						
							<p class="mt-4 text-sm opacity-8 pr-lg-4">Athena attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
                        @endif
						<!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->twitter)
                                <a class="nav-link pl-0" href="{{$rtemplate['appDefaults']->twitter}}" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
							@else
                                <a class="nav-link pl-0" href="https://twitter.com/athena" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>								
							@endif
                            </li>
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->facebook)
                                <a class="nav-link" href="{{$rtemplate['appDefaults']->facebook}}" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
							@else
                                <a class="nav-link" href="https://facebook.com/athena" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>								
							@endif
                            </li>
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->instagram)							
                                <a class="nav-link" href="{{$rtemplate['appDefaults']->instagram}}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
							@else
                                <a class="nav-link" href="https://www.instagram.com/athena" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>								
							@endif
                            </li>
                            <li class="nav-item">
							@if ($rtemplate['appDefaults']->linkedin)							
                                <a class="nav-link" href="{{$rtemplate['appDefaults']->linkedin}}" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
							@else
                                <a class="nav-link" href="https://www.linkedin.com/athena" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>								
							@endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">General</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ config('app.url') }}/#section-screenshots">Facilities</a></li>
                            <li><a href="{{ config('app.url') }}/#">Reservations</a></li>
                            <li><a href="{{ config('app.url') }}/#section-teams">Team</a></li>
                            <li><a href="{{ config('app.url') }}/#section-testimonials">Testimonies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="{{ config('app.url') }}/#section-services">Services</a></li>
                            <li><a href="{{ config('app.url') }}/#">Pricing</a></li>
                            <li><a href="{{ config('app.url') }}/#section-contact">Contact</a></li>
                            <li><a href="{{ config('app.url') }}/#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Address</h6>
                        <ul class="list-unstyled">
						@if($rtemplate['appDefaults'])	
							<li> <i class="icon-pin"></i><i>  {{$rtemplate['appDefaults']->address}}</i></li>
							<li> <i class="icon-screen-smartphone"></i><i>  {{$rtemplate['appDefaults']->phone}}</i></li>
							<li> <i class="icon-envelope-open"></i><i>  {{$rtemplate['appDefaults']->email}}</i></li>
							
						@else
							<p> <i class="icon-pin"></i> 15-A Hendon Ave, Mount Albert Auckland, New Zealand</p>
							<p> <i class="icon-screen-smartphone"></i> +1800 1234 56789</p>
							<p> <i class="icon-envelope-open"></i> support@websitename.com</p>
							<p> <i class="icon-link"></i> www.websitename.com</p>							
						@endif
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-6">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
						&copy;
							<script>
								document.write(new Date().getFullYear())
							</script>					
						@if ($rtemplate['appDefaults']->appTitle)							
                            <a href="" class="font-weight-bold" target="_blank">{{$rtemplate['appDefaults']->appTitle}}</a>.By Nelsonmsk. All rights reserved
                        @else
							<a href="" class="font-weight-bold" target="_blank">{{ __('Athena') }}</a>.By Nelsonmsk. All rights reserved
						@endif
						</div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Terms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Privacy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- Back To Top Button -->
	 <div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-up"></i></a>
	 </div>
    <!-- end of back to top button -->			
</footer>

	<!--=== Footer section Ends ===-->
	
	<!--=== Color Scheme section Starts ===-->

	<!--=== Color Scheme section Ends ===-->  
