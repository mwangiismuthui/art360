@extends('backend_layout.main')
@section('content')

                <!-- Form wizard with icon tabs section start -->
<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                    <form action="{{route('listing.update', ['property_id' => $property->id])}}"  method="POST" enctype="multipart/form-data" >
                        @csrf
                        <!-- Step 1 -->
                            <h4 class="my-step-name">Property Details</h4>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="property_name">Property Name :</label>
                                            <input type="text" class="form-control" value="{{$property->name}}" id="property_name" name="property_name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventType2">Property Location :</label>
                                             <select class="custom-select form-control" id="eventType2" data-placeholder="" name="property_location" required>
                                                <option value="option_select" disabled selected>{{$property->loc_name}}</option>
                                                @foreach ($locations as $location)

                                                    <option value="{{$location->id}}" {{$property->location_id==$location->id ? 'selected' :''}}>
                                                        {{$location->loc_name}}
                                                    </option>
                                                @endforeach
                                            </select>





                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventType3">Property Type :</label>
                                            <select class="custom-select form-control" id="eventType3" data-placeholder="" name="property_type" required>
                                                <option value="option_select" disabled selected>{{$property->type}}</option>
                                                @foreach ($categories as $category)

                                                    <option value="{{$category->id}}" {{$property->category_id==$category->id ? 'selected' :''}}>
                                                        {{$category->type}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventName2">Location Description :</label>
                                        <input type="text" class="form-control" id="location_description" name="location_description"  value="{{$property->location_description}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventName2">Property Price :</label>
                                            <input type="text" class="form-control" value="{{$property->price_desc}}" id="property_price" name="property_price" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="property_description">Property Description :</label>
                                            <textarea name="property_description" id="property_description" rows="4" class="form-control" required>{{$property->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h4 class="my-step-name">Property Features</h4>
                            <fieldset>
                                <div class="form-group">
                                    <label>Requirements :</label>
                                    <div class="c-inputs-stacked">
                                        <div class="row">

                                            @foreach($features as $feature)
                                                <div class="col-md-3">
                                                    <div class="d-inline-block custom-control custom-checkbox">
                                                        <input type="checkbox" name="features[]" value="{{$feature->id}}"
                                                            {{ $property->features()->pluck('features.id')->contains($feature->id) ? 'checked' : '' }}>
                                                        <label>{{$feature->name}}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h4 class="my-step-name">Add property Photo</h4>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="main_image">Add extra image :</label>
                                            <input type="file" name="main_image" id="main_image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <!-- Step 4 -->
                            <h4 class="my-step-name">Property Existing Photos</h4>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-12">
                                      @foreach ($galleries as $gallery)
                                        <div class="list_image_gallery">
                                          <div class="icon-remove blue delete">
                                              <img class="thumbnail" src="{{url('/Property_images').'/'.$gallery->image_path }}" alt="image" height="60" width="60"/>
                                              <a href="{{route('gallery.destroy',$gallery->id)}}" onclick="return confirm('Are you sure?')"><i class="delete-button fa fa-trash"></i></a>
                                          </div>
                                      @endforeach
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
@endsection
