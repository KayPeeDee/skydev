<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Styles -->
    {{--<link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <link href="{{asset('elite/vendor/css/morris.css')}}" rel="stylesheet">
    <link href="{{asset('elite/vendor/css/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('elite/vendor/css/tab-page.css')}}" rel="stylesheet">

    <!--Toaster Popup message CSS -->
    <link href="{{asset('elite/vendor/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('elite/material/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('elite/material/dist/css/pages/dashboard1.css')}}" rel="stylesheet">
    <link href="{{asset('elite/material/dist/css/pages/dashboard4.css')}}" rel="stylesheet">
    <link href="{{asset('elite/material/dist/css/pages/contact-app-page.css')}}" rel="stylesheet">--}}


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('How it Works') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="#">{{ __('About Us') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register_business_form') }}">{{ __('My Business') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('get_my_contacts') }}">{{ __('Contacts') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('Company Profile') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('Business Wisdom') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('B2B Directory') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('Apps') }}</a>
                            </li>
                        @endguest

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ asset('js/all.js') }}" defer></script>
<script src="{{ asset('tinymce/tinymce.js') }}"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('elite/material/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('elite/material/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('elite/material/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('elite/material/dist/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{asset('elite/vendor/js/raphael-min.js')}}"></script>
<script src="{{asset('elite/vendor/js/morris.min.js')}}"></script>
<script src="{{asset('elite/vendor/js/jquery.sparkline.min.js')}}"></script>

<!-- Popup message jquery -->

<!-- Chart JS -->
<script src="{{asset('elite/material/dist/js/dashboard1.js')}}"></script>
<script src="{{asset('elite/material/dist/js/dashboard4.js')}}"></script>

<script src="{{asset('elite/vendor/js/jquery.toast.js')}}"></script>
<script src="{{asset('elite/vendor/js/sticky-kit.min.js')}}"></script>

<script src="{{asset('elite/vendor/js/d3.min.js')}}"></script>
<script src="{{asset('elite/vendor/js/c3.min.js')}}"></script>
<script src="{{asset('elite/vendor/js/jquery.webticker.min.js')}}"></script>
<script src="{{asset('elite/vendor/js/fastclick.js')}}"></script>
<script src="{{asset('elite/vendor/js/web-ticker.js')}}"></script>

<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>--}}

</body>

</html>
