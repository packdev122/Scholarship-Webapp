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
        Selector <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/admin/applications') }}">Applications</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Selector</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div class='row'>
            <div class='col-lg-6'>
                <label class='control-label'>
                    Select a jury
                </label>
                <form method = 'post' action = "{{ url('/admin/select_jury/'.$application->id) }}">
                @csrf
                <select class='form-control' name='jury'>
                    @foreach($selectors as $selector)
                        <option value='{{ $selector->id }}' <?php if($application->jury_id == $selector->id)echo "selected"?>>{{ $selector->name }}</option>
                    @endforeach
                </select>
                <hr>
                <button type='submit' class='btn btn-success'>Select</button>
                <a href= "{{ url('/admin/applications') }}" type='button' class='btn btn-warning'>Go Back</a>
            </div>
        </div>
    </div>
@endsection
@section("scripts")

@endsection