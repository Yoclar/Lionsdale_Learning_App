<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- jQuery -->
    <script
			  src="https://code.jquery.com/jquery-3.7.1.js"
			  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
			  crossorigin="anonymous"></script>
		

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/sidebar.js', 'resources/js/modal.js'])
</head>
<body >
    <div id="app">
        <!-- Sidebar -->
        <div id="sidebar">
            <!-- Add your sidebar content here -->
            <a href="#" class="closebtn" id="closeSidebarButton" onclick="closeSidebar()">&times;</a>
            <a class="nav-link text-center sidebarLink" href="{{url('/')}}">Home</a>
            <a class="nav-link text-center sidebarLink" href="{{route('courses.create')}}">Create course</a>
            <a class="nav-link text-center sidebarLink" href="{{route('courses.index') }}">Courses</a>
            @if(Auth::check() && Auth::user()->courses->isNotEmpty())<a class="nav-link text-center sidebarLink" href="{{route('courses.test')}}">Take the course test</a>
            @endif
            

            <!-- Add login and logout buttons -->
            @guest
                @if (Route::has('login'))
                    <a class="nav-link text-center sidebarLink" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif

                @if (Route::has('register'))
                    <a class="nav-link text-center sidebarLink" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <a class="nav-link text-center" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>

        <!-- Toggle Button -->
        <button id="toggleSidebar">&#9776; Menu</button>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>