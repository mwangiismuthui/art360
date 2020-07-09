@extends('layouts.main')
@section('content')
	<?php

	use App\Gallery;
	use App\Location;
	?>
<link rel="stylesheet" type="text/css" href="styles/listings.css">
<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
	<!-- Home -->

	<div class="home search-home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/musti1.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center search-home_content">
						<div class="home_title" style="font-size: 30px;font-weight: 500;color: #F7F71B;">Search Results</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@if (!$properties->isEmpty())
	<!-- Listings -->

	<div class="featured search-features">
			<div class="container">
					<div class="row featured_row">

							@foreach ($properties as $property)

							<?php

							$gallery = Gallery::where('listing_id',$property->id)->pluck('image_path')->first();

							// dd($gallery);
							?>
							<!-- Featured Item -->
							<div class="col-lg-4">
									<div class="listing">
											<div class="listing_image">
													<div class="listing_image_container">
															<a href="{{route('single-listing',['id'=>$property->id])}}">
																	<img src="{{is_null($gallery) ?  url('/Property_images').'/'.'property-holder.png' :  url('/Property_images').'/'.$gallery}}">
															</a>
													</div>
													<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
															<div class="tag tag_house"><a href="listings.html">{{$property->category()->value('type')}}</a></div>
													</div>
													<a><div class="tag_location listing_location">{{Str::words($property->name,5)}}</div></a>
											</div>
											<div class="listing_content">
													<div class="prop_price listing_price d-flex flex-row align-items-start justify-content-start">
															<p><strong>Location:</strong> {{$property->location_description}}</p>
															{{--<p><strong>Price:</strong> {{$property->price_desc}}</p>--}}
													</div>
													<div class="listing_info">
															<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">

																	@foreach($features as $feature)
																		 @if($property->features()->pluck('name')->contains($feature->name))
																					<li class="property_area d-flex flex-row align-items-center justify-content-start">
																							<i class="fa fa-check" aria-hidden="true" ></i>
																							<span>{{$feature->name}}</span>
																					</li>
																				 @endif
																	@endforeach
															</ul>
													</div>
											</div>
									</div>
							</div>
							@endforeach
					</div>
					{{ $properties->links() }}
			</div>
	</div>
@else
	<div class="row">
			<div class="col">
					<div class="section_title_container text-center search-section_title_container">
							<div class="section_subtitle"><p>No records found!</p></div>
							<div class="section_title"><h1>Coming Soon</h1></div>
					</div>
			</div>
	</div>
@endif


@endsection
