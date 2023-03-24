const RADIO_3D = document.querySelector("#three-days");
const RADIO_2D = document.querySelector("#two-days");
const TOUR_AMOUNT = document.querySelector("#amount");
const FROM_DATE = document.querySelector('#from-date');
const TO_DATE = document.querySelector('#to-date');
const SEAT_COUNT = document.querySelector('#edit-seat-count');
const BTN_SAVE = document.querySelector("#btn-save-edit");
const DESTINATION = document.querySelector('#destination');

TOUR_AMOUNT.value = document.querySelector('#db-price').value;
TO_DATE.value = document.querySelector('#todate-holder').value;
SEAT_COUNT.value = document.querySelector('#db-seats').value;

function priceRecall() {
    let place = DESTINATION.value;
    let baseAmount;
    let tourAmount = parseFloat(TOUR_AMOUNT.value);
    let seatCount = parseFloat(SEAT_COUNT.value);

    if (RADIO_2D.checked) {
        if (place == 'Ilocos') {
            baseAmount = 2499.00;
        } else if (place == 'La Union' || place == 'Baler') {
            baseAmount = 2699.00;
        } else if (place == 'Sagada') {
            baseAmount = 2799.00;
        } else if (place == 'Puerto Galera') {
            baseAmount = 3499.00;
        } else if (place == 'Palawan') {
            baseAmount = 8499.00;
        } else if (place == 'Siargao') {
            baseAmount = 5899.00;
        } else if (place == 'Baguio' || place == 'Bohol' || place == 'Caramoan') {
            baseAmount = 4499.00;
        } else if (place == 'Boracay') {
            baseAmount = 9499.00;
        } else if (place == 'Batanes') {
            baseAmount = 5299.00;
        } else if (place == 'Bolinao') {
            baseAmount = 2899.00;
        } else if (place == 'Burias') {
            baseAmount = 3899.00;
        } else if (place == 'Maniwaya') {
            baseAmount = 2999.00;
        } else if (place == 'Intramuros') {
            baseAmount = 1499.00;
        }
    } else if (RADIO_3D.checked) {
        if (place == 'Ilocos') {
            baseAmount = 3299.00;
        } else if (place == 'La Union' || place == 'Baler') {
            baseAmount = 3699.00;
        } else if (place == 'Sagada') {
            baseAmount = 3799.00;
        } else if (place == 'Puerto Galera') {
            baseAmount = 4499.00;
        } else if (place == 'Palawan') {
            baseAmount = 10299.00;
        } else if (place == 'Siargao') {
            baseAmount = 7899.00;
        } else if (place == 'Baguio' || place == 'Bohol' || place == 'Caramoan') {
            baseAmount = 5299.00;
        } else if (place == 'Boracay') {
            baseAmount = 12299.00;
        } else if (place == 'Batanes') {
            baseAmount = 7299.00;
        } else if (place == 'Bolinao') {
            baseAmount = 3899.00;
        } else if (place == 'Burias') {
            baseAmount = 4899.00;
        } else if (place == 'Maniwaya') {
            baseAmount = 3999.00;
        } else if (place == 'Intramuros') {
            baseAmount = 2299.00;
        }
    }
    tourAmount = baseAmount * seatCount;
    return TOUR_AMOUNT.value = tourAmount.toFixed(2);
}

window.onload = function () {
    TOUR_AMOUNT.value = document.querySelector('#db-price').value;
    checkRadio();
};

let fromDate = new Date(FROM_DATE.value);
let toDate = new Date(TO_DATE.value);

function getDaysDiff() {
    const diffTime = Math.abs(toDate - fromDate);
    return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
}

function checkRadio() {
    const dayDiff = getDaysDiff();
    if (dayDiff == 3) {
        RADIO_3D.checked = true;
    } else if (dayDiff == 2) {
        RADIO_2D.checked = true;
    }
}

RADIO_3D.addEventListener('change', function () {
    updateDBPrice();
    TO_DATE.value = new Date(toDate.setDate(fromDate.getDate() + 3)).toISOString().slice(0, 10);
    priceRecall();
});
RADIO_2D.addEventListener('change', function () {
    updateDBPrice();
    TO_DATE.value = new Date(toDate.setDate(fromDate.getDate() + 2)).toISOString().slice(0, 10);
    priceRecall();
});

function updateDBPrice() {
    const dbPriceInput = document.querySelector('#db-price');
    const dbToDate = document.querySelector('#todate-holder');
    const dbSeats = document.querySelector('#db-seats');
    dbPriceInput.value = TOUR_AMOUNT.value;
    dbToDate.value = TO_DATE.value;
    dbSeats.value = SEAT_COUNT.value;
}

TOUR_AMOUNT.addEventListener('change', updateDBPrice);
BTN_SAVE.addEventListener('click', updateDBPrice);
SEAT_COUNT.addEventListener('change', priceRecall);
SEAT_COUNT.addEventListener('input', priceRecall);