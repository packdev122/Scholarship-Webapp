@extends('layouts.admin')

@section('main')    
    <h3 class="page-title">
        Administrators <small></small>
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Administrators</a></a>
            </li>
        </ul>
    </div>
    <div class='flex justify-content-end'>
        <a href="{{ url('admin/create_user/3') }}" class='btn btn-info'>Create Administrator</a>
    </div>
    <div class='main-content'>
        <div style='width:100%;overflow:auto'>
        <table class='table table-striped table-hover'>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th style="">Created</th>
                <th style="">Action</th>
            </thead>
            <tbody>
                @foreach($administrators as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><a class='' href='/admin/delete_user/{{$user->id}}'><i class='icon-trash'></i> Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
        {{ $administrators->links() }}
    </div>
@endsection
@section("scripts")
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection