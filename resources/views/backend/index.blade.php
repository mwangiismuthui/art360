@extends('backend_layout.main')
@section('content')
<?php

use App\Gallery;
?>

<section id="content-types">

    <div class="row match-height">
        <div class="col main">
            <h1 class="display-4 d-none d-sm-block">
                Welcome To Art360
            </h1>
            <p class="lead d-none d-sm-block">Quick Navigation</p>

            <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Users</h6>
                            <h1 class="display-4">{{$users}}</h1>
                            <div class="dash-nav"><a  href="{{route('all_users')}}">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-edit fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Posts</h6>
                            <h1 class="display-4">{{$posts}}</h1>
                            <div class="dash-nav"><a  href="{{ route('blog.all_posts') }}">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-building fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Arts</h6>
                            <h1 class="display-4">{{$properties}}</h1>
                            <div class="dash-nav"><a  href="{{route('all_properties')}}">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Features</h6>
                            <h1 class="display-4">{{$features}}</h1>
                            <div class="dash-nav"><a  href="{{route('all_features')}}">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-cyan h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-folder fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Categories</h6>
                            <h1 class="display-4">{{$categories}}</h1>
                            <div class="dash-nav"><a  href="{{route('category.index')}}">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-blue-grey h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-image fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Home Slider</h6>
                            <h1 class="display-4">{{$banners}}</h1>
                            <div class="dash-nav"><a  href="{{route('slider_images')}}">View</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-amber h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-comment fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">messages</h6>
                            <h1 class="display-4">{{$messages}}</h1>
                            <div class="dash-nav"><a  href="{{route('customer_messages')}}">View</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>


</section>

@endsection
