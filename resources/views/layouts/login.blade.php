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
		<title>FaceBook Live</title>

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
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME STYLES -->
		{!! HTML::style( 'css/metronic/components.css') !!}
		{!! HTML::style( 'css/metronic/plugins.css') !!}
		{!! HTML::style( 'css/metronic/layout/css/layout.css') !!}
		{!! HTML::style( 'css/metronic/layout/css/themes/default.css') !!}
		{!! HTML::style( 'css/metronic/layout/css/custom.css') !!}
		@yield("styles")
	</head>

  <body class="login">

<!-- Start Header Area -->

	@yield("main")

<!-- End footer Area -->		

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

{!! HTML::script( 'js/metronic/jquery.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery-migrate.min.js' ) !!}
{!! HTML::script( 'js/metronic/bootstrap/js/bootstrap.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery.blockui.min.js' ) !!}
{!! HTML::script( 'js/metronic/uniform/jquery.uniform.min.js' ) !!}
{!! HTML::script( 'js/metronic/jquery.cokie.min.js' ) !!}

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! HTML::script( 'js/metronic/jquery-validation/js/jquery.validate.min.js' ) !!}
{!! HTML::script( 'js/metronic/backstretch/jquery.backstretch.min.js' ) !!}
{!! HTML::script( 'js/metronic/select2/select2.min.js' ) !!}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! HTML::script( 'js/metronic/metronic.js' ) !!}
{!! HTML::script( 'js/metronic/layout.js' ) !!}
{!! HTML::script( 'js/metronic/demo.js' ) !!}
{!! HTML::script( 'js/metronic/login-soft.js' ) !!}

<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
       // init background slide images
       $.backstretch([
        "img/login/login_back.png",
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>
</body>
</html>