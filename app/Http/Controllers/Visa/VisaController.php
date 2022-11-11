<?php

namespace App\Http\Controllers\Visa;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisaController extends Controller
{

    public function index()
    {
        $AllVisa = Visa::all();
        return view('backend.pages.visa.visa_index', ['AllVisa' => $AllVisa]);
    }

    public function create()
    {
        $Countries = Country::all();
        return view('backend.pages.visa.visa_add', ['Countries' => $Countries]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                "country_id" => "required|unique:visas,country_id",
                "slug" => "required|max:55|unique:visas,slug",
                "editor" => "required|min:255",
                "image" => "required|image"
            ]
        );

        if ($validated) {
            $Visa = new Visa();
            $file = Storage::putFile('uploaded', $request->file('image'));
            if ($file) {
                $Visa->country_id = $request->country_id;
                $Visa->slug = $request->slug;
                $Visa->description = $request->editor;
                $Visa->image = $file;
                if ($Visa->save()) {
                    $notification = [
                        "type" => "success",
                        "msg" => "Visa Service Successfully Added"
                    ];
                    session()->flash('notification', $notification);
                    return redirect()->back();
                }
            }

            $notification = [
                "type" => "error",
                "msg" => "File uploading operation failed please try again"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }


    public function edit($id)
    {
        $Countries = Country::all();
        $Visa = Visa::find($id);
        return view('backend.pages.visa.visa_edit', ['id' => $id, 'Countries' => $Countries, 'Visa' => $Visa]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                "country_id" => "required",
                "editor" => "required|min:255",
                "slug" => "required|max:45",
                "image" => "image"
            ]
        );
        if ($validated) {
            $Visa = Visa::find($id);
            if ($request->has('image')) {
                if (Storage::delete($Visa->image)) {
                    $file = Storage::putFile('uploaded', $request->file('image'));
                    if ($file) {
                        $Visa->country_id = $request->country_id;
                        $Visa->slug = $request->slug;
                        $Visa->description = $request->editor;
                        $Visa->image = $file;
                        if ($Visa->update()) {
                            $notification = [
                                "type" => "success",
                                "msg" => "Visa Service Successfully Added"
                            ];
                            session()->flash('notification', $notification);
                            return redirect()->back();
                        }
                    }
                }
            }
            $Visa->country_id = $request->country_id;
            $Visa->slug = $request->slug;
            $Visa->description = $request->editor;
            if ($Visa->update()) {
                $notification = [
                    "type" => "success",
                    "msg" => "Visa Service Successfully Added"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }

            $notification = [
                "type" => "error",
                "msg" => "Error Occured"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        $Visa = Visa::find($id);
        if (Storage::delete($Visa->image)) {
            $Visa->delete();
            $notification = [
                "type" => "success",
                "msg" => "Visa Service Successfully deleted"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }

        $notification = [
            "type" => "error",
            "msg" => "File uploading operation failed please try again"
        ];
        session()->flash('notification', $notification);
        return redirect()->back();
    }
}
