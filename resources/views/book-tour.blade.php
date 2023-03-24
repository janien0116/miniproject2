<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a tour</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
</head>

<body id="booktour">
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
                <li class="user-li">
                    <label class="stored-user" name="name">{{ session('name') }}</label>
                </li>
                <div id="li-div">
                    <li>
                        <a href="{{ route('tour_places') }}" data-target="destinations">Destinations</a>
                    </li>
                    <li>
                        <a href="{{ route('tour_history') }}" data-target="history">Tour History</a>
                    </li>
                    @if (Auth::user())
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="log-out-btn" href="#"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout </a>
                            </form>
                        </li>
                    @endif
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="book-tour-container">
            <div class="listour-img-b1"></div>
            <form action={{ route('booktour') }} method="POST" id="booktour-form">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="book-tour-title">
                    <h3>Book Your Tour</h3>
                </div>
                <div class="form-book-tour">
                    <div class="form-group">
                        <label>Destination:</label>
                        <div class="form-subgroup">
                            <input type="text" id="destination" name="Destination" required readonly>
                            <button id="btn-change-tour"
                                onclick="event.preventDefault(); window.location.href='{{ route('tour_places') }}'">Change</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Choose Duration</label>
                        <div class="form-subgroup" id="tour-durations">
                            <div class="radio-div">
                                <input type="radio" id="three-days" name="duration" required>
                                <label for="three-days" class="tour-duration">3 Days 2 Nights</label>
                            </div>
                            <div class="radio-div">
                                <input type="radio" id="two-days" name="duration" required>
                                <label for="two-days" class="tour-duration">2 Days 1 Night</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Choose Start Date</label>
                        <div class="form-subgroup" id="tour-dates">
                            <div class="radio-div">
                                <input type="radio" id="date-1" name="tour-date" required>
                                <label for="date-1" id="label-date1" class="tour-date"></label>
                            </div>
                            <div class="radio-div">
                                <input type="radio" id="date-2" name="tour-date" required>
                                <label for="date-2" id="label-date2" class="tour-date"></label>
                            </div>
                            <div class="radio-div">
                                <input type="radio" id="date-3" name="tour-date" required>
                                <label for="date-3" id="label-date3" class="tour-date"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>From:</label>
                        <input type="date" id="from-date" name="FromDate" required readonly>
                    </div>
                    <div class="form-group">
                        <label>To:</label>
                        <input type="date" id="to-date" name="ToDate" required readonly>
                    </div>
                    <div class="form-group" id="avail-seats">
                        <label>No. of Seats:</label>
                        <input type="number" id="seat-count" name="BookedSeats" min="1" max="12"
                            required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Choose Pick-Up Location</label>
                        <select id="pick-up-loc" name="PickupPoint" class="pick-up-loc" required>
                            <option value="Robinsons Galleria">Robinsons Galleria</option>
                            <option value="SM Sta Rosa">SM Sta Rosa</option>
                            <option value="Alabang Festival Mall">Alabang Festival Mall</option>
                            <option value="SM Lucena">SM Lucena</option>
                            <option value="BGC Market Market">BGC Market Market</option>
                            <option value="SM Mall of Asia">SM Mall of Asia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Choose Pick-Up Time</label>
                        <select id="pick-up-time" name="PickupTime" class="pickup-time" required>
                            <option value="4:00am">4:00am</option>
                            <option value="6:00am">6:00am</option>
                            <option value="6:00pm">6:00pm</option>
                            <option value="7:00pm">7:00pm</option>
                        </select>
                    </div>
                    <div class="form-group" id="tour-inclusions">
                        <label>Tour Inclusions</label>
                        <div id="inclusion-div" class="form-subgroup">
                            <ul id="inclusion-ul">
                            </ul>
                            <input type="hidden" name="Inclusions" id="inclusion-input" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tour Price:</label>
                        <div class="form-subgroup" id="input-num">
                            <input type="number" name="Price" id="amount" required readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Travel Made by:</label>
                        <input type="text" id="book-by" name="BookedBy" placeholder="Type your Full Name"
                            required>
                    </div>
                    <input type="hidden" name="username" id="username" value="{{ session('name') }}">
                    <div class="div-btn-book">
                        <button id="btn-addtour" type="submit">Proceed to Payment</button>
                    </div>
                </div>
            </form>
            <div class="listour-img-b2"></div>
        </div>
    </main>
    @include('footer')
    <script src="{{ asset('js/book-tour-script.js') }}"></script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>

</html>
