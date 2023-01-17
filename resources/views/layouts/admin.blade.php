<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        <svg viewBox="200 100 800 400" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100px">
                            <g clip-path="url(#clip0)" fill="#EF3B2D">
                                <path class="st1" d="M371.6,301.57v-16.88c0-1.56-1.26-2.82-2.82-2.82H342.3c-4.99,0-9.8-0.73-14.35-2.08
                                    c-2.51-0.74-4.94-1.68-7.28-2.8h-0.01C303.71,268.9,292,251.6,292,231.57v-5.47c0-1.56-1.26-2.82-2.82-2.82h-14.69
                                    c-1.56,0-2.82,1.26-2.82,2.82v138.52c0,1.56,1.26,2.82,2.82,2.82h14.69c1.56,0,2.82-1.26,2.82-2.82v-9.96
                                    c0-22.8,15.16-42.06,35.95-48.23c4.55-1.35,9.36-2.08,14.35-2.08l26.47,0.05C370.33,304.39,371.6,303.13,371.6,301.57z"/>
                                <path class="st1" d="M292,141.63c5.17-1.24,10.57-1.89,16.12-1.89h17.01c1.56,0,2.82-1.26,2.82-2.82v-17.65
                                    c0-1.56-1.26-2.82-2.82-2.82H219.35c-1.56,0-2.82,1.26-2.82,2.82v86.26c0,1.56,1.26,2.82,2.82,2.82h16.85
                                    c1.5,0,2.74-1.17,2.81-2.66c1.08-23.48,13.86-43.9,32.66-55.57C277.86,146.27,284.7,143.37,292,141.63z"/>
                                <path class="st1" d="M629.8,367.44c-9.93-34.1-41.42-59.01-78.72-59.01c-21.17,0-40.46,8.02-55.01,21.19
                                    c-3.6,3.26-6.9,6.82-9.86,10.66c-6.2,8-10.95,17.19-13.85,27.16c-0.02,0.03-0.03,0.07-0.04,0.11c-2.11,7.26-3.24,14.95-3.24,22.89
                                    v49.42c0,1.56,1.26,2.82,2.82,2.82h11.49c1.56,0,2.82-1.26,2.82-2.82v-33.71c0-11.8,3.64-22.74,9.86-31.77
                                    c1.7-2.46,3.58-4.78,5.64-6.94c1.59-1.66,3.29-3.23,5.07-4.69c9.67-7.92,22.03-12.67,35.5-12.67c15.95,0,30.35,6.66,40.56,17.36
                                    c9.6,10.07,15.5,23.69,15.5,38.71c0,13.95-5.1,26.71-13.53,36.53c-10.29,11.96-25.52,19.53-42.53,19.53h-46.21
                                    c-3.37,0-6.67-0.33-9.86-0.97c-6.19-1.23-11.98-3.59-17.13-6.87c-4.92-3.13-9.26-7.1-12.81-11.69
                                    c-6.59-8.5-10.51-19.18-10.51-30.77V190.04c0-17.85,9.3-33.53,23.32-42.46c5.15-3.28,10.94-5.64,17.13-6.87
                                    c2.34-0.47,4.74-0.77,7.18-0.9c1.5-0.08,2.68-1.31,2.68-2.81v-17.73c0-1.56-1.26-2.82-2.82-2.82H345.12
                                    c-1.56,0-2.82,1.26-2.82,2.82V137c0,1.5,1.18,2.73,2.67,2.81c9.9,0.52,19.05,3.91,26.63,9.34c12.72,9.13,21,24.04,21,40.89v221.87
                                    c0,11.59-3.92,22.27-10.51,30.77c-2.98,3.86-6.52,7.27-10.49,10.12c-7.57,5.43-16.72,8.82-26.63,9.34
                                    c-1.5,0.08-2.67,1.31-2.67,2.81v13.97c0,1.56,1.26,2.82,2.82,2.82h285.14c1.56,0,2.82-1.26,2.82-2.82v-88.48
                                    C633.08,382.46,631.94,374.74,629.8,367.44z"/>
                            </g>
                        </svg>
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <h1>Admin</h1>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @include('partials.admin.navbar')
       
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
