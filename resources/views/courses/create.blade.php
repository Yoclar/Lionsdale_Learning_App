@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
    </div>
</div>
<video id="background-video" playsinline autoplay muted loop poster="#">
    <source src="{{ asset('storage/videos/indexvideo.mp4') }}" type="video/webm">
    Your browser does not support the video tag.
</video>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card p-4">
          <div class="card-body">
            <h4 class="card-title">Add new course</h4>
            <p class="card-text-danger">Inputs marked with * must be filled.</p>
            <div class="row">
                <div class="col">
                    @if($errors->Any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                        <strong>Holy guacamole!</strong> 
                        <ol>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            
                        </ol>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col">
    
                    <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                    
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}">
                        @error('name')
                            <small class="text-danger">*{{$message}}</small>
                        @enderror
                        {{--<small class="text-muted">Error text</small>--}}
                        </div>
                    
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select name="level" id="level" class="form-control">
                                <option value="" disabled selected>Level</option>
                                  <option value="beginner">Beginner</option>
                                  <option value="intermediate">Intermediate</option>
                                  <option value="professonal">Professional</option>
                            </select>
                          </div>
                        
                            <div class="mb-3">
                              <label for="" class="form-label">Type</label>
                              <select name="type_id" id="type_id" class="form-control @if($errors->has('type_id')) is-invalid @endif">
                                    <option value="" disabled selected>Type</option>
                                    @foreach(\App\Models\Type::all() as $type)
                                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                              {{--<small class="text-muted">Error text</small>--}}
                            </div>
                        
                      
                        
                           
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-danger w-75">Create</button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>
@endsection