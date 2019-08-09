@extends('front.template')

@section('main')

<section class="banner-area relative" id="home" data-parallax="scroll1" data-image-src="img/new/bg.jpg" style='background: url(img/new/bg3.jpeg) no-repeat bottom;background-size: cover;-webkit-background-size: cover;height:600px;background-position-y: -57px;'>
	<!-- <div class="overlay-bg overlay"></div>	 -->
	<video id='vid1' class='' width="200" height="120" style='position:absolute;right:0;bottom:0' muted controls>
		<source src="aim.mp4" type="video/mp4">
		<source src="aim.ogg" type="video/ogg">
		Your browser does not support the video tag.
	</video>
	<div class='banner_dots'>
		<button class='dots dot-1 background-grey'></button>
		<button class='dots dot-2'></button>
		<button class='dots dot-3'></button>
	</div>
	<header class="default-header">
		<nav class="navbar navbar-expand-lg  navbar-light margin-0">
			<div class="container container1">
				<a class="navbar-brand" href="{{ url('/')}}">
					<img src='img/new/logo.png' width='110px'>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li>
							<div class="dropdown">
								<a href="/application" class='text-black dropbtn'>Application</a>
								<!-- <div class="dropdown-content">
									<a href="/nutshell">Nutshell</a>
									<a href="terms_conditions">Details of Scholarhip</a>
									<a href="application">Application</a>
									<a href="/faqs">FAQs</a>
								</div> -->
							</div>
						</li>
						<li>
							<div class="dropdown">
								<a href="/terms_conditions" class='text-black dropbtn'>Guidelines</a>
								<!-- <div class="dropdown-content">
									<a href="/anusha">Anusha Trust</a>
									<a href="/jury">Jury</a>
									<a href="/collective">Collective</a>
								</div> -->
							</div>
						</li>
						<li>
							<div class="dropdown">
								<a href="/faqs" class='text-black dropbtn'>FAQS</a>
								<!-- <div class="dropdown-content">
									<a href="/readings">Videos</a>
								</div> -->
							</div>
						</li>
						<li>
							<div class="dropdown">
								@if(Auth::guest())
									<a href="/login" class='text-black dropbtn'>Login</a>
								@else
									<a href="/login" class='text-black dropbtn'>Logout</a>
								@endif
								@if(!Auth::guest())
								<div class="dropdown-content">
									<a href = "/jury/applicants">Applicant</a>
									<a href = "/jury/applications">Selector</a>
									
								</div>
								@endif
							</div>
						</li>
						<!-- @if(Auth::guest())
							<li>{!! link_to('login', 'Log in') !!}</li>
						@else
							<li>{!! link_to('dashboard', 'Dashboard') !!}</li>
							<li>{!! link_to('logout', 'Log out') !!}</li>
						@endif -->							
					</ul>
				</div>						
			</div>
		</nav>
	</header>
	<div class="container">
		<div class="row fullscreen1  d-flex align-items-center justify-content-end" style='height:600px !important'>
			<div class="banner-content col-lg-12 col-md-12">
				<h2 class='description'>
					Supporting excellence in<br> entrepreneurship for impact					
				</h2><br>
				<a href="/application" class="btn btn-black text-uppercase font-size-16" style='background:#00000080'>APPLY NOW <i class='fa fa-arrow-right text-white'></i></a>
			</div>												
		</div>
	</div>
</section>
<!-- End banner Area -->	


<!-- start service Area-->
<section class="service-area pt-30 pb-20" id="service">
	<div class="container">
		<div class="row d-flex justify-content-center black-box mb-20">
			<div class="menu-content">
				<h2 class="text-center text-white" style='word-break:break-all'><img src='img/new/logo_2.png' width='200px'></h2>
				<h3 class="text-center text-white" style='word-break:break-all'><img src='img/new/action.png' width='20px' height='20px'> ACTION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/new/impact.png' width='20px' height='20px'> IMPACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/new/motivation.png' width='20px' height='20px'> MOTIVATION</h3>
			</div>
		</div>	
		<div class="row">
			<div class='col-lg-3'>
				<div class='border-box'>
					<a href='/jury'>
						<span class='title'>Jury</span><br><br>
					</a>
					<span class='text'>Which will select</span>
					
				</div>
			</div>
			<div class='col-lg-3'>
				<div class='border-box'>
					<a href='/collective'>
						<span class='title'>Collective</span><br><br>
					</a>
					<span class='text'>Which all collective</span>
					
				</div>
			</div>
			<div class='col-lg-3'>
				<div class='border-box'>
					<a href='/about'>
						<span class='title'>About Us</span><br><br>
					</a>
					<span class='text'>Our mission</span>
					</a>
				</div>
			</div>
			<div class='col-lg-3 d-flex justify-content-center align-items-center'>
				<a href="/application" class="btn btn-black text-uppercase font-size-16">APPLY NOW <i class='fa fa-arrow-right text-white'></i></a>
			</div>
		</div>														
	</div>	
</section>
<!-- end service Area-->
<!-- Start testimonial Area -->
<section class="testimonial-area relative section-gap pt-20">
	<div class="container">
		<div class="row">
			<div class='col-lg-6'>
				<div class="row">
					<div class="col-lg-12">
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->

							<!-- Wrapper for slides -->
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

							<!-- Left and right controls -->
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
							<!-- Indicators -->

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="img/new/carousel_5.png" alt="Los Angeles" style="width:100%;height:310px">
								</div>

								<div class="item">
									<img src="img/new/carousel_4.png" alt="Chicago" style="width:100%;height:310px">
								</div>
							</div>

							<!-- Left and right controls -->
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
</section>
<script>
	$(document).ready(function(){
		 var carousel = 0;
		 var carousel_transition = function(){
			 if(carousel % 3 == 0){
				$('.banner-area').css("background","url(img/new/bg3.jpeg) no-repeat bottom");
				$('.banner-area .description').html("Supporting Excellence in <br>Entrepreneurship");
				$(".dots").removeClass("background-grey");
				$(".dot-1").addClass("background-grey");
				carousel++;
			 }else if(carousel % 3 == 1){
				$('.banner-area').css("background","url(img/new/bg4.jpeg) no-repeat bottom");
				$('.banner-area .description').html("Bringing Change, Making Impact");
				$(".dots").removeClass("background-grey");
				$(".dot-2").addClass("background-grey");
				carousel++;
			 }else{
				$('.banner-area').css("background","url(img/new/bg1.jpeg) no-repeat bottom");
				$('.banner-area .description').html("Take up a Cause, Make a Difference");
				$(".dots").removeClass("background-grey");
				$(".dot-3").addClass("background-grey");
				carousel++;
			 }
			 $('.banner-area').css('-webkit-background-size','cover');
			 $('.banner-area').css('background-position-y','-57px');
			 setTimeout(function(){ 
				carousel_transition();
			}, 15000);
		}
		// $('.banner-area').css("background","url(img/new/bg4.jpeg) no-repeat bottom");
		carousel_transition();
		$('.dot-1').on("click",function(){
			$('.banner-area').css("background","url(img/new/bg3.jpeg) no-repeat bottom");
			$('.banner-area .description').html("Supporting Excellence in <br>Entrepreneurship");
			$('.banner-area').css('-webkit-background-size','cover');
			$('.banner-area').css('background-position-y','-57px');
			$(".dots").removeClass("background-grey");
			$(".dot-1").addClass("background-grey");
		})
		$('.dot-2').on("click",function(){
			$('.banner-area').css("background","url(img/new/bg4.jpeg) no-repeat bottom");
			$('.banner-area .description').html("Bringing Change, Making Impact");
			$('.banner-area').css('-webkit-background-size','cover');
			$('.banner-area').css('background-position-y','-57px');
			$(".dots").removeClass("background-grey");
			$(".dot-2").addClass("background-grey");
		})
		$('.dot-3').on("click",function(){
			$('.banner-area').css("background","url(img/new/bg1.jpeg) no-repeat bottom");
			$('.banner-area .description').html("Take up a Cause, Make a Difference");
			$('.banner-area').css('-webkit-background-size','cover');
			$('.banner-area').css('background-position-y','-57px');
			$(".dots").removeClass("background-grey");
			$(".dot-3").addClass("background-grey");
		})
	})
</script>
@stop


