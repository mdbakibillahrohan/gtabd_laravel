@extends('frontend.layouts.frontend_layouts')


@section('frontend-section')
    <div class="tour-packages">
        <div class="container">
            <h2 class="text-center mt-5">List of Packages</h2>
            <div class="d-flex justify-content-end">
                <form class="d-flex align-items-center" method="GET">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Search Package</label>
                        <input value="{{ $search_value }}" type="text" name="search_value" class="form-control"
                            id="exampleFormControlInput1" placeholder="Search....">
                    </div>
                    <button class="btn mt-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

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
            {{ $Packages->links() }}
        </div>
    </div>


    <style>
        .tour-packages {
            margin-top: 120px;
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

        .single-package-image {
            height: 300px;
        }
    </style>
@endsection
