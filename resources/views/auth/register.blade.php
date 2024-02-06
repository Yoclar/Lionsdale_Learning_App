@extends('layouts.app')

@section('content')
<video id="background-video" playsinline autoplay muted loop poster="#">
    <source src="{{ asset('storage/videos/indexvideo.mp4') }}" type="video/webm">
    Your browser does not support the video tag.
</video>
<div class="auth-container">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            
                        
                            <div class="col-md-6">
                                <input onchange="checkNameIsTaken(this.value);" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                                <small  id="responseText" class="form-label"></small>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="row mb-3">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>
                        
                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @if($errors->has('fullname')) is-invalid @endif" name="fullname" value="{{ old('fullname') }}" required>
                        
                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="school_id" class="col-md-4 col-form-label text-md-end">{{ __('Choose School') }}</label>
                            <div class="col-md-6">
                                <select name="school_id" id="school_id" class="form-control @if($errors->has('school_id')) is-invalid @endif">
                                    <option value="" disabled selected>Select a school</option>
                                    @foreach($schools as $school)
                                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                                    @endforeach
                                </select>
                                @error('school_id')
                                    <small class="text-danger">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script>
    function checkNameIsTaken(input){
        $.ajax({
            type: 'POST',
            url: '/checkUserTaken',
            data: {
                '_token' : '{{csrf_token()}}',
                'name': input
            },
            success: function(data) {
           

                if (data.status == "failed")
                {   
                    $('#responseText').removeClass('text-danger text-success')
                    $('#responseText').html('Username is taken');
                    $('#responseText').addClass('text-danger');
                    
                }
                else {
                    $('#responseText').removeClass('text-danger text-success')
                    $('#responseText').html("Username available");
                    $('#responseText').addClass('text-success');
                }
            }
        });
    }
</script>
@endsection
