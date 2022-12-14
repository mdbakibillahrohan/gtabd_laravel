@extends('frontend.layouts.frontend_layouts')

@section('frontend-section')
    <div class="hotel-details">
        <div class="img container">
            <img class="img-fluid" src="{{ asset('storage/app/' . $Hotel->hotel_image) }}" alt="">

        </div>

        <div class="container my-5">
            <div class="row main-content">
                <div class="col">
                    <h1 class="title">{{ $Hotel->hotel_name }}</h1>
                    <div class="location my-3">
                        <i class="fa-solid fa-location-dot"></i>
                        <span class="ms-2">{{ $Hotel->hotel_city_name }},
                            {{ $Hotel->country->name }}</span>
                    </div>

                </div>

                <hr>

                <h3 class="text-center my-3">Hotel Description </h3>
                <div class="border p-5">
                    <?php
                    echo $Hotel->hotel_description;
                    ?>
                </div>
            </div>
        </div>

    </div>


    <style>
        .hotel-details {
            margin-top: 100px;
        }
    </style>
@endsection
