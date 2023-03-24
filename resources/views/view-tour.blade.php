<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View tour</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="other-page-header">
        <nav>
            <ul id="view-tour">
                <input type="checkbox" id="menu-toggler" />
                <label id="toggler-label" for="menu-toggler"><i class="fa-solid fa-bars"></i></label>
                <li class="user-li" id="user-viewtour">
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
        <div class="view-tour-container">
            <form>
                <div class="view-tour-title">
                    <h3>Tour Details</h3>
                </div>
                <div id="div-view-tour">
                    <div class="form-group">
                        <label>Destination:</label>
                        <label>{{ $booked_tour->Destination }}</label>
                    </div>
                    <div class="form-group">
                        <label>Start Date:</label>
                        <label>{{ $booked_tour->FromDate }}</label>
                    </div>
                    <div class="form-group">
                        <label>End Date:</label>
                        <label>{{ $booked_tour->ToDate }}</label>
                    </div>
                    <div class="form-group" id="avail-seats">
                        <label>No. of Seats:</label>
                        <label>{{ $booked_tour->BookedSeats }}</label>
                    </div>
                    <div class="form-group">
                        <label>Pick-Up Location:</label>
                        <label>{{ $booked_tour->PickupPoint }}</label>
                    </div>
                    <div class="form-group">
                        <label>Pick-Up Time:</label>
                        <label>{{ $booked_tour->PickupTime }}</label>
                    </div>
                    <div class="form-group">
                        <label>Tour Inclusions:</label>
                    </div>
                    <div class="form-group" id="view-inclusions">
                        <ul id="inclusion-ul">
                            @php
                                $inclusions = $booked_tour->Inclusions;
                                $inclusions_array = explode(',', $inclusions);
                            @endphp
                            @foreach ($inclusions_array as $inclusion)
                                @php
                                    $inclusion = trim(str_replace('"', '', $inclusion));
                                @endphp
                                <li>{{ $inclusion }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>Amount Paid:</label>
                        <label>{{ $booked_tour->Price }}</label>
                    </div>
                    <div class="form-group">
                        <label>Travel Made by:</label>
                        <label>{{ $booked_tour->BookedBy }}</label>
                    </div>
                    <div class="div-btn-print">
                        <button id="btn-print">Print</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    @include('footer')
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>

</html>
