<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('backend.pages.profile', ['User' => $user]);
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        if ($request->old_password && $request->old_password != "") {
            if (Auth::attempt(['email' => $User->email, 'password' => $request->old_password])) {
                $newPassword = $request->new_password;
                $confirmPassword = $request->confirm_password;
                if ($newPassword == $confirmPassword) {
                    $name = $request->name;
                    $email = $request->email;
                    $password = Hash::make($confirmPassword);
                    $User->name = $name;
                    $User->email = $email;
                    $User->password = $password;
                    if ($User->update()) {
                        $notification = [
                            "type" => "success",
                            "msg" => "Successfully Updated Profile"
                        ];
                        session()->flash('notification', $notification);
                        return redirect()->back();
                    } else {
                        $notification = [
                            "type" => "warning",
                            "msg" => "Something went wrong"
                        ];
                        session()->flash('notification', $notification);
                        return redirect()->back();
                    }
                } else {
                    $notification = [
                        "type" => "warning",
                        "msg" => "New Password and Confirm Password doesn't matched"
                    ];
                    session()->flash('notification', $notification);
                    return redirect()->back();
                }
            } else {
                $notification = [
                    "type" => "warning",
                    "msg" => "Password is wrong"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
        }

        $name = $request->name;
        $email = $request->email;
        $User->name = $name;
        $User->email = $email;
        if ($User->update()) {
            $notification = [
                "type" => "success",
                "msg" => "Successfully Updated Profile"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }
}
