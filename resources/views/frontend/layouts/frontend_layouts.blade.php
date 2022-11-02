<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GTA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ Asset('public/frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ Asset('public/frontend/css/owl.theme.default.css') }}" />
    <link rel="stylesheet" href="{{ Asset('public/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ Asset('public/frontend/css/responsive.css') }}">
</head>

<body>
    <div class="root">



        <!-- modal section started here  -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Passengers and Cabin Class</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="passengers">
                            <h5 class="mb-3">Passengers</h5>

                            <div class="row mb-3">
                                <div class="col-2 d-flex align-items-center">
                                    <span id="adult_person" class="fw-bold text-center">1</span>
                                </div>
                                <div class="col-7">
                                    <h6>Adults</h6>
                                    <span>12 Years and above</span>
                                </div>
                                <div class="col-3">
                                    <button for="adult" class="btn border-dark person-subtract"><i
                                            class="fa-solid fa-minus"></i></button>
                                    <button for="adult" class="btn border-primary text-primary person-add"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-2 d-flex align-items-center">
                                    <span id="child_person" class="fw-bold text-center">0</span>
                                </div>
                                <div class="col-7">
                                    <h6>Child</h6>
                                    <span>2-11 Years at the time of travel</span>
                                </div>
                                <div class="col-3">
                                    <button for="child" class="btn border-dark person-subtract"><i
                                            class="fa-solid fa-minus"></i></button>
                                    <button for="child" class="btn border-primary text-primary person-add"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-2 d-flex align-items-center">
                                    <span id="infant_person" class="fw-bold text-center">0</span>
                                </div>
                                <div class="col-7">
                                    <h6>Infants</h6>
                                    <span>0-23 Months at the time of travels</span>
                                </div>
                                <div class="col-3">
                                    <button for="infant" class="btn border-dark person-subtract"><i
                                            class="fa-solid fa-minus"></i></button>
                                    <button for="infant" class="btn border-primary text-primary person-add"><i
                                            class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="cabin-class">
                            <h5 class="mb-3">Cabin Class</h5>
                            <select id="class_selection" class="form-select" size="3"
                                aria-label="size 3 select example">
                                <option value="Economy">Economy</option>
                                <option value="Business">Business</option>
                                <option value="First">First Class</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal ended started here  -->
        <!-- nav section started here  -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('public/frontend/img/gta-logo.png') }}" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Flight</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Holiday</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Visa
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">News and Media</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Promotions
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <div class="ms-auto user-btn d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="d-none login-btn ms-2">
                        <a class="nav-link" href="#">Login</a>
                        <a class="nav-link" href="#">Create an account</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nav section ended here  -->

        <!-- hero section started here  -->
        <div class="hero">
            <div class="bg-img">
                <img src="{{ asset('public/frontend/img/banner.webp') }}" alt="" />
            </div>
            <div class="content">
                <div class="tabs">
                    <h2 id="tabs-title" class="title text-center">
                        Welcome to GTA! Find Flights, Hotels & Tour Packages
                    </h2>
                    <div class="tab-window">
                        <div class="tab-buttons">
                            <div for="flight" class="tab-btn d-none">
                                <i class="fa-solid fa-plane"></i>
                                Flight
                            </div>
                            <div for="visa" class="tab-btn tab-active">
                                <i class="fa-solid fa-globe"></i>
                                Visa
                            </div>
                            <div for="hotel" class="tab-btn">
                                <i class="fa-solid fa-hotel"></i>
                                Hotels
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="tab_flight" class="single-tab d-none">
                                <div class="header-tabs d-flex justify-content-around align-items-center">
                                    <div for="one way" class="flight-header-single-tab active">
                                        <h6 class="fligt-header-single-tab-name text-center">One Way</h6>
                                    </div>
                                    <div for="round trip" class="flight-header-single-tab">
                                        <h6 class="fligt-header-single-tab-name text-center">Round Trip</h6>
                                    </div>
                                    <div for="multi city" class="flight-header-single-tab">
                                        <h6 class="fligt-header-single-tab-name text-center">Multi City</h6>
                                    </div>
                                </div>

                                <!-- here started the flight tab contents  -->
                                <div class="flight-tab-contents">
                                    <div id="tab_one_way" class="flight-single-tab">


                                        <div class="wrap row">


                                            <div class="col-md-6 col-sm-6 col-lg-3 single-search-component">
                                                <div class="search-box ">
                                                    <div class="text-field">
                                                        <span class="label">Flying from</span>

                                                        <!-- <input value="Dhaka" class="search-text" placeholder="Airport" type="text"> -->
                                                        <select class="search-text select2-search-element "
                                                            name="flight_from" id="">
                                                            <option value="1">DAC, Dhaka International Airport
                                                            </option>
                                                        </select>
                                                        <div class="details">
                                                            <span class="fw-bold search-limit-details">Airport</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6 col-sm-6 col-lg-3 single-search-component">
                                                <div class="search-box">
                                                    <div class="text-field">
                                                        <span class="label">Flying to</span>

                                                        <!-- <input value="Dhaka" class="search-text" placeholder="Airport" type="text"> -->
                                                        <select
                                                            class="search-text select2-search-element js-example-responsive"
                                                            name="flight_from" id="">
                                                            <option value="1">DAC, Dhaka International Airport
                                                            </option>
                                                        </select>
                                                        <div class="details">
                                                            <span class="fw-bold search-limit-details">Airport</span>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>


                                            <div class="col-md-6 col-sm-6 col-lg-3 single-search-component">
                                                <div class="search-box">
                                                    <div class="text-field ">
                                                        <span class="label">Select Date</span>

                                                        <input value="Dhaka" class="search-text" type="date">
                                                        <div class="details">
                                                            <span class="fw-600 search-limit-details"><b>2022,</b>
                                                                October</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-6 col-lg-3 single-search-component">
                                                <div class="search-box " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="text-field">
                                                        <span class="label">Passengers and Cabin Class</span>

                                                        <!-- <input value="1 Person" class="search-text" placeholder="Airport" type="text"> -->
                                                        <button type="button" class="btn fw-bold p-0 d-block"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <span class="ticket-total-person">1</span> Person
                                                        </button>
                                                        <div class="details">
                                                            <span
                                                                class="fw-bold search-limit-details class-details">Economy</span>
                                                            Class
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>


                                        <a class="btn fw-bold text-light mt-3 search-flight-btn" href="#">Search
                                            Flight</a>


                                    </div>


                                    <div id="tab_round_trip" class="d-none flight-single-tab container">
                                        <div class="wrap row">


                                            <div class="col-md-6 col-sm-6 col-lg-3 single-search-component">
                                                <div class="search-box ">
                                                    <div class="text-field">
                                                        <span class="label">Flying from</span>

                                                        <!-- <input value="Dhaka" class="search-text" placeholder="Airport" type="text"> -->
                                                        <select class="search-text select2-search-element "
                                                            name="flight_from" id="">
                                                            <option value="1">DAC, Dhaka International Airport
                                                            </option>
                                                        </select>
                                                        <div class="details">
                                                            <span class="fw-bold search-limit-details">Airport</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6 col-sm-6 col-lg-3 single-search-component">
                                                <div class="search-box">
                                                    <div class="text-field">
                                                        <span class="label">Flying to</span>

                                                        <!-- <input value="Dhaka" class="search-text" placeholder="Airport" type="text"> -->
                                                        <select
                                                            class="search-text select2-search-element js-example-responsive"
                                                            name="flight_from" id="">
                                                            <option value="1">DAC, Dhaka International Airport
                                                            </option>
                                                        </select>
                                                        <div class="details">
                                                            <span class="fw-bold search-limit-details">Airport</span>
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>


                                            <div class="col-md-6 col-sm-6 col-lg-4 single-search-component">
                                                <div class="d-flex justify-content-between">
                                                    <div class="search-box">
                                                        <div class="text-field">
                                                            <span class="label">Depart on</span>

                                                            <input value="Dhaka" class="search-text "
                                                                type="date">
                                                            <div class="details">
                                                                <span class="fw-600 search-limit-details"><b>2022,</b>
                                                                    October</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="search-box">
                                                        <div class="text-field ">
                                                            <span class="label">Return on</span>

                                                            <input value="Dhaka" class="search-text "
                                                                type="date">
                                                            <div class="details">
                                                                <span class="fw-600 search-limit-details"><b>2022,</b>
                                                                    October</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>






                                            <div class="col-md-12 col-sm-6 col-lg-2 single-search-component">
                                                <div class="search-box " data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <div class="text-field">
                                                        <span class="label">Passengers and Cabin Class</span>

                                                        <!-- <input value="1 Person" class="search-text" placeholder="Airport" type="text"> -->
                                                        <button type="button" class="btn fw-bold p-0 d-block"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <span class="ticket-total-person">1</span> Person
                                                        </button>
                                                        <div class="details">
                                                            <span
                                                                class="fw-bold search-limit-details class-details">Economy</span>
                                                            Class
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div id="tab_multi_city" class="d-none flight-single-tab container">
                                        <h1>Multi City</h1>
                                    </div>
                                </div>

                                <!-- here ended flight tab content  -->

                            </div>


                            <div id="tab_visa" class="single-tab">

                                <div class="visa-content my-5">

                                    <form class="d-flex flex-column align-items-center">
                                        <h3 class="fw-bold logo-blue-color text-capitalize mb-2">Select Your Country to
                                            get details </h3>
                                        <div class="type d-flex mb-2">
                                            <span class="fw-bold">Visa Type: </span>
                                            <div class="mx-2">
                                                <input disabled type="radio" name="visa_type" id="">
                                                <span>Sticker</span>
                                            </div>
                                            <div class="mx-2">
                                                <input disabled type="radio" name="visa_type" id="">
                                                <span>Visa</span>
                                            </div>
                                            <div class="mx-2">
                                                <input selected type="radio" name="visa_type" id="">
                                                <span>All</span>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <span class="fw-bold">Select Country</span>
                                            <select name="country" class="visa_country_select">
                                                <option value="bangladesh">Bangladesh</option>
                                                <option value="bangladesh">India</option>
                                                <option value="bangladesh">Pakistan</option>
                                                <option value="bangladesh">UK</option>
                                                <option value="bangladesh">USA</option>
                                            </select>
                                        </div>

                                        <a href="/visa-details.html" class="btn btn-warning ">Search Details</a>
                                    </form>


                                </div>
                            </div>
                            <div id="tab_hotel" class="d-none single-tab">
                                <div style="max-height: 500px" class="tab-content d-flex justify-content-center">
                                    <div id="adgshp338609613"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero section ended here  -->

        <!-- here started the features section  -->
        <div class="features def-m-p">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 feature-item">
                        <i class="fa-solid fa-phone"></i>
                        <div class="content">
                            <h4 class="title">24/7 Support</h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Commodi, voluptate.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 feature-item">
                        <i class="fa-solid fa-phone"></i>
                        <div class="content">
                            <h4 class="title">24/7 Support</h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Commodi, voluptate.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 feature-item">
                        <i class="fa-solid fa-phone"></i>
                        <div class="content">
                            <h4 class="title">24/7 Support</h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Commodi, voluptate.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- here started the features section  -->

        <!-- here started the lightening deals section  -->
        <div class="lightening-deals def-m-p">
            <div class="container">
                <h2 class="section-title">Lightening Deals</h2>
                <div class="lightening-carousel owl-carousel owl-theme">
                    <div class="lightening-deals-item">
                        <div class="img">
                            <img src="{{ asset('public/frontend/img/lightening-deal1.jpg') }}" alt="" />
                        </div>
                        <div class="content">
                            <h5 class="title my-3">
                                Breathtaking Kayaking in Reju Khal...
                            </h5>
                            <div class="tour-details mb-1 d-flex">
                                <div class="day me-2">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span>3 Days</span>
                                </div>
                                <div class="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Kathmundu, Dhaka</span>
                                </div>
                            </div>
                            <div class="financial-details">
                                <span> <b>BDT 11000/</b> Person</span>
                            </div>
                        </div>
                    </div>
                    <div class="lightening-deals-item">
                        <div class="img">
                            <img src="{{ asset('public/frontend/img/lightening-deal1.jpg') }}" alt="" />
                        </div>
                        <div class="content">
                            <h5 class="title my-3">
                                Breathtaking Kayaking in Reju Khal...
                            </h5>
                            <div class="tour-details mb-1 d-flex">
                                <div class="day me-2">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span>3 Days</span>
                                </div>
                                <div class="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Kathmundu, Dhaka</span>
                                </div>
                            </div>
                            <div class="financial-details">
                                <span> <b>BDT 11000/</b> Person</span>
                            </div>
                        </div>
                    </div>
                    <div class="lightening-deals-item">
                        <div class="img">
                            <img src="{{ asset('public/frontend/img/lightening-deal1.jpg') }}" alt="" />
                        </div>
                        <div class="content">
                            <h5 class="title my-3">
                                Breathtaking Kayaking in Reju Khal...
                            </h5>
                            <div class="tour-details mb-1 d-flex">
                                <div class="day me-2">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span>3 Days</span>
                                </div>
                                <div class="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Kathmundu, Dhaka</span>
                                </div>
                            </div>
                            <div class="financial-details">
                                <span> <b>BDT 11000/</b> Person</span>
                            </div>
                        </div>
                    </div>
                    <div class="lightening-deals-item">
                        <div class="img">
                            <img src="{{ asset('public/frontend/img/lightening-deal1.jpg') }}" alt="" />
                        </div>
                        <div class="content">
                            <h5 class="title my-3">
                                Breathtaking Kayaking in Reju Khal...
                            </h5>
                            <div class="tour-details mb-1 d-flex">
                                <div class="day me-2">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span>3 Days</span>
                                </div>
                                <div class="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Kathmundu, Dhaka</span>
                                </div>
                            </div>
                            <div class="financial-details">
                                <span> <b>BDT 11000/</b> Person</span>
                            </div>
                        </div>
                    </div>
                    <div class="lightening-deals-item">
                        <div class="img">
                            <img src="{{ asset('public/frontend/img/lightening-deal1.jpg') }}" alt="" />
                        </div>
                        <div class="content">
                            <h5 class="title my-3">
                                Breathtaking Kayaking in Reju Khal...
                            </h5>
                            <div class="tour-details mb-1 d-flex">
                                <div class="day me-2">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span>3 Days</span>
                                </div>
                                <div class="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>Kathmundu, Dhaka</span>
                                </div>
                            </div>
                            <div class="financial-details">
                                <span> <b>BDT 11000/</b> Person</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- here ended the lightening deals section  -->

        <!-- here started the popular package section  -->
        <section class="popular-package def-m-p">
            <div class="container">
                <h2 class="section-title">Packages in Popular Destination</h2>
                <div class="packages">
                    <!-- this is highlighted package  -->
                    <div class="row">
                        <div class="col">
                            <div class="highlighted-package">
                                <img class="highlighted-package-image"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />
                                <div class="package-details">
                                    <div class="d-flex align-items-center quantity">
                                        <i class="fa-solid fa-truck-fast"></i>
                                        <div class="package">43 Packages</div>
                                    </div>
                                    <h3 class="name">Bangkok</h3>
                                    <span class="finance">Starts From BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Listing of all packages -->
                    <div class="row">
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}"
                                    alt="" />

                                <div class="content mt-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="ms-2 small">9 Packages</div>
                                    </div>
                                    <h5 class="my-1">Bangkok</h5>
                                    <span class="text-primary">
                                        <small class="me-1">Starts From</small> BDT 6,600</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- here ended the popular package section  -->

        <!-- here started cheapest flight section  -->
        <section class="cheapest-flight def-m-p">
            <div class="container">
                <h2 class="section-title">
                    Search for cheapest flights in popular route
                </h2>
                <div class="row">
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="flight-item d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-plane"></i>
                            <div class="content mx-4">
                                <h4 class="title">Dhaka - Cox...</h5>
                                    <span class="flight-rate">
                                        From<b class="ms-2">BDT 4,393</b>
                                    </span>
                            </div>
                            <i class="fa-solid fa-greater-than right-arrow"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- here ended cheapest flight section  -->

        <!-- here started the footer section  -->
        <footer>
            <div class="container">
                <div class="row top">


                    <div class="col-md-3 col-6 footer-block">
                        <h5 class="heading">Company</h5>
                        <div class="links mt-3">
                            <a class="footer-link mb-2" href="#">About Us</a>
                        </div>
                    </div>


                    <div class="col-md-3 col-6 footer-block">
                        <h5 class="heading">Explore</h5>
                        <div class="links mt-3">
                            <a class="footer-link mb-2" href="#">Spin to Win</a>
                            <a class="footer-link mb-2" href="#">Leader Board</a>
                            <a class="footer-link mb-2" href="#">Hotel Sitemap</a>
                        </div>
                    </div>


                    <div class="col-md-3 col-6 footer-block">
                        <h5 class="heading">Help</h5>
                        <div class="links mt-3">
                            <a class="footer-link mb-2" href="#">FAQ</a>
                            <a class="footer-link mb-2" href="#">Support Center</a>
                            <a class="footer-link mb-2" href="#">Payment Security</a>
                            <a class="footer-link mb-2" href="#">Privacy Policy</a>
                            <a class="footer-link mb-2" href="#">EMI</a>
                        </div>
                    </div>


                    <div class="col-md-3 col-6 footer-block">
                        <h5 class="heading">Terms & Condition</h5>
                        <div class="links mt-3">
                            <a class="footer-link mb-2" href="#">General</a>
                        </div>
                    </div>

                </div>


                <div class="row bottom">

                </div>
            </div>
        </footer>
        <!-- here ended the footer section  -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/caurosel.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('public/frontend/js/select2_usage.js') }}"></script>
    <script src="{{ asset('public/frontend/js/function.js') }}"></script>
    <script src="{{ asset('public/frontend/js/flight_book.js') }}"></script>
    <script type="module" src="{{asset('public/frontend/js/script.js')}}"></script>


    <!-- <script type="text/javascript" src="https://cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"></script>
  <script type="text/javascript">
      var stg = new Object();
      stg.crt = "1635949346660";
      stg.version = "1.04";
      stg.id = stg.name = "adgshp338609613";
      stg.width = "320px";
      stg.height = "420px";
      stg.ReferenceKey = "oGln8zMa2axkTYeWLS2xBQ==";
      stg.Layout = "SquareCalendar";
      stg.Language = "en-us";
      stg.Cid = "1780729";
      stg.DestinationName = "";
      stg.OverideConf = false;
      new AgdSherpa(stg).initialize();
  </script> -->


    <script type="text/javascript" src="//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"></script>
    <script type="text/javascript">
        var stg = new Object();
        stg.crt = "86666600997";
        stg.version = "1.04";
        stg.id = stg.name = "adgshp338609613";
        stg.width = "320px";
        stg.height = "430px";
        stg.ReferenceKey = "oGln8zMa2axkTYeWLS2xBQ==";
        stg.Layout = "SquareCalendar";
        stg.Language = "en-us";
        stg.Cid = "1780729";
        stg.DestinationName = "";
        stg.OverideConf = true;
        new AgdSherpa(stg).initialize();
    </script>

    <style>
        #adgshp338609613 {
            height: 430px !importan;
        }
    </style>
</body>

</html>
