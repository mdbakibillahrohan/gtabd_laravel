@extends('backend.layouts.backend_layout')

@section('backend_page_content')
    <h3>Add a Visa Service</h3>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Select Country</label>
        <select id="country_select" class="form-select" aria-label="Default select example">
            <option value="bangladesh">Bangladesh</option>
            <option value="india">India</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrition</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="editor" rows="3"></textarea>
    </div>
@endsection

@section('backend_script')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('editor');

            $("#country_select").select2({
                placeholder: "Select Country",
                width: 200
            });
        })
    </script>
@endsection
