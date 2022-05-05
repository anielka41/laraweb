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
                <a class="sidebar-brand" href="{{ route('admin') }}"> <span class="align-middle">{{ __('Dashboard') }}</span> </a>

                <div id="navbar-admin" class="sidebar-nav">

                    <div class="accordion" id="accordion-navbar">
                        <div class="accordion-item">
                            <h5 class="accordion-header" id="heading-1">
                                <a href="#" class="sidebar-link no-link text-white" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <i class="bi bi-pin-angle-fill"></i> <strong>Wpisy</strong>
                                </a>
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
                    </div>





                </div>
            </div>
        </nav>
        @endguest
        @yield('content')

    </div>
</div>



<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
