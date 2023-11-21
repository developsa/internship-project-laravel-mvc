<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kumsal Depo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="newcss/style.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">

                                    <button class="btn float-center login_btn"><a class="nav-link" style="color:azure "
                                            href="{{ route('login') }}">{{ __('Giriş Yap') }}</a></button>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">

                                    <button class="btn float-center login_btn" style="margin-left: 15%"><a class="nav-link"
                                            style="color:azure"
                                            href="{{ route('register') }}">{{ __('Kayıt Ol') }}</a></button>
                                </li>
                            @endif
                        @else
                            <div style="margin-left: 65rem">
                                <li class="nav-item dropdown">
                                    <a style="color: azure" id="navbarDropdown" class="nav-link " style="font-size: 1.5rem"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li>
                                    <div>
                                        <button class="btn float-center login_btn "> <a style="color:azure"
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a></button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container " style="margin-top:15%">
            <div class="d-flex justify-content-center h-100">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
