<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $Search = $request->search_value ?? "";
        if ($Search != "") {
            $Hotels = Hotel::where('hotel_name', 'LIKE', "%$Search%")->paginate(20);
        } else {
            $Hotels = Hotel::paginate(20);
        }
        return view('backend.pages.hotel.list_hotel', ['Hotels' => $Hotels, 'search_value' => $Search]);
    }

    public function create()
    {
        $Countries = Country::all();
        return view('backend.pages.hotel.hotel_add', ['Countries' => $Countries]);
    }

    public function store(Request $request)
    {
        $Validated = $request->validate(
            [
                'feature_image' => 'required',
                'hotel_name' => 'required',
                'hotel_slug' => 'required|unique:hotels,hotel_slug',
                'country_id' => 'required',
                'hotel_city_name' => 'required',
                'hotel_description' => 'required|min:100',
            ]
        );

        if ($Validated) {
            $Hotel = new Hotel();
            $file = Storage::putFile('uploaded', $request->file('feature_image'));
            if ($file) {
                $Hotel->hotel_image = $file;
                $Hotel->hotel_name = $request->hotel_name;
                $Hotel->hotel_slug = $request->hotel_slug;
                $Hotel->country_id = $request->country_id;
                $Hotel->hotel_city_name = $request->hotel_city_name;
                $Hotel->hotel_description = $request->hotel_description;
                if ($Hotel->save()) {
                    $notification = [
                        "type" => "success",
                        "msg" => "Hotel Successfully Added"
                    ];
                    session()->flash('notification', $notification);
                    return redirect()->back();
                }
                $notification = [
                    "type" => "warning",
                    "msg" => "Error Occured"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "warning",
                "msg" => "Image uploading failed"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $Countries = Country::all();
        $Hotel = Hotel::find($id);
        return view('backend.pages.hotel.edit_hotel', ['Hotel' => $Hotel, 'Countries' => $Countries]);
    }



    public function update(Request $request, $id)
    {
        $Hotel = Hotel::find($id);
        $Validated = $request->validate(
            [
                'hotel_name' => 'required',
                'hotel_slug' => 'required',
                'country_id' => 'required',
                'hotel_city_name' => 'required',
                'hotel_description' => 'required|min:100',
            ]
        );

        if ($Validated) {
            if ($request->hasFile('feature_image')) {
                if (Storage::delete($Hotel->hotel_image)) {
                    $file = Storage::putFile('uploaded', $request->file('feature_image'));
                    if ($file) {
                        $Hotel->hotel_image = $file;
                    } else {
                        $notification = [
                            "type" => "warning",
                            "msg" => "Image uploading failed"
                        ];
                        session()->flash('notification', $notification);
                        return redirect()->back();
                    }
                }
            }

            $Hotel->hotel_name = $request->hotel_name;
            $Hotel->hotel_slug = $request->hotel_slug;
            $Hotel->country_id = $request->country_id;
            $Hotel->hotel_city_name = $request->hotel_city_name;
            $Hotel->hotel_description = $request->hotel_description;
            if ($Hotel->update()) {
                $notification = [
                    "type" => "success",
                    "msg" => "Hotel Successfully Updated"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "warning",
                "msg" => "Error Occured"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }


    public function delete($id)
    {
        $Hotel = Hotel::find($id);
        if (Storage::delete($Hotel->hotel_image)) {
            if ($Hotel->delete()) {
                $notification = [
                    "type" => "success",
                    "msg" => "Hotel Successfully Deleted"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
            $notification = [
                "type" => "warning",
                "msg" => "Error Occured"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }

        $notification = [
            "type" => "warning",
            "msg" => "Image deletion process failed please try again"
        ];
        session()->flash('notification', $notification);
        return redirect()->back();
    }
}
