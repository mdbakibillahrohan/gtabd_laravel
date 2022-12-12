<?php

namespace App\Http\Controllers\Packages;

use App\Http\Controllers\Controller;
use App\Models\Package;
use GuzzleHttp\Psr7\Request;

class PackagesFrontendController extends Controller
{


    public function index()
    {
        $Packages = Package::latest()->paginate(9);
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
