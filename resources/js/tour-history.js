//Setting Destination Image
let destinationImg = document.querySelectorAll('.tour-placeholder');
let destination = document.querySelectorAll('.destination-output');
let divTourDetails = document.querySelectorAll('.div-tour-details');
divTourDetails.forEach((tourDetail, index) => {
    let destinationText = destination[index].textContent;
    if (destinationText === 'Ilocos') {
      destinationImg[index].src = '../images/ilocos1.jpg';
    } else if (destinationText === 'Puerto Galera') {
      destinationImg[index].src = '../images/puerto-galera3.jpg';
    } else if (destinationText === 'Sagada') {
      destinationImg[index].src = '../images/sagada3.jpg';
    } else if (destinationText === 'Boracay') {
        destinationImg[index].src = '../images/boracay.jpg';
    } else if (destinationText === 'La Union') {
        destinationImg[index].src = '../images/la-union.jpg';
    } else if (destinationText === 'Baler') {
        destinationImg[index].src = '../images/baler.jpg';
    } else if (destinationText === 'Intramuros') {
        destinationImg[index].src = '../images/intramuros1.jpg';
    } else if (destinationText === 'Palawan') {
        destinationImg[index].src = '../images/palawan.jpg';
    } else if (destinationText === 'Siargao') {
        destinationImg[index].src = '../images/siargao.jpg';
    } else if (destinationText === 'Baguio') {
        destinationImg[index].src = '../images/baguio2.jpg';
    } else if (destinationText === 'Bolinao') {
        destinationImg[index].src = '../images/bolinao2.jpg';
    } else if (destinationText === 'Batanes') {
        destinationImg[index].src = '../images/batanes.jpg';
    } else if (destinationText === 'Burias') {
        destinationImg[index].src = '../images/burias4.jpg';
    } else if (destinationText === 'Caramoan') {
        destinationImg[index].src = '../images/caramoan3.jpg';
    } else if (destinationText === 'Bohol') {
        destinationImg[index].src = '../images/bohol.jpg';
    } else if (destinationText === 'Maniwaya') {
        destinationImg[index].src = '../images/maniwaya.jpg';
    } else {
      destinationImg[index].src = 'images/destination-placeholder.png';
    }
  });

