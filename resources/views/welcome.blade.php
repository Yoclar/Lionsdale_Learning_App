@extends('layouts.app')

@section('content')
    
<video id="background-video" playsinline autoplay muted loop>
    <source src="{{ asset('storage/videos/homevideo.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="container text-center">
    <h1 id="welcomeText">Welcome to the home page</h1>
    @auth
        <p id="welcomeText">Hello, {{ Auth::user()->name }}!</p>
        
    @else
        <p id="welcomeText">Welcome, Guest!</p>
        
    @endauth
</div>
@endsection