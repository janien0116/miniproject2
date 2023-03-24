<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Destination</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
</head>

<body id="destinations">
    <div class="body-pattern">
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
                            <a href="#" data-target="destinations" class="active">Destinations</a>
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
            <div class="search-tour">
                <label for="search">Search</label>
                <input name="search" type="text" id="search" placeholder="Search destinations" autofocus>
                <button><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
            </div>
            <div id="error-display">
                <label id="search-error"></label>
            </div>
            <div class="tours">
                <div class="by-two">
                    <div class="card" id="card1">
                        <!-- <form action="pass_value.php" method="post"> -->
                        <h3 class="dest-value" data-destination="la union">La Union</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/la-union.jpg" class="carousel-item">
                                <img src="images/la-union2.jpg" class="carousel-item">
                                <img src="images/la-union3.jpg" class="carousel-item">
                                <img src="images/la-union4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/03/2023</label>,
                                    <label class="second-date">4/05/2023</label>,
                                    <label class="third-date">4/10/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Free Breakfast</li>
                                    <li>Complete La Union Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3699.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2699.00</label></p>
                            </div>
                        </div>
                        <button type="submit" class="btn-book-tour">Book This Tour</button>
                        <!-- </form> -->
                    </div>
                    <div class="card" id="card2">
                        <h3 class="dest-value" data-destination="puerto galera">Puerto Galera</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/puerto-galera.jpg" class="carousel-item">
                                <img src="images/puerto-galera2.jpg" class="carousel-item">
                                <img src="images/puerto-galera3.jpg" class="carousel-item">
                                <img src="images/puerto-galera4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">5/12/2023</label>,
                                    <label class="second-date">5/15/2023</label>,
                                    <label class="third-date">5/20/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>RT Ferry Transfer</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Complete Galera Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">4499.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">3499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>
                <div class="by-two">
                    <div class="card" id="card3">
                        <!-- <form action="pass_value.php" method="post"> -->
                        <h3 class="dest-value" data-destination="sagada">Sagada</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/sagada.jpg" class="carousel-item">
                                <img src="images/sagada2.jpg" class="carousel-item">
                                <img src="images/sagada3.jpg" class="carousel-item">
                                <img src="images/sagada4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">3/20/2023</label>,
                                    <label class="second-date">3/25/2023</label>,
                                    <label class="third-date">3/31/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Transient Homestay Accomodation</li>
                                    <li>Complete Sagada Tour</li>
                                    <li>Banaue + Baguio Sidetrip</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3799.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2799.00</label></p>
                            </div>
                        </div>
                        <button type="submit" class="btn-book-tour">Book This Tour</button>
                        <!-- </form> -->
                    </div>
                    <div class="card" id="card4">
                        <h3 class="dest-value" data-destination="ilocos">Ilocos</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/ilocos1.jpg" class="carousel-item">
                                <img src="images/ilocos2.jpg" class="carousel-item">
                                <img src="images/ilocos3.jpg" class="carousel-item">
                                <img src="images/ilocos4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free La Union Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Vigan-Laoag-Pagudpud Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>
                {{-- palawan   11111111111111111111111111111111111111111111111111 --}}
                <div class="by-two">
                    <div class="card" id="card5">
                        <h3 class="dest-value" data-destination="palawan">Palawan</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/palawan.jpg" class="carousel-item">
                                <img src="images/palawan1.jpg" class="carousel-item">
                                <img src="images/palawan2.jpg" class="carousel-item">
                                <img src="images/palawan3.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Palawan Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Palawan Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                    {{-- siargao   22222222222222222222222222222222222222222222222222222 --}}
                    <div class="card" id="card6">
                        <h3 class="dest-value" data-destination="siargao">Siargao</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/siargao.jpg" class="carousel-item">
                                <img src="images/siargao2.jpg" class="carousel-item">
                                <img src="images/siargao3.jpg" class="carousel-item">
                                <img src="images/siargao4.jpg" class="carousel-item">
                                <img src="images/siargao5.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Siargao Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Siargao Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>
                {{-- bagiuo 333333333333333333333333333333333333333333333333333333 --}}
                <div class="by-two">
                    <div class="card" id="card7">
                        <h3 class="dest-value" data-destination="baguio">Baguio</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/baguio.jpg" class="carousel-item">
                                <img src="images/baguio2.jpg" class="carousel-item">
                                <img src="images/baguio3.jpg" class="carousel-item">
                                <img src="images/baguio4.jpg" class="carousel-item">
                                <img src="images/baguio5.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Baguio Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Baguio Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>

                    {{-- boracay 44444444444444444444444444444444444444444444444444444444444444 --}}
                    <div class="card" id="card4">
                        <h3 class="dest-value" data-destination="boracay">Boracay</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/boracay.jpg" class="carousel-item">
                                <img src="images/boracay2.jpg" class="carousel-item">
                                <img src="images/boracay3.jpg" class="carousel-item">
                                <img src="images/boracay4.jpg" class="carousel-item">
                                <img src="images/boracay5.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Boracay Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Boracay Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>
                {{-- bohol555555555555555 --}}
                <div class="by-two">
                    <div class="card" id="card4">
                        <h3 class="dest-value">Bohol</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/bohol.jpg" class="carousel-item">
                                <img src="images/bohol2.jpg" class="carousel-item">
                                <img src="images/bohol3.jpg" class="carousel-item">
                                <img src="images/bohol4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Bohol Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Bohol Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                    {{-- baler --}}
                    <div class="card" id="card4">
                        <h3 class="dest-value">Baler</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/baler.jpg" class="carousel-item">
                                <img src="images/baler2.jpg" class="carousel-item">
                                <img src="images/baler3.jpg" class="carousel-item">
                                <img src="images/baler4.jpg" class="carousel-item">

                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Baler Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Baler Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>

                {{-- bolinao   555555555555555 --}}
                <div class="by-two">
                    <div class="card" id="card4">
                        <h3 class="dest-value">Bolinao</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/bolinao.jpg" class="carousel-item">
                                <img src="images/bolinao2.jpg" class="carousel-item">
                                <img src="images/bolinao3.jpg" class="carousel-item">
                                <img src="images/bolinao4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Bolinao Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Bolinao Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                    {{-- batanes --}}
                    <div class="card" id="card4">
                        <h3 class="dest-value">Batanes</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/batanes.jpg" class="carousel-item">
                                <img src="images/batanes2.jpg" class="carousel-item">
                                <img src="images/batanes3.jpg" class="carousel-item">
                                <img src="images/batanes4.jpg" class="carousel-item">

                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Batanes Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Batanes Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>

                {{-- burias   555555555555555 --}}
                <div class="by-two">
                    <div class="card" id="card4">
                        <h3 class="dest-value">Burias</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/burias.jpg" class="carousel-item">
                                <img src="images/burias2.jpg" class="carousel-item">
                                <img src="images/burias3.jpg" class="carousel-item">
                                <img src="images/burias4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Burias Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Burias Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                    {{-- caramoan --}}
                    <div class="card" id="card4">
                        <h3 class="dest-value">Caramoan</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/caramoan.jpg" class="carousel-item">
                                <img src="images/caramoan2.jpg" class="carousel-item">
                                <img src="images/caramoan3.jpg" class="carousel-item">
                                <img src="images/caramoan4.jpg" class="carousel-item">

                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Caramoan Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Caramoan Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>
                {{-- maniwaya --}}

                <div class="by-two">
                    <div class="card" id="card4">
                        <h3 class="dest-value">Maniwaya</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/maniwaya.jpg" class="carousel-item">
                                <img src="images/maniwaya2.jpg" class="carousel-item">
                                <img src="images/maniwaya3.jpg" class="carousel-item">
                                <img src="images/maniwaya4.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Tent Accomodation</li>
                                    <li>RT Boat Transfers</li>
                                    <li>Free Maniwaya Tour</li>
                                    <li>Travel Isurance</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2999.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                    {{-- intramuros --}}
                    <div class="card" id="card4">
                        <h3 class="dest-value">Intramuros</h3>
                        <div class="carousel">
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/intramuros1.jpg" class="carousel-item">
                                <img src="images/intramuros2.jpg" class="carousel-item">
                                <img src="images/intramuros3.jpg" class="carousel-item">
                                <img src="images/intramuros4.jpg" class="carousel-item">

                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">4/16/2023</label>,
                                    <label class="second-date">4/21/2023</label>,
                                    <label class="third-date">4/26/2023</label>
                                </p>
                                <ul class="include">
                                    <li>RT Premium Van Transfers</li>
                                    <li>Free Intramuros Sidetrip</li>
                                    <li>AC Room Accomodation</li>
                                    <li>Intramuros Tour</li>
                                    <li>Driver & Guide Fees</li>
                                    <li>Gas, Toll & Parking Fees</li>
                                </ul>
                                <br>
                                <p><label>3D2N: &#8369;</label><label class="price3d">3299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour">Book This Tour</button>
                    </div>
                </div>
                {{--  --}}




                {{-- end  --}}
            </div>
        </main>
    </div>
    @include('footer')
    <script>
        var booktourUrl = "{{ route('book_tour') }}";
    </script>
    <script src="{{ asset('js/destinations-script.js') }}"></script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>

</html>
