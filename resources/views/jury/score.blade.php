@extends('layouts.main')

@section('main')    
    <h3 class="page-title">
        Scores <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Scores</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div class='row'>
            <div class='col-lg-6'>
                <div>
                    <h2 class='col-lg-8'>Total Score</h2>
                    <h2 class='col-lg-4 text-right'>{{ $application->score }}</h2>
                </div>
                <div>
                    <h4 class='col-lg-8'>Your Score</h4>
                    <h4 class='col-lg-4 text-right'>{{ $application->score }}</h4>
                </div>
                <br>
                <br>
                <div class='pull-right'>
                    <a class='btn btn-info' href='/jury/application/1'>Review Again</a>
                    <a class='btn btn-success' href='/jury/applicants'>View all applicants</a>
                </div>
            </div>
        </div>
        
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection