@extends('layouts.main')
@section('content')

<link rel="stylesheet" type="text/css" href="/styles/about.css">

<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/musti1.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">About us</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-eq-height row_about">

				<!-- Intro Content -->
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">Musti Investment</div>
							<div class="section_title"><h1>Who we are</h1></div>
						</div>
						<div class="intro_text">
							<p>Musti Investment Limited works with a wide spectrum of clients including:
                                Institutions, Government agencies, County Governments, Private land owners,
                                Charities and the house building industry. We have an exceptional understanding
                                of the land market and our clients requirements. This means we can tailor
                                strategies to maximize the value of any project or deal.</p>
						</div>
						<div class="button intro_button"><a href="{{route('blog')}}">more from our blog</a></div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
						<div class="background_image" style="background-image:url(images/musti11.jpg)"></div>
						<img src="images/phase3.jpg" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Agents -->

	<div class="agents">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Musti Investment</div>
						<div class="section_title">
                            <h1>Our Staff</h1>
                            <p>Our Staff are experts at identifying and acquiring vacant sites with development
                                potential and arranging the sale and acquisition of proper es and
                                building land on behalf of landowners and developers across Kenya.
                                As Kenya’s largest privately owned global property agency and consultancy
                                firm, we have direct access to expertise drawn from our in-house specialist
                                within both the commercial and residential sectors.</p>
                        </div>
					</div>
				</div>
			</div>
			<div class="row agents_row">

				<!-- Agent -->
				<div class="col-lg-6 agent_col">
					<div class="agent">
						<div class="agent_content">
							<div class="agent_name"><a href="#">Stephen Muturi</a></div>
							<div class="agent_title">Managing Director</div>
							<div class="agent_title"><a href="mailto:stephenmuturi@mustiinvestment.co.ke">
                                    stephenmuturi@mustiinvestment.co.ke</a>
                            </div>
							<div class="agent_list">
									<p> </p>
                                    <p>Stephen is the Managing Director at MUSTI Investment Limited.
                                    He has been with MUSTI Investment Limited since inception and he has a wealth of
                                    experience in real estate and construction. He oversees the day to day operation and
                                    takes charge of a very able team that is mandated to run the affairs of the company.
                                    He has over 10 years Experience in real estate.</p>
							</div>
						</div>

                        <div class="agent_desc">
                        </div>
					</div>
				</div>

				<!-- Agent -->
                <div class="col-lg-6 agent_col">
                    <div class="agent">
                        <div class="agent_content">
                            <div class="agent_name"><a href="#">Susan Ng’ang’a</a></div>
                            <div class="agent_title">Finance Director</div>
                            <div class="agent_title"><a href="mailto:stephenmuturi@mustiinvestment.co.ke">
                                    susannganga@mustiinvestment.co.ke</a>
                            </div>
                            <div class="agent_list">
                                <p> </p>
                                <p>Susan is the Finance Director at MUSTI Investment Limited. She is the co-founder of
                                    MUSTI Investment Limited and has a wealth of experience in Finance and Real Estate.
                                    She has over 10 years Experience in the company and heads the Finance Department.</p>
                            </div>
                        </div>

                        <div class="agent_desc">
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-6 agent_col">
                    <div class="agent">
                        <div class="agent_content">
                            <div class="agent_name"><a href="#">Stanley Irungu</a></div>
                            <div class="agent_title">Strategic Director</div>
                            <div class="agent_title"><a href="mailto:stephenmuturi@mustiinvestment.co.ke">
                                    stanleyirungu@mustiinvestment.co.ke</a>
                            </div>
                            <div class="agent_list">
                                <p> </p>
                                <p>Stanley is a holder of a Bachelor of Technology in Chemical and Processing engineering
                                    from Moi University; He holds a Master of Science degree in Industrial engineering
                                    and Management from Dedan Kimathi university of Technology. He is the strategic
                                    director at Musti investment Limited and has been with Musti since inception.</p>
                            </div>
                        </div>

                        <div class="agent_desc">
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-6 agent_col">
                    <div class="agent">
                        <div class="agent_content">
                            <div class="agent_name"><a href="#">Elizabeth Kariuki</a></div>
                            <div class="agent_title">Customer Relationship Manager</div>
                            <div class="agent_title"><a href="mailto:stephenmuturi@mustiinvestment.co.ke">
                                    elizabethkariuki@mustiinvestment.co.ke</a>
                            </div>
                            <div class="agent_list">
                                <p> </p>
                                <p>She holds a Bachelor of Technology in Textile Engineering from Moi University.
                                    She has over 10 years experience in real estate and customer service. She is
                                    currently in charge of customer service at MUSTI Investment Limited </p>
                            </div>
                        </div>

                        <div class="agent_desc">
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-6 agent_col">
                    <div class="agent">
                        <div class="agent_content">
                            <div class="agent_name"><a href="#">Nicholas Maina</a></div>
                            <div class="agent_title">Logistics Director</div>
                            <div class="agent_title"><a href="mailtO:stephenmuturi@mustiinvestment.co.ke">
                                    nicholasmaina@mustiinvestment.co.ke</a>
                            </div>
                            <div class="agent_list">
                                <p> </p>
                                <p>Nicholas is a holder of a Bachelor of Science in Biochemistry from Egerton University
                                    and is also a Certified Public Accountant -CPA (K). He has a wealth of experience in
                                    real estate and property mapping. He is currently the logistics director at MUSTI
                                    Investment Limited.</p>
                            </div>
                        </div>

                        <div class="agent_desc">
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-6 agent_col">
                    <div class="agent">
                        <div class="agent_content">
                            <div class="agent_name"><a href="#">Winny Chepwogen Bati</a></div>
                            <div class="agent_title">Company Secretary</div>
                            <div class="agent_title"><a href="mailto:stephenmuturi@mustiinvestment.co.ke">
                                    winnybati@mustiinvestment.co.ke</a>
                            </div>
                            <div class="agent_list">
                                <p> </p>
                                <p>She holds a law degree from Moi University (LLB) and a diploma from Kenya School of
                                    Law. She is an advocate of the high court and has a wide experience in Conveyance.
                                    She is in charge of the Legal department at MUSTI Investment Limited as well as the
                                    company secretary.</p>
                            </div>
                        </div>

                        <div class="agent_desc">
                        </div>
                    </div>
                </div>

                <!-- Agent -->
                <div class="col-lg-6 agent_col">
                    <div class="agent">
                        <div class="agent_content">
                            <div class="agent_name"><a href="#">Wilson Kariuki</a></div>
                            <div class="agent_title">ICT MANAGER</div>
                            <div class="agent_title"><a href="mailto:stephenmuturi@mustiinvestment.co.ke">
                                    wilsonkariuki@mustiinvestment.co.ke</a>
                            </div>
                            <div class="agent_list">
                                <p> </p>
                                <p>He holds a Bachelor of IT from Moi University. He holds a Master of Science in Computer
                                    Systems from Jommo Kenyatta university of Technology. He has over 10 years’ experience
                                    in ICT projects implementation and has been instrumental in deployment of ICT
                                    infrastructure in all our projects. He is currently the Head of ICT at MUSTI Investment Limited.</p>
                            </div>
                        </div>

                        <div class="agent_desc">
                        </div>
                    </div>
                </div>
            </div>
			<div class="row contact_row">
				<div class="col">
					<div class="button ml-auto mr-auto"><a href="{{route('contact')}}">contact us</a></div>
				</div>
			</div>
		</div>
	</div>

@endsection









