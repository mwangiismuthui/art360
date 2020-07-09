@extends('backend_layout.main')
@section('content')
    <section id="content-types">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form action="{{ route('blog.update_post', ['post_id' => $post->id]) }}"  method="POST" enctype="multipart/form-data" >
                            @csrf
                            <!-- Step 1 -->
                                <h4 class="my-step-name">Blog details</h4>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Blog title :</label>
                                                <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image">Featured Image :</label>
                                                <input type="file" name="image" id="image" class="form-control" >
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="body">Blog Content :</label>
                                              <textarea class="form-control" rows="5" id="body" name="body" required>
                                                  {{ $post->body }}
                                              </textarea>
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
@endsection
