<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Package;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $Countries = Country::all();
        $HomeElements = DB::table('homeelements')->get();
        $Packages = Package::all()->except('is_featured', 1);
        $FeaturedPackage = Package::where('is_featured', 1)->first();
        $LighteningPackages = Package::where('is_lightening', 1)->get();
        return view('frontend.pages.home', [
            'Countries' => $Countries,
            'HomeElements' => $HomeElements,
            'Packages' => $Packages,
            'FeaturedPackage' => $FeaturedPackage,
            'LighteningPackages' => $LighteningPackages,
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
