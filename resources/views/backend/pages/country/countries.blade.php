@extends('backend.layouts.backend_layout')

@section('backend_page_content')
    <div class="container">
        <h2 class="my-3">List of Contries</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($Countries as $Country)
                    <tr>
                        <th scope="row">{{ $sl }}</th>
                        <td>{{ $Country->country_name }}</td>
                        <td>{{ $Country->country_description }}</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @php
                        $sl++;
                    @endphp
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
