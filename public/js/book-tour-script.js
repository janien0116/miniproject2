const OUT_DEST = localStorage.getItem("output_destination");
document.getElementById("destination").value = OUT_DEST;

const TDATE1 = localStorage.getItem("output_date1");
document.getElementById("label-date1").textContent = TDATE1;
const TDATE2 = localStorage.getItem("output_date2");
document.getElementById("label-date2").textContent = TDATE2;
const TDATE3 = localStorage.getItem("output_date3");
document.getElementById("label-date3").textContent = TDATE3;

const RADIO_3D = document.querySelector("#three-days");
const RADIO_2D = document.querySelector("#two-days");
const labelDate1 = document.getElementById('date-1');
const labelDate2 = document.getElementById('date-2');
const labelDate3 = document.getElementById('date-3');

const fromDate = document.getElementById('from-date');
const toDate = document.getElementById('to-date');

function updateDates(numDays) {
    const date = getDateForSelectedLabel();
    fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    toDate.value = new Date(date.setDate(date.getDate() + numDays)).toISOString().slice(0, 10);
}

function updateDatesForLabel(TDATE) {
    const date = new Date(TDATE);
    fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    if (RADIO_3D.checked) {
        toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    } else if (RADIO_2D.checked) {
        toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    } else {
        toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    }
}

function getDateForSelectedLabel() {
    let date;
    if (labelDate1.checked) {
        date = new Date(TDATE1);
    } else if (labelDate2.checked) {
        date = new Date(TDATE2);
    } else if (labelDate3.checked) {
        date = new Date(TDATE3);
    }
    return date;
}


RADIO_3D.addEventListener('change', function () {
    priceChange();
    updateDates(3);
    // if (labelDate1.checked) {
    //     const date = new Date(TDATE1);
    //     fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // } else if (labelDate2.checked) {
    //     const date = new Date(TDATE2);
    //     fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // } else if (labelDate3.checked) {
    //     const date = new Date(TDATE3);
    //     fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // }
});
RADIO_2D.addEventListener('change', function () {
    priceChange();
    updateDates(2);
    // if (labelDate1.checked) {
    //     const date = new Date(TDATE1);
    //     fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    //     toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    // } else if (labelDate2.checked) {
    //     const date = new Date(TDATE2);
    //     fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    //     toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    // } else if (labelDate3.checked) {
    //     const date = new Date(TDATE3);
    //     fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    //     toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    // }
});

labelDate1.addEventListener('change', function () {
    updateDatesForLabel(TDATE1);
    // const date = new Date(TDATE1);
    // fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    // if (RADIO_3D.checked) {
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // } else if (RADIO_2D.checked) {
    //     toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    // } else {
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // }
});
labelDate2.addEventListener('change', function () {
    updateDatesForLabel(TDATE2);
    // const date = new Date(TDATE2);
    // fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    // if (RADIO_3D.checked) {
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // } else if (RADIO_2D.checked) {
    //     toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    // } else {
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // }
});
labelDate3.addEventListener('change', function () {
    updateDatesForLabel(TDATE3);
    // const date = new Date(TDATE3);
    // fromDate.value = new Date(date.setDate(date.getDate() + 1)).toISOString().slice(0, 10);
    // if (RADIO_3D.checked) {
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // } else if (RADIO_2D.checked) {
    //     toDate.value = new Date(date.setDate(date.getDate() + 2)).toISOString().slice(0, 10);
    // } else {
    //     toDate.value = new Date(date.setDate(date.getDate() + 3)).toISOString().slice(0, 10);
    // }
});

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

const inclusions = localStorage.getItem("output_inclusions");
const inclusionList = document.getElementById("inclusion-ul");
const inclusionInput = document.getElementById("inclusion-input"); // add this line

if (inclusions) {
    const inclusionsArray = JSON.parse(inclusions);

    for (let i = 0; i < inclusionsArray.length; i++) {
        const inclusion = inclusionsArray[i];
        if (inclusion) {
            const li = document.createElement("li");
            li.textContent = inclusion;
            inclusionList.appendChild(li);
            inclusionInput.value += inclusion + ','; // add this line
        }
    }
}
inclusionInput.value = inclusionInput.value.slice(0, -1);