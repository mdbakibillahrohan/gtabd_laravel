@extends('backend.layouts.backend_layout')
@section('backend_page_content')
    <div>

        {{-- delete modal  --}}
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="deleteMessage"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a id="deleteAnchor" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- delete modal closed --}}

    </div>


    <div class="container">


        <h2 class="my-3">List of Hotel</h2>
        <form method="GET">
            <div class="form-group">
                <input value="{{ $search_value }}" type="text" name="search_value" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search...">
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Hotel Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($Hotels as $Hotel)
                    <tr>
                        <th scope="row">{{ $sl }}</th>
                        <td>{{ $Hotel->hotel_name }}</td>
                        <td>{{ $Hotel->hotel_slug }}</td>
                        <td>

                            <a href="{{ route('hotels.edit', $Hotel->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <button
                                onclick="deleteDataBind('{{ $Hotel->id }}', `{{ $Hotel->hotel_name }}`, `{{ url('admin/hotel/delete') }}`,'deleteMessage','deleteAnchor')"
                                data-toggle="modal" data-target="#staticBackdrop"
                                class="btn btn-sm btn-danger">Delete</button>
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
