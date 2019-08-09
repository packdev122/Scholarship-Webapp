@extends('layouts.main')

@section('main')    
    <h3 class="page-title">
        Welcome <small></small>
    </h3>
    <h4 class='text-center'>Hi {{ Auth::user()->name }} , Welcome to your dashboard!</h4>
    <div class='text-center'>
        <a class='btn btn-info' href='/logout'>Log Out</a>
    </div>
@endsection
@section("scripts")

@endsection