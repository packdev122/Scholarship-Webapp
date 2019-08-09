@extends('layouts.admin')

@section('main')    
    <h3 class="page-title">
        Users <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Users</a></a>
            </li>
        </ul>
    </div>
    <div class='main-content'>
        <div style='width:100%;overflow:auto'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th style="">Created</th>
                <th style=''>Actions</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a class='' href='/admin/changepassword/{{$user->id}}'><i class='icon-key'></i> Password Reset</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{ $users->links() }}
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection