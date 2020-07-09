@extends('layouts.main')
@section('content')
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/styles/single.css">
    <link rel="stylesheet" type="text/css" href="/styles/single_responsive.css">

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/wendy.jpeg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Art Details</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="listing_container">
         <div class="container">
             <div class="row my-single_pp-row">
                 <div class="col-lg-6">
                     <div class="property_info">
                         <div class="listing_name"><h1>{{$listings->name}}</h1></div>
                         <div class="listing_list">
                             <ul>
                                 <li>Posted on: {{date_format($listings->created_at,'d-m -y')  }}</li>
                                 <li>Art Type: {{$listings->category()->value('type')}}</li>
                                 <li>Art Price: {{$listings->price_desc}}</li>
                                 <li>
                                     <img src="images/icon_1.png" alt="">
                                     <span>{{$listings->loaction}}</span>
                                 </li>
                             </ul>
                         </div>
                     </div>

                 </div>
                 <div class="col-lg-6">
                     <!-- image Slider -->
                     <div class="home_slider_container">
                     <div class="owl-carousel owl-theme home_slider">
                       @if (!$galleries->isEmpty())

                         <!-- Slide -->
                         @foreach ($galleries as $image)
                         <div class="slide">
                             <div class="background_image {{$loop->first ? 'active':''}}" style="background-image:url({{ url('/Property_images').'/'.$image->image_path }})"></div>
                         </div>
                         @endforeach
                       @else
                         <!-- Slide -->
                         <div class="slide">
                             <div class="background_image" style="background-image:url({{ url('/Property_images').'/'.'property-holder.png' }})"></div>
                         </div>
                       @endif

                     </div>

                     <!-- Home Slider Navigation -->
                     <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

                 </div>
                 </div>
                 <!--description-->
                 <div class="col-lg-6">
                     <div class="about_text">
                         <div class="listing_title"><h3>Description</h3></div>
                         <p>{{$listings->description}}</p>
                     </div>
                 </div>
                 <!--features-->
                 <div class="col-lg-6">
                     <div class="listing_features">
                         <div class="listing_title"><h3>Features</h3></div>
                         <div class="row">
                             <div class="col-lg-6">
                                 <ul>
                                     @foreach($features as $feature)
                                         @if($listings->features()->pluck('name')->contains($feature->name))
                                             <li>
                                                 <span>{{$feature->name}}</span>
                                             </li>
                                         @endif

                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
@endsection
