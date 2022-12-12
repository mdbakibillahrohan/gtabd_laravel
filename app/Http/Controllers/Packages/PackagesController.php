<?php

namespace App\Http\Controllers\Packages;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Helpers;

class PackagesController extends Controller
{


    public function index()
    {
        $Packages = Package::all();
        return view('backend.pages.packages.list-packages', ['Packages' => $Packages]);
    }


    public function create()
    {
        $Countries = Country::all();
        return view('backend.pages.packages.add-packages', ['Countries' => $Countries]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                "feature_image" => "required|image",
                "title" => "required",
                "slug" => "required|unique:packages,package_slug",
                "country_id" => "required",
                "city_name" => "required",
                "duration" => "required",
                "valid_from" => "required",
                "valid_till" => "required",
                "departs" => "required",
            ]
        );
        if ($validate) {
            if ($request->featured == "yes") {
                $Package_feture = Package::where('is_featured', 1)->first();
                if ($Package_feture != null) {
                    $Package_feture->is_featured = 0;
                    $Package_feture->update();
                }
            }
            $Package = new Package();
            $file = Storage::putFile('uploaded', $request->file('feature_image'));
            if ($file) {
                $Package->package_image = $file;
                $Package->package_title = $request->title;
                $Package->package_slug = $request->slug;
                $Package->country_id = $request->country_id;
                $Package->package_city_name = $request->city_name;
                $Package->package_duration = $request->duration;
                $Package->package_valid_from = $request->valid_from;
                $Package->package_valid_till = $request->valid_till;
                $Package->departs = $request->departs;
                $Package->package_price_single = $request->price_single;
                $Package->package_price_double = $request->price_double;
                $Package->package_price_tripple = $request->price_tripple;

                $Package->package_itinerary = $request->itinerary;
                $Package->package_pick_up_note = $request->pick_up_note;
                $Package->package_cancellation = $request->cancellation;
                $Package->package_tax_and_rates = $request->tax_and_rates;
                $Package->package_included_services = $request->included_services;
                $Package->package_excluded_services = $request->excluded_services;
                $Package->package_highlights = $request->highlights;
                $Package->package_general_condition = $request->general_condition;
                $Package->package_emi = $request->emi;

                if ($request->featured == "yes") {
                    $Package->is_featured = 1;
                }
                if ($request->lightening == "yes") {
                    $Package->is_lightening = 1;
                }

                if ($Package->save()) {
                    $notification = [
                        "type" => "success",
                        "msg" => "Package Successfully Added"
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
        $Package = Package::find($id);
        $Countries = Country::all();
        return view('backend.pages.packages.edit-packages', ["Package" => $Package, "Countries" => $Countries]);
    }

    public function update(Request $request, $id)
    {
        $Package = Package::find($id);
        $validate = $request->validate(
            [
                "title" => "required",
                "country_id" => "required",
                "city_name" => "required",
                "duration" => "required",
                "valid_from" => "required",
                "valid_till" => "required",
                "departs" => "required",
            ]
        );



        if ($validate) {
            if ($request->featured == "yes") {
                $Package_feture = Package::where('is_featured', 1)->first();
                if ($Package_feture != null) {
                    $Package_feture->is_featured = 0;
                    $Package_feture->update();
                }
            }

            $helpersFunctions = new Helpers();

            if ($request->hasFile('feature_image')) {
                if ($Package->is_duplicated == 1) {
                    $file = Storage::putFile('uploaded', $request->file('feature_image'));
                    if ($file) {
                        return $helpersFunctions->packageUpdateCommonCode($Package, $request, $file);
                    }
                } else {
                    if (Storage::delete($Package->package_image)) {
                        $file = Storage::putFile('uploaded', $request->file('feature_image'));
                        if ($file) {
                            return $helpersFunctions->packageUpdateCommonCode($Package, $request, $file);
                        }
                    }
                }
            } else {
                return $helpersFunctions->packageUpdateCommonCode($Package, $request);
            }


            $notification = [
                "type" => "warning",
                "msg" => "Nothing Happened"
            ];
            session()->flash('notification', $notification);
            return redirect()->back();
        }
    }


    public function duplicate($id)
    {
        $Package = Package::find($id);
        $newPackage = $Package->replicate();
        $newPackage->package_slug = $Package->package_slug . "-dup";
        $newPackage->is_featured = 0;
        $newPackage->created_at = Carbon::now();
        $newPackage->is_duplicated = 1;
        if ($newPackage->save()) {
            $notification = [
                "type" => "success",
                "msg" => "Package Successfully Duplicated"
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

    public function destroy($id)
    {
        $Package = Package::find($id);

        if (Storage::delete($Package->package_image)) {
            if ($Package->delete()) {
                $notification = [
                    "type" => "success",
                    "msg" => "Package Successfully Deleted"
                ];
                session()->flash('notification', $notification);
                return redirect()->back();
            }
        }
        $notification = [
            "type" => "warning",
            "msg" => "Error Occured"
        ];
        session()->flash('notification', $notification);
        return redirect()->back();
    }
}
