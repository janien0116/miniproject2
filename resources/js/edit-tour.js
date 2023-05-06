window.onload = function () {
    TOUR_AMOUNT.value = document.querySelector('#db-price').value;
    checkRadio();
};

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

// Setting base amounts for easier calculations
function priceRecall() {
    let place = DESTINATION.value;
    let baseAmount;
    let tourAmount = parseFloat(TOUR_AMOUNT.value);
    let seatCount = parseFloat(SEAT_COUNT.value);

    switch (place) {
        case 'Ilocos':
            baseAmount = RADIO_2D.checked ? 2499.00 : 3299.00;
            break;
        case 'La Union':
        case 'Baler':
            baseAmount = RADIO_2D.checked ? 2699.00 : 3699.00;
            break;
        case 'Sagada':
            baseAmount = RADIO_2D.checked ? 2799.00 : 3799.00;
            break;
        case 'Puerto Galera':
            baseAmount = RADIO_2D.checked ? 3499.00 : 4499.00;
            break;
        case 'Palawan':
            baseAmount = RADIO_2D.checked ? 8499.00 : 10299.00;
            break;
        case 'Siargao':
            baseAmount = RADIO_2D.checked ? 5899.00 : 7899.00;
            break;
        case 'Baguio':
        case 'Bohol':
        case 'Caramoan':
            baseAmount = RADIO_2D.checked ? 4499.00 : 5299.00;
            break;
        case 'Boracay':
            baseAmount = RADIO_2D.checked ? 9499.00 : 12299.00;
            break;
        case 'Batanes':
            baseAmount = RADIO_2D.checked ? 5299.00 : 7299.00;
            break;
        case 'Bolinao':
            baseAmount = RADIO_2D.checked ? 2899.00 : 3899.00;
            break;
        case 'Burias':
            baseAmount = RADIO_2D.checked ? 3899.00 : 4899.00;
            break;
        case 'Maniwaya':
            baseAmount = RADIO_2D.checked ? 2999.00 : 3999.00;
            break;
        case 'Intramuros':
            baseAmount = RADIO_2D.checked ? 1499.00 : 2299.00;
            break;
        default:
            baseAmount = 0;
    }
    tourAmount = baseAmount * seatCount;
    return TOUR_AMOUNT.value = tourAmount.toFixed(2);
}

// Determine date difference
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

// Fields event handling
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

TOUR_AMOUNT.addEventListener('change', updateDBPrice);
BTN_SAVE.addEventListener('click', updateDBPrice);
SEAT_COUNT.addEventListener('change', priceRecall);
SEAT_COUNT.addEventListener('input', priceRecall);
const NAME = document.querySelector('#book-by');
SEAT_COUNT.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        e.preventDefault();
        BTN_SAVE.click();
    }
});
NAME.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
        e.preventDefault();
        BTN_SAVE.click();
    }
});

function updateDBPrice() {
    const dbPriceInput = document.querySelector('#db-price');
    const dbToDate = document.querySelector('#todate-holder');
    const dbSeats = document.querySelector('#db-seats');
    dbPriceInput.value = TOUR_AMOUNT.value;
    dbToDate.value = TO_DATE.value;
    dbSeats.value = SEAT_COUNT.value;
}