@extends('backend.layouts.backend_layout')


@section('backend_page_content')
    <div class="container my-5">
        <h3>Edit Blog</h3>
        <form enctype="multipart/form-data" action="{{ route('blog.update', $blog->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="feature image">Blog Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="image-choose"
                            aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="image-choose">Choose file</label>
                    </div>
                </div>

                @error('blog_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group mb-3">
                <label for="title">Blog Title</label>
                <input value="{{ $blog->title }}" type="text" name="title" class="form-control" id="title"
                    aria-describedby="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input value="{{ $blog->slug }}" type="text" name="slug" class="form-control" id="hotel_slug"
                    aria-describedby="slug">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="post">Post</label>
                <textarea class="form-control" name="post" id="post" rows="3">{{ $blog->post }}</textarea>
                @error('post')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="text-center my-4">
                <button type="submit" class="btn btn-primary">Update Blog</button>
            </div>
        </form>
    </div>
@endsection


@section('backend_script')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace('post');
            $('#image-choose').on('change', function() {
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        })
    </script>
@endsection
