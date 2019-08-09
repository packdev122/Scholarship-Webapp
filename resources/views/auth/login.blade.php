@extends('front.template1')
@section("styles")
	<style>
        .footer-area{
            display:none;
        }
        label,p{
            color:black;
            font-weight:bold;
        }
	</style>
@endsection
@section('main')
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class='container pt-120'>
        <div class="content" style="background:none;width:430px;margin:0 auto;max-width:100%">
            <div style="background: url(img/new/watermark.png) center no-repeat;border: 1px solid #eee;border-radius: 5px !important;padding:30px;">
                <h3 class="form-title text-center" style='color:#000;font-weight:bold;margin-top:3px;padding-bottom:8px;'>Log In</h3>
                <p class='text-center'>Or <a style='border-bottom:1px solid #ccc;color:black' href="{{url('/register')}}">Create Account</a></p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-options">
                        <div class='form-group'>
                            <div>
                                <input type='radio' id='student' checked name='type' value='0'> <label for='student'>Student</label>
                            </div>
                            <div>
                                <input type='radio' id='selector' name='type' value='1'> <label for='selector'>Selector</label>
                            </div>
                            <div>
                                <input type='radio' id='administrator' name='type' value='2'> <label for='administrator'>Administrator</label>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label' >Email*</label>
                            <input type='email' name='email' class='form-control' value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Password*</label>
                            <input type='password' name='password' class='form-control' value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div>
                        <button style='width:100%' href="{{url('/redirect')}}" type='submit' class="btn-black">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
