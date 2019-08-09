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
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		{!! HTML::style('css/common/bootstrap.css') !!}
		{!! HTML::style('css/common/owl.carousel.css') !!}
		{!! HTML::style('css/common/main.css') !!}
		{!! HTML::style('css/style.css') !!}
		{!! HTML::script('js/vendor/jquery-2.2.4.min.js') !!}
		@yield("styles")
	</head>

  <body style='overflow-y: hidden;overflow-x: hidden' id='body'>

<!-- Start Header Area -->

<!-- End Header Area -->

<!-- start banner Area -->
@yield("main")
<!-- end blog Area -->		
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
					<img src='img/new/logo_2.png' style='height:10px;margin-bottom:5px;margin-top:10px'>
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


<script>
	$(document).ready(function(){
		setTimeout(function(){ 
			var vid = document.getElementById("vid1");
			if(vid){
            	vid.currentTime = 0;
            	vid.play();
			}
			vid = document.getElementById("vid2");
			if(vid){
            	vid.currentTime = 0;
            	vid.play();
			}
		 }, 3000);
	})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!-- {!! HTML::script('js/vendor/bootstrap.min.js') !!} -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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