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
        Change Password Success <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/admin/applications') }}">Users</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Changepassword</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div class='row'>
            <div class='col-lg-12'>
                <h3>Password changed to user_123456</h3>
                <hr>
                <a href= "{{ url('/admin/users') }}" type='button' class='btn btn-warning'>Go Back</a>
            </div>
        </div>
    </div>
@endsection
@section("scripts")

@endsection