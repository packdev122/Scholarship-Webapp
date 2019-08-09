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
        Weightage <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/admin/applications') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Weightage</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div class='row'>
            <div class='col-lg-12'>
                <form method = 'post' action = "{{ url('/admin/set_weightage') }}">
                    @csrf
                    <div class = 'row'>
                        <div class ='col-lg-6'>
                            @for($i=1;$i<=6;$i++)
                                <label class='control-label'>Question {{ $i }}</label>
                                <input type='number' class='form-control' name='weightage[{{$i}}]' value='{{ \App\Weightage::getPercentage($i) }}'>
                            @endfor
                        </div>
                        <div class ='col-lg-6'>
                            @for($i=7;$i<=12;$i++)
                                <label class='control-label'>Question {{ $i }}</label>
                                <input type='number' class='form-control' name='weightage[{{$i}}]' value='{{ \App\Weightage::getPercentage($i) }}'>
                            @endfor
                        </div>
                    </div>
                <hr>
                <button type='submit' class='btn btn-success'>Submit</button>
                <a href= "{{ url('/admin/applications') }}" type='button' class='btn btn-warning'>Go Back</a>
            </div>
        </div>
    </div>
@endsection
@section("scripts")

@endsection