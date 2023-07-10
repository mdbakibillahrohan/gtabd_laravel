@extends('frontend.layouts.frontend_layouts')

@section('frontend-section')
    <div style="margin-top: 100px;" >
        <div class="img container">
            <img class="img-fluid" style="max-height: 70vh" src="{{ asset('storage/app/' . $Blog->image) }}" alt="">
        </div>

        <div class="container my-5">
            <div class="row main-content">
                <div class="col">
                    <h1 class="title">{{ $Blog->title }}</h1>
                </div>


                <h3 class=" my-3">Blog Post </h3>
                <div class="border p-5">
                    <?php
                    echo $Blog->post;
                    ?>
                </div>
            </div>
        </div>

    </div>


    <style>
    </style>
@endsection
