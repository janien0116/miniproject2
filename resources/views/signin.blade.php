<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
</head>
<body id="signin">
    <header id="other-page-header">
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
                  <li>
                    <a href="#" data-target="signin" class="active">Sign In</a>
                  </li>
                  <li>
                    <a href="{{ route('tour_places') }}" data-target="destinations">Destinations</a>
                  </li>
                  <li>
                    <a href="{{ route('tour_history') }}" data-target="history">Tour History</a>
                  </li>
              </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="signin-container">
            <div class="joiner-login">
                <div class="signin-title">
                    <h3>Joiner Log In</h3>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="joiner-login-name">Username:</label>
                        <input type ="text" id="login-username" name="name" placeholder="Enter Username" required autofocus>
                    </div> --}}
                    <div class="form-group">
                        <label for="email">E-mail Address:</label>
                        <input type ="email" id="login-email" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label for="joiner-login-pass">Password:</label>
                        <input type ="password" id="joiner-login-pass" name="password" placeholder="Enter Password" required>
                    </div>
                    <div class="div-btn-signin">
                        <button class="btn-signin">Log In</button>
                        <a href="#" id="show-signup" type="button">Sign Up</a>
                    </div>
                </form> 
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            <div class="joiner-signup">
                <p type="button"><span class="fa-solid fa-arrow-left fa-xl"></span></p>
                <div class="signin-title">
                    <h3>Joiner Sign Up</h3>
                </div>
                <form action={{ route('sign_up') }} method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type ="text" id="first-name" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type ="text" id="last-name" name="last_name" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="cnum">Contact No:</label>
                        <input type ="tel" id="contact-num" name="contact_no" placeholder="Mobile Number" required minlength="11" maxlength="11">
                    </div>
                    <div class="form-group">
                        <label for="joiner-name">Username:</label>
                        <input type ="text" id="joiner-name" name="name" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail Address:</label>
                        <input type ="email" id="joiner-email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="joiner-pass">Set Password:</label>
                        <input type ="password" id="joiner-pass" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="joiner-pass-confirm">Confirm Password:</label>
                        <input type ="password" id="joiner-pass-confirm" name="joiner-pass-confirm" placeholder="Confirm Password" required>
                    </div>
                    <div class="div-btn-signin">
                        <button class="btn-signin" id="btn-signup">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        const currentPage = document.querySelector('body').id;
        const navLinks = document.querySelectorAll('nav li a');
        
        navLinks.forEach(link => {
          if (link.dataset.target === currentPage) {
            link.classList.add('active');
          }
        });
    </script>
    <script src="{{ asset('js/signin-script.js') }}"></script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>
</html>