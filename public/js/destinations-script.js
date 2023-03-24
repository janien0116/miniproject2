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
BTN_SEARCH.addEventListener("click", function(e){
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
    image.style.display = (index === currentIndex) ? 'block' : 'none';
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