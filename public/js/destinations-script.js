const BOOK_TOUR = document.querySelectorAll(".btn-book-tour");
for(let i = 0; i < BOOK_TOUR.length; i++){
    BOOK_TOUR[i].addEventListener('click', function(event){
        event.preventDefault();
        const card = BOOK_TOUR[i].parentElement;
        const destination = card.querySelector(".dest-value").textContent;
        const FIRST_DATE = card.querySelector(".first-date").textContent;
        const SCND_DATE = card.querySelector(".second-date").textContent;
        const THIRD_DATE = card.querySelector(".third-date").textContent;
        const PRICE_3D = card.querySelector(".price3d").textContent;
        const PRICE_2D = card.querySelector(".price2d").textContent;
        localStorage.setItem("output_destination", destination);
        localStorage.setItem("output_date1", FIRST_DATE);
        localStorage.setItem("output_date2", SCND_DATE);
        localStorage.setItem("output_date3", THIRD_DATE);
        localStorage.setItem("output_3d_price", PRICE_3D);
        localStorage.setItem("output_2d_price", PRICE_2D);
        const inclusionList = card.querySelector('.include');
        const inclusionListItems = inclusionList.querySelectorAll('li');
        const inclusionValues = [];
        for (let i = 0; i < inclusionListItems.length; i++) {
          inclusionValues.push(inclusionListItems[i].textContent);
        }
        localStorage.setItem('output_inclusions', JSON.stringify(inclusionValues));
        window.location.href = booktourUrl;
    });
}

const imgDiv = document.querySelectorAll('.img-div');
const previous = document.querySelectorAll('#left-arrow');
const next = document.querySelectorAll('#right-arrow');
const INCLUSIONS = document.querySelectorAll('.inclusions');
const CARD = document.querySelectorAll('.card');
let currentIndex = 0;

for(let i = 0; i < previous.length; i++){
  previous[i].addEventListener('click', function(event) {
    event.preventDefault();
    INCLUSIONS[i].style.transform = "scaleX(0)";
    const images = imgDiv[i].querySelectorAll('.carousel-item');
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = images.length - 1;
    }
    images.forEach(function(image, index) {
    if (index === currentIndex) {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
    }); 
  });
  for(let c = 0; c < CARD.length; c++){
    CARD[c].addEventListener('mouseleave', function() {
      INCLUSIONS[c].style.transform = "scaleX(0)";
    });
    CARD[c].addEventListener('mouseenter', function() {
      INCLUSIONS[c].style.transform = "scaleX(1)";
    });
  }
}

for(let i = 0; i < next.length; i++){
  next[i].addEventListener('click', function(event) {
    event.preventDefault();
    INCLUSIONS[i].style.transform = "scaleX(0)";
    const images = imgDiv[i].querySelectorAll('.carousel-item');
    currentIndex++;
    if (currentIndex >= images.length) {
      currentIndex = 0;
    }
    images.forEach(function(image, index) {
    if (index === currentIndex) {
      image.style.display = 'block';
    } else {
      image.style.display = 'none';
    }
    });
  });
  for(let c = 0; c < CARD.length; c++){
    CARD[c].addEventListener('mouseleave', function() {
      INCLUSIONS[c].style.transform = "scaleX(0)";
    });
    CARD[c].addEventListener('mouseenter', function() {
      INCLUSIONS[c].style.transform = "scaleX(1)";
    });
  }
}




