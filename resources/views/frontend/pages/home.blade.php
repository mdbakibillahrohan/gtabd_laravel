@extends('frontend.layouts.frontend_layouts')
@section('frontend-section')
    @if ($HomeElements['hero-section'] == 1)
        <!-- hero section started here  -->
        <div id="hero" class="hero">
            {{-- <div class="bg-img">
                <img src="{{ asset('public/frontend/img/banner.webp') }}" alt="" />
            </div> --}}
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
                            <div for="hotel" class="tab-btn tab-active">
                                <i class="fa-solid fa-hotel"></i>
                                Hotels
                            </div>
                            <div for="visa" class="tab-btn ">
                                <i class="fa-solid fa-globe"></i>
                                Visa
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



                            <div id="tab_hotel" class="single-tab">
                                <div class="tab-content d-flex justify-content-center">
                                    <div id="adgshp-1646063954"></div>

                                </div>
                            </div>

                            <div id="tab_visa" class="d-none single-tab">

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero section ended here  -->
    @endif


    @if ($HomeElements['icon-section'] == 1)
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
    @endif



    @if ($HomeElements['top-hotel'] == 1)
        <!-- here started the top hotels section -->
        <div class="lightening-deals def-m-p">
            <div class="container">
                <h2 class="section-title">Top Hotels</h2>
                <div class="lightening-carousel owl-carousel owl-theme">
                    @foreach ($TopHotels as $Hotel)
                        <a href="{{ route('hotel-details', $Hotel->hotel_slug) }}">
                            <div class="lightening-deals-item">
                                <div class="img">
                                    <img src="{{ asset('storage/app/' . $Hotel->hotel_image) }}" alt="" />
                                </div>
                                <div class="content">
                                    <h5 class="title my-3">
                                        {{ $Hotel->hotel_name }}
                                    </h5>
                                    <div class="tour-details mb-1 d-flex">

                                        <div class="address">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>{{ $Hotel->hotel_city_name }}, {{ $Hotel->country->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- here ended the lightening deals section  -->
    @endif






    @if ($HomeElements['lightening-deals'] == 1)
        <!-- here started the lightening deals section -->
        <div class="lightening-deals def-m-p">
            <div class="container">
                <h2 class="section-title">Lightening Deals</h2>
                <div class="lightening-carousel owl-carousel owl-theme">
                    @foreach ($LighteningPackages as $Light)
                        <a href="{{ route('package-details', $Light->package_slug) }}">
                            <div class="lightening-deals-item">
                                <div class="img">
                                    <img src="{{ asset('storage/app/' . $Light->package_image) }}" alt="" />
                                </div>
                                <div class="content">
                                    <h5 class="title my-3">
                                        {{ $Light->package_title }}
                                    </h5>
                                    <div class="tour-details mb-1 d-flex">
                                        <div class="day me-2">
                                            <i class="fa-solid fa-calendar"></i>
                                            <span>{{ $Light->package_duration }} Days</span>
                                        </div>
                                        <div class="address">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>{{ $Light->package_city_name }}, {{ $Light->country->name }}</span>
                                        </div>
                                    </div>
                                    <div class="financial-details">
                                        <span> <b>BDT {{ $Light->package_price_single }}/</b> Person</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- here ended the lightening deals section  -->
    @endif




    @if ($HomeElements['packages'] == 1)
        <!-- here started the popular package section -->
        <section class="popular-package def-m-p">
            <div class="container">
                <h2 class="section-title">Packages in Popular Destination</h2>
                <div class="packages">
                    <!-- this is highlighted package  -->
                    <div class="row">
                        <div class="col">
                            <a
                                href="{{ $FeaturedPackage == null ? '#' : route('package-details', $FeaturedPackage->package_slug) }}">
                                <div class="highlighted-package">
                                    @if ($FeaturedPackage != null)
                                        <img class="highlighted-package-image"
                                            src="{{ asset('storage/app/' . $FeaturedPackage->package_image) }}"
                                            alt="" />
                                    @else
                                        <img class="highlighted-package-image" src="" alt="" />
                                    @endif
                                    <div class="package-details">
                                        <div class="d-flex align-items-center quantity">
                                            <i class="fa-solid fa-truck-fast"></i>
                                            <div class="package">43 Packages</div>
                                        </div>
                                        <h3 class="name">
                                            {{ $FeaturedPackage == null ? '' : $FeaturedPackage->package_title }}
                                        </h3>
                                        <span class="finance">Starts From BDT
                                            {{ $FeaturedPackage == null ? '' : $FeaturedPackage->package_price_single }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Listing of all packages -->
                    <div class="row">
                        @foreach ($Packages as $Package)
                            <div class="col-md-3 my-3">
                                <a href="{{ route('package-details', $Package->package_slug) }}">
                                    <div class="single-package-item">
                                        <img class="single-package-image img-fluid rounded-3"
                                            src="{{ asset('storage/app/' . $Package->package_image) }}" alt="" />

                                        <div class="content mt-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-star"></i>
                                                <div class="ms-2 small">9 Packages</div>
                                            </div>
                                            <h5 class="my-1">{{ $Package->country->name }}</h5>
                                            <span class="text-primary">
                                                <small class="me-1">Starts From</small> BDT
                                                {{ $Package->package_price_single }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <!-- here ended the popular package section  -->
    @endif

    @if ($HomeElements['cheapest-flight'] == 1)
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
    @endif


    <style>
        a {
            text-decoration: none;
            color: #000000;
        }

        a:hover {
            text-decoration: none;
            color: #000000;
        }



        #tab_hotel {
            background-color: #0B7CC1;
            padding: 60px 0px;
            margin: 0;
            border-radius: 20px;
        }

        @media screen and (max-width: 480px) {
            #tab_hotel {
                margin: 0;
                border-radius: 20px;
                background-color: #fff;
                padding: 0px;
            }
        }
    </style>

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
                    `<option value="${countryForSelect[a].id}" > ${countryForSelect[a].name} </option>`;
                element.innerHTML = elementData;
            }

        }
        integrateDataWithSelect();
    </script>

    <script type="text/javascript" src="//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"></script>
    <script type="text/javascript">
        if (window.screen.width <= 480) {
            var stg = new Object();
            stg.crt = "86666600997";
            stg.version = "1.04";
            // stg.id = stg.name = "adgshp338609613";
            stg.id = stg.name = "adgshp-1646063954";
            stg.width = "320px";
            stg.height = "430px";
            stg.ReferenceKey = "oGln8zMa2axkTYeWLS2xBQ==";
            stg.Layout = "SquareCalendar";
            stg.Language = "en-us";
            stg.Cid = "1780729";
            stg.DestinationName = "";
            stg.OverideConf = true;
            new AgdSherpa(stg).initialize();

            setTimeout(() => {
                let agoda = document.getElementById("adgshp-1646063954");
                agoda.style.height = "430px";

            }, 1000);
        } else {
            var stg = new Object();
            stg.crt = "4142827651311";
            stg.version = "1.04";
            stg.id = stg.name = "adgshp-1646063954";
            stg.width = "1050px";
            stg.height = "298px";
            stg.ReferenceKey = "gPF+T6ENUufZKtS6Pw1KEQ==";
            stg.Layout = "Oneline";
            stg.Language = "en-us";
            stg.Cid = "1780729";
            stg.DestinationName = "";
            stg.OverideConf = false;
            new AgdSherpa(stg).initialize();
        }
    </script>


    <script type="text/javascript"></script>

    {{-- <script type="text/javascript" src="//cdn0.agoda.net/images/sherpa/js/sherpa_init1_08.min.js"></script>
    <script type="text/javascript">

    </script> --}}
@endsection
