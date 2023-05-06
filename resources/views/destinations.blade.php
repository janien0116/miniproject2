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
                    <li class="user-li">
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
                <button id="btn-search"><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
            </div>
            <div id="error-display">
                <label id="search-error"></label>
            </div>
            <div class="tours">
                <div class="by-two">
                    <div class="card" id="card1">
                        <!-- <form action="pass_value.php" method="post"> -->
                        <h3 class="dest-value" data-destination="la union">La Union
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="la-union-view"></div>
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
                        <button type="submit" class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book This
                            Tour</button>
                        <!-- </form> -->
                    </div>
                    <div class="card" id="card2">
                        <h3 class="dest-value" data-destination="puerto galera">Puerto Galera
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="puerto-galera-view"></div>
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
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book This
                            Tour</button>
                    </div>
                </div>
                {{-- sagada --}}
                <div class="by-two">
                    <div class="card" id="card3">
                        <!-- <form action="pass_value.php" method="post"> -->
                        <h3 class="dest-value" data-destination="sagada">Sagada
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="sagada-view"></div>
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
                        <button type="submit" class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book This
                            Tour</button>
                        <!-- </form> -->
                    </div>
                    {{-- ilocos --}}
                    <div class="card" id="card4">
                        <h3 class="dest-value" data-destination="ilocos">Ilocos
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="ilocos-view"></div>
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
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
                {{-- palawan  --}}
                <div class="by-two">
                    <div class="card" id="card5">
                        <h3 class="dest-value" data-destination="palawan">Palawan
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="palawan-view"></div>
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
                                    <label class="first-date">6/16/2023</label>,
                                    <label class="second-date">6/21/2023</label>,
                                    <label class="third-date">6/26/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">10299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">8499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                    {{-- siargao --}}
                    <div class="card" id="card6">
                        <h3 class="dest-value" data-destination="siargao">Siargao
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="siargao-view"></div>
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
                                    <label class="first-date">6/29/2023</label>,
                                    <label class="second-date">7/5/2023</label>,
                                    <label class="third-date">7/8/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">7899.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">5899.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
                {{-- bagiuo --}}
                <div class="by-two">
                    <div class="card" id="card7">
                        <h3 class="dest-value" data-destination="baguio">Baguio
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="baguio-view"></div>
                            <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="img-div">
                                <img src="images/baguio4.jpg" class="carousel-item">
                                <img src="images/baguio2.jpg" class="carousel-item">
                                <img src="images/baguio3.jpg" class="carousel-item">
                                <img src="images/baguio4.jpg" class="carousel-item">
                                <img src="images/baguio.jpg" class="carousel-item">
                            </div>
                            <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="inclusions">
                                <p>3D2N / 2D1N</p>
                                <p>Tour Dates:
                                    <label class="first-date">7/10/2023</label>,
                                    <label class="second-date">7/14/2023</label>,
                                    <label class="third-date">7/19/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">5299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">4499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                    {{-- boracay --}}
                    <div class="card" id="card8">
                        <h3 class="dest-value" data-destination="boracay">Boracay
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="boracay-view"></div>
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
                                    <label class="first-date">8/15/2023</label>,
                                    <label class="second-date">8/21/2023</label>,
                                    <label class="third-date">8/27/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">12299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">9499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
                {{-- bohol --}}
                <div class="by-two">
                    <div class="card" id="card9">
                        <h3 class="dest-value" data-destination="bohol">Bohol
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="bohol-view"></div>
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
                                    <label class="first-date">8/1/2023</label>,
                                    <label class="second-date">8/24/2023</label>,
                                    <label class="third-date">8/31/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">5299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">4499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                    {{-- baler --}}
                    <div class="card" id="card10">
                        <h3 class="dest-value" data-destination="baler">Baler
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="baler-view"></div>
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
                                    <label class="first-date">9/6/2023</label>,
                                    <label class="second-date">9/11/2023</label>,
                                    <label class="third-date">9/16/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">3699.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2699.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
                {{-- bolinao   555555555555555 --}}
                <div class="by-two">
                    <div class="card" id="card11">
                        <h3 class="dest-value" data-destination="bolinao">Bolinao
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="bolinao-view"></div>
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
                                    <label class="first-date">10/3/2023</label>,
                                    <label class="second-date">10/12/2023</label>,
                                    <label class="third-date">10/17/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">3899.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2899.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                    {{-- batanes --}}
                    <div class="card" id="card12">
                        <h3 class="dest-value" data-destination="batanes">Batanes
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="batanes-view"></div>
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
                                    <label class="first-date">10/16/2023</label>,
                                    <label class="second-date">10/22/2023</label>,
                                    <label class="third-date">10/28/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">7299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">5299.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
                {{-- burias   555555555555555 --}}
                <div class="by-two">
                    <div class="card" id="card13">
                        <h3 class="dest-value" data-destination="burias">Burias
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="burias-view"></div>
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
                                    <label class="first-date">10/31/2023</label>,
                                    <label class="second-date">11/4/2023</label>,
                                    <label class="third-date">11/15/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">4899.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">3899.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                    {{-- caramoan --}}
                    <div class="card" id="card14">
                        <h3 class="dest-value" data-destination="caramoan">Caramoan
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="caramoan-view"></div>
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
                                    <label class="first-date">11/13/2023</label>,
                                    <label class="second-date">11/20/2023</label>,
                                    <label class="third-date">11/26/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">5299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">4499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
                {{-- maniwaya --}}
                <div class="by-two">
                    <div class="card" id="card15">
                        <h3 class="dest-value" data-destination="maniwaya">Maniwaya
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="maniwaya-view"></div>
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
                                    <label class="first-date">11/29/2023</label>,
                                    <label class="second-date">12/1/2023</label>,
                                    <label class="third-date">12/7/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">3999.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">2999.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                    {{-- intramuros --}}
                    <div class="card" id="card16">
                        <h3 class="dest-value" data-destination="intramuros">Intramuros
                            <button class="toggle-map"><i class="fa-solid fa-location-dot fa-xl"
                                    style="color: #f50000;"></i></button>
                            <button class="close-map"><i class="fa-solid fa-circle-xmark fa-xl"
                                    style="color: #ff4000;"></i></button>
                        </h3>
                        <div class="carousel">
                            <div class="pano" id="intramuros-view"></div>
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
                                    <label class="first-date">12/16/2023</label>,
                                    <label class="second-date">12/18/2023</label>,
                                    <label class="third-date">12/27/2023</label>
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
                                <p><label>3D2N: &#8369;</label><label class="price3d">2299.00</label></p>
                                <p><label>2D1N: &#8369;</label><label class="price2d">1499.00</label></p>
                            </div>
                        </div>
                        <button class="btn-book-tour"
                            onclick="event.preventDefault(); window.location.href='{{ route('book_tour') }}'">Book
                            This Tour</button>
                    </div>
                </div>
            </div>
            <div class="to-top">
                <button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>
            </div>
        </main>
    </div>
    @include('footer')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initialize&v=weekly"
        defer></script>
    <script>
        var booktourUrl = "{{ route('book_tour') }}";
    </script>
    <script src="{{ asset('js/destinations-script.js') }}"></script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>

</html>
