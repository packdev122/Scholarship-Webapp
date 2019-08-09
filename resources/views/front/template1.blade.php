<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="IE=edge" />
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/new/fav.png">
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

  <body style='background:#ebebeb;position:relative'>

<!-- Start Header Area -->
	<header class="default-header" style='height:88px;'>
		<nav class="navbar navbar-expand-lg  navbar-light margin-0">
			<div class="top-bar align-items-center" style='display:block'>
				<div class='logo'>
					<a class="" href="{{ url('/')}}">
						<img src='img/new/logo_final_1.png' width='100px'>
					</a>
				</div>
				<div class='hamburger'>
					<button class="background-none border-none" type="button" style='margin-top:20px' id='menu-button'>
						<span class="fa fa-align-left font-size-20 text-white"></span>
					</button>
				</div>
			</div>
		</nav>
	</header>
<!-- End Header Area -->

<!-- start banner Area -->
	@yield("main")


	<div class='menu-area' id='menu-area'>
		<div class='middle-pane flex align-items-center'>
			<div class='container' style='margin-left:35px;margin-right:35px !important;max-width: 100%;'>
				<div class='row'>
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
				<div class='container' style='width:100%;margin-left:40px;'>
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

<!-- start footer Area -->
<!-- <footer class="footer-area section-gap">
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
				</div>
			</div>
		</div>
	</div>
</footer> -->
<!-- End footer Area -->		
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
{!! HTML::script('js/vendor/bootstrap.min.js') !!}
{!! HTML::script('js/jquery.ajaxchimp.min.js') !!}
{!! HTML::script('js/parallax.min.js') !!}
{!! HTML::script('js/owl.carousel.min.js') !!}
{!! HTML::script('js/jquery.sticky.js') !!}
{!! HTML::script('js/jquery.DonutWidget.min.js') !!}
{!! HTML::script('js/jquery.magnific-popup.min.js') !!}
{!! HTML::script('js/main.js') !!}

<script>
	jQuery(document).ready(function() {
		var menu_show = false;
		$("#menu-button").on("click",function(){
			if(menu_show){
				$("#menu-area").fadeOut();
				menu_show = false;
				$(this).find("span").addClass("fa-align-left");
				$(this).find("span").removeClass("fa-times");
				$(".service-area").show();
			}else{
				menu_show = true;
				$("#menu-area").fadeIn();
				$(this).find("span").removeClass("fa-align-left");
				$(this).find("span").addClass("fa-times");
				$(".service-area").hide();
			}
		})
	});
</script>
@yield("scripts")
</body>
</html>