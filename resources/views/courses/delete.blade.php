@extends('layouts.app')


@section('content')
<video id="background-video" playsinline autoplay muted loop poster="#">
    <source src="{{ asset('storage/videos/indexvideo.mp4') }}" type="video/webm">
    Your browser does not support the video tag.
</video>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Delete Course
                </div>
                <div class="card-body">
                    
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="course_id">Select a Course to Delete:</label>
                            <select name="course_id" id="course_id" class="form-control">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


    




@endsection