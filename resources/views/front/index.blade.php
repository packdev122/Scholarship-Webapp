@extends('front.template')

@section('styles')
	{!! HTML::style('css/home.css') !!}
@endsection

@section('main')

<div style='position:relative' class='home-content'>
	<header class="default-header background-none">
		<nav class="navbar navbar-expand-lg  navbar-light margin-0">
			<div class="top-bar align-items-center" style='display:block'>
				<div class='logo'>
					<a class="" href="{{ url('/')}}">
						<img src='img/new/logo_final_1.png' width='100px'>
					</a>
				</div>
				<div class='hamburger'>
					<button class="background-none border-none" type="button" style='margin-top:20px' id='menu-button'>
						<span class="glyphicon glyphicon-align-left font-size-20 text-white"></span>
					</button>
				</div>
			</div>
		</nav>
	</header>
	<div class='navigation-panel'>
		<div class='flex'>
			<div class="one-pager__navigation">
				<nav class="navigation navigation-one-pager navigation--left navigation--theme-light navigation--small">
					<ul class="navigation__ul">
						<li class="navigation__li">
							<a class="navigation__anchor" href="#" data-index="0" id='homepage_view'>
								<span class="navigation__anchor-circle"></span>
								<span class="navigation__anchor-text">Objective</span>
							</a>
						</li>
						<li class="navigation__li">
							<a class="navigation__anchor" href="#" data-index="1" id='view_scholarship'>
								<span class="navigation__anchor-circle"></span>
								<span class="navigation__anchor-text">About Scholarship</span>
							</a>
						</li>
						<li class="navigation__li">
							<a class="navigation__anchor" href="#" data-index="2" id='view_about'>
								<span class="navigation__anchor-circle"></span>
								<span class="navigation__anchor-text">About us</span>
							</a>
						</li>
						<li class="navigation__li">
							<a class="navigation__anchor navigation__anchor--active" href="#" data-index="3" id='view_judges'>
								<span class="navigation__anchor-circle"></span>
								<span class="navigation__anchor-text">Jury</span>
							</a>
						</li>
						<li class="navigation__li">
							<a class="navigation__anchor" href="#" data-index="4" id='view_collective'>
								<span class="navigation__anchor-circle"></span>
								<span class="navigation__anchor-text">Collective</span>
							</a>
						</li>
					</ul>
					<span class="navigation__active-dot" style="transform: translateY(123px);"></span>
				</nav>
			</div>
			<div class=''>
				<!-- <button class="one-pager__btn-next btn-scroll btn-scroll--next-story btn-scroll--visible theme--light">
					<span class="btn-scroll__text">Next storyline</span>
					<span class="vertical-dash loaded"></span>
				</button> -->
			</div>
		</div>
	</div>
	<div class="banner-area relative" id='banner-area' style='background: url(img/new/main_back.jpg) no-repeat bottom;background-size: cover;-webkit-background-size: cover;height:100vh;background-position-y: 0px;'>
		<div class="container">
			<div class="row fullscreen1  d-flex align-items-center justify-content-end" style='height:80vh !important'>
				<div class="banner-content col-lg-12 col-md-12">
					<div class='banner-container d-flex justify-content-center align-items-center'>
						<img src='img/new/logo_final_3.png' width='200px'>&nbsp;&nbsp;&nbsp;&nbsp;
						<h2 class='description'>
							SCHOLARSHIP	FOR GLOBAL IMPACT<br>
							THROUGH	ENTREPRENEURSHIP<br>
						</h2>
						<div class='video_play_button'>
							<a class='' id='video_play_btn' data-toggle='modal'><i class='fa fa-play-circle'></i></a>
						</div>
					</div>
				</div>												
			</div>
		</div>
	</div>
	<!-- End banner Area -->

	<!-- Begin Scholarship -->
	<div class="scholarship-area section-area" style='' id='scholarship-area'>
		<div class="" style='position:relative'>
			<div class='d-flex scholarship-content' style='height:calc(100vh);'>
				<div class='col-lg-7  content-area flex justify-content-center align-items-center'>
					<div class='' style='padding:40px' id='reason'>
					</div>
				</div>
				<div class='col-lg-5 title-area flex justify-content-center align-items-end' style='padding-left:60px;'>
					<div class='relative' style='margin-bottom:30px'>
						<div class='title-pane'>
							<h1 class="text-white text-uppercase">About Scholar ship</h1>
							<div class='line'></div>
						</div>
						<div>
							<p class='font-size-16 text-white align-justify'>
								<label class='font-size-20'>The AIM Scholarship</label> is a prize awarded to a MIT Sloan Fellow to encourage and support impact creation driven ideas and work towards achieving the United Nations’ Sustainable Development Goals and positive global impact through entrepreneurship in collaboration with MIT Sloan School of Management. The scholarship has been funded and instituted by current MIT Sloan Fellow, Shweta Aprameya, SFMBA ’19, to support Sloan Fellows conducting social impact projects through her family trust – Anusha Welfare Trust.<br><br>

								The scholarship will be awarded to a current Sloan Fellow chosen through a competitive evaluation process by a selection jury and will be called the AIM Scholar at MIT Sloan School of Management for excellence in Entrepreneurship for Social Impact.<br><br>

								The AIM Scholar will be one who hopes to change the world through social entrepreneurship, and is inspired by a personal experience to take on a specific global challenge.
							</p>
						</div>
					</div>
				</div>
			</div>								
		</div>
	</div>
	<!-- End Scholarship area -->
		<!-- Begin Judeges Area -->
	<div class="about-area section-area" style='' id='about-area'>
		<div class="" style='position:relative'>
			<div class='d-flex about-content' style='height:calc(100vh);'>
				<div class='col-lg-7  content-area flex justify-content-center align-items-center'>
					<div class='' style='padding:40px' id='reason'>

					</div>
					<div class='anusha_part hide'>
						<!-- <img src='img/new/shweta.jpg' width='200px' height="150px" style='border-radius:50%'> -->
						<p class='description text-white'><a class='text-white description' href='#shweta_dialog' data-toggle='modal'>Entrepreneurship has the power, strength and exhilaration of being able to bring change to the world.</a></p>
						<p class='signature text-white'>Sheweta</p>
					</div>
				</div>
				<div class='col-lg-5 title-area flex justify-content-center align-items-center' style='padding-left:50px;'>
					<div class='relative'>
						<div class='title-pane'>
							<h1 class="text-white text-uppercase">About Us</h1>
							<div class='line'></div>
						</div>
						<p class='font-size-16 text-white align-justify'>
							The work of the Trust is to support and conduct grassroots social work in diversified areas with a focus on care for elderly, homeless, environment and social entrepreneurship, thereby contributing to the welfare of our society. The Trust engages with communities, government institutions, and like-minded individuals to nurture a self-sustaining eco-system that works collaboratively to improve the world.
						</p>
						<p class='font-size-16 text-white' style='text-align:right'>Mrs Usha Pande</p>
						<p class='font-size-16 text-white' style='text-align:right'>Mr Anup Pande</p>
						
					</div>
				</div>
			</div>								
		</div>
	</div>
	<!-- End Judeges Area -->
	<!-- Begin Judeges Area -->
	<div class="judges-area section-area" style='' id='judges-area'>
		<div class="" style='position:relative'>
			<div class='d-flex judges-content' style='height:calc(100vh);'>
				<div class='col-lg-7  content-area '>
					<div class='flex wrap jury-items justify-content-end' style='height:33.33%'>
						<div class='item jury-item' style='' >
							<img src='img/new/person4.png'  height='100%' style='max-width:100%'>
							<div class='cover-image'></div>
							<div class='description display-none'>
								<h2 class='text-white text-bold'>Bill Aulet</h2>
								<h5 class='text-white'>Managing Director, Martin Trust Center for MIT Entrepreneurship</h5><br>
								<p class='text-white'>
									Bill Aulet is the managing director in the Martin Trust Center for MIT Entrepreneurship at MIT and also a senior lecturer at the MIT Sloan School of Management. The center is responsible for entrepreneurship across all five schools at MIT starting with education but also extending well outside the class room with student clubs, conferences, competitions, networking events, awards, hackathons, student trips and accelerators. He teaches at least three different classes per year (introductory to advanced entrepreneurship classes) in addition to his responsibilities of running the center. His work has won numerous awards including the Adolf F. Monosson Prize for Entrepreneurial Mentoring at MIT.
								</p>
							</div>
						</div>
						<div class='item jury-item' style=''>
							<img src='img/new/person2.png' width='' height='100%' style='max-width:100%'>
							<div class='cover-image'></div>
							<div class='description display-none'>
								<h2 class='text-white text-bold'>Johanna Hising DiFabio</h2>
								<h5 class='text-white'>Assistant Dean, Sloan Fellows & EMBA Executive MBA</h5><br>
								<p class='text-white'>
								Johanna leads all administrative aspects of distinguished senior mid-career MBA degrees, housed within MIT’s Sloan School of Management. Each year, MIT offers 360 global professionals the opportunity to earn their MBA degrees on campus. Johanna supports their learning by collaborating with faculty on the development of innovative curricula; with global organizations on action learning labs to help them meet pressing strategic issues; and, most importantly, with students to create a learning environment that is second-to-none in terms of the personal development and career enhancement.
								</p>
							</div>
						</div>
					</div>
					<div class='flex wrap jury-items justify-content-end' style='height:33.33%'>
						<div class='item jury-item' style='max-width:50%;'>
							<img src='img/new/person6.png' width='' height='100%' style='max-width:100%'>
							<div class='cover-image'></div>
							<div class='description display-none'>
								<h2 class='text-white text-bold'>Gayle Grader</h2>
								<h5 class='text-white'>Director, Executive Career Development at MIT Sloan School of Management</h5><br>
								<p class='text-white'>
									Gayle works with MIT Sloan's incredibly diverse and talented portfolio of Executive MBAs, Sloan Fellows MBAs, and Alumni as they shift their careers in new directions. Gayle loves working at the intersection of talent, markets, and innovation. Before MIT, Gayle spent thirteen years helping professionals and businesses grow through private executive and career coaching work with senior business clients from top organizations. When not coaching, Gayle consulted to companies large and small, from Fortune 500 to startups - strategic consulting projects for top 10 global pharmaceutical companies, to broad business consulting work with family-owned, small businesses with million-dollar P&Ls, to advisory work with ed tech and career tech startups.
								</p>
							</div>
						</div>
						<div class='item jury-item' style='max-width:50%;'>
							<img src='img/new/person5.png' width='' height='100%' style='max-width:100%'>
							<div class='cover-image'></div>
							<div class='description display-none'>
								<h2 class='text-white text-bold'>Anjali Sastry</h2>
								<h5 class='text-white'>Senior Lecturer, System Dynamics</h5><br>
								<p class='text-white'>
									Anjali Sastry is Senior Lecturer at the MIT’s Sloan School of Management. Drawing on organizational behavior and system dynamics, her work applies management approaches to low-resource healthcare. Her GlobalHealth Lab has conducted 70+ projects with front-line enterprises in Sub-Saharan Africa and South Asia; a related stream of work examines innovative frontier-market business models (see http://groundwork.mit.edu ). Anjali is also a lecturer in the Department of Global Health and Social Medicine at Harvard Medical School. She is a Member of the Board of Directors of Management Sciences for Health and of the Medical Advisory Board of Wonderwork. 
								</p>
							</div>
						</div>
					</div>
					<div class='flex wrap jury-items justify-content-end' style='height:33.33%'>
						<div class='item jury-item' style='max-width:50%;'>
							<img src='img/new/person1.png' width='' height='100%' style='max-width:100%'>
							<div class='cover-image'></div>
							<div class='description display-none'>
								<h2 class='text-white text-bold'>Shweta Aprameya</h2>
								<h5 class='text-white'>MIT Sloan Fellow MBA 2019</h5><br>
								<p class='text-white'>
									A current MIT Sloan Fellow, Shweta has held several leadership roles in multinational corporations in UK & India, focused on emerging mass market consumers’ use of self- service & mobile financial services leading to Financial Inclusion, Mobile Payments & Digital Financial Services. She has been one of the youngest C level executive new age first payments bank in India. She has also been advisor to IFC – World Bank Group in India, Srilanka and Bangladesh on Digital Transformation and Financial Inclusion initiatives in financial institutions.<br><br>

									Transitioning to an entrepreneur, she set-up ventures in digital financial services – YTS Payments and AU Welfare Foundation for affordable access to finance for mass market, with focus on gender financing. She is currently building a new FinTech venture HAPPY for micro and small-businesses lending powered by AI for building intelligence to assess first time borrowers. HAPPY is emerging as India’s leading FinTech startup in the small businesses lending space in India.<br><br>
	
									Shweta dreams to make Sustainable Development Goal 1 (No Poverty) & 2 (Zero Hunger) a reality for India.
								</p>
							</div>
						</div>
						<div class='item jury-item flex justify-content-center align-items-center jury-text' style='max-width:50%;'>
							<p class='font-size-25 text-uppercase text-white' style='font-size:45px;font-family:fantasy'>jury</p>
						</div>
					</div>
				</div>
				<div class='col-lg-5 title-area flex justify-content-center align-items-center' style='padding-left:50px;'>
					<div class='relative'>
						<!-- <div class='title-pane'>
							<h1 class="text-white text-uppercase">Juries</h1>
							<div class='line'></div>
						</div> -->
						<div id='jury_description'>
							
						</div>
						<div id="main_jury_description" style='display:none'>
							<h1 style='' class='d-flex text-uppercase text-white'>
								 A VERY RICH <br>EXPERIENCED JURY<br>
								 WILL EVALUATE <br>ALL THE PROJECT<br>
								 IDEAS AND <br>PROPOSALS OF<br>
								 PROSPECTIVE <br>ENTREPRENEURS.
							</h1>
						</div>
					</div>
				</div>
			</div>								
		</div>
	</div>
	<!-- End Judeges Area -->
	<!-- Begin Mentor Area -->
	<div class="mentor-area section-area" style='' id='mentor-area'>
		<div class="" style='position:relative'>
			<div class='d-flex mentor-content' style='height:calc(100vh);'>
				<div class='col-lg-7  content-area flex justify-content-center align-items-center'>
					<div class='' style='padding:40px' id='reason'>
					</div>
				</div>
				<div class='col-lg-5 title-area flex justify-content-center align-items-center' style='padding-left:50px;'>
					<div class='relative'>
						<div class='title-pane'>
							<h1 class="text-white text-uppercase">Advisors & Mentors</h1>
							<div class='line'></div>
						</div>
						<div style='flex-direction:column' class='d-flex'>
							<p class='font-size-16 align-justify text-white'>
								<strong style='font-weight:bold;font-size:20px;'>A collective of industry experts and successful entrepreneurs</strong> who will provide you with professional advice and guidance to help you set-up and grow your idea into a venture.
								<br><br>
								A set of experts who have both set up entrepreneurial ventures and run large corporations who draw upon their individual expertise and network connections to provide inputs and guidance to help navigate your way in India during the project and beyond.
								<br><br>
								You will be able to engage with the collective members at regular frequency and gain from their guidance while they formally monitor the project milestones.
							</p>
						</div>
					</div>
				</div>
			</div>								
		</div>
	</div>
	<!-- End Mentor Area -->

	<div class='menu-area' id='menu-area'>
		<div class='middle-pane flex align-items-center'>
			<div class='container' style='margin-left:35px;margin-right:35px !important;max-width: 100%;'>
				<div class='d-flex'>
					<div class='col-lg-6 contact-pane'>
						<div class='title-pane'>
							<h4 class="text-white text-uppercase">Contact Information</h4>
							<div class='line'></div>
						</div><br>
						<div class>
							<i class='fa fa-envelope font-size-15 text-white'></i>&nbsp;&nbsp;
							<a class='text-white font-size-15' href="mailto:info@betterenergy.dk">connect@aimscholar.net</a>
						</div><br>
						<div class='flex'>
							<label class='contact-icon'><i class='fa fa-linkedin text-white font-size-20'></i> </label>&nbsp;
							<label class='text-white font-size-15' style='font-size:18px;margin-top:1px'>Linkedin</label>
						</div><br>
						<div class="">
							<p class='text-white' style='margin-bottom:2px;'>Refer a friend who might be interested in applying</p>
							<input type='text' class='refer-input' style='width:200px'>
							<button class='refer-button' >Submit</button>
						</div>
					</div>
					<div class='col-lg-6 menu-pane flex justify-content-end'>
						<nav class="navigation navigation-simple navigation--theme-light navigation--right navigation--large">
							<ul class="navigation__ul">
								<li class="navigation__li navigation__li">
									<a href="/terms_conditions" class="navigation__anchor navigation__anchor">
										<span class="navigation__anchor-circle"></span>
										<span class="navigation__anchor-text">Guidelines</span>
									</a>
								</li>
								<li class="navigation__li navigation__li--parent">
									<a href="/faqs" class="navigation__anchor navigation__anchor">
										<span class="navigation__anchor-circle"></span>
										<span class="navigation__anchor-text">faqs</span>
									</a>
								</li>
								@if(!Auth::check())
									<li class="navigation__li navigation__li--parent">
										<a href="/login" class="navigation__anchor navigation__anchor">
											<span class="navigation__anchor-circle"></span>
											<span class="navigation__anchor-text">Login</span>
										</a>
									</li>
								@endif
								<li class="navigation__li navigation__li--parent">
									<a href="/application" class="navigation__anchor navigation__anchor">
										<span class="navigation__anchor-circle"></span>
										<span class="navigation__anchor-text">Application</span>
									</a>
								</li>
								<li class="navigation__li navigation__li--parent">
									<a href="/news" class="navigation__anchor navigation__anchor">
										<span class="navigation__anchor-circle"></span>
										<span class="navigation__anchor-text">Resources</span>
									</a>
								</li>
								@if(Auth::check())
									@if(Auth::user()->role == 1)
										<li class="navigation__li navigation__li--parent">
											<a href="/jury/dashboard" class="navigation__anchor navigation__anchor">
												<span class="navigation__anchor-circle"></span>
												<span class="navigation__anchor-text">Dashboard</span>
											</a>
										</li>
									@endif
									@if(Auth::user()->role == 2 || Auth::user()->role == 3)
										<li class="navigation__li navigation__li--parent">
											<a href="/admin/dashboard" class="navigation__anchor navigation__anchor">
												<span class="navigation__anchor-circle"></span>
												<span class="navigation__anchor-text">Dashboard</span>
											</a>
										</li>
									@endif
								@endif
								@if(Auth::check())
									<li class="navigation__li navigation__li--parent">
										<a href="/logout" class="navigation__anchor navigation__anchor">
											<span class="navigation__anchor-circle"></span>
											<span class="navigation__anchor-text">Log Out</span>
										</a>
									</li>
								@endif
							</ul>
							<span class="navigation__active-dot" style="transform: scale(0);"></span>
						</nav>
					</div>
				</div>
			</div>
			<div class='footer'>
				<div class='' style='width:100%;margin-left:65px;'>
					<p class='text-white'>© Anusha Welfare Trust</p>
				</div>
			</div>
			<div class='search-field'>
				<div class='relative'>
					<input type='text' class='' style='width:200px' placeholder = 'SEARCH HERE'>
					<i class='fa fa-search search-icon'></i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end service Area-->
<!-- Start testimonial Area -->
<!-- <section class="testimonial-area relative section-gap pt-50">
	<div class="container">
		<div class="row">
			<div class='col-lg-6'>
				<div class="row">
					<div class="col-lg-12">
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">

							<div class="carousel-inner">
								<div class="item active">
									<video id='vid2' width="100%" height="150px" muted controls style='height:330px;margin-top:-20px'>
										<source src="aim.mp4" type="video/mp4">
										<source src="aim.ogg" type="video/ogg">
										Your browser does not support the video tag.
									</video>
								</div>

								<div class="item">
									<img src="img/new/carousel_3.png" alt="Chicago" style="width:100%;height:310px">
								</div>
							</div>

							<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel1" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<div class='about-box'>
					<p class='title'>About Scholarship</p><br>
					<span class='content'>
						The AIM Anusha Welfare Trust Scholarship is a prize awarded an MIT Sloan Fellow to encourage and support the ideas and work towards achieving the United Nations’ Sustainable Development Goals and positive global impact through entrepreneurship. The scholarship will be awarded to a current Sloan Fellow chosen through a competitive evaluation process by a selection jury and will be called the Anusha's AIM Scholar at MIT Sloan School of Management for excellence in Entrepreneurship for Social Impact. The AIM Scholar will be one who hopes to change the world through social entrepreneurship, and is inspired by a personal experience to take on a specific global challenge. <a class='text-blue' href='/nutshell'>Know more >> </a>
					</span><br><br>
				</div>
			</div>
			<div class='col-lg-6'>
				<div class="row">
					<div class="col-lg-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<img src="img/new/carousel_5.png" alt="Los Angeles" style="width:100%;height:310px">
								</div>

								<div class="item">
									<img src="img/new/carousel_4.png" alt="Chicago" style="width:100%;height:310px">
								</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<div class='about-box'>
					<p class='title'>Winning Project</p><br>
					<span class='content'>
						The scholarship is open to current Sloan Fellows who may apply individually or in teams (max 2 member) and the winning project will be granted:<br>
						• <strong>One-time grant of 10,000 USD</strong>, with an additional honorarium of 1,000 USD per month, per person, during the implementation phase as to cover the cost of living in India.<br>
						• <strong>6-12 months of hands on immersion in India to test</strong>, prototype and pilot your idea into a working solution to progress towards a SDG goal<br>
						• <strong>On ground logistics and implementation support</strong><br>
						• <strong>Connect with ecosystem and guidance by Collective</strong> of experienced professionals in the relevant field <a class='text-blue' href='/terms_conditions'>Know more >></a>
					</span><br><br>
				</div>
			</div>			
		</div>
	</div>	
</section> -->
<!-- <section class="pin-area relative section-gap" id='pin-area'>
	<div class='container'><hr>
		<div class="menu-content d-flex mb-20 space-between">
			<div>
			</div>
			<div class='icon-box text-center font-size-20'>
				<label>In the News</label>
				<br>
				<a id='' href='#' ><i class='fa fa-arrow-right'></i></a>
			</div>
			<div class='icon-box text-center font-size-20'>
				<label>Blog</label>
				<br>
				<a id='blog_post' href='#pin-area'><i class='fa fa-arrow-right'></i></a>
			</div>
			<div class='icon-box text-center font-size-20'>
				<label>Readers Digest</label>
				<br>
				<a href='https://www.pioneerspost.com' target='_blank'><i class='fa fa-arrow-right'></i></a>
			</div>
			<div class='icon-box text-center font-size-20'>
				<label>Gallery</label>
				<br>
				<a href='https://mitsloan.mit.edu/press/mit-sloan-fellows-mba-program-announces-scholarship-excellence-entrepreneurship-social-impact-india' target='_blank'><i class='fa fa-arrow-right'></i></a>
			</div>
			<div>
			</div>
		</div>
	</div>
</section> -->
<div id="video_dialog" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body padding-0" style='background:black'>
				<a class="video-close" data-dismiss="modal"><i class='fa fa-times-circle text-white font-size-20'></i></a>
				<video id='' class='' width="100%" height="350" controls>
					<source src="aim.mp4" type="video/mp4">
					<source src="aim.ogg" type="video/ogg">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
	</div>
</div>
<video id='main_video' class=''>
	<source src="aim.mp4" type="video/mp4">
	Your browser does not support the video tag.
</video>
<button id="video_button"><i class='fa fa-times'></i></button>
<button id="mini_button"><i class='fa fa-compress'></button>
<div id="shweta_dialog" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body" style=''>
				<a class="video-close" data-dismiss="modal"><i class='fa fa-times-circle-o text-black font-size-20'></i></a>
				<p class='font-size-15'>
					A current MIT Sloan Fellow, Shweta has held several leadership roles in multinational corporations in UK & India, focused on emerging mass market consumers’ use of self- service & mobile financial services leading to Financial Inclusion, Mobile Payments & Digital Financial Services. She has been one of the youngest C level executive new age first payments bank in India. She has also been advisor to IFC – World Bank Group in India, Srilanka and Bangladesh on Digital Transformation and Financial Inclusion initiatives in financial institutions. 
					<br><br>
					Transitioning to an entrepreneur, she set-up ventures in digital financial services – YTS Payments and AU Welfare Foundation for affordable access to finance for mass market, with focus on gender financing. She is currently building a new FinTech venture HAPPY for micro and small-businesses lending powered by AI for building intelligence to assess first time borrowers. HAPPY is emerging as India’s leading FinTech startup in the small businesses lending space in India. 
					<br><br>
					Shweta dreams to make Sustainable Development Goal 1 (No Poverty) & 2 (Zero Hunger) a reality for India.
				</p>
			</div>
		</div>
	</div>
</div>
@section('scripts')
	{!! HTML::script('js/home.js') !!}
@endsection
@stop

