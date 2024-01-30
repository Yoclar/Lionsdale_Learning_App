@extends('layouts.app')

@section('content')
    
<video id="background-video" playsinline autoplay muted loop>
    <source src="{{ asset('storage/videos/homevideo.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="container text-center">
    <h1 id="welcomeText">Welcome</h1>
    @auth
        <p id="welcomeText">Greatings, {{ Auth::user()->name }}!</p>
        
    @else
        <p id="welcomeText">Greatings, Guest!</p>
        
    @endauth
</div>
@endsection