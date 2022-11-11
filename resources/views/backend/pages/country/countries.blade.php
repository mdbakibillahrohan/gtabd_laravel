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

        <!-- Edit modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="updateForm" action="{{ route('country-add') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="countryName">Country Name <small class="text-danger">(required)</small></label>
                                <input name="country_name" type="text" class="form-control" id="countryName"
                                    placeholder="example: Singapore">
                                @error('contry_name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description <small>(Optional)</small></label>
                                <textarea name="country_description" class="form-control" id="description" rows="4"></textarea>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit modal closed !-->
    </div>


    <div class="container">


        <h2 class="my-3">List of Contries</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="width: 15%" scope="col">Country Name</th>
                    <th scope="col">Description</th>
                    <th scope="col" style="width: 20%">Action</th>
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
                            <button
                                onclick="bindValueWithEditForm('{{ $Country->id }}', '{{ $Country->country_name }}', '{{ $Country->country_description }}')"
                                data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-success">Edit</button>
                            <button
                                onclick="deleteDataBind('{{ $Country->id }}', '{{ $Country->country_name }}', `{{ url('admin/country-delete') }}`,'deleteMessage', 'deleteAnchor')"
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




    <script>
        let countryNameElement = document.getElementById("countryName");
        let descriptionElement = document.getElementById("description");
        let formElement = document.getElementById("updateForm");


        function bindValueWithEditForm(id, name, description) {
            countryNameElement.value = name;
            descriptionElement.value = description;
            action = `{{ url('admin/country-update') }}/${id}`;
            formElement.setAttribute('action', action);
        }
    </script>
@endsection
