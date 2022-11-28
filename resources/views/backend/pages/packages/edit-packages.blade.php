@extends('backend.layouts.backend_layout')

@section('backend_page_content')
    <div class="container my-5">
        <h3>Edit Package</h3>
        <form enctype="multipart/form-data" action="{{ route('packages.update', $Package->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="feature image">Feature Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="feature_image" class="custom-file-input" id="image-choose"
                            aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="image-choose">Choose file</label>
                    </div>

                </div>

                @error('feature_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input value="{{ $Package->package_title }}" type="text" name="title" class="form-control"
                    id="title" aria-describedby="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input value="{{ $Package->package_slug }}" type="text" name="slug" class="form-control"
                    id="slug" aria-describedby="slug">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Select Country</label>
                <select name="country_id" id="country_select" class="form-select" aria-label="Default select example">
                    @foreach ($Countries as $Country)
                        <option {{ $Package->country_id == $Country->id ? 'selected' : '' }} value="{{ $Country->id }}">
                            {{ $Country->country_name }}</option>
                    @endforeach

                </select>
                @error('country_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="city_name">City Name</label>
                <input value="{{ $Package->package_city_name }}" type="text" name="city_name" class="form-control"
                    id="city_name" aria-describedby="city_name">
                @error('city_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="duration">Package Duration in Days</label>
                <input value="{{ $Package->package_duration }}" placeholder="Ex: 1, 2, 3" type="number" name="duration"
                    class="form-control" id="duration" aria-describedby="duration">
                @error('duration')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <hr>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="featured" {{ $Package->is_featured == 1 ? 'checked' : '' }}
                    type="checkbox" id="featured" value="yes">
                <label class="form-check-label" for="featured">Make This Package Featured</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" {{ $Package->is_lightening == 1 ? 'checked' : '' }} name="lightening"
                    type="checkbox" id="lightening" value="yes">
                <label class="form-check-label" for="lightening">Make This Package Lightening</label>
            </div>
            <hr>



            {{-- packages validity section started from here  --}}
            <div class="mt-5">
                <hr>
                <h4 class="text-center">Packages Validity</h4>
                <hr>
            </div>


            <div class="form-group mb-3">
                <label for="valid_from">Valid From</label>
                <input value="{{ $Package->package_valid_from }}" type="date" name="valid_from" class="form-control"
                    id="valid_from" aria-describedby="valid_from">
                @error('valid_from')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="valid_till">Valid Till</label>
                <input value="{{ $Package->package_valid_till }}" type="date" name="valid_till" class="form-control"
                    id="valid_from" aria-describedby="valid_till">
                @error('valid_till')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="valid_till">Departs</label>
                <input value="{{ $Package->departs }}" type="text" name="departs" class="form-control"
                    id="departs" aria-describedby="departs">
                @error('departs')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- packages validity section ended here  --}}


            {{-- packages pricing section started from here  --}}
            <div class="mt-5">
                <hr>
                <h4 class="text-center">Packages Pricing</h4>
                <hr>
            </div>

            <div class="form-group mb-3">
                <label for="price_single">Price Per Person Single</label>
                <input value="{{ $Package->package_price_single == null ? '' : $Package->package_price_single }}"
                    type="text" name="price_single" class="form-control" id="price_single"
                    aria-describedby="price_single">
                @error('price_single')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="price_double">Price Per Person Double</label>
                <input value="{{ $Package->package_price_double == null ? '' : $Package->package_price_double }}"
                    type="text" name="price_double" class="form-control" id="price_double"
                    aria-describedby="price_double">
                @error('price_double')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="price_tripple">Price Per Person Tripple</label>
                <input value="{{ $Package->package_price_tripple == null ? '' : $Package->package_price_tripple }}"
                    type="text" name="price_tripple" class="form-control" id="price_tripple"
                    aria-describedby="price_tripple">
                @error('price_multiple')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {{-- packages pricing section ended here  --}}



            {{-- Package details section are here  --}}
            <div class="mt-5">
                <hr>
                <h4 class="text-center">Packages Details</h4>
                <hr>
            </div>

            {{-- here started the collapsing section  --}}


            {{-- Itinerary section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#itineary" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <span>Itinerary</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="itineary">
                <div class="mb-3">
                    <textarea class="form-control" name="itinerary" id="editor_itineary" rows="3">{{ $Package->package_itinerary == null ? '' : $Package->package_itinerary }}</textarea>
                    @error('itinerary')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Itinerary section ended --}}




            {{-- Pick up note section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#pickupnote" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <span>Pick Up note</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="pickupnote">
                <div class="mb-3">
                    <textarea class="form-control" name="pick_up_note" id="editor_pickupnote" rows="3">{{ $Package->package_pick_up_note == null ? '' : $Package->package_pick_up_note }}</textarea>
                    @error('pick_up_note')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Pick up section ended --}}





            {{-- Cancellation policy section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#cancellation" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <span>Cancellation</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="cancellation">
                <div class="mb-3">
                    <textarea name="cancellation" class="form-control" id="editor_cancellation" rows="3">{{ $Package->package_cancellation == null ? '' : $Package->package_cancellation }}</textarea>
                    @error('cancellation')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Cancellation section ended --}}


            {{-- Tax and rates section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#tax" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <span>Tax and Rates</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="tax">
                <div class="mb-3">
                    <textarea name="tax_and_rates" class="form-control" id="editor_tax" rows="3">{{ $Package->package_tax_and_rates == null ? '' : $Package->package_tax_and_rates }}</textarea>
                    @error('tax_and_rates')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Tax and rates section ended --}}


            {{-- Included Services section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#includedservices" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <span>Included Services</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="includedservices">
                <div class="mb-3">
                    <textarea name="included_services" class="form-control" id="editor_includedservices" rows="3">{{ $Package->package_included_services == null ? '' : $Package->package_included_services }}</textarea>
                    @error('included_services')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Included services section ended --}}





            {{-- Excluded services section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#excludedservices" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <span>Excluded Services</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="excludedservices">
                <div class="mb-3">
                    <textarea name="excluded_services" class="form-control" id="editor_exclusiveservices" rows="3">{{ $Package->package_excluded_services == null ? '' : $Package->package_excluded_services }}</textarea>
                    @error('excluded_services')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Excluded services section ended --}}








            {{-- Highlights section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#highlights" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <span>Highlights</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="highlights">
                <div class="mb-3">
                    <textarea name="highlights" class="form-control" id="editor_highlights" rows="3">{{ $Package->package_highlights == null ? '' : $Package->package_highlights }}</textarea>
                    @error('highlights')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Highlight section ended --}}








            {{-- General Condition section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#generalcondition" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                <span>General Condition</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="generalcondition">
                <div class="mb-3">
                    <textarea name="general_condition" class="form-control" id="editor_generalcondition" rows="3">{{ $Package->package_general_condition == null ? '' : $Package->package_general_condition }}</textarea>
                    @error('general_condition')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- General Condition section ended --}}








            {{-- Equated Monthly Installment section started --}}
            <a class="collapse-link" data-toggle="collapse" href="#emisection" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                <span>Equated Monthly Installement from Global Travel Advantage</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="collapse" id="emisection">
                <div class="mb-3">
                    <textarea name="emi" class="form-control" id="editor_emisection" rows="3">{{ $Package->package_emi == null ? '' : $Package->package_emi }}</textarea>
                    @error('emi')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- Equated Monthly Installment section ended --}}







            {{-- here ended the collapsing section  --}}






            <div class="text-center my-4">
                <button type="submit" class="btn btn-primary">Update Package</button>
            </div>
        </form>
    </div>
@endsection

@section('backend-style')
    <style>
        .collapse-link {
            text-decoration: none;
            color: #000000;
            width: 100%;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid black;
            padding: 10px 0px;
            margin: 10px 0;
        }

        .collapse-link:hover {
            text-decoration: none;
            color: #000000;
        }
    </style>
@endsection

@section('backend_script')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('editor_itineary');
            CKEDITOR.replace('editor_pickupnote');
            CKEDITOR.replace('editor_cancellation');
            CKEDITOR.replace('editor_tax');
            CKEDITOR.replace('editor_includedservices');
            CKEDITOR.replace('editor_exclusiveservices');
            CKEDITOR.replace('editor_highlights');
            CKEDITOR.replace('editor_generalcondition');
            CKEDITOR.replace('editor_emisection');

            $("#country_select").select2({
                placeholder: "Select Country",
                width: 300
            });


            $('#image-choose').on('change', function() {
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        })
    </script>
@endsection
