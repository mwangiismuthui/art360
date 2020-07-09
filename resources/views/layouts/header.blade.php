

	<!-- Header -->

	<header class="header">

		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
                        <i class="fa fa-phone"></i>
						<span>+254 798 108853</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
                        <i class="fa fa-map-marker"></i>
                        <span>Nairobi ,Capital Hill</span>
					</li>
					<!-- Email -->
					<li class="d-flex flex-row align-items-center justify-content-start">
                        <i class="fa fa-envelope-o"></i>
						<span>levanvaris@gmail.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="https://facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="{{route('login')}}">Staff Login</a></li>
					{{-- <li><a href="{{route('register')}}">Register</a></li> --}}
					</ul>
				</div>
			</div>
		</div>


            <nav class=" navbar navbar-expand-md  navbar-hover ">
            <div class="logo"><a class="navbar-brand" href="{{url('/')}}">Art360</a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHover" aria-controls="navbarDD" aria-expanded="false" aria-label="Navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse " id="navbarHover">
                    <ul class="navbar-nav mx-auto">
                        {{-- <li class="nav-item {{ Route::currentRouteNamed('index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                        </li> --}}
                        {{-- <li class="nav-item {{Route::currentRouteNamed('about')  ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteNamed('services') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item dropdown {{ Route::currentRouteNamed('listings') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >
                                Properties
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Special Purpose properties</a></li>
                                <li><a class=" dropdown-item dropdown-toggle" href="#">Commercial</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Commercial Building'])}}">Commercial Building</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Hotel'])}}">Hotel</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Office'])}}">Office</a></li>

                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" >Residential</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Apartments'])}}">Apartments</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Bungalow'])}}">Bungalow</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Holiday Home'])}}">Holiday Home</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Maisonette'])}}">Maisonette</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Penthouse'])}}">Penthouse</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Studio Apartment'])}}">Studio Apartment</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Town house'])}}">Town house</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Unfurnished apartment'])}}">Unfurnished apartment</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Villas'])}}">Villas</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle">Industrial properties</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Godowns'])}}">Godowns</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" >Land For Sale</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Commercial'])}}">Commercial</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Residential'])}}">Residential</a></li>
                                        <li><a class="dropdown-item" href="{{route('menu-search',['cat_type'=>'Agricultural'])}}">Agricultural</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{ Route::currentRouteNamed('blog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('blog')}}">News</a>
                        </li>

                        <li class="nav-item {{ Route::currentRouteNamed('contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li> --}}
                    </ul>
                    {{-- <div class="submit ml-auto"><a href="{{route('download_pdf')}}" >
                            <i class="fa fa-download"></i> Download Brochure
                        </a>
                    </div> --}}
                </div>

            </nav>

		{{--</div>--}}
    </header>
