@extends('layouts.admin')

@section('main')    
    <h3 class="page-title">
        Juries <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Juries</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th style="">Created</th>
                <th style="">Actions</th>
            </thead>
            <tbody>
                @foreach($juries as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a class='' href='/mail/to_applicant/{{$user->id}}'><i class='icon-envelope'></i> Send Email</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $juries->links() }}
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection