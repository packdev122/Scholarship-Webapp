@extends('front.template1')

@section('main')
    <div class='container pt-100 pb-100'>
        <video id='vid1' class='hide' width="100%" controls muted>
            <source src="aim.mp4" type="video/mp4">
            <source src="aim.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>

@stop