<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Helpers
{
    public function packageUpdateCommonCode($Package, Request $request, $file = "")
    {
        if ($file != "") {
            $Package->package_image = $file;
        }
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
        } else {
            $Package->is_featured = 0;
        }
        if ($request->lightening == "yes") {
            $Package->is_lightening = 1;
        } else {
            $Package->is_lightening = 0;
        }

        if ($Package->update()) {
            $notification = [
                "type" => "success",
                "msg" => "Package Successfully Updated"
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
