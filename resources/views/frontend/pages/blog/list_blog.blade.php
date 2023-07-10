@extends('frontend.layouts.frontend_layouts')

@section('frontend-section')
    <div class="tour-packages">
        <div class="container">
            <h2 class="text-center mt-5">List of Blogs</h2>
            <div class="d-flex justify-content-end">
                <form class="d-flex align-items-center" method="GET">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Search Blog</label>
                        <input value="{{ $search_value }}" type="text" name="search_value" class="form-control"
                            id="exampleFormControlInput1" placeholder="Search....">
                    </div>
                    <button class="btn mt-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <div class="row">
                @foreach ($Blogs as $Blog)
                    <div class="col-md-3 my-3">
                        <a href="{{ route('blog-details', $Blog->slug) }}">
                            <div class="single-package-item">
                                <img class="single-package-image img-fluid rounded-3"
                                    src="{{ asset('storage/app/' . $Blog->image) }}" alt="" />

                                <div class="content mt-3">
                                    <h5 class="blog-title">{{$Blog->title}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{ $Blogs->links() }}
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
            width: 100%;
        }
    </style>
    <script>
        textLimit("blog-title", 50)
    </script>
@endsection
