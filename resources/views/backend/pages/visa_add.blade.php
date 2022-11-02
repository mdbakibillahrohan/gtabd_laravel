@extends('backend.layouts.backend_layout')

@section('backend_page_content')
    <h3>Add a Visa Service</h3>
    <textarea id="editor">

    </textarea>
@endsection

@section('backend_script')
    <script>
        $(document).ready(function() {

            new FroalaEditor('#editor', {
                language: 'ro',
                heightMax: 500,
            })
        })
    </script>
@endsection
