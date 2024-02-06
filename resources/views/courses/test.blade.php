@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">

        @foreach (Auth::user()->courses as $item)
           <h4 class="card-title"> {{$item->name}}</h4>
        <p class="card-text">Text</p> 
        @endforeach
        
    </div>
</div>

@endsection