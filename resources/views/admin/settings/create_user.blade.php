@extends('layouts.admin')
@section("styles")
    <style>
        .feedback_field{
            height:170px !important;
        }
        .answer_field{
            height:320px !important;
        }
        .answer_field:read-only{
            background:none !important;
        }
        input:read-only{
            background:none !important;
        }
        textarea:read-only{
            background:none !important;
        }
        .score.summary{
            border:none;
        }
    </style>
@endsection
@section('main')    
    <h3 class="page-title">
        Users <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/admin/applications') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">users</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div class='row'>
            <div class='col-lg-6'>
                <form method = 'post' action = "{{ url('/admin/create_user/'.$type) }}">
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
                        <hr>
                        <input type="hidden" name="type" value='{{ $type }}'>
                        <button type='submit' class='btn btn-success'>Submit</button>
                        <a href= "{{ url('/admin/applications') }}" type='button' class='btn btn-warning'>Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("scripts")

@endsection