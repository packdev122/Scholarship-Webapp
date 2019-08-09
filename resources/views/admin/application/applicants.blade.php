@extends('layouts.main')

@section('main')    
    <h3 class="page-title">
        Applicants <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Applicants</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Score</th>
                <th style="">Application Status</th>
                <th style=''>Actions</th>
            </thead>
            <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{ $application->user->name }}</td>
                    <td>{{ $application->user->email }}</td>
                    <td>{{ $application->score }}</td>
                    <td><?php echo  $application->status_label() ?></td>
                    <td>
                        <a class='' href='/jury/application/{{$application->id}}'><i class='icon-list'></i> View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection