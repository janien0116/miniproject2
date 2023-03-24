//Getting destination
const OUT_DEST = localStorage.getItem("output_destination");
document.getElementById("destination").value = OUT_DEST;

//Getting date options
const TDATE1 = localStorage.getItem("output_date1");
document.getElementById("label-date1").textContent = TDATE1;
const TDATE2 = localStorage.getItem("output_date2");
document.getElementById("label-date2").textContent = TDATE2;
const TDATE3 = localStorage.getItem("output_date3");
document.getElementById("label-date3").textContent = TDATE3;

//Script for date manipulation
const RADIO_3D = document.querySelector("#three-days");
const RADIO_2D = document.querySelector("#two-days");
const LABEL_DATE1 = document.getElementById('date-1');
const LABEL_DATE2 = document.getElementById('date-2');
const LABEL_DATE3 = document.getElementById('date-3');

const FROM_DATE = document.getElementById('from-date');
const TO_DATE = document.getElementById('to-date');

function updateDates(numDays) {
    const date = getDateForSelectedLabel();
    FROM_DATE.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    TO_DATE.value = new Date(date.setDate(date.getDate() + numDays)).toISOString().slice(0, 10);
}
function updateDatesForLabel(TDATE) {
    const date = new Date(TDATE);
    FROM_DATE.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    if (RADIO_3D.checked) {
        TO_DATE.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    } else if (RADIO_2D.checked) {
        TO_DATE.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    } else {
        TO_DATE.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    }
}
function getDateForSelectedLabel() {
    let date;
    if (LABEL_DATE1.checked) {
        date = new Date(TDATE1);
    } else if (LABEL_DATE2.checked) {
        date = new Date(TDATE2);
    } else if (LABEL_DATE3.checked) {
        date = new Date(TDATE3);
    }
    return date;
}
RADIO_3D.addEventListener('change', function () {
    updateDates(3);
    priceChange();
});
RADIO_2D.addEventListener('change', function () {
    updateDates(2);
    priceChange();
});
LABEL_DATE1.addEventListener('change', function () {
    updateDatesForLabel(TDATE1);
});
LABEL_DATE2.addEventListener('change', function () {
    updateDatesForLabel(TDATE2);
});
LABEL_DATE3.addEventListener('change', function () {
    updateDatesForLabel(TDATE3);
});

//Getting price and computation
const PRICE_3D = localStorage.getItem("output_price3d");
const PRICE_2D = localStorage.getItem("output_price2d");
const TOUR_AMOUNT = document.querySelector("#amount");
const SEAT_COUNT = document.querySelector('#seat-count');

function priceChange() {
    let tourPrice = 0;

    if (RADIO_2D.checked) {
        tourPrice = PRICE_2D;
    } else if (RADIO_3D.checked) {
        tourPrice = PRICE_3D;
    }

    if (SEAT_COUNT.value) {
        tourPrice *= parseFloat(SEAT_COUNT.value);
    }

    TOUR_AMOUNT.value = tourPrice.toFixed(2);
}
SEAT_COUNT.addEventListener('change', priceChange);
SEAT_COUNT.addEventListener('input', priceChange);

//Getting tour inclusions
const INCLUSIONS = localStorage.getItem("output_inclusions");
const INCLUSION_LIST = document.getElementById("inclusion-ul");
const INCLUSION_INPUT = document.getElementById("inclusion-input");

if (INCLUSIONS) {
    const inclusionsArray = JSON.parse(INCLUSIONS);

    for (let i = 0; i < inclusionsArray.length; i++) {
        let inclusion = inclusionsArray[i];
        if (inclusion) {
            const LI = document.createElement("li");
            LI.textContent = inclusion;
            INCLUSION_LIST.appendChild(LI);
            INCLUSION_INPUT.value += inclusion + ",";
        }
    }
}
INCLUSION_INPUT.value = INCLUSION_INPUT.value.slice(0, -1);


const BTN_BOOK = document.querySelector('#btn-addtour');
const NAME = document.querySelector('#book-by');

SEAT_COUNT.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        e.preventDefault();
        BTN_BOOK.click();
    }
});
NAME.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        e.preventDefault();
        BTN_BOOK.click();
    }
});