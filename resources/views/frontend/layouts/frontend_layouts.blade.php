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
    <script src="{{ asset('public/frontend/js/function.js') }}"></script>
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
                            <a class="nav-link" href="{{ url('/') }}">Flight</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hotel-list') }}">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('packages-list') }}">Tour Packages</a>
                        </li>

                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Visa
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog-list') }}">Blog</a>

                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link">News and Media</a>
                        </li> --}}

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

        @yield('frontend-section')
        <!-- here started the footer section  -->
        <footer>
            <div class="container">
                <div class="row top">


                    <div class="col-md-3 col-6 footer-block">
                        <h5 class="heading">GLOBAL TRAVEL ADVANTAGE</h5>
                        <div>
                            <span class="fw-bold">Address: </span>
                            <p>Zaman Tower, Level-12, Office 1202, 37/2 Purana Paltan (Culvert Road) Dhaka-1000</p>
                        </div>
                        <div>
                            <span class="fw-bold">Contact Number: </span>
                            <p>+880 1704170300</p>
                        </div>
                        <div>
                            <span class="fw-bold">Email Address: </span>
                            <p>info@gtabd.com</p>
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




</body>

</html>
