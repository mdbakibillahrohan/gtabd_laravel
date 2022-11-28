<?php

namespace App\Http\Controllers\Packages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackagesFrontendController extends Controller
{
    public function show($slug)
    {
        return view('frontend.pages.packages-details');
    }
}
