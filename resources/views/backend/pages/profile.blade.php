@extends('backend.layouts.backend_layout')
@section('backend_page_content')
    <div class="profile-wrapper">
        <h2 class="text-center">Edit Profile</h2>

        <div class="container">
            <div class="text-center">
                <button onclick="togglePassowrdChange()" id="passwordChangeToggleBtn" class="btn btn-danger">I want to Change
                    Password</button>
            </div>
            <form action="{{ route('admin.update', $User->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" value="{{ $User->name }}" type="text" class="form-control"
                                id="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" value="{{ $User->email }}" type="email" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group password-field">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input name="old_password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group password-field">
                            <label for="exampleInputPassword2">New Password</label>
                            <input name="new_password" type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="form-group password-field">
                            <label for="exampleInputPassword3">Confirm New Password</label>
                            <input name="confirm_password" type="password" class="form-control" id="exampleInputPassword3">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://photos5.appleinsider.com/gallery/product_pages/189-hero.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Steve Jobs</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <style>
        .password-field {
            display: none;
        }
    </style>

    <script>
        function togglePassowrdChange() {
            let passwordField = document.getElementsByClassName('password-field');
            let passwordToggleBtn = document.getElementById("passwordChangeToggleBtn");
            if (passwordField[0].style.display == "none") {
                passwordToggleBtn.innerHTML = "I don't want to Change Password";
                passwordToggleBtn.classList.remove("btn-danger");
                passwordToggleBtn.classList.add("btn-success");
                for (let i = 0; i < passwordField.length; i++) {
                    passwordField[i].style.display = "block";
                }
            } else {
                passwordToggleBtn.innerHTML = "I want to Change Password";
                passwordToggleBtn.classList.remove("btn-success");
                passwordToggleBtn.classList.add("btn-danger");

                for (let i = 0; i < passwordField.length; i++) {
                    passwordField[i].style.display = "none";
                }
            }

        }
    </script>
@endsection
