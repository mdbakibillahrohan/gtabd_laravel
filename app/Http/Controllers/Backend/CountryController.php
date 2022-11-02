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
            'country_name'=>'required',
        ]);

        if($validated){
            $Country = new Country();
            $Country->country_name = $request->country_name;
            $Country->country_description = $request->country_description;
            $save = $Country->save();

            if($save){
                $notification = [
                    "type"=>"success",
                    "msg"=>"Successfully add Country"
                ];
                $request->session()->flash('notification', $notification);
                return redirect()->back();
            }else{
                $notification = [
                    "type"=>"error",
                    "msg"=>"Error Occurred"
                ];
                $request->session()->flash('notification', $notification);
                return redirect()->back();
            }
        }

    }


    public function countries()
    {
        $Countries = Country::all();
        return view('backend.pages.country.countries', ["Countries"=>$Countries]);
    }
}
