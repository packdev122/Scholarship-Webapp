@extends('layouts.admin')
@section("styles")
    <style>
        .highlighted0{
            background:#6ad !important;
        }
        .highlighted1{
            background:#cdf !important;
        }
        .highlighted2{
            background:#ccc !important;
        }
    </style>
@endsection
@section('main')    
    <h3 class="page-title">
        View Scores <small></small>
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
        <form class='' method = 'get' action = "{{ url('/admin/scores') }}">
        <div class='flex align-items-center'>
            <select class='form-control' name='jury' style='width:200px !important;'>
                <option value='0' <?php if($jury == 0)echo 'selected'?>></option>
                @foreach($selectors as $selector)
                    <option value='{{ $selector->id }}' <?php if($jury == $selector->id)echo 'selected'?>>{{ $selector->name }}</option>
                @endforeach
            </select>&nbsp;
            <div>
                <button  class='btn btn-success'><i class='icon-magnifier'></i> Search</button>
            </div>
        </div>
        </form>
        <hr>
        <div style='width:100%;overflow:auto'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Applicant Name</th>
                <th>Email</th>
                <th>Total Score</th>
                <th style="">Application Status</th>
            </thead>
            <tbody>
                @foreach($applications as $rank => $application)
                <tr class= '<?php if($rank <= 3)echo 'highlighted'.$rank?>'>
                    <td>{{ $application->first_name.' '.$application->last_name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->score }}</td>
                    <td><?php echo  $application->status_label() ?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection