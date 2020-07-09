@extends('backend_layout.main')
@section('content')

    <section id="content-types">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-xl-6 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                                    <div class="float-left pl-2">
                                        <span class="grey darken-1 block">Current home slider images</span>
                                        <span class="font-large-3 line-height-1 text-bold-300">{{ $image_count }}</span>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 clearfix">
                                    <div class="float-right pl-2">
                                        <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#xlarge">
                                            Add Slide Image
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
            @foreach($slider_images as $slider_image)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card" style="height: 440px;">
                        <div class="card-body">
                            @if($slider_image->image_path)
                                <img style="height: 220px;" class="card-img-top img-fluid" src="{{ url('/HomeSlider').'/'.$slider_image->image_path}}" alt="slider image">
                            @endif
                            <div class="card-block my-card-block-slider" >
                                <a href="{{ route('delete_image', ['image_id' => $slider_image->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                    Delete
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>


<!-- Modal -->
<div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel34">Add slider image</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

      <form action="{{ route('store_image') }}"  method="POST" enctype="multipart/form-data" >
      @csrf
        <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                    <div class="form-group position-relative has-icon-left">
                          <label for="desc">Image Description :</label>
                          <input type="text" class="form-control" id="desc" name="desc" required >
                      </div>
                  </div>

              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="image">Slider Image :</label>
                          <input type="file" name="image" id="image" class="form-control" required>
                      </div>
                  </div>


              </div>

        </div>
        <div class="modal-footer">
            <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
            <input type="submit" class="btn btn-outline-primary btn-lg" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
