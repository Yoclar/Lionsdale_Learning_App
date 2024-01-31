@extends('layouts.app')

@section('content')
<video id="background-video" playsinline autoplay muted loop poster="#">
    <source src="{{ asset('storage/videos/indexvideo.mp4') }}" type="video/webm">
    Your browser does not support the video tag.
</video>
<div class="container">
    <div class="row">
        @foreach (\App\Models\Course::all() as $item)
            <div class="col-4 ">
                <div class="card bg-dark text-white m-3 p-3">
                    <div class="row ">
                        <div>
                            <h4 class="card-title text-center">{{ $item->name }}</h4>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">{{ $item->level }}</p>
                    </div>
                    <div class="row text-center">
                        <div class="col-4">
                            <button type="button" class="btn btn-primary ">Details</button>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-success" >Apply</button>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection