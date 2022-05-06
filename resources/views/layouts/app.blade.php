<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
<div id="app">
    <div class="wrapper">
        @guest
        @else
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content">
                    <a class="sidebar-brand" href="{{ route('admin') }}">
                        <span class="align-middle">{{ __('Dashboard') }}</span> </a>

                    <div id="navbar-admin" class="sidebar-nav">

                        <div class="accordion" id="accordion-navbar">
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading-1">
                                    <a href="#" class="sidebar-link no-link text-white" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <i class="bi bi-pin-angle-fill"></i> <strong>Wpisy</strong> </a>
                                </h5>
                                <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordion-navbar">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="index.html">
                                                    <span class="align-middle">Wszystkie wpisy</span> </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="index.html">
                                                    <span class="align-middle">Dodaj nowy</span> </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="index.html">
                                                    <span class="align-middle">Kategorie</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h5 class="accordion-header" id="heading-2">
                                    <a href="#" class="sidebar-link no-link text-white collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        <i class="bi bi-people-fill"></i> <strong>Użytkownicy</strong>
                                    </a>
                                </h5>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordion-navbar">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="{{ route('users.index') }}">
                                                    <span class="align-middle">Wszyscy użytkownicy</span> </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="index.html">
                                                    <span class="align-middle">Dodaj nowego</span> </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" href="{{ route('users.edit', $user = Auth::user()) }}">
                                                    <span class="align-middle">Profil</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </nav>
        @endguest
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle"> <i class="hamburger align-self-center"></i> </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">

                            @guest
                                @if (Route::has('login'))

                                    <a class="text-muted" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @endif

                                @if (Route::has('register'))

                                    <a class="text-muted" href="{{ route('register') }}">{{ __('Register') }}</a>

                                @endif
                            @else

                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                    <i class="align-middle" data-feather="settings"></i> </a>
                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                    <span class="text-dark">{{ Auth::user()->name }}</span> </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="pages-profile.html">
                                        <i class="bi bi-person-fill me-1"></i> Profil </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-left me-1"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
            @yield('content')
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0"><strong>{{ config('app.name', 'Laravel') }} {{ __('Dashboard') }}</strong> &copy; </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@yield('javascript')
@yield('js-files')
</body>
</html>
