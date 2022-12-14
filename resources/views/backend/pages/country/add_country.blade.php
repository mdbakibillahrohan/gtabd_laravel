@extends('backend.layouts.backend_layout')
@section('backend_page_content')
    <div class="container">
        <h2>Add Country</h2>
        <form action="{{ route('country-add') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="countryName">Country Name <small class="text-danger">(required)</small></label>
                <input name="name" type="text" class="form-control" id="countryName" placeholder="example: Singapore">
                @error('contry_name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="countryName">Country Code <small class="text-danger">(required)</small></label>
                <input name="country_code" type="text" class="form-control" id="countryName"
                    placeholder="example: Singapore">
                @error('contry_name')
                    <span>{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Add Country</button>
        </form>
    </div>
@endsection
