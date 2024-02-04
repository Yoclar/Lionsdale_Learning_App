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
        @foreach ($courses as $item)
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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseDetailsModal-{{ $item->id }}" data-name="{{ $item->name }}" data-level="{{ $item->level }}" data-description="{{ $item->description }}" data-price="{{ $item->price }}" data-course-id="{{ $item->id }}">Details</button>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <form action="{{route('apply.form', $item->id)}}" method="GET">
                                <button type="submit" class="btn btn-success apply-btn" data-course-id="{{ $item->id }}">Apply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="courseDetailsModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="courseDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="courseDetailsModalLabel">Course Details</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Add content here based on the selected course -->
                            <p id="courseName-{{$item->id}}"></p>
                            <p id="courseLevel-{{$item->id}}"></p>
                            <p id="courseDescription-{{$item->id}}">Description: {{ $item->description }}</p>
                            <!-- Add more details if needed -->

                            <p id="coursePrice-{{$item->id}}">Price:  {{ $item->price }} $</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- Add additional buttons if needed -->
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>

@endsection

