@extends('backend.layouts.backend_layout')
@section('backend_page_content')
    <div class="container-fluid my-5">
        <div class="container">


            <h2 class="my-3">Home Elements</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Identity</th>
                        <th scope="col">Show/Hide</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($HomeElements as $Home)
                        <tr>
                            <th scope="row">{{ $sl }}</th>
                            <td>{{ $Home->identity }}</td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input for="{{ $Home->id }}" {{ $Home->is_show == 1 ? 'checked' : '' }}
                                        type="checkbox" class="custom-control-input switch-show"
                                        id="show{{ $Home->id }}">
                                    <label class="custom-control-label" for="show{{ $Home->id }}"></label>
                                </div>
                            </td>

                        </tr>
                        @php
                            $sl++;
                        @endphp
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('backend_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {


            let switches = document.getElementsByClassName('switch-show');
            for (let n = 0; n < switches.length; n++) {
                switches[n].addEventListener("change", (e) => {
                    url = '{{ url('/') }}';
                    let id = e.target.getAttribute('for');
                    let checked = e.target.getAttribute('checked');
                    if (checked == null) {
                        console.log("permissed");
                        e.target.setAttribute("checked", "");
                        $.ajax({
                            type: 'GET',
                            url: url + '/home-controller/give-permission/' + id,
                            success: function(data) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: "success",
                                    title: "It will shown",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }

                        })
                    } else {
                        e.target.removeAttribute('checked');
                        $.ajax({
                            type: 'GET',
                            url: url + '/home-controller/deny-permission/' + id,
                            success: function(data) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: "warning",
                                    title: "It's been hidden",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            }

                        })
                    }


                })
            }

        })
    </script>
@endsection
