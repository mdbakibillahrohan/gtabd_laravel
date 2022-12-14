<?php

namespace App\Http\Controllers\Packages;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;



class PackagesFrontendController extends Controller
{


    public function index(Request $request)
    {

        $search = $request['search_value'] ?? "";
        if ($search != "") {
            $Packages = Package::where('package_city_name', 'LIKE', "%$search%")->orWhere('package_title', 'LIKE', "%$search%")->paginate(12);
            return view('frontend.pages.tour_package', ['Packages' => $Packages, 'search_value' => $search]);
        }
        $Packages = Package::latest()->paginate(12);
        return view('frontend.pages.tour_package', ['Packages' => $Packages]);
    }
    public function show($slug)
    {
        $FeaturedPackage = Package::where('package_slug', $slug)->first();
        return view('frontend.pages.packages-details', [
            'Package' => $FeaturedPackage
        ]);
    }
}
