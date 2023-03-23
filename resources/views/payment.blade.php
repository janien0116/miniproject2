<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Janela Daculong">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}">
    <script src="https://kit.fontawesome.com/5f8be564ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="payment-title text-center mb-3">
            <h3>Joiner's Portal Payment Details</h3>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <strong>G-Cash</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container text-center w-50" id="accordion-container">
                            <div class="row mb-3">
                                <div class="col-6">
                                    G-Cash Account Name:
                                </div>
                                <div class="col-6">
                                    Joiner's Portal PH
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    G-Cash Account Number:
                                </div>
                                <div class="col-6">
                                    09625176273
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-6 col-sm-12">
                                    Input Reference Number:
                                </div>
                                <div class="col-lg-6 d-lg-flex flex-row d-sm-block">
                                    <input type="number" class="ps-1" required minlength="11" maxlength="11">
                                    <button type="button" class="btn btn-info">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>BPI Bank Transfer</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container text-center w-50" id="accordion-container">
                            <div class="row mb-3">
                                <div class="col-6">
                                    BPI Account Name:
                                </div>
                                <div class="col-6">
                                    Joiner's Portal PH
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    BPI Account Number:
                                </div>
                                <div class="col-6">
                                    0162517627
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-6 col-sm-12">
                                    Input Reference Number:
                                </div>
                                <div class="col-lg-6 d-lg-flex flex-row d-sm-block">
                                    <input type="number" class="ps-1" required minlength="11" maxlength="11">
                                    <button type="button" class="btn btn-info">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>BDO Bank Transfer</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container text-center w-50" id="accordion-container">
                            <div class="row mb-3">
                                <div class="col-6">
                                    BDO Account Name:
                                </div>
                                <div class="col-6">
                                    Joiner's Portal PH
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    BDO Account Number:
                                </div>
                                <div class="col-6">
                                    87625876273
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-6 col-sm-12">
                                    Input Reference Number:
                                </div>
                                <div class="col-lg-6 d-lg-flex flex-row d-sm-block">
                                    <input type="number" class="ps-1" minlength="11" maxlength="11">
                                    <button type="button" class="btn btn-info">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong>ShopeePay</strong>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container text-center w-50" id="accordion-container">
                            <div class="row mb-3">
                                <div class="col-6">
                                    ShopeePay Account Name:
                                </div>
                                <div class="col-6">
                                    JoinerPortalPH
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-6">
                                    ShopeePay QR Code:
                                </div>
                                <div class="col-6">
                                    <img src="../images/qr.png" class="img-thumbnail" alt="qr-code">
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="formFile" class="form-label">Upload Proof of Payment</label>
                                </div>
                                <div class="col-lg-6 d-lg-flex flex-row d-sm-block">
                                    <input class="form-control" type="file" id="formFile" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <strong>Paypal</strong>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container text-center w-50" id="accordion-container">
                            <div class="row mb-3">
                                <div class="col-6">
                                    Paypal Account Name:
                                </div>
                                <div class="col-6">
                                    Joiner's Portal PH
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    Paypal Email Address:
                                </div>
                                <div class="col-6">
                                    joiners.portal@gmail.com
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-lg-6 col-sm-12">
                                    <label for="formFile" class="form-label">Upload Proof of Payment</label>
                                </div>
                                <div class="col-lg-6 d-lg-flex flex-row d-sm-block">
                                    <input class="form-control" type="file" id="formFile" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <button type="button" class="btn btn-info w-100 fs-5" onclick="event.preventDefault(); window.location.href='{{ route('tour_history') }}'"><strong>Book this Tour</strong></button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>
