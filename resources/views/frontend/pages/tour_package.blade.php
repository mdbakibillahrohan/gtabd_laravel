@extends('frontend.layouts.frontend_layouts')


@section('frontend-section')
    <div class="tour-packages">
        <div class="container">
            <h2 class="text-center">List of Packages</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="search">
                        <div class="input-group mb-3">
                            <form method="GET" action="#">
                                <div class="mb-3 d-flex">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Search....">
                                    <button style="background-color: #0B7CC1" type="submit"
                                        class="btn btn-secondary ms-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach ($Packages as $Package)
                            <div class="col-md-4 my-3">
                                <a href="{{ route('package-details', $Package->package_slug) }}">
                                    <div class="single-package-item">
                                        <img class="single-package-image img-fluid rounded-3"
                                            src="{{ asset('storage/app/' . $Package->package_image) }}" alt="" />

                                        <div class="content mt-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-star"></i>
                                                <div class="ms-2 small">9 Packages</div>
                                            </div>
                                            <h5 class="my-1">{{ $Package->country->country_name }}</h5>
                                            <span class="text-primary">
                                                <small class="me-1">Starts From</small> BDT
                                                {{ $Package->package_price_single }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{ $Packages->links() }}
                </div>
            </div>
        </div>
    </div>


    <style>
        .tour-packages {
            margin-top: 100px;
        }

        a {
            text-decoration: none;
            color: #000000;
        }

        a:hover {
            color: #000000;
        }

        .pagination {
            justify-content: center;
        }
    </style>
@endsection
