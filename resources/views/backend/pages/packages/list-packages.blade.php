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


        <h2 class="my-3">List of Packages</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Package Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($Packages as $Package)
                    <tr>
                        <th scope="row">{{ $sl }}</th>
                        <td>{{ $Package->package_title }}</td>
                        <td>{{ $Package->package_slug }}</td>
                        <td>
                            <a href="{{ route('packages.duplicate', $Package->id) }}"
                                class="btn btn-sm btn-success">Duplicate</a>
                            <a href="{{ route('packages.edit', $Package->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <button
                                onclick="deleteDataBind('{{ $Package->id }}', '{{ $Package->package_title }}', `{{ url('admin/packages/delete') }}`,'deleteMessage','deleteAnchor')"
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
