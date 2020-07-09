@extends('layouts.main')
@section('content')

    <link rel="stylesheet" type="text/css" href="styles/blog.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/musti1.png" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Blog Posts</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->

    <div class="blog">
        <div class="container">
            <div class="row blog_row">

                <!-- Blog Posts -->
                <div class="col-lg-9">
                    <div class="blog_posts">
                    @foreach($posts as $post)
                        <!-- Blog Post -->
                        <div class="blog_post">
                            <div class="blog_post_image">
                                @if($post->image)
                                    <img src="{{ asset('images/'.$post->image) }}" lt="{{ $post->title }}" style="height: 400px">
                                @endif
                                <div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
                                    <div>{{date_format($post->created_at,'d')  }}</div>
                                    <div>{{date_format($post->created_at,'m y')  }}</div>
                                </div>
                            </div>
                            <div class="blog_post_content">
                                <div class="blog_post_title"><a href="#">{{ $post->title }}</a></div>
                                <div class="blog_post_info">
                                    <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <li>by <a href="#">{{ $post->writer->name }}</a></li>
                                    </ul>
                                </div>
                                <div class="blog_post_text">
                                    <p>{{ $post->body }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $posts->links() }}
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">

                        {{-- <!-- Search -->
                        <div class="sidebar_search">
                            <form action="#" class="sidebar_search_form">
                                <input type="text" class="sidebar_search_input" required="required">
                                <button class="sidebar_search_button"><img src="images/search.png" alt=""></button>
                            </form>
                        </div> --}}
                        {{-- <!-- Archive -->
                        <div class="archive">
                            <div class="sidebar_title"><h3>Archive Posts</h3></div>
                            <div class="sidebar_list">
                                <ul>
                                    @foreach($archive_post as $arch_post)
                                        <li><a href="#">{{$arch_post->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> --}}

                        <!-- Extra -->
                        <div class="extra d-flex flex-column align-items-start justify-content-start">
                            <div class="background_image" style="background-image:url(images/realestate.jpg)"></div>
                            <div class="extra_button"><a>Need a Property?</a></div>
                            <div class="extra_phone_container mt-auto">
                                <div>Call US Today</div>
                                <div>020 808 9405</div>
                            </div>
                        </div>

                        <!-- Extra -->
                        <div class="extra d-flex flex-column align-items-start justify-content-start">
                            <div class="background_image" style="background-image:url(images/realestate.jpg)"></div>
                            <div class="extra_button"><a>Need a Property?</a></div>
                            <div class="extra_phone_container mt-auto">
                                <div>Call US Today</div>
                                <div>020 808 9405</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
