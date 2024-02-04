@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card p-4">
            <div class="card-body">
                <h4 class="card-title text-center">Register for {{$course->name}} course</h4>
                <p class="card-text text-danger">Inputs marked with * must be filled.</p>

                @if (Session::has('message'))
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <strong>Holy guacamole!</strong> {{ Session::get('message') }}
                            </div>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                <strong>Holy guacamole!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}">
                                @error('name')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control @if($errors->has('fullname')) is-invalid @endif" value="{{old('fullname')}}">
                                @error('fullname')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="start" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{old('email')}}">
                                @error('email')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                            
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-danger w-75">Register</button>
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