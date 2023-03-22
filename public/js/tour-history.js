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
    } else {
      destinationImg[index].src = 'images/destination-placeholder.png';
    }
  });

  