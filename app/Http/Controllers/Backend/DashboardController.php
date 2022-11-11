<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Visa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $VisaCount = Visa::all()->count();
        $CountryCount = Country::all()->count();
        return view('backend.pages.admin_home', ['VisaCount' => $VisaCount, 'CountryCount' => $CountryCount]);
    }
}
