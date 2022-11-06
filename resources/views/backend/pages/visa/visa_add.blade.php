@extends('backend.layouts.backend_layout')

@section('backend_page_content')
    <h3>Add a Visa Service</h3>
    <form>
        @csrf
        <div class="mb-3">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04"
                        aria-describedby="inputGroupFileAddon04">
                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Select Country</label>
            <select name="country_id" id="country_select" class="form-select" aria-label="Default select example">

                @foreach ($Countries as $Country)
                    <option value="{{ $Country->id }}">{{ $Country->country_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrition</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="editor" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Visa Service</button>
    </form>
@endsection

@section('backend_script')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('editor');

            $("#country_select").select2({
                placeholder: "Select Country",
                width: 300
            });
        })
    </script>
@endsection
