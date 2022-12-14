@extends('frontend.layouts.frontend_layouts')

@section('frontend-section')
    <div class="visa-feature-image">
        <img src="{{ asset('storage/app/' . $Visa->image) }}" class="visa-image" alt="">

        <h1 class="title logo-yellow-color">{{ $Visa->country->name }}</h1>
    </div>
    <!-- here started the visa details section  -->
    <div class="visa-details container">



        <!-- the search options  -->
        <div class="my-5">
            <form id="visa-search-form" action="{{ route('redirectToVisaSlug') }}" method="get"
                class="d-flex flex-column align-items-center">
                <h3 class="fw-bold logo-blue-color text-capitalize mb-2">
                    Search about your visa
                </h3>
                <div class="type d-flex mb-2">
                    <span class="fw-bold">Visa Type: </span>
                    <div class="mx-2">
                        <input disabled type="radio" name="visa_type" id="" />
                        <span>Sticker</span>
                    </div>
                    <div class="mx-2">
                        <input disabled type="radio" name="visa_type" id="" />
                        <span>Visa</span>
                    </div>
                    <div class="mx-2">
                        <input selected type="radio" name="visa_type" id="" />
                        <span>All</span>
                    </div>
                </div>

                <div class="mb-2">
                    <span class="fw-bold">Select Country</span>
                    <select id="country_select_for_visa" name="country_id" class="visa_country_select">

                    </select>
                </div>

                <button type="submit" class="btn btn-warning">Search Details</button>
            </form>
        </div>
        <!-- the search options  -->
        <div class="row">
            <div class="col-lg-9">
                <div class="visa-text border rounded mb-5 p-5">
                    <div class="title logo-blue-color text-center my-3">
                        <h1>{{ $Visa->country->name }} Visa Service From Bangladesh</h1>
                    </div>
                    <div class="box">
                        <?php echo $Visa->description; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-section text-center">
                    <h3>Need Assistance?</h3>
                    <h5>Please Contact</h5>
                    <div class="border rounded">
                        <p>Whatsapp/Viber/Imo</p>
                        <div>+88 01912-819770</div>
                        <div>+88 01912-819770</div>
                        <div>+88 01912-819770</div>
                        <div>+88 01912-819770</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- here ended the visa details section  -->



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
@endsection
