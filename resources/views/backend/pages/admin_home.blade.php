@extends('backend.layouts.backend_layout')
@section('backend_page_content')
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-md-3 ">
                <div class="border text-center py-3 bg-success h-12 rounded">
                    <h3 class="text-light">{{ $VisaCount }}</h3>
                    <span class="fw-bold text-light">Added Visa Services</span>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="border text-center py-3 bg-success h-12 rounded">
                    <h3 class="text-light">{{ $CountryCount }}</h3>
                    <span class="fw-bold text-light">Added Country</span>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="border text-center py-3 bg-success h-12 rounded">
                    <h3 class="text-light">{{ $VisaCount }}</h3>
                    <span class="fw-bold text-light">Visa Services</span>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="border text-center py-3 bg-success h-12 rounded">
                    <h3 class="text-light">{{ $VisaCount }}</h3>
                    <span class="fw-bold text-light">Visa Services</span>
                </div>
            </div>
        </div>
    </div>
@endsection
