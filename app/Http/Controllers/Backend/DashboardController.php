<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $VisaCount = Visa::all()->count();
        $CountryCount = Country::all()->count();
        return view('backend.pages.admin_home', ['VisaCount' => $VisaCount, 'CountryCount' => $CountryCount]);
    }

    public function homeController()
    {
        $HomeElements = DB::table('homeelements')->get();
        return view('backend.pages.home_controller', ['HomeElements' => $HomeElements]);
    }

    public function GivePermission($id)
    {
        $HomeElement = DB::table('homeelements')->where('id', $id)->update([
            "is_show" => 1,
        ]);

        return "Success";
    }

    public function DenyPermisssion($id)
    {
        $HomeElement = DB::table('homeelements')->where('id', $id)->update([
            "is_show" => 0,
        ]);

        return "Success";
    }
}
