@extends('layouts.app')

@section('content')
    
<video id="background-video" playsinline autoplay muted loop>
    <source src="{{ asset('storage/videos/homevideo.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
<div class="container text-center">
    <h1 class="welcomeText">Welcome</h1>
    @auth
        <p class="welcomeText">Greatings, {{ Auth::user()->name }}!</p>
        
    @else
        <p class="welcomeText">Greatings, Guest!</p>
        
    @endauth
    

</div>
<div class="container">
    <div class="row">
        <div class="col-4 card background">
            <div class="card-body text-left slide-in">
                <p class="card-text welcomeText">
                    Welcome to our thriving hub of digital knowledge and innovation! Step into a realm where the pulsating heartbeat of cutting-edge technology meets the boundless possibilities of your potential. Here, amidst the digital tapestry of our software development courses, you'll discover a symphony of learning experiences meticulously crafted to elevate your skills to new heights.
                </p>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="row justify-content-end">
        <div class="col-4 card background">
            <div class="card-body text-right slide-in">
                <p class="card-text welcomeText">
                    Embark on a journey with us, where the binary code transforms into a language of empowerment. Our carefully curated selection stands as a testament to excellence, offering you the best courses the vast expanse of the internet has to offer. From mastering programming languages to unraveling the intricacies of software architecture, each course is a stepping stone toward expertise and mastery.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4 card background">
            <div class="card-body text-left slide-in">
                <p class="card-text welcomeText">
                    Immerse yourself in a world where passion meets precision, where each line of code becomes a stroke of artistry. Our commitment to your success resonates in every lesson, project, and interaction you'll encounter. Engage with industry experts, fellow enthusiasts, and a community that thrives on collaboration and collective growth.
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-4 card background">
            <div class="card-body text-right slide-in">
                <p class="card-text welcomeText">
                    So, whether you are a budding coder seeking the fundamentals or a seasoned developer yearning for advanced challenges, you've found your digital sanctuary. Welcome to a place where dreams of coding prowess transform into reality, where each click is a step closer to unlocking your full potential.
                </p>
            </div>
        </div>
    </div>



  {{--  --}}
@endsection