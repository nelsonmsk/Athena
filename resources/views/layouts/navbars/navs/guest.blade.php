<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-transparent fixed-top  text-white ">
 
<div class="container" id="home">
  
  <div class="navbar-wrapper">
    @if($rtemplate['appDefaults'])
    <a class="site-name navbar-brand" href="{{ config('app.url')}}">{{$rtemplate['appDefaults']->appTitle}}</a>
	@else
    <a class="site-name navbar-brand" href="{{ config('app.url')}}">Zeus</a>		
	@endif
   </div>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
  
    <span class="sr-only">Toggle navigation</span>

      <span class="navbar-toggler-icon icon-bar"></span>
  
    <span class="navbar-toggler-icon icon-bar"></span>

      <span class="navbar-toggler-icon icon-bar"></span>
  
  </button>
   
 <div class="collapse navbar-collapse justify-content-end">
 
     <ul class="navbar-nav">
 
       <li class="nav-item{{ $activePage == 'section-home' ? ' active' : '' }}">
 
			<a href="{{ config('app.url') }}/#section-home" class="nav-link">
  
				Home
 
         </a>
    
		</li>
  
		<li class="nav-item{{ $activePage == 'section-about' ? ' active' : '' }}">
  
			<a href="{{ config('app.url') }}/#section-about" class="nav-link">
      
				About
   
			</a>
     
		</li>
     
		<li class="nav-item{{ $activePage == 'section-services' ? ' active' : '' }}">
   
			<a href="{{ config('app.url') }}/#section-services" class="nav-link">

				Services			
      
			</a>
       
		</li>
      
		<li class="nav-item{{ $activePage == 'section-screenshots' ? ' active' : '' }}">
    
			<a href="{{ config('app.url') }}/#section-screenshots" class="nav-link">
 
				Facilities
 
			</a>
    
		</li> 
				

		<li class="nav-item{{ $activePage == 'section-contact' ? ' active' : '' }}">
    
			<a href="{{ config('app.url') }}/#section-contact" class="nav-link">
 
				Contact
 
			</a>
    
		</li>	
		<li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
   
			<a href="{{ config('app.url') }}/login" class="nav-link">

				Login
      
			</a>
       
		</li>
 
     </ul>
 
   </div>
  
</div>

</nav>

<!-- End Navbar -->