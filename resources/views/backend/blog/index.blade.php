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
                                        <span class="grey darken-1 block">Blog Posts</span>
                                        <span class="font-large-3 line-height-1 text-bold-300">{{ $post_count }}</span>
                                    </div>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 clearfix">
                                    <div class="float-right pl-2">
                                        <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal" data-target="#xlarge">
                                            Add Blog Post
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
            @foreach($posts as $post)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card" style="height: 440px;">
                        <div class="card-body">
                            @if($post->image)
                                <img style="height: 220px;" class="card-img-top img-fluid" src="{{ asset('images/'.$post->image) }}" alt="blog image">
                            @endif
                            <div class="card-block" >
                                <h4 class="card-title">{{$post->title}}</h4>
                                <h6 class="card-subtitle text-muted">BY {{ $post->writer->name }}</h6>
                                <p class="card-text">{{Str::words( $post->body,10) }}</p>
                                <a href="{{ route('blog.edit_post', ['post_id' => $post->id])}}" class="btn btn-success">
                                    Edit
                                </a>
                                <a href="{{ route('blog.delete_post', ['post_id' => $post->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                    Delete
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

{{--Create modal--}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <!-- Modal -->
            <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">

                        <div class="modal-body">

                            <!-- Form wizard with icon tabs section start -->
                            <section id="icon-tabs">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-content collapse show">
                                                <div class="card-body">
                                                    <form action="{{ route('blog.store_post') }}"  method="POST" enctype="multipart/form-data" >
                                                    @csrf
                                                    <!-- Step 1 -->
                                                        <h4 class="my-step-name">Blog details</h4>
                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="title">Blog title :</label>
                                                                        <input type="text" class="form-control" id="title" name="title" required >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="image">Featured Image :</label>
                                                                        <input type="file" name="image" id="image" class="form-control" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                              <div class="col-md-12">
                                                                  <div class="form-group">
                                                                      <label for="body">Blog Content :</label>
                                                                      <textarea class="form-control" rows="5" id="body" name="body" required></textarea>
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
