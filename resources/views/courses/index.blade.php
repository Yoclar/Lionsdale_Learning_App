@extends('layouts.app')

@section('content')
<video id="background-video" playsinline autoplay muted loop poster="#">
    <source src="{{ asset('storage/videos/indexvideo.mp4') }}" type="video/webm">
    Your browser does not support the video tag.
</video>
@section('scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
@endsection
<div class="container">
    <div class="row">
        @foreach (\App\Models\Course::all() as $item)
            <div class="col-4">
                <div class="card bg-dark text-white m-3 p-3">
                    <div class="row">
                        <div>
                            <h4 class="card-title text-center">{{ $item->name }}</h4>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">{{ $item->level }}</p>
                    </div>
                    <div class="row text-center">
                        <div class="col-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseDetailsModal" data-name="{{ $item->name }}" data-level="{{ $item->level }}">Details</button>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-success">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="courseDetailsModal" tabindex="-1" role="dialog" aria-labelledby="courseDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseDetailsModalLabel">Course Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add content here based on the selected course -->
                <p id="courseName"></p>
                <p id="courseLevel"></p>
                <!-- Add more details if needed -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add additional buttons if needed -->
            </div>
        </div>
    </div>
</div>
@endsection