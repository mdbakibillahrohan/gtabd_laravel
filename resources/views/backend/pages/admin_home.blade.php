@extends('backend.layouts.backend_layout')
@section('backend_page_content')
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-3 ">
                <a href="{{ route('visa-index') }}">
                    <div class="border text-center py-3 bg-success h-12 rounded">
                        <h3 class="text-light">{{ $VisaCount }}</h3>
                        <span class="fw-bold text-light">Added Visa Services</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ">
                <a href="{{ route('countries') }}">
                    <div class="border text-center py-3 bg-success h-12 rounded">
                        <h3 class="text-light">{{ $CountryCount }}</h3>
                        <span class="fw-bold text-light">Added Country</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ">
                <a href="{{ route('packages.list') }}">
                    <div class="border text-center py-3 bg-success h-12 rounded">
                        <h3 class="text-light">{{ $PackagesCount }}</h3>
                        <span class="fw-bold text-light">Added Packages</span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ">
                <a href="{{ route('hotels.list') }}">
                    <div class="border text-center py-3 bg-success h-12 rounded">
                        <h3 class="text-light">{{ $HotelsCount }}</h3>
                        <span class="fw-bold text-light">Added Hotels</span>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <style>
        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
@endsection
