@extends('frontend.layouts.frontend_layouts')

@section('frontend-section')
    <div class="packages-details">
        <div class="img container">
            <img class="img-fluid" src="{{ asset('storage/app/' . $Package->package_image) }}" alt="">

        </div>

        <div class="container my-5">
            <div class="row main-content">
                <div class="col-md-8">
                    <h1 class="title">{{ $Package->package_title }}</h1>
                    <div class="location my-3">
                        <i class="fa-solid fa-location-dot"></i>
                        <span class="ms-2">{{ $Package->package_city_name }},
                            {{ $Package->country->country_name }}</span>
                    </div>
                    <div class="duration my-3">
                        <i class="fa-solid fa-calendar"></i>
                        <span class="ms-2">{{ $Package->package_duration }} Days</span>
                    </div>
                    <hr class="mt-5">
                    <h3 class="text-center">Package Details</h3>
                    <div class="details">

                        {{-- itinerary section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#itinerary" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Itinerary</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse show" id="itinerary">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_itinerary;
                                ?>
                            </div>
                        </div>
                        {{-- itinerary section ended here  --}}



                        {{-- Pick up note section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#pickupnote" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Pickup Note</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="pickupnote">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_pick_up_note;
                                ?>
                            </div>
                        </div>
                        {{-- Pick up note section ended here  --}}



                        {{-- Cancellation section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#cancellation" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Cancellation</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="cancellation">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_cancellation;
                                ?>
                            </div>
                        </div>
                        {{-- Cancellation section ended here  --}}



                        {{-- Tax and rates section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#taxandrates" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Tax and Rates</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="taxandrates">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_tax_and_rates;
                                ?>
                            </div>
                        </div>
                        {{-- Tex and rates section ended here  --}}



                        {{-- Included services section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#includedservices" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Included Services</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="includedservices">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_included_services;
                                ?>
                            </div>
                        </div>
                        {{-- Included services section ended here  --}}


                        {{-- Excluded services section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#excludedservices" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Excluded Services</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="excludedservices">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_excluded_services;
                                ?>
                            </div>
                        </div>
                        {{-- Excluded services section ended here  --}}



                        {{-- Package Highlights services section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#highlights" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>Package Highlishts</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="highlights">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_highlights;
                                ?>
                            </div>
                        </div>
                        {{-- Package Highlights section ended here  --}}




                        {{-- Package General Condition section started here  --}}
                        <a class="collapse-btn" data-bs-toggle="collapse" href="#generalcondition" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span>General Condition</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </a>


                        <div class="collapse" id="generalcondition">
                            <div class="my-4 every-single-details">
                                <?php
                                echo $Package->package_general_condition;
                                ?>
                            </div>
                        </div>
                        {{-- Package General Condition section ended here  --}}



                    </div>
                </div>

                <div class="col-md-4">
                    <h2 class="text-center fw-bold my-5">Pricing and Validity</h2>

                    <div class="border boerder-rounded px-3 py-5">
                        <div class="d-flex justify-content-between">
                            <div class="valid_from">
                                <div class="validity-header-text">Valid From</div>
                                <div class="validity-date">
                                    @php
                                        $ValidFrom = explode('-', $Package->package_valid_from);
                                    @endphp
                                    <span class="validity-month-exact-date">{{ $ValidFrom[2] }}</span>
                                    <span
                                        class="validity-month-year">{{ date('F', mktime(0, 0, 0, $ValidFrom[1], 1)) }}'{{ $ValidFrom[0] }}</span>
                                </div>
                            </div>
                            <div class="valid_till">
                                <div class="validity-header-text">Valid From</div>
                                <div class="validity-date">
                                    @php
                                        $ValidTill = explode('-', $Package->package_valid_till);
                                    @endphp
                                    <span class="validity-month-exact-date">{{ $ValidTill[2] }}</span>
                                    <span
                                        class="validity-month-year">{{ date('F', mktime(0, 0, 0, $ValidTill[1], 1)) }}'{{ $ValidTill[0] }}</span>
                                </div>
                            </div>

                            <div class="departs">
                                <div class="validity-header-text">Departs</div>
                                <span>{{ $Package->departs }}</span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <small class="d-block">Price Per Person Single:</small>
                                <span class="fw-bold">BDT 14000</span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <small class="d-block">Price Per Person Double:</small>
                                <span class="fw-bold">BDT 14000</span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <small class="d-block">Price Per Person Tripple:</small>
                                <span class="fw-bold">BDT 14000</span>
                            </div>
                        </div>

                        <div class="mt-3 ">Price includes VAT & Tax</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        .packages-details {
            margin-top: 100px;
        }

        .img {
            width: 100%;
            overflow: hidden;
        }

        .img img {
            width: 100%;
            min-width: 600px;
            height: 70vh;
        }

        .packages-details .title {
            font-size: 45px;
            font-weight: bold;
        }

        .location {
            color: grey;
        }

        .duration {
            color: grey;
        }

        .collapse-btn {
            width: 100%;
            display: flex;
            justify-content: space-between;
            text-decoration: none;
            color: #000000;
            padding: 10px 5px;
            box-shadow: 0px 2px 0px -1px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 0px 2px 0px -1px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 0px 2px 0px -1px rgba(0, 0, 0, 0.5);
        }

        .collapse-btn:hover {
            color: #000000;
        }

        .every-single-details {
            border-left: 1px solid black;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding: 10px;
        }

        .validity-date {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .validity-month-exact-date {
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
        }

        .validity-header-text {
            font-size: 13px
        }

        .validity-month-year {
            font-size: 14px
        }
    </style>
@endsection
