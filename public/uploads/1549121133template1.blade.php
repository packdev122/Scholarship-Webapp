<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Scholar</title>

		@yield('head')
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		{!! HTML::style('css/common/linearicons.css') !!}
		{!! HTML::style('css/common/font-awesome.min.css') !!}
		{!! HTML::style('css/common/jquery.DonutWidget.min.css') !!}
		{!! HTML::style('css/common/bootstrap.css') !!}
		{!! HTML::style( 'css/metronic/components-rounded.css') !!}
		{!! HTML::style('css/common/owl.carousel.css') !!}
		{!! HTML::style('css/common/main.css') !!}
		{!! HTML::style('css/style.css') !!}
		{!! HTML::script('js/vendor/jquery-2.2.4.min.js') !!}
		@yield("styles")
	</head>

  <body>

<!-- Start Header Area -->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg  navbar-light">
			<div class="container container1">
				<a class="navbar-brand text-black" href="{{ url('/')}}">
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
									<a href="/terms_conditions">Details of Scholarhip</a>
									<a href="/application">Application</a>
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
									<a href = "#">Applicant</a>
									<a href = "#">Selector</a>
									
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
<!-- End Header Area -->

<!-- start banner Area -->
@yield("main")
<!-- end blog Area -->		


<!-- start footer Area -->
<footer class="footer-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-4  col-md-12 d-flex justify-content-center align-items-center">
				<div class="">
					<p class='text-white' style='margin-bottom:2px;'>Refer a friend who might be interested in applying</p>
					<input type='text' class='refer-input' style='width:200px'>
					<button class='refer-button' >Submit</button>
				</div>
			</div>
			<div class="col-lg-4  col-md-12 d-flex justify-content-center">
				<div class="text-center">
					<img src='img/new/logo_2.png' style='height:10px;margin-bottom:10px;margin-top:5px'>
					<p style='margin-bottom:0px;'><a href='#' class='text-white font-size-16'><img src='img/new/linkdin1.png' width='20px' height='20px'></a>&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href='#' class='text-white font-size-16'><img src='img/new/twitter1.png' width='20px' height='20px'></a></a></p>
				</div>
			</div>
			<div class="col-lg-4  col-md-12 text-right">
				<div class="single-footer-widget ">
					<a href='#' class='text-white'>connect@aimscholar.com</a>
					<!-- <p style='margin-bottom:0px;' class='text-white font-size-16'>©2019 AIM Scholarship. in the United States and other countries.</p> -->
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Area -->		


<script>
	$(document).ready(function(){
		setTimeout(function(){ 
			var vid = document.getElementById("vid1");
            vid.currentTime = 0;
            vid.play();
		 }, 5000);
	})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
{!! HTML::script('js/vendor/bootstrap.min.js') !!}
{!! HTML::script('js/jquery.ajaxchimp.min.js') !!}
{!! HTML::script('js/parallax.min.js') !!}
{!! HTML::script('js/owl.carousel.min.js') !!}
{!! HTML::script('js/jquery.sticky.js') !!}
{!! HTML::script('js/jquery.DonutWidget.min.js') !!}
{!! HTML::script('js/jquery.magnific-popup.min.js') !!}
{!! HTML::script('js/main.js') !!}
@yield("scripts")
</body>
</html>