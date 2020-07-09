@extends('layouts.main')
@section('content')
<?php

use App\Gallery;
?>
    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                @foreach($slider_images as $slider_image)
                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url({{url('/HomeSlider').'/'.$slider_image->image_path }})"></div>
                        <div class="home_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_content">
                                            <div class="home_title"><h1>{{$slider_image->desc}}</h1></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Home Slider Navigation -->
            <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

        </div>
    </div>

    <!-- Search -->

    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_container">
                        <div class="search_title">Find your Art</div>
                        <div class="search_form_container">
                          <form action="{{route('listing.search')}}" class="search_form" id="search_form" method="GET">
                          @csrf
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                      <select class="search_inputs form-control" id="PropertyType" name="category" required>
                                       <option value=""> Type</option>
                                       @foreach ($types as $type)
                                   <option value="{{$type->id}}"> {{$type->type}}</option>
                                       @endforeach

                                   </select>

                                   <select class="search_inputs form-control" id="PropertyLocation" name="location" required>
                                       <option value="">Location</option>
                                       @foreach ($locations as $location)

                                   <option value="{{$location->id}}">{{$location->loc_name}}</option>
                                       @endforeach
                                   </select>
                                    </div>
                                    <button type="submit"class="search_button">submit art</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->


    <!-- Featured -->

    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <div class="section_subtitle">our arts</div>
                        <div class="section_title"><h1>Latest arts</h1></div>
                    </div>
                </div>
            </div>
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
                                    <img src="{{is_null($gallery) ?  url('/Property_images').'/'.'property-holder.png' :  url('/Property_images').'/'.$gallery}}" alt="{{$property->name}}">
                                </a>
                            </div>
                            <div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="tag tag_house"><a>{{$property->category()->value('type')}}</a></div>
                            </div>
                            <a><div class="tag_location listing_location">{{Str::words($property->name,5)}}</div></a>
                        </div>
                        <div class="listing_content">
                            <div class="prop_price listing_price d-flex flex-row align-items-start justify-content-start">
                              <ul>
                                <li><strong>Location:</strong> {{$property->location()->value('loc_name')}}</li>
                                <li><strong>Location Description:</strong>{{Str::words($property->location_description,16)}}</li>
                              </ul>
                            </div>
                            <div class="listing_info">
                                <ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">

                                    @foreach($features as $index  => $feature)
                                       @if($property->features()->pluck('name')->contains($feature->name))
                                            <li class="property_area d-flex flex-row align-items-center justify-content-start">
                                                <i class="fa fa-check" aria-hidden="true" ></i>
                                                <span>{{$feature->name}}</span>
                                            </li>
                                           @endif
                                           @if ($index == 6)
                                             @break
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

    <!-- Testimonials -->

    <div class="testimonials container_reset">
        <div class="container">
            <div class="row row-eq-height">

                <!-- Testimonials Image -->
                <div class="col-xl-6">
                    <div class="testimonials_image">
                        <div class="background_image" style="background-image:url(images/logo.jpeg)"></div>
                        <div class="testimonials_image_overlay"></div>
                    </div>
                </div>

                <!-- Testimonials Content -->
                <div class="col-xl-6">
                    <div class="testimonials_content">
                        <div class="section_title_container">
                            <div class="section_subtitle">Arts360</div>
                            <div class="section_title"><h1>Latest Posts</h1></div>
                        </div>

                        <!-- Testimonials Slider -->
                        <div class="testimonials_slider_container">
                            <div class="owl-carousel owl-theme test_slider">
                                @foreach($archive_posts as $archive_post)
                                    <!-- Slide -->
                                    <div class="test_slide">
                                        <div class="test_quote">"{{$archive_post->title}}"</div>
                                        <div class="test_text">
                                            <p>{{Str::words($archive_post->body,12)}}<a href="{{route('blog')}}">Read More</a></p>
                                        </div>
                                        <div class="test_author"><a>{{$archive_post->writer->name ?? 'musti admin'}}</a></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
