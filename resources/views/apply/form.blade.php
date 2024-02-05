@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card p-4">
            <div class="card-body">
                <div class="text-center">
                   <h4> Please confirm your registration</h4>
                </div>
                
                <div class="container">
                    <div class="row">
                        <h2 class="card-title text-center">Register for {{$course->name}} course</h2>   
                        <div>
                            <form action="{{route('register.for.course', $course)}}" method="POST">
                                @csrf
                                <input type="checkbox" id="confirm" name="confirm" value="Confirm">
                                <label for="confirm">Confirm</label>
                                <input type="submit" value="Register">
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
              
                
                
                </div>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
@endsection