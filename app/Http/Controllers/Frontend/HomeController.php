<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Visa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visa_country = [];
        $Countries = Country::all();
        $Visas = Visa::all();
        foreach ($Countries as $Country) {
            foreach ($Visas as $Visa) {
                if ($Visa->country_id == $Country->id) {
                    array_push($visa_country, $Country);
                }
            }
        }
        return view('frontend.pages.home', [
            'Countries' => $visa_country,
        ]);
    }


    public function country_visa()
    {
        $Countries = Country::all();
        $Visas = Visa::all();
        return response()->json([
            'Countries' => $Countries,
            'Visas' => $Visas,
        ]);
    }
}
