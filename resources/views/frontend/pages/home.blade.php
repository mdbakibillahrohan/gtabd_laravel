@extends('frontend.layouts.frontend_layouts')
@section('frontend-section')
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
                                                    <select class="search-text select2-search-element " name="flight_from"
                                                        id="">
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
                                                    <select class="search-text select2-search-element js-example-responsive"
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
                                            <div class="search-box " data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                                    <select class="search-text select2-search-element " name="flight_from"
                                                        id="">
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

                                                        <input value="Dhaka" class="search-text " type="date">
                                                        <div class="details">
                                                            <span class="fw-600 search-limit-details"><b>2022,</b>
                                                                October</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="search-box">
                                                    <div class="text-field ">
                                                        <span class="label">Return on</span>

                                                        <input value="Dhaka" class="search-text " type="date">
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

                                <form id="visa-search-form" action="{{ route('redirectToVisaSlug') }}" method="get"
                                    class="d-flex flex-column align-items-center">
                                    <h3 class="fw-bold logo-blue-color text-capitalize mb-2">Select Your Country to
                                        get details </h3>
                                    <div class="type d-flex mb-2">
                                        <span class="fw-bold">Visa Type: </span>
                                        <div class="mx-2">
                                            <input value="sticker" disabled type="radio" name="visa_type"
                                                id="">
                                            <span>Sticker</span>
                                        </div>
                                        <div class="mx-2">
                                            <input value="visa" disabled type="radio" name="visa_type"
                                                id="">
                                            <span>Visa</span>
                                        </div>
                                        <div class="mx-2">
                                            <input value="all" selected="true" type="radio" name="visa_type"
                                                id="">
                                            <span>All</span>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <span class="fw-bold">Select Country</span>
                                        <select id="country_select_for_visa" name="country_id"
                                            class="visa_country_select">
                                            <option></option>



                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-warning ">Search Details</button>
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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />
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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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
                                src="{{ asset('public/frontend/img/highlighted-package-img.jpg') }}" alt="" />

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


    <script>
        async function getVisaCountry(server) {
            let options = {
                'method': 'GET'
            }
            let country_visa = await fetch(server + '/country_visa', options);
            return await country_visa.json();
        }

        async function integrateDataWithSelect() {
            let server = '{{ url('/') }}'
            let country_visa = await getVisaCountry(server);
            let Countries = country_visa.Countries;
            let Visas = country_visa.Visas;
            let countryForSelect = [];
            for (let n = 0; n < Countries.length; n++) {
                for (let a = 0; a < Visas.length; a++) {
                    if (Visas[a].country_id == Countries[n].id) {
                        countryForSelect.push(Countries[n]);
                        break;
                    }
                }
            }
            let element = document.getElementById('country_select_for_visa');
            let elementData = '';
            for (let a = 0; a < countryForSelect.length; a++) {
                elementData = elementData +
                    `<option value="${countryForSelect[a].id}" > ${countryForSelect[a].country_name} </option>`;
                element.innerHTML = elementData;
            }

        }
        integrateDataWithSelect();
    </script>
@endsection
