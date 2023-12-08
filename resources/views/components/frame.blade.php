<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $layout_pagetitle ?? 'Star Rail Simulator' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap">

    <!-- CSRF Token, gaperlu ini udah nongol sih tomnol log-outnya -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body
    style="font-family: 'Ropa Sans', sans-serif; background-image: url('/images/background_container.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src={{ $pom_logo ?? 'images/pom_icon.png' }} alt="logo"
                    style="width: 60px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-5 {{ $active_home ?? '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-5 dropdown-toggle {{ $active_character ?? '' }}" href="/"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Character
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="fs-6 dropdown-item" href="index.php">List</a></li>
                            <li><a class="fs-6 dropdown-item" href="add_chara_HSR.php">Add</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-5 dropdown-toggle {{ $active_relic ?? '' }}" href="/" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Relic
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="fs-6 dropdown-item" href="list_relic_HSR.php">List</a></li>
                            <li><a class="fs-6 dropdown-item" href="add_relic_HSR.php">Add</a></li>
                        </ul>
                    </li>

                    @auth
                        {{-- ini Member dan semua role bisa lihat --}}
                        <li class="nav-item">
                            <a class="nav-link fs-5 {{ $active_home ?? '' }}" aria-current="page"
                                href="/extrakurikuler">Extracurricular</a>
                        </li>

                        @if (Auth::user()->isEditor())
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ $active_home ?? '' }}" aria-current="page"
                                    href="{{ route('editor.student_list') }}">Students</a>
                            </li>
                        @endif

                        @if (Auth::user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ $active_home ?? '' }}" aria-current="page"
                                    href="{{ route('admin.student_list') }}">Students</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 {{ $active_home ?? '' }}" aria-current="page"
                                    href="{{ route('admin.relation') }}">Relation
                                    : Student + Extra</a>
                            </li>
                        @endif

                    @endauth

                </ul>
            </div>

            <a href="https://hsr.hoyoverse.com/home" target="_blank"
                class="mx-3 my-auto fst-italic fs-4 text-decoration-none text-black">"May This Journey Lead Us
                Starward"</a>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
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
    </nav>

    <div class="card text-center mx-auto mb-3"
        style="width: 95%; background-color: rgba(0, 0, 0, 0); border: 1px solid rgba(0, 0, 0, 0);">
        <br>
        <img src="/images/StarRail_title.webp" alt="logo" class="mx-auto d-block" style="width: 20%;">
        <h1 class="text-center text-light">{{ $sectiontitle ?? 'Section Title' }}</h1>
        <br>
        <img class="mx-auto" src={{ $menu_icon ?? 'images/chara_icon.png' }} alt="logo" style="width: 60px;">

        <div class="card-header mx-2">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Character List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="add_chara_HSR.php">Add</a>
                </li>
            </ul>
        </div>

        <div class="card-body">

            {{ $content_here }}

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
