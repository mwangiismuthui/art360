@extends('layouts.main')
@section('content')
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function onSubmit(token) {
        document.getElementById("register-form").submit();
    }
</script>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/musti1.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Contact</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container contact_cont">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Musti Investment</div>
						<div class="section_title"><h1>Get in touch</h1></div>
					</div>
				</div>
			</div>
			<div class="row contact_row">

				<!-- Contact - About -->
				<div class="col-lg-6 contact_col">
					<div class="logo"><a href="#"><img src="/images/logo2.png" alt="Logo"></a></div>
					<div class="contact_text">
						<p>Mus Investment Limited works with a wide spectrum of clients including: Institutions,
                            Government agencies, County Governments, Private land owners, Charities and the house
                            building industry. We have an exceptional understanding of the land market and our clients
                            requirements. This means we can tailor strategies to maximize the value of any project or deal.</p>
					</div>
				</div>

				<!-- Contact - Info -->
				<div class="col-lg-6 contact_col">
					<div class="contact_info">
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/placeholder_2.svg" alt=""></div>
								</div>
								<span>Kitengela Milele Centre,Behind Equity bank</span>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/phone-call-2.svg" alt=""></div>
								</div>
								<span>020 808 9405</span>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/envelope-2.svg" alt=""></div>
								</div>
								<span>info@mustiinvestment.co.ke</span>
							</li>
						</ul>
					</div>
                    {{--<div class="contact_image d-flex flex-column align-items-center justify-content-center">
                        <img src="images/contact_image.jpg" alt="">
                    </div>--}}
				</div>

			</div>
			<div class="row contact_form_row">
				<div class="col-lg-6">
                    <div class="section_title"><h1>Contact Form</h1></div>
					<div class="contact_form_container">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
						<form action="{{route('sendmail')}}" class="contact_form text-center" id="contact_form" method="POST">
                            @csrf
							<div class="row">
								<div class="col-lg-12">
									<input type="text" name="name" class="contact_input" placeholder="Your name" required="required">
								</div>
							</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="email" name="email" class="contact_input" placeholder="Your e-mail" required="required">
                                </div>
                                <div class="col-lg-6">
                                    <input type="tel" name="phone" class="contact_input" placeholder="Your phone" required="required">
                                </div>
                            </div>
							<textarea class="contact_textarea contact_input" name="message" placeholder="Message" required="required"></textarea>
                            <div class="form-group">
                                <label for="captcha">Captcha</label>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            </div>
							<button class="contact_button">send message</button>
						</form>
					</div>
				</div>
                <div class="col-lg-6">
                    <div class="section_title"><h1>Map</h1></div>
                    <div style="width: 100%">
                        <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=-1.496209, 36.918767&amp;q=Kitengela+(Musti%20Investment%20Ltd)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                        </iframe></div><br />
                </div>
                </div>
			</div>
		</div>

@endsection
