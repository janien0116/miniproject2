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
                      <li>
                        <a href="">Log out</a>
                    </li>
                  </div>
                </ul>
            </nav>
        </header>
        <main>
            <form>
                <div class="search-tour">
                    <label for="search">Search</label>
                    <input name="search" type="text" id="search" placeholder="Search destinations">
                    <button><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
                </div>
                <div class="tours">
                    <div class="by-two">
                        <div class="card" id="card1">
                        <!-- <form action="pass_value.php" method="post"> -->
                            <h3 class="dest-value">La Union</h3>
                            <div class="carousel">
                                <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="img-div">
                                    <img src="images/la-union.jpg" class="carousel-item">
                                    <img src="images/la-union2.jpg" class="carousel-item">
                                    <img src="images/la-union3.jpg" class="carousel-item">
                                    <img src="images/la-union4.jpg" class="carousel-item">
                                </div>
                                <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i></div>
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
                            <h3 class="dest-value">Puerto Galera</h3>
                            <div class="carousel">
                                <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="img-div">
                                    <img src="images/puerto-galera.jpg" class="carousel-item">
                                    <img src="images/puerto-galera2.jpg" class="carousel-item">
                                    <img src="images/puerto-galera3.jpg" class="carousel-item">
                                    <img src="images/puerto-galera4.jpg" class="carousel-item">
                                </div>
                                <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i></div>
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
                            <h3 class="dest-value">Sagada</h3>
                            <div class="carousel">
                                <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="img-div">
                                    <img src="images/sagada.jpg" class="carousel-item">
                                    <img src="images/sagada2.jpg" class="carousel-item">
                                    <img src="images/sagada3.jpg" class="carousel-item">
                                    <img src="images/sagada4.jpg" class="carousel-item">
                                </div>
                                <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i></div>
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
                            <h3 class="dest-value">Ilocos</h3>
                            <div class="carousel">
                                <div class="carousel-arrow" id="left-arrow"><i class="fa-solid fa-chevron-left"></i></div>
                                <div class="img-div">
                                    <img src="images/ilocos1.jpg" class="carousel-item">
                                    <img src="images/ilocos2.jpg" class="carousel-item">
                                    <img src="images/ilocos3.jpg" class="carousel-item">
                                    <img src="images/ilocos4.jpg" class="carousel-item">
                                </div>
                                <div class="carousel-arrow" id="right-arrow"><i class="fa-solid fa-chevron-right"></i></div>
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
                </div>
            </form>
        </main>
    </div>
    <script>
        var booktourUrl = "{{ route('book_tour') }}";
        const currentPage = document.querySelector('body').id;
        const navLinks = document.querySelectorAll('nav li a');
        
        navLinks.forEach(link => {
          if (link.dataset.target === currentPage) {
            link.classList.add('active');
          }
        });
    </script>
    <script src="{{ asset('js/destinations-script.js') }}"></script>
    <script src="{{ asset('js/flexible.js') }}"></script>
</body>
</html>