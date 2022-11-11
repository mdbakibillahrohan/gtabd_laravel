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


        <h2 class="my-3">List of Visa Services</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Country Nvame</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($AllVisa as $Visa)
                    <tr>
                        <th scope="row">{{ $sl }}</th>
                        <td>{{ $Visa->country->country_name }}</td>
                        <td>{{ $Visa->slug }}</td>
                        <td>
                            <a href="{{ route('visa-edit-form', $Visa->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <button
                                onclick="deleteDataBind('{{ $Visa->id }}', '{{ $Visa->country->country_name }}', `{{ url('admin/visa/delete') }}`,'deleteMessage','deleteAnchor')"
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
