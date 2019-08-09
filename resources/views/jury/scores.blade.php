@extends('layouts.main')
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
        <div style='width:100%;overflow:auto'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Applicant Name</th>
                <th>Email</th>
                <th>Total Score</th>
                <th>Your Score</th>
                <th style="">Application Status</th>
                <th style=''>Actions</th>
            </thead>
            <tbody>
                @foreach($applications as $rank => $application)
                <tr class= '<?php if($rank <= 3)echo 'highlighted'.$rank?>'>
                    <td>{{ $application->first_name.' '.$application->last_name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->score }}</td>
                    <td>{{ $application->score }}</td>
                    <td><?php echo  $application->status_label() ?></td>
                    <td>
                        <a class='' href='/jury/score/{{$application->id}}'><i class='icon-list'></i> View</a>
                    </td>
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