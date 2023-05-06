//Script to scroll spy tours
const SEARCH_INPUT = document.getElementById("search");
const CARDS = document.querySelectorAll(".card");
const LABEL_ERROR = document.querySelector("#search-error");
const BTN_SEARCH = document.querySelector('#btn-search');

function searchForTour() {
  const DEST_VALUE = SEARCH_INPUT.value.toLowerCase();
  const MATCHING_CARD = Array.from(CARDS).find(function (card) {
    return card.querySelector('.dest-value').getAttribute("data-destination").toLowerCase() === DEST_VALUE;
  });
  if (MATCHING_CARD) {
    MATCHING_CARD.scrollIntoView({ behavior: "smooth" });
  } else {
    LABEL_ERROR.textContent = "Sorry, we don't have that tour yet. Try searching for others.";
  }
}
BTN_SEARCH.addEventListener("click", function (e) {
  e.preventDefault();
  searchForTour();
});
SEARCH_INPUT.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    searchForTour();
  }
});

//Script for card carousel
const IMG_DIV = document.querySelectorAll('.img-div');
const PREVIOUS = document.querySelectorAll('#left-arrow');
const NEXT = document.querySelectorAll('#right-arrow');
const INCLUSIONS = document.querySelectorAll('.inclusions');
const CARD = document.querySelectorAll('.card');
let currentIndex = 0;

function updateCarousel(i, direction) {
  INCLUSIONS[i].style.transform = "scaleX(0)";
  const images = IMG_DIV[i].querySelectorAll('.carousel-item');
  currentIndex += direction;
  if (currentIndex < 0) {
    currentIndex = images.length - 1;
  } else if (currentIndex >= images.length) {
    currentIndex = 0;
  }
  images.forEach((image, index) => {
    if (index === currentIndex) {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
  });
}

for (let i = 0; i < PREVIOUS.length; i++) {
  PREVIOUS[i].addEventListener('click', function (event) {
    event.preventDefault();
    updateCarousel(i, -1);
  });
  CARD[i].addEventListener('mouseleave', function () {
    INCLUSIONS[i].style.transform = "scaleX(0)";
  });
  CARD[i].addEventListener('mouseenter', function () {
    INCLUSIONS[i].style.transform = "scaleX(1)";
  });
}
for (let i = 0; i < NEXT.length; i++) {
  NEXT[i].addEventListener('click', function (event) {
    event.preventDefault();
    updateCarousel(i, 1);
  });
  CARD[i].addEventListener('mouseleave', function () {
    INCLUSIONS[i].style.transform = "scaleX(0)";
  });
  CARD[i].addEventListener('mouseenter', function () {
    INCLUSIONS[i].style.transform = "scaleX(1)";
  });
}

//Script for setting local storage items
const BOOK_TOUR = document.querySelectorAll(".btn-book-tour");
for (let i = 0; i < BOOK_TOUR.length; i++) {
  BOOK_TOUR[i].addEventListener('click', function (event) {
    event.preventDefault();
    const CARD = BOOK_TOUR[i].parentElement;
    const DESTINATION = CARD.querySelector(".dest-value").textContent;
    const dates = ["first-date", "second-date", "third-date"];
    const prices = ["price3d", "price2d"];
    localStorage.setItem("output_destination", DESTINATION);
    dates.forEach((date, index) => {
      localStorage.setItem(`output_date${index + 1}`, CARD.querySelector(`.${date}`).textContent);
    });
    prices.forEach((price, index) => {
      localStorage.setItem(`output_${price}`, CARD.querySelector(`.${price}`).textContent);
    });

    const INCLUSION_LIST = CARD.querySelector('.include');
    const inclusionListItems = INCLUSION_LIST.querySelectorAll('li');
    const inclusionValues = [];
    for (let i = 0; i < inclusionListItems.length; i++) {
      inclusionValues.push(inclusionListItems[i].textContent);
    }
    localStorage.setItem('output_inclusions', JSON.stringify(inclusionValues));
    window.location.href = booktourUrl;
  });
}

//Script to toggle Google Map
const MARKER = document.querySelectorAll('.toggle-map');
const CLOSE = document.querySelectorAll('.close-map');
const PANO = document.querySelectorAll(".pano");

for (let i = 0; i < MARKER.length; i++) {
  MARKER[i].addEventListener("click", function () {
    PANO[i].style.display = "block";
    MARKER[i].style.display = "none";
    CLOSE[i].style.display = "inline";
  });
}
for (let j = 0; j < CLOSE.length; j++) {
  CLOSE[j].addEventListener("click", function () {
    PANO[j].style.display = "none";
    MARKER[j].style.display = "inline";
    CLOSE[j].style.display = "none";
  });
}

const locations = [
  { id: 'la-union-view', position: { lat: 16.6580, lng: 120.3209 } },
  { id: 'puerto-galera-view', position: { lat: 13.5026, lng: 120.9530 } },
  { id: 'sagada-view', position: { lat: 17.0707, lng: 120.9253 } },
  { id: 'ilocos-view', position: { lat: 17.5699, lng: 120.3883 } },
  { id: 'palawan-view', position: { lat: 11.9564, lng: 120.2169 } },
  { id: 'siargao-view', position: { lat: 9.81370198759517, lng: 126.16512477622939 } },
  { id: 'baguio-view', position: { lat: 16.36786567744473, lng: 120.60597803923783 } },
  { id: 'boracay-view', position: { lat: 11.968280950301622, lng: 121.9186258377946 } },
  { id: 'bohol-view', position: { lat: 9.829739112889856, lng: 124.13966221049107 } },
  { id: 'baler-view', position: { lat: 15.757713560591098, lng: 121.61966471610938 } },
  { id: 'bolinao-view', position: { lat: 16.305943378373765, lng: 119.86037497966163 } },
  { id: 'batanes-view', position: { lat: 20.426995674941022, lng: 121.94923391164974 } },
  { id: 'burias-view', position: { lat: 13.221425896146819, lng: 123.0452887377933 } },
  { id: 'caramoan-view', position: { lat: 13.809783342129379, lng: 123.89607076421105 } },
  { id: 'maniwaya-view', position: { lat: 13.530403326195996, lng: 122.12067227354945 } },
  { id: 'intramuros-view', position: { lat: 14.589961851976145, lng: 120.97350069648266 } }
];

function initialize() {
  for (const location of locations) {
    const element = document.querySelector(`#${location.id}`);
    const panorama = new google.maps.StreetViewPanorama(
      element,
      {
        position: location.position,
        pov: { heading: 165, pitch: 0 },
        zoom: 1
      }
    );
  }
}

window.initialize = initialize;

const SCROLL_TOP = document.querySelector('#back-to-top');

SCROLL_TOP.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
