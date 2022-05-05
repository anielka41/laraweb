@extends('layouts.app')

@section('content')
    @include('helpers.flash-massages')

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
                            <i class="align-middle" data-feather="settings"></i>
                        </a>
                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            <span class="text-dark">{{ Auth::user()->name }}</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="pages-profile.html">
                                <i class="bi bi-person-fill me-1"></i> Profil
                            </a>

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

        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>Panel</strong> LaraWeb</h1>
            </div>
        </main>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <strong>{{ config('app.name', 'Laravel') }} {{ __('Dashboard') }}</strong> &copy; </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
