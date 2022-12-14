<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        if ($validated) {
            $Country = new Country();
            $Country->name = $request->name;
            $Country->code = $request->country_code;
            $save = $Country->save();

            if ($save) {
                $notification = [
                    "type" => "success",
                    "msg" => "Successfully add Country"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "error",
                "msg" => "Error Occurred"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        if ($validated) {
            $Country = Country::find($id);
            $Country->name = $request->name;
            $Country->code = $request->country_code;
            $save = $Country->update();

            if ($save) {
                $notification = [
                    "type" => "success",
                    "msg" => "Successfully update Country"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "error",
                "msg" => "Error Occurred"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $Country = Country::find($id);
        $name = $Country->name;
        if ($Country->delete()) {
            $notification = [
                "type" => "success",
                "msg" => "Successfully deleted $name"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
        $notification = [
            "type" => "error",
            "msg" => "Error Occurred"
        ];
        session()->flash('notification', $notification);
        return redirect()->back();
    }


    public function countries(Request $request)
    {
        $Search = $request->search_value ?? "";
        if ($Search != "") {
            $Countries = Country::where('name', 'LIKE', "%$Search%")->orWhere('code', 'LIKE', "%$Search%")->paginate(20);
        } else {
            $Countries = Country::paginate(20);
        }
        return view('backend.pages.country.countries', ["Countries" => $Countries, 'search_value' => $Search]);
    }
}
