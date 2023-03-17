<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a tour</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
</head>
<body>
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
    <div class="book-tour-container">
        <div class="editour-img-b1"></div>
        <form action="{{ route('update_tour', $booked_tour->id) }}" method="POST">
            @method('PUT')
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
                <h3>Edit This Tour</h3>
            </div>
            <div class="form-book-tour">
                <div class="form-group">
                    <label>Destination:</label>
                    <div class="form-subgroup">
                        <input type="text" id="destination" name="Destination" value="{{ $booked_tour->Destination }}">
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
                    <label>From:</label>
                    <input type ="date" id="from-date" name="FromDate" value="{{ $booked_tour->FromDate }}">
                </div>
                <div class="form-group">
                    <label>To:</label>
                    <input type ="date" id="to-date" name="ToDate" value="{{ $booked_tour->ToDate }}">
                </div>
                <div class="form-group" id="avail-seats">
                    <label>No. of Seats:</label>
                    <input type="number" id="seat-count" name="BookedSeats" min="1" max="12" value="{{ $booked_tour->BookedSeats }}">
                </div>
                <div class="form-group">
                    <label>Choose Pick-Up Location</label>
                    <select id="pick-up-loc" name="PickupPoint" class="pick-up-loc">
                        <option value={{ $booked_tour->PickupPoint }}>{{ $booked_tour->PickupPoint }}</option>
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
                    <select id="pick-up-time" name="PickupTime" class="pickup-time">
                        <option value={{ $booked_tour->PickupTime }}>{{ $booked_tour->PickupTime }}</option>
                        <option value="4:00am">4:00am</option>
                        <option value="6:00am">6:00am</option>
                        <option value="6:00pm">6:00pm</option>
                        <option value="7:00pm">7:00pm</option>
                    </select>
                </div>
                <div class="form-group" id="tour-inclusions">
                    <label>Tour Inclusions</label>
                    <div id="inclusion-div" class="form-subgroup">
                        <ul id="inclusions-fetch" name="Inclusions">
                            @php
                                $inclusions = $booked_tour->Inclusions;
                                $inclusions_array = explode(",", $inclusions);
                            @endphp
                            @foreach ($inclusions_array as $inclusion)
                                @php
                                    $inclusion = trim(str_replace('"', '', $inclusion));
                                @endphp
                                <li>{{ $inclusion }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tour Price:</label>
                    <div class="form-subgroup" id="input-num">
                        <input type="number" name="Price" id="amount"  value="{{ $booked_tour->Price }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Travel Made by:</label>
                    <input type="text" id="book-by" name="BookedBy" placeholder="Type your Full Name"  value="{{ $booked_tour->BookedBy }}" required>
                </div>
                <div class="div-btn-edit">
                    <button id="btn-save-edit">Save Changes</button>
                </div>
            </div>
        </form>
        <div class="editour-img-b2"></div>
    </div>  
    </main>
    <script>
        const RADIO_3D = document.querySelector("#three-days");
        const RADIO_2D = document.querySelector("#two-days");
        const TOUR_AMOUNT = document.querySelector("#amount");
        const FROM_DATE = document.querySelector('#from-date'); // convert to comparable date difference
        const TO_DATE = document.querySelector('#to-date'); // convert to comparable date difference
        const SEAT_COUNT = document.querySelector('#seat-count');

        const fromDate = new Date(FROM_DATE.value);
        const toDate = new Date(TO_DATE.value);
        const diffTime = Math.abs(toDate - fromDate);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 

        RADIO_3D.addEventListener('change', function(){
            TO_DATE.value = new Date(toDate.setDate(fromDate.getDate() + 3)).toISOString().slice(0, 10);
            // if (diffDays == 2) {
            //     TOUR_AMOUNT.value = (parseFloat(TOUR_AMOUNT.value) - 1000).toFixed(2);
            // } else {
            //     TOUR_AMOUNT.value = (parseFloat(TOUR_AMOUNT.value)).toFixed(2);
            // }
        });
        RADIO_2D.addEventListener('change', function(){
            TO_DATE.value = new Date(toDate.setDate(fromDate.getDate() + 2)).toISOString().slice(0, 10);
            // if (diffDays == 3) {
            //     TOUR_AMOUNT.value = (parseFloat(TOUR_AMOUNT.value) + 1000).toFixed(2);
            // } else {
            //     TOUR_AMOUNT.value = (parseFloat(TOUR_AMOUNT.value)).toFixed(2);
            // }
        });
        SEAT_COUNT.addEventListener('change', function(){
            if (SEAT_COUNT.value) {
                TOUR_AMOUNT.value = (parseFloat(TOUR_AMOUNT.value) * parseFloat(SEAT_COUNT.value)).toFixed(2);
            }
        });
        SEAT_COUNT.addEventListener('input', function(){
            if (SEAT_COUNT.value) {
                TOUR_AMOUNT.value = (parseFloat(TOUR_AMOUNT.value) * parseFloat(SEAT_COUNT.value)).toFixed(2);
            }
        });
    </script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>
</html>