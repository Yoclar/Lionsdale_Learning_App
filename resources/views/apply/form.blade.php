@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Apply for Course</h1>
        <p>Course ID: {{ $courseId }}</p>
        
        <!-- Your application form HTML goes here -->

        <form action="{{ route('apply.submit', ['courseId' => $courseId]) }}" method="post">
            @csrf
            <!-- Your form fields go here -->

            <button type="submit">Submit Application</button>
        </form>
    </div>
@endsection