@extends('backend_layout.main')
@section('content')
<?php

use App\Gallery;
?>

<section id="content-types">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                                <div class="float-left pl-2">
                                    <span class="grey darken-1 block">Total Arts</span>
                                    <span class="font-large-3 line-height-1 text-bold-300">{{$number_of_houses}}</span>
                                </div>
                                <div class="float-left mt-2">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 clearfix">
                                <div class="float-right pl-2">
                                    <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#xlarge">
                                        Add Arts
                                    </button>
                                </div>
                                <div class="float-left mt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="row match-height">

        @foreach ($properties as $property)
<div class="col-xl-4 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body mycard-title">
                <h4 class="card-title">{{$property->name}}</h4>
            <h6 class="card-subtitle text-muted">{{$property->location()->value('loc_name')}}</h6>
            </div>



           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php

                $galleries = Gallery::where('listing_id',$property->id)->get();
                ?>
                @foreach ($galleries as $gallery)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class=" {{$loop->first ? 'active':''}}"></li>
          @endforeach
            </ol>
            <div class="carousel-inner">


                @foreach ($galleries as $gallery)
            <div class="carousel-item  {{$loop->first ? 'active':''}}">
                <img class="d-block w-100" src="{{is_null($gallery) ?
                  url('/Property_images').'/'.'property-holder.png' :  url('/Property_images').'/'.$gallery->image_path }}" alt="First slide">
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
            <div class="card-body mycard-body">
            <p class="card-text">{{Str::words($property->description,10)}}</p>
            <a href="{{route('listing.edit',$property->id)}}" class="btn btn-outline-pink">Edit</a>

                <a href="{{route('listing.destroy',$property->id)}}" class="btn btn-outline-pink" onclick="return confirm('Are you sure?')">Delete</a>
            </div>

        </div>
    </div>
</div>
@endforeach

	</div>


</section>

<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
           <!-- Modal -->
        <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content my-modal-content">
              <div class="modal-body">
                <!-- Form wizard with icon tabs section start -->
                <section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                         <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form action="{{route('listing.store')}}" method="post" class=" wizard-circle"  enctype="multipart/form-data">
                                        @csrf
                                        <!-- Step 1 -->
                                        <h4 class="my-step-name">Art Details</h4>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="property_name">Art Name :</label>
                                                        <input type="text" class="form-control" id="property_name" name="property_name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastName2">Art Location :</label>
                                                        <select class="custom-select form-control" id="eventType2" data-placeholder="Type to search cities" name="property_location" required>

                                                        <option value="">Select Art Location</option>
                                                            @foreach ($locations as $location)

                                                                <option value="{{$location->id}}">{{$location->loc_name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label for="eventType2">Art Type :</label>
                                                       <select class="custom-select form-control" id="eventType2" data-placeholder="Type to search cities" name="property_type" required>

                                                           <option value="">Select Art Type</option>
                                                           @foreach ($categories as $category)

                                                               <option value="{{$category->id}}">{{$category->type}}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>

                                               </div>
                                            </div>

                                            <div class="row">
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                      <label for="eventName2">Location Description :</label>
                                                      <input type="text" class="form-control" id="location_description" name="location_description" required>
                                                  </div>
                                              </div>
                                            <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="eventName2">Art Price :</label>
                                                  <input type="text" class="form-control" id="property_price" name="property_price" required>
                                              </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="property_description">Art Description :</label>

                                                    <textarea name="property_description" id="property_description" rows="4" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h4 class="my-step-name">Art Features</h4>
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="c-inputs-stacked">
                                                    <div class="row">
                                                        @foreach($features as $feature)
                                                        <div class="col-md-3">
                                                            <div class="d-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="features[]" value="{{$feature->id}}" class="" >
                                                                <label class="" >{{$feature->name}}</label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h4 class="my-step-name">Art Photos</h4>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="main_image">Art Main Image :</label>

                                                        <input type="file" name="main_image" class="form-control" >

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="additional_image">Additional Images :</label>

                                                            <input type="file" name="additional_image[]" class="form-control" multiple >


                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                <button class="btn btn-outline-pink add-property-submit" type="submit">Save</button>
                            </form>
                                </div>
                            </div>
                        </div>
                   </div>
                    </div>
                </section>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
