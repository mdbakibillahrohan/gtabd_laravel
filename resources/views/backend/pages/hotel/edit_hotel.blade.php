@extends('backend.layouts.backend_layout')


@section('backend_page_content')
    <div class="container my-5">
        <h3>Edit Hotel</h3>
        <form enctype="multipart/form-data" action="{{ route('hotels.update', $Hotel->id) }}" method="POST">
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
                <label for="title">Hotel Name</label>
                <input value="{{ $Hotel->hotel_name }}" type="text" name="hotel_name" class="form-control" id="title"
                    aria-describedby="title">
                @error('hotel_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input value="{{ $Hotel->hotel_slug }}" type="text" name="hotel_slug" class="form-control" id="slug"
                    aria-describedby="slug">
                @error('hotel_slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Select Country</label>
                <select name="country_id" id="country_select" class="form-select" aria-label="Default select example">
                    @foreach ($Countries as $Country)
                        <option {{ $Hotel->country_id == $Country->id ? 'selected' : '' }} value="{{ $Country->id }}">
                            {{ $Country->name }}</option>
                    @endforeach

                </select>
                @error('country_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="city_name">City Name</label>
                <input value="{{ $Hotel->hotel_city_name }}" type="text" name="hotel_city_name" class="form-control"
                    id="city_name" aria-describedby="city_name">
                @error('hotel_city_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hotel_description">Hotel Description</label>
                <textarea class="form-control" name="hotel_description" id="hotel_description" rows="3">{{ $Hotel->hotel_description }}</textarea>
                @error('hotel_description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="text-center my-4">
                <button type="submit" class="btn btn-primary">Update Package</button>
            </div>
        </form>
    </div>
@endsection


@section('backend_script')
    <script>
        $(document).ready(function() {

            CKEDITOR.replace('hotel_description');

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
