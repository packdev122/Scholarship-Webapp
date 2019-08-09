@extends('front.template1')

@section('main')
<div class="container mt-100">
    <div class="content" style="background:none;width:430px;margin:0 auto;max-width:100%">
        <div style="background: #fff;border: 1px solid #eee;border-radius: 5px !important;padding:30px;">
                <h3 class="form-title text-center" style='color:#000;font-weight:bold;margin-top:3px;padding-bottom:8px;'>Sign Up</h3>
                <p class='text-center'>Already have an account?&nbsp;&nbsp;<a style='border-bottom:1px solid #ccc' href="{{url('/login')}}">Login</a></p>
                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="control-label">{{ __('Name*') }}</label>
                            <div class="">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">{{ __('E-Mail Address*') }}</label>
                            <div class="">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label">{{ __('Password*') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">{{ __('Confirm Password*') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-black">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#footer").hide();
    })
</script>
@endsection
