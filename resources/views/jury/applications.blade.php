@extends('layouts.main')

@section('main')    
    <h3 class="page-title">
        Applications <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Applications</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div style='width:100%;overflow:auto'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Last Updated</th>
                <th>Total Score</th>
                <th style="">Application Status</th>
                <th style=''>Actions</th>
            </thead>
            <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{ $application->first_name.' '.$application->last_name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->address1 }}</td>
                    <td>{{ $application->updated_at }}</td>
                    <th>{{ $application->score }}</th>
                    <td><?php echo  $application->status_label() ?></td>
                    <td>
                        <a class='' href='/jury/application/{{$application->id}}'><i class='icon-list'></i> View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table></div>
        {{ $applications->links() }}
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection