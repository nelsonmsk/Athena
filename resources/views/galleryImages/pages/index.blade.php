@extends('galleryImages.Index')

@section('body')
<div class ="col-lg-12 col-md-12 ">
    <div class="card">
	 
		<div class="card-header header-danger">
			<h2><span class="card-category">{{ __('gallery Images') }} </span> 
			<a href="{{config('app.url')}}/galleryImages/create" class="btn btn-secondary pull-right">Upload New</a></h2>
		</div>

		<div class="card-body">
			<!--------------- Gallery --------------->
			<div id="gallery" class="section section-padding">
				<div id="screenshot" class="container">
					<section id="gallery" class="filter gallery">
					  <div class="container">
					  
						<div class="row">
						  <div class="col-lg-12 d-flex justify-content-center">
							<div class="button-group filters-button-group">

								<button class="button is-checked" data-filter="*">All</button>
								<button class="button" data-filter=".design">Single Rooms</button>
								<button class="button" data-filter=".development">Double Rooms</button>
								<button class="button" data-filter=".marketing">Executive Suites</button>							
								
							</div> <!-- end of button group -->
						  </div>
						</div>

						<div class="grid gallery-container">
						@if($galleryImages->count() != 0)
							@foreach($galleryImages as $gi)
								<div class="col-lg-4 col-md-6 gallery-item design">
									<div class="gallery-wrap">
									@if($gi->ref_class == Null)
										<img src="{{ asset('storage/'.$gi->imagePath)}}" class="img-fluid" alt="">
									@else
										<img src="{{ asset('images/rooms/room-1.jpg') }}" class="img-fluid" alt="">									
									@endif
									  <div class="gallery-info">
										<h4>{{$gi->image}}</h4>
										<p>{{$gi->description}}</p>
										<div class="gallery-links">
										@if($gi->image == Null)
											<a href="{{ asset('storage/'.$gi->imagePath)}}" data-gallery="imagesGallery" class="gallery-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
										@else
											<a href="{{ asset('images/rooms/room-1.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="App 1"><i class="bx bx-plus"></i></a>										
										@endif									
										  <a href="galleryImages/{{$gi->id}}" title="More Details"><i class="bx bx-link"></i></a>
										</div>
									  </div>
									</div>
								</div>
							@endforeach
						@else
						  <div class="col-lg-4 col-md-6 gallery-item development">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-1.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>App 1</h4>
								<p>App</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-1.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item design">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-2.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>Web 3</h4>
								<p>Web</p>
								<div class="gallery-links">
								  <a href="{{asset('images/rooms/room-2.jpg')}}" data-gallery="imagesGallery" class="gallery-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item development">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-3.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>App 2</h4>
								<p>App</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-3.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item marketing">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-4.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>Card 2</h4>
								<p>Card</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-4.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item design">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-5.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>Web 2</h4>
								<p>Web</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-5.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item development">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-6.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>App 3</h4>
								<p>App</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item marketing">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-7.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>Card 1</h4>
								<p>Card</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-7.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item marketing">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-1.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>Card 3</h4>
								<p>Card</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-1.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>

						  <div class="col-lg-4 col-md-6 gallery-item design">
							<div class="gallery-wrap">
							  <img src="{{ asset('images/rooms/room-2.jpg') }}" class="img-fluid" alt="">
							  <div class="gallery-info">
								<h4>Web 3</h4>
								<p>Web</p>
								<div class="gallery-links">
								  <a href="{{ asset('images/rooms/room-2.jpg') }}" data-gallery="imagesGallery" class="gallery-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
								  <a href="gallery-details.html" title="More Details"><i class="bx bx-link"></i></a>
								</div>
							  </div>
							</div>
						  </div>
						 @endif
						</div>
					  </div>
					</section>
				</div>
			</div>
			<!-- Gallery end -->
		</div>
	</div>
</div>
@endsection