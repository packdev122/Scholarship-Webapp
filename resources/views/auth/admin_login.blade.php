@extends('layouts.login')
@section("styles")
	<style>
		.social-icons{

        }
        .social-icons a{
            color:#fff;
            border-radius:50% !important;
            padding:10px;
            width:40px !important;
            height:40px !important;
        }
        .social-icons a i{        
            font-size: 20px;
            text-align: center;
            vertical-align: middle;
        }
	</style>
@endsection
@section('main')
<div class="logo" style='height:50px;margin-bottom:0px;margin-top:100px;'>
	<a href="{{url('/')}}" style="color: white;font-size: 30px;font-weight: bold;text-decoration: none;">
           <img src="img/logo@2x.png" height="50px">
	</a>
</div><br>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<div class="content" style="background:none;width:430px;">
    <div style="background: #fff;border: 1px solid #aaa;border-radius: 5px !important;padding:30px;">
        <h3 class="form-title" style='color:#000;font-weight:bold;margin-top:3px;border-bottom: 1px solid #aaa;padding-bottom:8px;'>Log In</h3>
        <!-- <div class="alert alert-danger">
            <b>Customer Resources:</b><br>
            Be sure to checkout the <a href="http://help.liveleap.com">knowledgebase</a> if you need help getting started with Our Site.  You can also join our <a href="https://liveleap.com/live-leap-coaching-series.php">Face Book Live Site (LLCS)</a> for updates and consistent training.
         
        </div>-->
        <div class="login-options">
            
        </div>
        <form method='post' action="{{ url('/admin') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" required/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required/>
                </div>
            </div>
            <div class="create-account">
                <button style='width:100%'  class="btn btn-primary" type='submit'>Confirm Login</i></button>
            </div>
        </form>
        <div class="create-account">
            <a style='width:100%' href="{{url('/')}}" class="btn btn-primary">Back To Main Site </a>
        </div>
    </div>
    <div class='social'>
        <div class='' style='margin-top:30px;'>
            <h5 style="text-align:center;color:white">Copyright © 2018 Ampifye.com</h5>
            <div class='social-icons' style='padding-left:43px;'>
                <a class='btn btn-primary' style="background: #4060a5;"><i class='fa fa-facebook'></i></a>
                <a class='btn btn-info' style="background: #00abe3;"><i class='fa fa-twitter'></i></a>
                <a class='btn btn-danger' ><i class='fa fa-google-plus'></i></a>
                <a class='btn btn-primary' style="background: #4060a5;"><i class='fa fa-linkedin'></i></a>
                <a class='btn btn-danger' style="background: #c00;"><i class='fa fa-pinterest'></i></a>
                <a class='btn btn-danger' style="background: #c00;"><i class='fa fa-youtube'></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
