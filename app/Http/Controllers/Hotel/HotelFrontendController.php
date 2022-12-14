<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelFrontendController extends Controller
{

    public function index(Request $request)
    {
        $Search = $request->search_value ?? "";
        if ($Search != "") {
            $Hotels = Hotel::where('hotel_name', 'LIKE', "%$Search%")->paginate(12);
        } else {
            $Hotels = Hotel::latest()->paginate(12);
        }
        return view('frontend.pages.hotels', ['Hotels' => $Hotels, 'search_value' => $Search]);
    }

    public function show($slug)
    {
        $Hotel = Hotel::where('hotel_slug', $slug)->first();
        return view('frontend.pages.hotel-details', ['Hotel' => $Hotel]);
    }
}
