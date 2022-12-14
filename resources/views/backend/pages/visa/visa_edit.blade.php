@extends('backend.layouts.backend_layout')

@section('backend_page_content')
    <div class="container my-5">
        <h3>Edit your visa service</h3>
        <form enctype="multipart/form-data" action="{{ route('visa-update', $id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image-choose"
                            aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="image-choose">Choose file</label>
                    </div>

                </div>

                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Select Country</label>
                <select name="country_id" id="country_select" class="form-select" aria-label="Default select example">

                    @foreach ($Countries as $Country)
                        <option {{ $Visa->country_id == $Country->id ? 'selected' : '' }} value="{{ $Country->id }}">
                            {{ $Country->name }}</option>
                    @endforeach
                </select>
                @error('country_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input value="{{ $Visa->slug }}" type="text" name="slug" class="form-control" id="slug"
                    aria-describedby="slug">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrition</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="editor" rows="3">{{ $Visa->description }}</textarea>
                @error('editor')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Visa Service</button>
        </form>
    </div>
@endsection


@section('backend_script')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('editor');

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
