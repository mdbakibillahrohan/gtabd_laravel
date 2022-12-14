<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $HomeElements = DB::table('homeelements')->get();
        $Home = array();
        for ($i = 0; $i < sizeof($HomeElements); $i++) {
            $Home[$HomeElements[$i]->identity] = $HomeElements[$i]->is_show;
        }


        $Countries = Country::all();
        $Packages = Package::all()->except('is_featured', 1);
        $FeaturedPackage = Package::where('is_featured', 1)->first();
        $LighteningPackages = Package::where('is_lightening', 1)->get();
        $Hotels = Hotel::all();
        return view('frontend.pages.home', [
            'Countries' => $Countries,
            'HomeElements' => $Home,
            'Packages' => $Packages,
            'FeaturedPackage' => $FeaturedPackage,
            'LighteningPackages' => $LighteningPackages,
            'TopHotels' => $Hotels
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
