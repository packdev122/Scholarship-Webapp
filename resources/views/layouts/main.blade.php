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
		<title>AIM Dashbpard</title>

		@yield('head')
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 

		{!! HTML::style( 'css/metronic/font-awesome/css/font-awesome.min.css') !!}
		{!! HTML::style( 'css/metronic/simple-line-icons/simple-line-icons.min.css') !!}
		{!! HTML::style( 'css/metronic/bootstrap/css/bootstrap.min.css') !!}
		{!! HTML::style( 'css/metronic/uniform/css/uniform.default.min.css') !!}
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		{!! HTML::style( 'css/metronic/select2/select2.css') !!}
		{!! HTML::style( 'css/metronic/bootstrap/css/bootstrap.min.css') !!}
		{!! HTML::style( 'css/metronic/login-soft.css') !!}
		{!! HTML::style( 'plugins/jquery-notific8/jquery.notific8.min.css') !!}
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME STYLES -->
		{!! HTML::style( 'css/metronic/components-rounded.css') !!}
		{!! HTML::style( 'css/metronic/plugins.css') !!}
		{!! HTML::style( 'css/metronic/layout/css/layout.css') !!}
		{!! HTML::style( 'css/metronic/layout/css/themes/darkblue.css') !!}
		{!! HTML::style( 'css/metronic/layout/css/custom.css') !!}
		{!! HTML::style( 'css/style.css') !!}
		@yield('styles')
		<style>
		.my-keyword{
            padding:3px;
            border:1px solid #aaa;
            border-radius:4px;
            font-size:12px;
            margin:0px;
            margin-top:3px;
            color:#888;
            font-weight:bold;
		}
        
		</style>
	</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-style-square">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top" style='height:70px;'>
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="/" style='font-size: 30px;text-decoration: none;color: white;margin-top: 10px;margin-left: 25px;text-shadow: inherit;}'>
				<img src="{{ url('img/new/logo_1.png')}}" height="30px">
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right" style='margin-top:10px'>
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="/img/new/avatar.png"/>
					<span class="username username-hide-on-mobile">
					{{ Auth::user()->name }} </span>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="{{url('/jury/applicants')}}">
							<i class="icon-user"></i> Applicants </a>
						</li>
						<li>
							<a href="{{url('/jury/applications')}}">
							<i class="icon-list"></i> Applications </a>
						</li>
						<li>
							<a href="{{url('/jury/scores')}}">
							<i class="icon-star"></i> View Scores
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="{{url('/logout')}}">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container" style='margin-top:70px;'>
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-search-wrapper">
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start <?php if( Route::currentRouteName() == "jury/applicants" )echo 'active open';?>">
					<a href="{{ url('jury/applicants') }}">
					<i class="icon-user"></i>
						<span class="title">Applicants</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
				</li>
				<li class="<?php if( Route::currentRouteName() == "jury/applications" )echo 'active open';?>">
					<a href="{{ url('/jury/applications') }}">
					<i class="icon-list"></i>
						<span class="title">Applications</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
				</li>
			
			 	<li class="<?php if( Route::currentRouteName() == "jury/scores" )echo 'active open';?>">

					<a href="{{ url('jury/scores') }}">
					<i class="icon-star"></i>
						<span class="title">View Scores</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
				</li>
				<li class="">
					<a href="{{url('/logout')}}">
					<i class="icon-key"></i>
						<span class="title">Log Out</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>

<!-- Start Header Area -->
<div class="page-content-wrapper">
	<div class="page-content">
		@yield("main")
	</div>
</div>
<div class="page-footer">
	<div class="page-footer-inner">
		 2019 © Scholar
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- End footer Area -->		

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

{!! HTML::script( 'js/metronic/jquery.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery-migrate.min.js' ) !!}
{!! HTML::script( 'js/metronic/bootstrap/js/bootstrap.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery.blockui.min.js' ) !!}
{!! HTML::script( 'js/metronic/uniform/jquery.uniform.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery.cokie.min.js' ) !!}
{!! HTML::script( 'plugins/jquery-notific8/jquery.notific8.min.js') !!}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script( 'plugins/jquery-slimscroll/jquery.slimscroll.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery-validation/js/jquery.validate.min.js' ) !!}
{!! HTML::script( 'js/metronic/backstretch/jquery.backstretch.min.js' ) !!}
{!! HTML::script( 'js/metronic/select2/select2.min.js' ) !!}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield("scripts")
{!! HTML::script( 'js/metronic/metronic.js' ) !!}
{!! HTML::script( 'js/metronic/layout.js' ) !!}
{!! HTML::script( 'js/metronic/demo.js' ) !!}

<script>
	var ShowNotice = function(type,heading,content){
		var theme = "";
		if(type == "warning"){
			theme = "tangerine";
			heading = "<i class='fa fa-warning'></i> " + heading;
		}else if(type == "success"){
			theme = "teal";
			heading = "<i class='fa fa-check'></i> " + heading;
		}
		var settings = {
			theme: theme,
			sticky: false,
			horizontalEdge: "top",
			verticalEdge: "right",
		}
		settings.heading = heading;
		settings.life = 4000;
		$.notific8('zindex', 11500);
		$.notific8(content, settings);
	}
	jQuery(document).ready(function() {     
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init();
		// init background slide images
	});
</script>
</body>
</html>