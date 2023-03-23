<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joiner's Portal</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
</head>

<body id="home">
    <header>
        <nav>
            <ul>
                <input type="checkbox" id="menu-toggler" />
                <label id="toggler-label" for="menu-toggler"><i class="fa-solid fa-bars"></i></label>
                <div class="div-logo">
                    <a href="{{ route('home') }}">
                        <img src="images/logo1.png" id="logo" width="200px">
                    </a>
                </div>
                <li id="user-li">
                    <label class="stored-user" name="name">{{ session('name') }}</label>
                </li>
                <div id="li-div">
                    @if (Auth::user())
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="log-out-btn" href="#"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout </a>
                            </form>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('sign_in') }}" data-target="signin">Sign In</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('tour_places') }}" data-target="destinations">Destinations</a>
                    </li>
                    <li>
                        <a href="{{ route('tour_history') }}" data-target="history">Tour History</a>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="hero">
            <div class="hero-image"></div>
            <div class="hero-text">
                <h2>JOINERS UNITE!</h2>
                <h2>Customize an unforgettable vacation here</h2>
                <a id="btn-show-tours" type="button">BOOK A TOUR NOW</a>
            </div>
        </div>
    </header>
    <footer id="index-footer">
        <div>
            <p>Copyright &copy; 2023 Joiner's Portal - All Rights Reserved</p>
        </div>
    </footer>
    <script>
        var signinUrl = "{{ route('sign_in') }}";
        var destnationUrl = "{{ route('tour_places') }}";
    </script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>
</html>
