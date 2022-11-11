<?php

namespace App\Http\Controllers\Visa;

use App\Http\Controllers\Controller;
use App\Models\Visa;
use Illuminate\Http\Request;

class VisaFrontendController extends Controller
{
    public function index($slug)
    {
        $Visa = Visa::where('slug', $slug)->first();
        return view('frontend.pages.visa', ['Visa' => $Visa]);
    }


    public function redirectToSlug(Request $request)
    {
        $Visa = Visa::where('country_id', $request->country_id)->first();
        return redirect()->route('visa-services', $Visa->slug);
    }
}
